<!DOCTYPE html>
<html>
<body>
<a href="http://localhost/Proyecto%20Web/index.html">menu principal</a>
<h1>Mi primera pagina php</h1>

<?php
date_default_timezone_set('America/Asuncion');
// estructura base
echo 'Hello World!<br>';
?>

<h2> asignacion de valores</h2>
<?php
$x=5;
$y="john";

echo $x;
echo '<br>';
echo $y;
?>

<h2> concatenacion de un valor a un string en php</h2>
<?php
//concatenacion de valores
$color = "red";
echo "My car is $color<br>";
?>

<h2>para obtener el tipo de dato de una variable y su contenido usar: var_dump()</h2>
<?php
// obtener el tipo de dato y su contenido
var_dump(5);echo"<br>";
var_dump("John");echo"<br>";
var_dump(3.14);echo"<br>";
var_dump(true);echo"<br>";
var_dump([2, 3, 56]);echo"<br>";
var_dump(NULL);
?>

<h2>Global Scope</h2>
<?php
$x=5;
$y2=11;
echo "variables:<br>x=5<br>y2=11";

function my_test(){
// usar x en la funcion no funcionara
// y si funcionara porque
$y=7;
global $y2;
echo "variable x dentro de la funcion es: $x <-------no se puede mostrar porque no esta dentro de la funcion <br>";
echo "variable y dentro de la funcion es: $y <------- se puede mostrar porque esta dentro de la funcion <br>";

}
my_test();
echo "la variable x afuera de la funcion es: $x <-------si se puede mostrar porque es global <br>";
echo "variable y2 esta dentro de la funcion es: $y2 <------- se puede mostrar porque esta definido como global dentro de la funcion<br>";

?>

<h2>echo y print</h2>
<?php
echo "hola ","esto ","esta ","escrito ","con ","multiples ","parametros usando echo ";
?>

<h2>Arrays</h2>
<?php
$cars = array("volvo","BMW","toyota");
var_dump($cars);
?>

<h2>clases en PHP</h2>
<?php
class auto {
    public $color;
    public $modelo;
    public function _constructor($color,$modelo){
        $this->color=$color;
        $this->model=$modelo;
    }
    public function message(){
        return "mi auto es ".$this->color."".$this->model."!";
    }
}
$mycar=new auto("rojo","volvo");
var_dump($mycar);
?>

<h2>Ejemplo de conversion de datos</h2>
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;


var_dump($a);echo"<br>";
var_dump($b);echo "<br>";
var_dump($c);echo"<br>";
var_dump($d);echo"<br>";
var_dump($e);echo"<br>";
?>

<h2> PHP constantes </h2>
<?php
echo "esto esta guardado en una constante llamado saludos:<br>";
const saludos = "Bienvenidos";
echo saludos;
?>
<h2> PHP constantes magicas</h2>
<p>esta constante regresa el nombre del directorio del archivo:</p>
<?php
echo __DIR__;echo " <----------esta constante regresa el camino del archivo<br>";
echo __FILE__; echo "<-----------esta constante regresa el nombre del archivo incluyendo su camino completo<br>"
?>
<h2>PHP operadores arimeticos</h2>
<?php
echo "+ suma<br>";
echo "- resta<br>";
echo"* multiplicacion<br>";
echo"/ division<br>";
echo"% modulo<br>";
echo"** exponente<br>";
?>
<h2> php if </h2>
<?php
// operadores comparativos
if (5>3){
    echo "Ten un buen dia";
}
echo "<br>";
$a = 200;
$b = 33;
$c = 500;
//operadores logicos
if ($a > $b && $a < $c ) {
  echo "Ambos son verdaderos";
}
echo "<br>";
// operadores if else
echo date("H:i:s"); 
$t = date("H");
if ($t < "20") {
  echo "ten un buen dia";
} else {
  echo "ten una buena noche";
}
?>
<h2>PHP Switch</h2>
<?php
// switch de colores
$color_fav="verde";
switch($color_fav){
    case "rojo":
        echo "tu color favorito es rojo";
        break;
    case "verde":
        echo "tu color favorito es verde";
        break;
    case "amarillo":
        echo "tu color favorito es amarillo";
        break;
}
?>
<h2>PHP loop</h2>
<?php
$i = 1; // Iniciar contador
while ($i < 12) { // chequeo de condicion
  echo $i; // ejecucion de codigo
  $i++; // incremento del contador
}
?>
<h2>PHP Funciones</h2>
<?php
// funcion de hello world
function my_message(){
    echo "Hello world 22";
}

my_message();
?>
<h2>PHP Arrays</h2>
<?php
// array de autos en php ejemplo
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);echo "<------------------- muestra los indices de el array y su contenido<br>";
echo $cars[0];echo " <-------------------- impresion del elemento del indice 0<br>";
$cars[1]="Ford";
var_dump($cars);echo "<-------------------- muestra de elementos cambiados.antes el elemento 1 era un BMW y ahora es un Ford<br>"
?>
<p>PHP arrays asociativos</p>
<?php
$car = array("brand"=>"ford","model"=>"mustang","year"=>1964);
var_dump($car)
?>
<p>cambiar el valor de un array</p>
<?php
$car =["brand"=>"ford","model"=>"Mustang","year"=>1964];
var_dump($car);echo"<br>";
$car["year"]=2024;
echo "<br>";
var_dump($car);
?>
<p>crear un array</p>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
?>  
<p>Array multidimensional</p>
<?php
$cars = array (
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("Saab", 5, 2),
  array("Land Rover", 17, 15)
);

echo "<table>";
echo "<tr><th>Brand</th><th>Stock</th><th>Sold</th></tr>";

foreach ($cars as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>