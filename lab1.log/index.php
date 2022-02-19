<?php

echo '<html><body>';
echo '<center>';
echo "Виконуємо завдання лабораторної роботи  №1 !!!";
echo '</center>';
include ("me.txt");
echo '<table border="1">';
echo '<tr>';
echo '<td bgcolor=black width="100"></td>';echo '<td width="100">BLACK</td>'; echo '<td width="100">#000000</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=grey></td>';echo '<td>GREY</td>';echo '<td>#808080</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=white></td>';echo '<td>WHITE</td>';echo '<td>#FFFFFF</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=fuchsia></td>';echo '<td>FUCHSIA</td>';echo '<td>#FF00FF</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=purple></td>';echo '<td>PURPLE</td>';echo '<td>#800080</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=red></td>';echo '<td>RED</td>';echo '<td>#FF0000</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=orange></td>';echo '<td>ORANGE</td>';echo '<td>#FFA500</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=yellow></td>';echo '<td>YELLOW</td>';echo '<td>#FFD700</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=green></td>';echo '<td>GREEN</td>';echo '<td>#008000</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=blue></td>';echo '<td>BLUE</td>';echo '<td>#0000FF</td>';
echo '</tr>';
echo '<tr>';
echo '<td bgcolor=navy></td>';echo '<td>NAVY</td>';echo '<td>#000080</td>';
echo '</tr>';
echo '</table>';
echo '<table border="1" width=100%>';
echo '<tr>';
for($i = 1; $i<=9; $i++) {
    echo "<td align=center>";
    for ($j = 1; $j <= 9; $j++)
    {
        echo "$i * $j = ".$i*$j."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo '<br>';
    }
    echo "</td>";
}
echo '</tr>';
echo '</table>';
echo '</body> </html>';

?>
