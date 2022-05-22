<?php

class classMultiplicationTable
{
    private $num;

    public function __construct($num)
    {
        if(is_numeric($num))
        {
            $this->num = $num;
        }
        else
        {
            echo $this->num = null;
        }

    }

    public function multiplication()
    {
        if($this->num != null)
        {
            echo '<table border="1" width=100%> 
                <tr>
                <td align=center>';
            for ($j = 1; $j <= 9; $j++)
            {
                echo "$this->num * $j = ".$this->num*$j."&nbsp;&nbsp;&nbsp;&nbsp;";
                echo '<br>';
            }
            echo "</td>";

            echo '</tr>
             </table>';
        }
        else
        {
            echo '<table border="1" width=100%> 
                <tr>
                <td align=center>
                Это <br>не<br>число
                </td>
                </tr>
             </table>';
        }
    }
}
$test1 = new classMultiplicationTable(11);
$test2 = new classMultiplicationTable(2);
$test3 = new classMultiplicationTable("yyy");

echo '<table width=100%> 
      <tr>
      <td>';
        $test1->multiplication();
echo '</td>
      <td>';
        $test2->multiplication();
echo '</td>
      <td>';
        $test3->multiplication();
echo '</td></tr>
     </table>';
