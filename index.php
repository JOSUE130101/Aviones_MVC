<?php
/* index.php es equivalente a un patrón de diseño tipo frontController
*  recupera una url solicitada, direcciona y muestra si, 
* -url por omisión, entonces muestra todos los registros, por ejemplo:
*     http://localhost/EjemploMvc/					 ← url vacia
*     http://localhost/EjemploMvc/index.php			 ← solicita controlador por omisión
*     http://localhost/EjemploMvc/index.php/querty   ← aleatoria
* 
* -url específica, entonces muestra un registro, por ejemplo:  
*     http://localhost/EjemploMvc/index.php/unRegistro/4 ← controlador/metodo/parametro
*/
// capa modelo
require("./model/Avion.php"); 					// define y carga en memoria bd
// capa controlador  
require("./controller/AvionController.php");	// define y carga en memoria la tabla
error_reporting(0);

$controller=new AvionController;				 //
$search="http://localhost/EjemploMvc/index.php/";//define controlador por omisión.
$replace="";					 //define caracter por remover
$subject=$_SERVER["REQUEST_URI"];//recupera la url definida por el usuario	
$urlArray=[];  					 //recupera elementos de la url separados por "/" 
$urlRequest="";	   				 //define campos de la url solicitada	

//replace all occurrences of the search string with the replacement string
$ur_replace = str_replace($search, $replace, $subject);

//retorna un arreglo con componentes url encontrados
$urlArray=explode("/", $ur_replace);		//separa componentes
$urlRequest = array_filter($urlArray);  	//retorna un arreglo con componetes url encontrados
//var_dump($urlRequest); 					//muestra los componentes url encontrados

//Front Controller filtra url metodo-parametro
if ( $urlRequest[3]=="unRegistro"&&is_numeric($urlRequest[4]) )
{
	//dispatcher
	//model/presenter. gestiona navegación y la vista.  ejecuta url específica
    $controller->verRegistro($urlRequest[3]);//ejecuta metodo-parametro
}
else
{
    //dispatcher
	//model/presenter.	gestiona navegación y la vista ejecuta url general
    $controller->index();//ejecuta página principal
} 
?>