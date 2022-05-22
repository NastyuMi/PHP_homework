<?php

class classUser
{
    private $surname;
    private $name;
    private $age;
    private $email;

    public function __construct($surname, $name, $age, $email)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function greetings()
    {
        echo 'Вітаємо,'.$this->surname.$this->name.'. Наша команда готова для вас розробити программу на ваш вік('.$this->age.' років). Надiшлемо її на пошту:'.$this->email;
    }

}
if (!empty($_POST) && $_POST["form1"]==1 && $_POST["surname"]!=null && $_POST["name"]!=null && $_POST["age"]!=null && $_POST["email"]!=null)
{
    $test = new classUser($_POST["surname"], $_POST["name"] ,$_POST["age"], $_POST["email"]);
    $test->greetings();
}
else
{
    echo 'error';
}