<html>
  <head>
    <title>Sobreposição!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
            public function honk() {
                return "HONK HONK!";
            }
        }
        // Adicione seu código abaixo!
        class Bicycle extends Vehicle{
            public function honk(){
                return "Beep beep!";
            }
        }
        
        $bicycle = new Bicycle();
        
        echo $bicycle->honk();
        
        
      ?>
    </p>
  </body>
</html>