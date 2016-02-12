<!DOCTYPE html>
<html>
    <head>
	  <title> Hora do Desafio! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
            // Digite seu código aqui
            class Cat{
                public $isAlive = true;
                public $numLegs = 4;
                public $name;
                
                public function __construct($name){
                    $this->name = $name;    
                }
                
                public function meow(){
                    return 'Meow meow';
                }
            }
            
            $siames = new Cat('CodeCat');
            
            echo $siames->meow();
        ?>
      </p>
    </body>
</html>