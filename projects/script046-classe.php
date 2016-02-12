<html>
  <head>
    <title>Classe e Metodos de Objetos</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "Estou dançando!";
          }
        }
        
        $me = new Person("Shane");
        #A função nativa is_a() verifica se um objeto é de uma determinada classe.
        if (is_a($me, "Person")) {
          echo "Sou uma pessoa, ";
        }
        #A função nativa property_exists() se um objeto tem uma certa propriedade.
        if (property_exists($me, "name")) {
          echo "tenho um nome, ";
        }
        #A função nativa method_exists() se o objeto tem um certo metodo.
        if (method_exists($me, "dance")) {
          echo "e sei dançar!";
        }
      ?>
    </p>
  </body>
</html>