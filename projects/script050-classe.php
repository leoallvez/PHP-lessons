<html>
  <head>
    <title></title>
    <meta charset='utf-8'>
  </head>
  <body>
    <p>
      <?php
        class Person{
            static public function say(){
                echo "Aqui estão meus pensamentos!";
            }
        }
        class Blogger extends Person{
            const cats = 50;
        }
        
        Blogger::say();
      ?>
    </p>
  </body>
</html>