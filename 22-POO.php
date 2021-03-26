<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // creación de clase coches 
        class Coche{
            // atributos o propiedades
          var  $ruedas;
          var  $color;
           var $motor;
            // metodo constructor / metodo inicial
            function Coche(){
                // se referencia a la propia clase
                // -> ->referenciar a una propiedad o metodo de una clase 
                $this->ruedas=4;
                $this->color="";
                $this->motor=1600;

                
    //  return "{$this->ruedas} {$this->color} {$this->motor}";
            }

            function arrancar(){
                echo "estoy arrancando<br>";
            }
            function girar(){
                echo "estoy girando<br>";
            }
            function frenar(){
                echo "estoy frenando<br> ";
            }

        }

        // instancias de la clase
        // new ->ejecutar el metodo constructor
        $renault = new Coche (); //estado inicial al objeto(instanciar)
        $mazda = new Coche ();
        $seat = new Coche ();
        // -> ->acceder /referenciar  a una propiedad o metodo de una clase;
        $mazda->girar();
       echo  $mazda->ruedas;
    ?>
</body>
</html>