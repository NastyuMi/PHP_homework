<?php

class Calculator
{
    private $f_num;
    private $s_num;

    public function __construct()
    {
        $this->f_num= null;
        $this->s_num = null;
    }

    public function get_num($f_num, $s_num)
    {
        if (is_numeric($f_num) && is_numeric($s_num))
        {
            $this->f_num = $f_num;
            $this->s_num = $s_num;
        } else {
            $this->f_num = null;
            $this->s_num = null;
        }
    }

    public function plus()
    {
        echo "$this->f_num + $this->s_num = " . ($this->f_num + $this->s_num) . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function minus()
    {
        echo "$this->f_num - $this->s_num = " . ($this->f_num - $this->s_num) . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function multiply()
    {
        echo "$this->f_num * $this->s_num = " . ($this->f_num) * ($this->s_num) . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function division()
    {
        if ($this->s_num != 0) {
            echo "$this->f_num / $this->s_num = " . ($this->f_num) / ($this->s_num) . "&nbsp;&nbsp;&nbsp;&nbsp;";
        } else
            echo "На 0 не ділимо&nbsp;&nbsp;&nbsp;&nbsp;";

    }

    public function pow()
    {
        echo "$this->f_num ^ $this->s_num = " . pow(($this->f_num), ($this->s_num)) . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function modular_divison()
    {
        if ($this->s_num != 0) {
            echo "$this->f_num % $this->s_num = " . ($this->f_num) % ($this->s_num) . "&nbsp;&nbsp;&nbsp;&nbsp;";
        } else
            echo "На 0 не ділимо&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    public function root()
    {
        if ($this->f_num >= 0 && $this->s_num >= 0) {
            echo "sqrt($this->f_num) = " . round(sqrt($this->f_num), 1) . "&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "sqrt($this->s_num) = " . round(sqrt($this->s_num), 1) . "&nbsp;&nbsp;&nbsp;&nbsp;";
        } else {
            echo "Число менше нуля&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
}

class classDispatch
{
    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function dispatch()
    {
        if (!empty($_POST) && $_POST["form3"]==3 && $_POST["f_num3"]!=null && $_POST["s_num3"]!=null &&
                is_numeric($_POST['f_num3']) && is_numeric($_POST['s_num3']))
        {
            $this->calculator->get_num($_POST['f_num3'], $_POST['s_num3']);
        }
        else
            echo 'error';
    }

    function display() {

            echo '<table width=100%> 
      <tr><td>';
            $this->calculator->plus();
            echo '</td></tr>
      <tr><td>';
            $this->calculator->minus();
            echo '</td></tr>
      <tr><td>';
            $this->calculator->multiply();
            echo '</td></tr>
      <tr><td>';
            $this->calculator->division();
            echo '</td></tr>
      <tr><td>';
            $this->calculator->pow();
            echo '</td></tr>
      <tr><td>';
            $this->calculator->modular_divison();
            echo '</td></tr>
      <tr><td>';
            $this->calculator->root();
            echo '</td></tr>
     </table>';

    }
}

$calculator = new Calculator;
$dispatcher = new classDispatch($calculator);
$dispatcher->dispatch();
$dispatcher->display();