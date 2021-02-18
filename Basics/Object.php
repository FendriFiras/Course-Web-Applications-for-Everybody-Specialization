<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //creat classe
        class Person{
            //declaration des variable
            public $name;
            public $prename;
            public $age;
            //constructor
            public function __construct($name ,$prename ,$age){
                $this->name=$name;
                $this->prename=$prename;
                $this->age =$age;
            }
            //methode
            public function hello(){
                return "HELLO".$this->name.$this->prename."YOUR AGE IS".$this->age;
            }
        }
        //creating a new persone
        $person1= new Person("firas","fendri",22);
        echo $person1->hello();
    ?>
</body>
</html>