<?php 


class Sobrecarga{
	#essa função simula a sobrecarga de metodo em PHP.
	public function say(){
		# func_num_args() retorna o numeros de argumentos passados para a função.
        $numArgs = (int)func_num_args();
        # func_get_args() retorna um array dos argumentos da função.
        $args = func_get_args();

        if($numArgs == "1"){
            echo "Say:" . $args[0] . "<br>";
        }

        if($numArgs == 2){
            echo "Say:" . $args[0] . " " . $args[1] . "<br>";    
        }
    }

    # função criada para testar os numeros de agumentos de uma função.

    public function teste(){
    	$num = func_num_args();
    	$arg = func_get_args();

    	for($i = 0; $i < $num; $i++){
    		echo "Argumento $i valor: ".$arg[$i]."</br>";
    	}
    }
}

$objeto = new Sobrecarga();

$objeto->teste("Ola","Tudo bem?", "Me chamo Leo","E estou testando","numero de", "argumentos");




?>