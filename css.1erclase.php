<html>
    <title>formularios</title>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf8" />
    </head>
    
    <body bgcolor="orange">
    <body>
        <?php

        $nombre=$_POST['nombre'];
        $contra=$_POST['contra'];
        class Registro{
            public $v1="";
            public function setProperty($v2){ //setmetodo carga la funcion 
                //$this=texto
                $this->v1=$v2;
            }
            public function getPropety(){ //get devuelve el metodo mustra el set
                return $this->v1."<br>";
            }
            
        }

        $reg1= new Registro;
        $con1= new Registro;
        $reg1->setProperty("Nombre ".$nombre);
        $con1->setProperty("Contraseña ".$contra);
        echo $reg1->getPropety();
        echo $con1->getPropety();
       
        
    ?>

</body>
</html>