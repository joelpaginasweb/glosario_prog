<!doctype html>
<html lang="es">

<head>
  <title>Glosario Programacion</title>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minumum-scale=1">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/estilobase.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/index_grid.css">
  <link rel="stylesheet" type="text/css" href="css/index_mediaquery.css">
  <meta property="og:image" content="">
</head>

<!----------------->

<body class="body" id="body">
  <header id="header" class="header">
    <div class="container header__container">
      <a href="#"><img class="header__logo" src="img/glos_prog_bco.png" alt=""></a>
      <span class="header__span" id="iconmenu" onclick="abrirmenu();">
        <img class="header__spanimg" src="img/barras-blancas.png" alt="img">
      </span>
      <nav class="header__nav" id="menu" onclick="closemenu();">
        <a class="header__a" href="#">INICIO</a>
        <a class="header__a" href="#">BUSCAR</a>
        <!-- <a class="header__a" href="#">EJEMPLOS</a> -->
        <!-- <a class="header__a" href="#">INFORMACION</a> -->
        <a class="header__a" href="#footer">ACERCA DE</a>
      </nav>
    </div>
  </header>

  <aside id="aside" class="aside" onclick="closemenu();">
    <div class="titulo__aside titulo__aside--movil">
      <h2>GLOSARIO DE PROGRAMACION</h2>
    </div>

    <div class="titulo__aside">
      <h3>BUSQUEDA POR GRUPO</h3>
    </div>

    <div class="  container div__lista ">
      <ul class="lista containerflex">
        <li class="lista__item"><a href="#a" class="lista__a">A</a></li>
        <li class="lista__item"><a href="#b" class="lista__a">B</a></li>
        <li class="lista__item"><a href="#c" class="lista__a">C</a></li>
        <li class="lista__item"><a href="#d" class="lista__a">D</a></li>
        <li class="lista__item"><a href="#e" class="lista__a">E</a></li>
        <li class="lista__item"><a href="#f" class="lista__a">F</a></li>
        <li class="lista__item"><a href="#h" class="lista__a">H</a></li>
        <li class="lista__item"><a href="#i" class="lista__a">I</a></li>
        <li class="lista__item"><a href="#l" class="lista__a">L</a></li>
        <li class="lista__item"><a href="#m" class="lista__a">M</a></li>
        <li class="lista__item"><a href="#o" class="lista__a">O</a></li>
        <li class="lista__item"><a href="#p" class="lista__a">P</a></li>
        <li class="lista__item"><a href="#s" class="lista__a">S</a></li>
        <li class="lista__item"><a href="#t" class="lista__a">T</a></li>
        <li class="lista__item"><a href="#v" class="lista__a">V</a></li>
      </ul>
    </div>
  </aside>

  <nav class="nav" id="nav" onclick="closemenu();">
    <div class="titulo__aside titulo__aside--desk">
      <h2>GLOSARIO DE PROGRAMACION</h2>
      <!-- <h4> titulo de prueba</h4> -->
      <!-- <h4> segundo titulo de prueba</h4> -->
      <h4> tercer titulo de prueba</h4>
      <h4> cuarto titulo de prueba</h4>



    </div>
    <search> <!---etiqueta search define elementos  de busqueda------>
      <form action="">
        <label for="buscar">Buscar:</label>
        <input type="search" id="buscar" name="buscar" />
        <button type="submit">Buscar</button>
      </form>
    </search>
  </nav>

  <main id="main" class="main" onclick="closemenu();">
    <div class="container ">
      <div class="titulo__main">
      </div>
      <section class="section__tabla">
        <table class="titulotab">
          <thead class="titulotab__thead">
            <tr>
              <th class="titulotab__th">
                <h2 class="">- GLOSARIO -</h2>
              </th>
            </tr>
          </thead>
        </table>
        <table class="tabla">
          <thead>
            <tr>
              <th>CONCEPTO</th>
              <th>DEFINICION</th>
            </tr>
          </thead>
          <tbody>
            <tr id="a">
              <td>Abstracción</td>
              <td>
                Abstraer es: eliminar los detalles innecesarios de un objeto para solo enfocarnos en los aspectos que
                son relevantes para software en desarrollo.
              </td>
            </tr>
            <tr>
              <td>Algoritmo</td>
              <td>
                Conjunto ordenado y finito de operaciones simples a través del cual podemos hallar la solución a un
                problema.
              </td>
            </tr>
            <tr>
              <td>Anidacion</td>
              <td>
                Práctica de incluir un ámbito o contexto dentro de otro. es la práctica de incorporar llamadas a
                funciones o procedimientos dentro de otras funciones, mediante la inclusión de diversos niveles de
                paréntesis.
              </td>
            </tr>
            <tr>
              <td>Argumento</td>
              <td>
                Es el valor que se pasa a un parámetro de procedimiento al llamar a este último. El código de llamada
                proporciona los argumentos cuando llama al procedimiento.
              </td>
            </tr>
            <tr>
              <td>Arreglo</td>
              <td>
                Es una estructura lineal de datos que permite almacenar un conjunto de datos del mismo tipo. Con un
                único nombre se define un arreglo y por medio de un subíndice hacemos referencia a cada elemento del
                mismo (componente)
              </td>
            </tr>
            <tr id="b">
              <td>Bucle</td>
              <td>
                Estructura que repite un conjunto de instrucciones en una serie de ocasiones definida
              </td>
            </tr>
            <tr id="c">
              <td>Clase</td>
              <td>
                Es una plantilla para el objetivo de la creación de objetos de datos, se utilizan para representar
                entidades o conceptos, es un modelo que define un conjunto de variables y métodos apropiados para operar
                con dichos datos, se compone de propiedades(variables) y metodos(funciones)
              </td>
            </tr>
            <tr>
              <td>Cliente</td>
              <td>
                Es una aplicación o sistema informático que se utiliza para acceder y utilizar los servicios
                proporcionados por un servidor. El cliente envía solicitudes al servidor a través de una red, como
                Internet, y recibe respuestas.
              </td>
            </tr>
            <tr>
              <td>Codigo</td>
              <td>
                Conjunto de normas y reglas sobre cualquier materia. sistema de comunicación y serie de símbolos que por
                separado no representan nada, pero al combinarlos pueden generar un lenguaje comprensible solo para
                aquellos quienes lo entiendan.
              </td>
            </tr>
            <tr>
              <td>Codigo fuente</td>
              <td>
                Es una colección de líneas de texto, escritas en un lenguaje de programación, que guían el proceso de
                ejecución de un programa. Estas instrucciones, que son comprensibles por humanos, están redactadas por
                un programador.
              </td>
            </tr>
            <tr>
              <td>Compilado</td>
              <td>
                Un programa escrito en un lenguaje compilado se traduce a través de un programa llamado compilador que,
                a su vez, crea un nuevo archivo independiente que no necesita ningún otro programa para ejecutarse a sí
                mismo, este archivo se llama ejecutable
              </td>
            </tr>
            <tr>
              <td>Concatenar</td>
              <td>
                Enlazar o vincular hechos o ideas que guardan entre sí una relación lógica o de causa y efecto.
              </td>
            </tr>
            <tr>
              <td>Constante</td>
              <td>
                Es un valor o dato que no puede cambiar en la ejecución de un programa, son valores fijos. Una constante
                tiene dos atributos que la caracterizan: nombre y valor.
              </td>
            </tr>
            <tr>
              <td>Constructor</td>
              <td>
                Es un método especial que se llama automáticamente cuando se crea una nueva instancia de una clase. Es
                utilizado para inicializar los atributos de la clase con valores específicos. El constructor tiene el
                mismo nombre que la clase y no tiene un tipo de retorno.
              </td>
            </tr>
            <tr>
              <td>Contador</td>
              <td>
                Es un instrumento utilizado dentro de los algoritmos como una variable con el fin específico de contar
                elementos. Dicha "variable contador" incrementa su valor (cuando se suma) o disminuye su valor (cuando
                se resta) generalmente de uno en uno.
              </td>
            </tr>
            <tr id="d">
              <td>Dato</td>
              <td>
                Es la mínima unidad de información que le da valor o significado a algo.
              </td>
            </tr>
            <tr>
              <td>Dato Alfabético</td>
              <td>
                Formado unicamente por letras
              </td>
            </tr>
            <tr>
              <td>Dato Cadena de caracteres</td>
              <td>
                Contienen una sucesión de caracteres delimitada por comillas o apóstrofes
              </td>
            </tr>
            <tr>
              <td>Dato Caractér</td>
              <td>
                Son símbolos que el computador reconoce. Un carácter puede ser una letra (A, B, Z, a, b,z), un dígito
                (1, 2, 9) o un símbolo ( ! , @ , # , $ , % , ^ , * , & , +, - ). También un espacio en blanco se
                considera un carácter
              </td>
            </tr>
            <tr>
              <td>Dato Entero</td>
              <td>
                Son números que no tienen componentes fraccionarios o decimales, pueden ser negativos o positivos
              </td>
            </tr>
            <tr>
              <td>Dato Flotante</td>
              <td>
                Es un tipo de datos numérico que representa un número con decimales. Los números de punto flotante
                pueden ser utilizados para representar números con precisión decimal, como precios, medidas o
                coordenadas geográficas.
              </td>
            </tr>
            <tr>
              <td>Dato Lógico o Booleanos</td>
              <td>
                Formado por valores Verdaderos o Falsos sólo pueden tomar uno de dos valores, verdadero o falso. se
                utiliza para tomar decisiones lógicas (por ejemplo, si / no).
              </td>
            </tr>
            <tr>
              <td>Dato Numérico</td>
              <td>
                Formado unicamente por números. Pueden ser enteros (1, 5, 37) o reales (2,3... 57.9).
              </td>
            </tr>
            <tr>
              <td>Dato Real</td>
              <td>
                Son números que tienen punto decimal, incluyen números positivos y negativos
              </td>
            </tr>
            <tr>
              <td>Documentacion</td>
              <td>
                Manual oficial de un lenguaje de programacion, sistema, plataforma o aplicación
              </td>
            </tr>
            <tr id="e">
              <td>Encapsular</td>
              <td>
                Principio que se refiere a la capacidad de ocultar los detalles de implementación interna de un objeto y
                exponer solo las interfaces necesarias para interactuar con él. Esto ayuda a mantener el código más
                modular y fácil de mantener.
              </td>
            </tr>
            <tr>
              <td>Ensamblador</td>
              <td>
                Es un lenguaje de programación que se usa en los microprocesadores. Implementa una representación
                simbólica de los códigos máquina binarios y otras constantes necesarias para programar una arquitectura
                de procesador y constituye la representación más directa del código máquina específico para cada
                arquitectura legible por un programador.
              </td>
            </tr>
            <tr>
              <td>Estructura de Control</td>
              <td>
                Son el conjunto de reglas que permiten controlar el flujo de ejecución de las instrucciones de un
                algoritmo o de un programa. permiten modificar el flujo de ejecución de las instrucciones de un
                programa. es decir nos permite decidir si un programa será ejecutado de un modo o de otro.
              </td>
            </tr>
            <tr>
              <td>Expresion</td>
              <td>
                Es una combinación de valores, variables, operadores y funciones que devuelven un valor. El valor puede
                ser un número, un string o un booleano. la parte más fundamental en un lenguaje de programación
              </td>
            </tr>
            <tr id="f">
              <td>Funcion</td>
              <td>
                Es un bloque de código que realiza alguna operación. Una función puede definir opcionalmente parámetros
                de entrada que permiten a los llamadores pasar argumentos a la función. Una función también puede
                devolver un valor como salida ,funciones ejecutan variables , funciones se ejecutan a travez de
                condiciones
              </td>
            </tr>
            <tr id="h">
              <td>Herencia</td>
              <td>
                La herencia permite que una clase (subclase) herede propiedades y métodos de otra clase (superclase).
                Esto promueve la reutilización de código y la extensibilidad.
              </td>
            </tr>
            <tr id="i">
              <td>Instancia</td>
              <td>
                Acción y efecto de instar. - Solicitar la pronta ejecucion de algo
              </td>
            </tr>
            <tr>
              <td>Instanciar</td>
              <td>
                Crear y usar un objeto a partir de sus atributos contenidos en una clase
              </td>
            </tr>
            <tr>
              <td>Iterar</td>
              <td>
                Realizar cierta acción varias veces.
              </td>
            </tr>
            <tr id="l">
              <td>Lenguaje</td>
              <td>
                Sistema de signos que utiliza una comunidad para comunicarse oralmente o por escrito.
              </td>
            </tr>
            <tr>
              <td>Lenguaje funcional</td>
              <td>
                Crea programas mediante funciones, devuelve un nuevo estado de resultado y recibe como entrada el
                resultado de otras funciones.
              </td>
            </tr>
            <tr>
              <td>Lenguaje imperativo</td>
              <td>
                Programa con la ayuda de una serie de comandos, agrupados en bloques y compuestos de órdenes que
                conllevan al programa a retornar a un bloque de comandos si se cumple la condición. Estos fueron los
                primeros lenguajes de programación y aún hoy muchos lenguajes modernos usan este principio
              </td>
            </tr>
            <tr>
              <td>Lenguaje interpretado</td>
              <td>
                Lenguaje de programación que es diferente al lenguaje de máquina. Por ende, debe traducirse para que el
                procesador pueda comprenderlo. Un programa escrito en un lenguaje interpretado necesita de un programa
                auxiliar (el intérprete), que traduce los comandos de los programas según sea necesario.
              </td>
            </tr>
            <tr>
              <td>Lenguaje Maquina</td>
              <td>
                Es el sistema de códigos directamente interpretable por un circuito microprogramable, como el
                microprocesador de una computadora ,este lenguaje está compuesto por un conjunto de instrucciones que
                determinan acciones a ser tomadas por la máquina.
              </td>
            </tr>
            <tr>
              <td>Literal</td>
              <td>
                Es un elemento de programa que representa directamente un valor, es la forma más simple de una
                expresión. Significa que algo se valora así mismo
              </td>
            </tr>
            <tr>
              <td>Lógica</td>
              <td>
                Ciencia formal que estudia la estructura o formas del pensamiento humano (como proposiciones, conceptos
                y razonamientos) para establecer leyes y principios válidos para obtener criterios de verdad. es
                organizar y relacionar de una manera coherente las ideas a aplicar sin que existan contradicciones entre
                ellas.
              </td>
            </tr>
            <tr>
              <td>Lógica de Programación</td>
              <td>
                Capacidad de razonar un problema y desglosarlo en pasos lógicos y secuenciales para que una computadora
                pueda entender, ejecutar y resolver.
              </td>
            </tr>
            <tr id="m">
              <td>Metodo</td>
              <td>
                Funcion dentro de una clase en Programacion Orientada a Objetos , definen el comportamiento de los
                objetos
              </td>
            </tr>
            <tr>
              <td>Modulo</td>
              <td>
                Elemento con función propia concebido para poder ser agrupado de distintas maneras con otros elementos
                constituyendo una unidad mayor.
              </td>
            </tr>
            <tr id="o">
              <td>Objeto</td>
              <td>
                Ente que consta identidad, de un estado y de un comportamiento, que a su vez constan respectivamente de
                datos almacenados y de tareas realizables durante el tiempo de ejecución. Es creado instanciando una
                clase.
              </td>
            </tr>
            <tr>
              <td>Operador</td>
              <td>
                Símbolos especiales que se utilizan en expresiones que indican cómo se deben manipular los datos, indica
                el tipo de operación que se le va a aplicar a uno o más datos.
              </td>
            </tr>
            <tr id="p">
              <td>Paradigma</td>
              <td>
                Modelo, patrón o ejemplo que debe seguirse en determinada situación.Teoría o conjunto de teorías cuyo
                núcleo central se acepta sin cuestionar y que suministra la base y modelo para resolver problemas
              </td>
            </tr>
            <tr>
              <td>Parámetro</td>
              <td>
                Son los datos que reciben las funciones y que utilizan para realizar las operaciones, variable utilizada
                para recibir valores de entrada en una funcion, rutina, subrutina o método.
              </td>
            </tr>
            <tr>
              <td>Polimorfismo</td>
              <td>
                El polimorfismo permite que objetos de diferentes clases respondan de manera similar a un conjunto común
                de métodos. Esto facilita el uso de interfaces genéricas en lugar de tratar con clases específicas.
              </td>
            </tr>
            <tr>
              <td>Programa</td>
              <td>
                Es la relación ordenada y codificada de actividades y secuencia de instrucciones u órdenes basadas en un
                lenguaje de programación que una computadora interpreta para resolver un problema o una función
                especifica.
              </td>
            </tr>
            <tr>
              <td>Programación</td>
              <td>
                Es la acción de programar que implica ordenar, estructurar o componer una serie de acciones cronológicas
                para cumplir un objetivo.
              </td>
            </tr>
            <tr>
              <td>Programacion estructurada</td>
              <td>
                Es un paradigma de programación orientado a mejorar la claridad, calidad y tiempo de desarrollo de un
                programa de computadora recurriendo únicamente a subrutinas y a tres estructuras de control básicas:
                secuencia, selección (if y switch) e iteración (bucles for y while). Las instrucciones siguen un orden
                del principio del archivo hasta el final.
              </td>
            </tr>
            <tr>
              <td>Programación funcional</td>
              <td>
                Paradigma de programación que se enfoca en el uso de funciones matemáticas y evita el uso de estado
                mutable y efectos secundarios. funciones que llaman a otras funciones (declaradas o anónimas).
              </td>
            </tr>
            <tr>
              <td>Programación oriantada a objetos</td>
              <td>
                POO Paradigma de programación donde se organiza el código en unidades reutilizables llamadas clases, las
                clases sirven para encapsular variables (propiedades) y funciones (metodos), con la finalidad de crear
                objetos con caracteristicas y comportamientos propios, a partir de instanciar (recrear) clases.
              </td>
            </tr>
            <tr>
              <td>Propiedad</td>
              <td>
                Variable dentro de una clase en Programacion Orientada a Objetos, define las caracteristicas de un
                objeto
              </td>
            </tr>
            <tr>
              <td>Pseudocódigo</td>
              <td>
                Es un lenguaje de especificación de algoritmos. Se utiliza como un primer borrador del programa en la
                fase de diseño, para definir el código fuente, centrándose en la lógica y los puntos de control de éste
                sin tener que ceñirse a las restricciones sintácticas de un lenguaje de programación.
              </td>
            </tr>
            <tr id="s">
              <td>Script</td>
              <td>
                Archivo ejecutable que contiene instrucciones a seguir para realizar una determinada accion
              </td>
            </tr>
            <tr>
              <td>Semantica</td>
              <td>
                Significado de cada elemento del lenguaje
              </td>
            </tr>
            <tr>
              <td>Sintaxis</td>
              <td>
                Reglas que determinan como se puede construir y secuenciar los elementos del lenguaje
              </td>
            </tr>
            <tr>
              <td>Sistema</td>
              <td>
                Elemento completo donde cada uno de sus componentes se vincula con otro componente, tanto de forma
                material como conceptual
              </td>
            </tr>
            <tr id="t">
              <td>Tipado</td>
              <td>
                Cualidad de los lenguajes de programación con la cual se establecen el tipos de datos en las variables,
                con la finalidad de prevenir errores.
              </td>
            </tr>
            <tr id="v">
              <td>Variable</td>
              <td>
                Dato que almacena informacion durante la ejecución de un programa, puede cambiar su valor, Una variable
                representa una dirección o posición de memoria donde se guarda un dato.
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
  </main>
  
  <footer id="footer" class="footer" onclick="closemenu();">
    <div class="containerflex footer__container">
      <div class="column50">
      </div>
      <div class="column50">
      </div>
      <p class="footer__p">- Desarrollado por: Arq JGS -</p>
      <p class="footer__p">
        <a href="https://www.arqjgs.com/" class="footer__a">- arqjgs.com -</a>
      </p>
      <p class="footer__p">- Sitio Web en proceso de construccion -</p>
    </div>
  </footer>

  <script src="js/openmenu.js"></script>
</body>

</html>