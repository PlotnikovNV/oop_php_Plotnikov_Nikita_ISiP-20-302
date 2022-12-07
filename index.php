<?php
    echo "<h2>Задание 1</h2>";

    class Person{
        public $name = "";
        public $surname = "";

        function hello(){
            echo "Hello,  ". $this -> name . " " . $this -> surname;
        }
    }

    $nikita = new Person();
    $nikita -> name = "Nikita";
    $nikita -> surname = "Plotnikov";
    $nikita -> hello();

    echo "<h2>Задание 2</h2>";

    class Worker{
        public $name;
        public $age;
        public $salary;

        private function checkAge($age){
            if($age < 100 && $age > 0) return true;
            else return false;
        }

        public function setAge($age){
            if($this->checkAge($age)) $this->age = $age;
        }
    }

    $ivan = new Worker();
    $ivan -> name = "Иван";
    $ivan -> age = 25;
    $ivan -> salary = 1000;

    $vasya = new Worker();
    $vasya -> name = "Вася";
    $vasya -> age = 26;
    $vasya -> salary = 2000;

    echo "Зарплата Ивана: " . $ivan -> salary . "<br>Зарплата Васи: " . $vasya -> salary; 
    $sum = ($ivan -> age) + ($vasya -> age);
    echo "<br>Сумма возрастов Ивана и Васи = " . $sum;

    echo "<h2>Задание 3</h2>"; 

    $vasya -> setAge(30);

    echo "Возраст Васи теперь: " . $vasya -> age;
?>