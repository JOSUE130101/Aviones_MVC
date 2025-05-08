# Ejemplo MVC

##  
Muestra como un scriptcon directivas de configuración y código en php direcciona el flujo de ejecución de una petición URL hasta presentar un contenido en una página principal.

<a id='contents'></a>
## Contenido.
<ul>
<li><a href="#intro">Introdución.</a></li>
<li><a href="#wrangling">Controlador principal.</a></li>
<li><a href="#eda">Exploratory Data Analysis</a></li>
<li><a href="#conclusions">Conclusions</a></li>
<li><a href="#reference">Referencias</a></li>
</ul>
  
<a id='intro'></a>
### Introdución.

Una petición **URL** (del inglés Uniform Resource Locators) es una cadena de caracteres alfanuméricos estructurada en campos estándar separados por marcadores, tiene el propósito de: navegar, identificar, localizar, recuperar y entregar los recursos electrónicos contenidos en un servidor web, mediante una petición por parte del cliente, misma que es atendida por el servidor web Apache, a través de la ejecución de archivos ocultos de **acceso de hipertexto** situados tanto en la raíz de la aplicación, como en las carpetas **public** y **app** de la  aplicación web. 
 
<img style="float: right" 
src="public\img\arbolCarpetas_3niveles.jpg" 
height="580px" width="450px"
alt="carpetas de la aplicación"/>

El diagrama de carpetas y archivos de la aplicación **DASH_BOARD** mostrada a la derecha, presenta tres niveles de ejecución de la aplicación web, el primer nivel **raíz de la aplicación** <font color="red">-recuadro color rojo-</font> tiene la ejecución de una de dos responsabilidades, o <u>direccionar</u> "cualquier cadena de uno o más caracteres, desde el principio hasta el final de la URL" <i>línea número 3</i>, o <u>direccionar y registrar</u> "toda la URL solicitada (sin incluir el dominio)" <i>línea número 4</i>, hacia la carpeta de archivos **/public**.

<h4>Directivas de configuración raíz.</h4>
<img style="float: left" 
src="public\img\htaccesRaiz.PNG" 
height="350px" width="450px"
alt="htaccessRaiz"/>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<h4>Directivas de configuración public.</h4>
<img style="float: left" 
src="public\img\htaccesPublic.PNG" 
height="250px" width="350px"
alt="htaccessPublic"/>

El segundo nivel de ejecución <font color="green">-recuadro color verde-</font> diagrama de carpetas a la izquierda, direcciona el flujo de ejecución <i>línea número 4</i> con el path relativo a la carpeta contenedora del proyecto hacia el archivo destino **/public/index.php** y captura toda la URL solicitada en la variable **url** <i>línea número 7</i>. 

El diagrama de carpetas y archivos de la aplicación DASH_BOARD muestra tanto las carpetas contenedoras **/css,/img,...,/js** con los recursos públicos disponibles para soporte de la aplicación.  Como él archivo destino **index.php** que tiene la responsabilidad de direccionar y cargar en memoria de trabajo el <u>controlador principal</u> y generar una instancia de la clase **ControladorPrincipal()**, contenidas en el archivo **inicio.php** ubicada en el tercer nivel de ejecución.    

<a id='wrangling'></a>
### Controlador principal.

Un **patrón de diseño** en ingeniería de software es un **modelo** que facilita una solución general durante el desarrollo de software. Los patrones de diseño (_PD_) son estructuras que la o él desarrollador adapta o adecúa a diferentes situaciones en desarrollo de software, un _PD_ promueve que el código sea módular, reutilizable, mantenible, documentable y mantenga una lógica de organización modular con menos errores. Así el término **modelo** es una representación abstracta de un sistema, un modelo es útil para entender, diseñar y analizar la ejecución de estructuras de software. 

El modelo (del inglés Front Controller, _controlador principal_) puede ser una solución de aplicación web orientada a capas. El _controlador principal_ proporciona **un punto de entrada** para gestionar todas solicitudes de información del cliente (_query_) en una aplicación web. A menudo este patrón de diseño con sus **componetes** recibe, desglosa y codifica (_serialización_), comprueba seguridad, maneja erores, mapea y delega solicitudes, direcciona a los demás comonentes de la aplicación (Alvarez et al, 2022).

La instanciación y ejecución del <u>controlador principal</u> es responsabilidad del **index.php**, mismo que direcciona al tercer nivel y cargar en memoria de trabajo el contenido de **inicio.php** con la sentencia ```require_once("libs/ControladorPrincipal.php"); ``` e instancia la clase del ```$controladorPrincipal=new ControladorPrincipal();```. 

### Componentes.
Los **componentes** que forman parte del patrón de diseño <u>controlador principal</u>(Alvarez et al, 2022):
<ol>
<li>Controller: es el segmento de código donde se desglosa la petición del cliente en componentes: <u>controlador-método-parámetro</u> <b>(cmp)</b>, en dos vertientes:
<ul>
 <li><b>cmp-útil</b> ← petición url específica.</li>
 <li><b>cmp-nulo</b> ← petición url genrérica.</li>
 </ul>
<li>Dispatcher: son segmentos de código que reciben ejecutan con respecto a los componentes desglosados y en auscencia de estos el controlador por omisión</li>
<li>Helper: ayuda al controlador a terminar su procesamiento.</li>
</ol>

```
 1   dashBoardController
 2      └─app					← archivos público
 3         ├─controladores
 4 	       │   └─DashBoard.php  ← controlador por omisión
 5         ├─modelos
 6         ├─vistas
 7         ├─libs 							← bibliotecas     
 8         │   └─ControladorPrincipal.php   ← frontController retorna un arreglo con los elementos url
 9         ├─.htaccess         				← evita indexación del proyecto
 10        └─inicio.php         ← carga en memoria frontController
```
<h4>Dependencias de los recursos de la aplicación.</h4>

<a href="#contents">Ir a Contenido.</a>

<a id='eda'></a>
### Exploratory Data Analysis

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

<a href="#contents">Ir a Contenido.</a>

<a id='conclusions'></a>
### Conclusiones.

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

<a href="#contents">Ir a Contenido.</a>

<a id='reference'></a>
### Referencias.

GitHub Docs (s.f) Basic writing and formatting syntax.
Recuperado: sábado 18 enero 2025, de 
https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax#images

Portal Andino. GUÍA DE MARKDOWN.
Recuperado: sábado 18 enero 2025, de
https://datosgobar.github.io/portal-andino/markdown-guide/

(Alvarez et al, 2022) Alvarez, O. D. G., Larrea, N. P. L., & Valencia, M. V. R. (2022).
Análisis comparativo de Patrones de Diseño de Software. Polo del Conocimiento: Revista científico-profesional, 7(7), 2146-2165. Recuperado: viernes 24 enero 2025, de https://dialnet.unirioja.es/descarga/articulo/9042927.pdf 



https://mcazorla.gitbooks.io/programacion-en-el-servidor/content/patrones_de_diseno_en_php_ii__patron_mvc/ejemplo_de_como_crear_un_sistema_mvc_paso_a_paso_1.html

<a href="#contents">Ir a Contenido.</a>
