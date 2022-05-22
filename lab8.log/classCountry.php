<?php

class classCountry
{
    private $country;
    private $capital;
    private $population;

    public function __construct($country, $capital, $population)
    {
        $this->country = $country;
        $this->capital = $capital;
        $this->population = $population;
    }

    public function table()
    {
        echo '<table border="1" width=100%> 
                <tr>
                <td>
                Країна
                </td>
                <td>
                '.$this->country.'
                </td>
                </tr>
                <tr>
                <td>
                Столиця
                </td>
                <td>
                '.$this->capital.'
                </td>
                </tr>
                <tr>
                <td>
                Населення<br>столиці
                </td>
                <td>
                '.$this->population.'
                </td>
                </tr>
             </table>';
    }
}

$test1 = new classCountry('Мона́ко', '	Монако',975);
$test2 = new classCountry('Коста-Ріка','Сан-Хосе',309672);
$test3 = new classCountry('Греція', 'Афіни', 3168846);

echo '<table width=100%> 
      <tr>
      <td>';
$test1->table();
echo '</td>
      <td>';
$test2->table();
echo '</td>
      <td>';
$test3->table();
echo '</td></tr>
     </table>';