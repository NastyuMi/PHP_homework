<?php

class classCalculator
{
    private $f_num;
    private $s_num;

    public function __construct($f_num, $s_num)
    {
        if(is_numeric($f_num) && is_numeric($s_num))
        {
            $this->f_num = $f_num;
            $this->s_num = $s_num;
        }
        else
        {
            $this->f_num = null;
            $this->s_num = null;
        }
    }

    public function plus()
    {
        echo "$this->f_num + $this->s_num = ".($this->f_num + $this->s_num)."&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function minus()
    {
        echo "$this->f_num - $this->s_num = ".($this->f_num - $this->s_num)."&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function multiply()
    {
        echo "$this->f_num * $this->s_num = ".($this->f_num)*($this->s_num)."&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function division()
    {
        if($this->s_num != 0)
        {
            echo "$this->f_num / $this->s_num = ".($this->f_num)/($this->s_num)."&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        else
            echo "На 0 не ділимо&nbsp;&nbsp;&nbsp;&nbsp;";

    }

    public function pow()
    {
        echo "$this->f_num ^ $this->s_num = ". pow(($this->f_num),($this->s_num))."&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function modular_divison() {
        if($this->s_num != 0)
        {
            echo "$this->f_num % $this->s_num = ".($this->f_num)%($this->s_num)."&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        else
            echo "На 0 не ділимо&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function root() {
        if($this->f_num >= 0 && $this->s_num >= 0)
        {
            echo "sqrt($this->f_num) = " . round(sqrt($this->f_num), 1) . "&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "sqrt($this->s_num) = " . round(sqrt($this->s_num), 1) . "&nbsp;&nbsp;&nbsp;&nbsp;";
        } else {
            echo "Число менше нуля&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }



    function calc() {
        if($this->f_num != null && $this->s_num != null)
        {
            echo '<table width=100%> 
      <tr><td>';
            $this->plus();
            echo '</td></tr>
      <tr><td>';
            $this->minus();
            echo '</td></tr>
      <tr><td>';
            $this->multiply();
            echo '</td></tr>
      <tr><td>';
            $this->division();
            echo '</td></tr>
      <tr><td>';
            $this->pow();
            echo '</td></tr>
      <tr><td>';
            $this->modular_divison();
            echo '</td></tr>
      <tr><td>';
            $this->root();
            echo '</td></tr>
     </table>';
        }
        else
            echo "Ви ввели не число";

    }
}

if (!empty($_POST) && $_POST["form2"]==2 && $_POST["f_num2"]!=null && $_POST["s_num2"]!=null)
{
    $test = new classCalculator($_POST["f_num2"], $_POST["s_num2"]);
    $test->calc();
}
else
{
    echo 'error';
}
