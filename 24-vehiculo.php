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
            function establece_color($color_coche,$nombre_coche){
                $this->color=$color_coche;
                echo "el color de ".$nombre_coche." de este coche es: ".$this->color."<br>";
            }

        }

// no olvidar hacer referencia el constructor a la misma clase
        class Camion{
            // atributos o propiedades
          var  $ruedas;
          var  $color;
           var $motor;
            // metodo constructor / metodo inicial
            function Camion(){
                // se referencia a la propia clase
                // -> ->referenciar a una propiedad o metodo de una clase 
                $this->ruedas=8;
                $this->color="gris";
                $this->motor=2600;

                
    //  return "{$this->ruedas} {$this->color} {$this->motor}";
            }

            function arrancar(){
                echo "estoy arrancando<br>";
            }
            function girar(){
                echo "estoy girando<br>";
            }
            function frenar(){
                echo "estoy frenando el camion <br> ";
            }

            // metodo de camión se omite por tener un color definido para este ejemplo

            // function establece_color($color_coche,$nombre_coche){
            //     $this->color=$color_coche;
            //     echo "el color de ".$nombre_coche." de este coche es: ".$this->color."<br>";
            // }

        }

        // instancias de la clase
        // new ->ejecutar el metodo constructor

        // $renault = new Coche (); //estado inicial al objeto(instanciar)
        // $mazda = new Coche ();
        // $seat = new Coche ();

        // $renault->establece_color("rojo","renault");
        // $seat->establece_color("azul","seat");

        // -> ->acceder /referenciar  a una propiedad o metodo de una clase;
    //     $mazda->girar();
    //    echo  $mazda->ruedas;

    ?>