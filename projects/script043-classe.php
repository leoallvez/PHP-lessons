<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstruindo a Classe Person</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
       
        class Person{
            public $isAlive;
            public $firstname;
            public $lastname;
            public $age;
            
            function __construct($fi, $la, $ag){
                $this->isAlive = true;
                $this->firstname = $fi;
                $this->lastname = $la;
                $this->age = $ag;
            }
            public function greet(){
                return 'Helo, my name is '.$this->firstname.' '.$this->lastname.' Nice to meet you! :-)';
            }
        }
        $teacher = new Person("boring","12345",12345);
        echo $teacher->isAlive;
        echo $teacher->greet();
        $student = new Person("Leo","Alves",33);
        echo $student->age;
        echo $student->greet();
        ?>
      </p>
    </body>
</html>