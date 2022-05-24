<?php
if (isset($_GET['myActionName'])) {
    if ($_GET['id'] != null) {
        echo "<h2>Article with ID {$_GET['id']}:</h2> <br>
               <table>
               <tr>
                  <th>Tittle</th>
                  <th>Text</th>
               </tr>";

        require_once 'connectMySideDb.php';

        $result = mysqli_query($connect, "SELECT title, text FROM `articles` WHERE id={$_GET['id']}");
        if ($result !== false) {
            while ($array = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($array as $key => $value) {
                    echo "<td>$value</td>";
                }
            }
        }
        echo "</tr></table><br><br>Comments for article with ID {$_GET['id']}: <br>";


        $result = mysqli_query($connect, "SELECT * FROM `comments` WHERE id_article={$_GET['id']}");
        if ($result !== false) {
            while ($info = mysqli_fetch_assoc($result)) {
                $users = mysqli_query($connect, "SELECT * FROM `users` WHERE id={$info['user_id']}");
                $array = mysqli_fetch_assoc($users);
                echo "<p><br> | " . $array['name'] . " | </br>  {$info['text']} <br></p>";
            }
        }

    }
}

header('Location: /index.php');


