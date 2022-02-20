<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include "cabecera.php";
    ?>
</head>
<body id=<?php
$tema = recogeDatos("tema");
compruebaTema($tema) ?>>

<?php
function recogeDatos($dato)
{
    if (isset($_REQUEST["$dato"])) {
        $datorecogido = $_REQUEST["$dato"];
    } else {
        $datorecogido = "";
    }

    return $datorecogido;
}

$nombre = recogeDatos("nombre");
$apellidos = recogeDatos("apellidos");

function compruebaNombreApellido($dato1, $dato2)
{
    $patronNombre = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    $patronApellido = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";

    if (preg_match($patronNombre, trim($dato1)) && preg_match($patronApellido, trim($dato2))) {
        print  "<p class='contenedor'>Nombre y apellidos: $dato1 $dato2</p>";
    } else {
        print "<p class='error'>Ha escrito su nombre/apellidos incorrectamente.</p>";
    }
}

compruebaNombreApellido($nombre, $apellidos);
$tipo = recogeDatos("tipos");
function compruebaTipo($dato)
{
    $patronTipo = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";

    if (preg_match($patronTipo, $dato)) {
        print  "<p class='contenedor'> Tipo de serie: $dato</p>";
    } else {
        print "<p class='error'>No ha marcado el tipo.</p>";
    }
}

compruebaTipo($tipo);
function compruebaTema($dato){
    $patronTema = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    if (preg_match($patronTema, $dato)){
        $valor = print "$dato";
    }else{
       $valor = print "";

    }
    return $valor;
}
$puntuacion = recogeDatos("puntuacion");
$serie = recogeDatos("series");
function compruebaSerie($dato)
{
    $patronSerie = "/[a-zA-ZñáéíóúÁÉÍÓÚ0-9]/";

    if (preg_match($patronSerie, $dato)) {
        $numeroCapitulos = recogeDatos("numero");
        switch ($dato) {
            case "mrRobot":
                print "<article class='contenedor'>
                    <p> Serie: Mr Robot</p>
                    <img alt='Sin imagen' src='../imagenes/mrRobot.jpg'>
                    <br>
                    <p>Sinopsis: Elliot Alderson es un joven y brillante programador con problemas 
para las relaciones sociales que durante el día trabaja como técnico de ciberseguridad de una importante empresa informática 
y por la noche es un desinteresado justiciero cibernético, que se verá envuelto en una oscura trama.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "cuentoCriada":
                print "
                <article class='contenedor'>
                <p> Serie: El Cuento de la Criada</p>
                <img alt='Sin imagen' src='../imagenes/cuentoCriada.jpg'>
                <br>
                <p>Sinopsis:En un futuro distópico donde se ha implantado una dictadura 
fundamentalista, una joven se ve forzada a vivir como una concubina para dar hijos a su señor. Tras el asesinato del presidente 
de los Estados Unidos y la mayoría del Congreso, se instaura en el país un régimen teocrático basado en los más estrictos valores 
puritanos. Los Estados Unidos de América, desde ese momento, pasan a ser conocidos como la República de Gilead. En esa nueva sociedad, 
la mayor parte de los valores modernos occidentales han quedado desterrados. La mujer pasa a un segundo plano, siendo prácticamente un 
objeto cuyo único valor está en sus ovarios, pues hay un problema de fertilidad en Gilead. Adaptación de la novela de Margaret Atwood.</p>
                <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";
                break;
            case "breakingBad":
                print "<article class='contenedor'>
                    <p> Serie: Breaking Bad</p>
                    <img alt='Sin imagen' src='../imagenes/breakingBad.png'>
                    <br>
                    <p>Sinopsis:Tras cumplir 50 años, Walter White (Bryan Cranston), un profesor de química de un instituto de Albuquerque, Nuevo México, se entera de 
que tiene un cáncer de pulmón incurable. Casado con Skyler (Anna Gunn) y con un hijo discapacitado (RJ Mitte), la brutal noticia lo 
impulsa a dar un drástico cambio a su vida: decide, con la ayuda de un antiguo alumno (Aaron Paul), fabricar anfetaminas y ponerlas a la 
venta. Lo que pretende es liberar a su familia de problemas económicos cuando se produzca el fatal desenlace.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;
            case "narcos":
                print "<article class='contenedor'>
                    <p> Serie: Narcos</p>
                    <img alt='Sin imagen' src='../imagenes/narcos.jpg'>
                    <br>
                    <p>Sinopsis:Serie que narra los esfuerzos de Estados Unidos, a través principalmente de la DEA,
y de las autoridades y policía de Colombia, para luchar en la década de los 80 contra el narcotraficante Pablo Escobar y el cartel de
Medellín, una de las organizaciones criminales más ricas y despiadadas en la historia de la delincuencia moderna. En la tercera temporada
el objetivo de la DEA y la policía colombiana es intentar acabar con el cartel de Cali.</p>
                     <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "bojackHorseman":
                print "<article class='contenedor'>
                    <p> Serie: Bojack Horseman</p>
                    <img alt='Sin imagen' src='../imagenes/bojackHorseman.png'>
                    <br>
                    <p>Sinopsis: En un mundo donde humanos y animales antropomórficos conviven, el protagonista de 
la serie es el caballo BoJack Horseman (Will Arnett), protagonista de la telecomedia Horsin  Around en la década de los 90. Después de 
años de decadencia y una tormentosa vida personal, BoJack se propone volver al candelero a través de una autobiografía para la que contará
 con ayuda de una escritora fantasma, Diane Nguyen (Alison Brie). Pero BoJack también tendrá que lidiar con las exigencias de su exnovia y 
agente, la gata Princess Carolyn, su compañero de piso, Todd Chávez, y su amienemigo Mr. Peanutbutter, un perro labrador que es novio de
 Diane y triunfó con una sitcom muy similar a Horsin Around.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
 </article>";

                break;
            case "chernobil":
                print "<article class='contenedor'>
                    <p> Serie: Chernobil</p>
                    <img alt='Sin imagen' src='../imagenes/chernobyl.jpg'>
                    <br>
                    <p>Sinopsis: El 26 de abril de 1986, la Central Nuclear de Chernóbil, en Ucrania (por entonces perteneciente a la
Unión Soviética), sufrió una explosión masiva que liberó material radioactivo en Ucrania, Bielorrusia, Rusia, así como en zonas de 
Escandinavia y Europa Central. La serie relata, desde múltiples puntos de vista, lo que aconteció en torno a una de las mayores tragedias 
en la historia reciente, así como los sacrificios realizados para salvar al continente de un desastre sin precedentes.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "fargo":
                print "<article class='contenedor'>
                    <p> Serie: Fargo</p>
                    <img alt='Sin imagen' src='../imagenes/fargo.jpg'>
                    <br>
                    <p>Sinopsis: Lester Nygaard (Martin Freeman), un apocado vendedor de seguros de una pequeña población de Minnesota, 
ve cómo su mundo cambia por completo con la llegada de un misterioso y salvaje desconocido (Billy Bob Thornton). Serie basada en la 
película homónima de los hermanos Coen, aunque presenta personajes diferentes y se ambienta en 2006.</p>
                     <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;
            case "brooklyn":
                print "<article class='contenedor'>
                    <p> Serie: Brooklyn Nine-Nine</p>
                    <img alt='Sin imagen' src='../imagenes/brooklyn99.jpeg'>
                    <br>
                    <p>Sinopsis: Andy Samberg (como el detective Jake Peralta) y Andre Braugher (como el capitán Ray 
Holt) encabezan esta comedia sobre conflictos generacionales en una comisaría de Brooklyn de Nueva York. Uno es un detective que no se 
toma en serio las reglas de sus superiores, mientras que el otro es un inspector empeñado en que madure de una vez y trabaje conforme a 
las normas del departamento.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;
                case "trueDetective":
                print "<article class='contenedor'>
                    <p> Serie: True Detective</p>
                    <img alt='Sin imagen' src='../imagenes/trueDetective.jpg'>
                    <br>
                    <p>Sinopsis: Dos detectives de Lousiana, Rust Cohle (Matthew McConaughey) y Martin Hart (Woody Harrelson), vuelven a 
investigar el difícil caso de un asesino en serie en el que ya habían trabajado. Obligados a regresar a un mundo tan siniestro, el avance 
de la investigación y el mayor conocimiento mutuo les enseñan que la oscuridad reside a ambos lados de la ley.</p>
                     <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "mandalorian":
                print "<article class='contenedor'>
                    <p> Serie: The Mandalorian</p>
                    <img alt='Sin imagen' src='../imagenes/mandalorian.jpg'>
                    <br>
                    <p>Sinopsis: Ambientada tras la caída del Imperio y antes de la aparición de la Primera Orden, la serie sigue los pasos de Mando, un cazarrecompensas 
perteneciente a la legendaria tribu de los mandalorianos, un pistolero solitario que trabaja en los confines de la galaxia, donde no 
alcanza la autoridad de la Nueva República.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "horaDeAventuras":
                print "<article class='contenedor'>
                    <p> Serie: Hora de Aventuras</p>
                    <img alt='Sin imagen' src='../imagenes/horaAventuras.jpg'>
                    <br>
                    <p>Sinopsis: Sigue las aventuras del Finn y su mejor amigo y hermano Jake, un perro con poderes 
mágicos con los que puede cambiar de forma y aumentar o encoger su tamaño. Viven en la Tierra de Ooo, un entorno lleno de personajes 
surrealistas y animales que hablan, donde la magia y la alta tecnología se unen para crear extraños y nuevos artefactos. Pero la realidad 
sobre la Tierra de Ooo esconde secretos oscuros..</p>
                     <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "gumball":
                print "<article class='contenedor'>
                    <p> Serie: El Asombroso Mundo de Gumball </p>
                    <img alt='Sin imagen' src='../imagenes/gumball.jpg'>
                    <br>
                    <p>Sinopsis: Narra las divertidas aventuras de Gumball y su peculiar familia en el idílico pueblecito de Elmore. Un 
papá conejo rosa de 1,95 metros, una madre que se gana la vida vendiendo arcoiris, un gato azul muy torpe y una conejita con un cerebro 
superdotado componen la familia protagonista. No hay que olvidar a Darwin, un pez rojo que se convirtió en miembro del clan el día en que 
le crecieron piernas y pulmones. Así es el asombroso mundo de Gumball.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;


        }
    } else {
        print "<p class='error'>No ha marcado ninguna serie.</p>";
    }
}

compruebaSerie($serie);

$puntuacion = recogeDatos("puntuacion");
function compruebaValoracion($dato){
$patronValoracion = "/[0-9]/";

if (preg_match($patronValoracion, $dato)) {

    print "<article id ='valoracion'>
    <p>Tu valoración:</p>
   <img alt='Sin imagen' src=\"../imagenes/".$dato.".jpg\" \">
   </article>";

}else{
    print "<p class='error'>Por favor introduzca una valoración.</p>";
}


}
compruebaValoracion($puntuacion);
$mensaje = recogeDatos("mensajes");

function compruebaMensaje($dato){
    if ($dato!=""){
        $numeroPalabras=count(explode(" ", $dato));
        $palabras = preg_split("/[\s,]+/",$dato);
        mostrarPalabras($palabras, $numeroPalabras);
    }

}
function mostrarPalabras($dato, $contador){

    print" <p class='contenedor'>Tus comentarios:</p>";
    for($i = 0; $i < $contador; $i++){
        if ($i==0){
            print "<p style='display: inline-block; border: 3px black solid; background-color: rgb(11, 70, 180); color:white; text-align: center;margin-left: 45%'><b> $dato[$i] </b></p></>";
        }else{
            print "<p style='display: inline-block; border: 3px black solid; background-color: rgb(11, 70, 180); color:white; text-align: center;margin: 6px;'><b> $dato[$i] </b></p></>";

        }

    }
    print "<p class='contenedor'>Has escrito $contador palabras.</p>";

}

compruebaMensaje($mensaje);

    $fecha=date('d-m-Y');
    print"<article  class='contenedor'><p> Fecha: $fecha</p></article>";




?>


<a href="index.php">Volver al formulario</a>
<footer>
    <?php
    include "pie.php";
    ?>
</footer>


</body>
</html>
