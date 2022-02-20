
<form action="resultado.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" maxlength="15" required/>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" required/>
    <label for="tipo">Tipo de serie</label>
    <input type="radio" name="tipos" id="tipo" value="accion"/>Accion
    <input type="radio" name="tipos" id="tipo" value="drama"/>Drama
    <input type="radio" name="tipos" id="tipo" value="humor"/>Humor
    <input type="radio" name="tipos" id="tipo" value="fantastica"/>Fantastica
    <input type="radio" name="tipos" id="tipo" value="animacion"/>Animacion
    <label for="series">Serie favorita:</label>
    <select name="series" id="series">
        <option value="">...</option>
        <option value="mrRobot">Mr Robot</option>
        <option value="cuentoCriada">El Cuento de la Criada</option>
        <option value="breakingBad">Breaking Bad</option>
        <option value="narcos">Narcos</option>
        <option value="bojackHorseman">Bojack Horseman</option>
        <option value="chernobil">Chernobil</option>
        <option value="fargo">Fargo</option>
        <option value="brooklyn">Brooklyn Nine-Nine</option>
        <option value="trueDetective">True Detective</option>
        <option value="mandalorian">The Mandalorian</option>
        <option value="horaDeAventuras">Hora de Aventuras</option>
        <option value="gumball">Gumball</option>
    </select>
    <label for="tema">Elige un tema</label>
    <input type="radio" name="tema" id="tema" value="clasico">Clasico
    <input type="radio" name="tema" id="tema" value="floral">Floral
    <input type="radio" name="tema" id="tema" value="cine">Cine
    <label for="numero">Numero de capítulos que visualizas a la semana</label>
    <input type="number" id="numero" min="0" step="1" name="numero">
    <label for="numero">Puntuanos:</label>
    <input type="number" id="numero" min="0" max="5" step="1" name="puntuacion">
    <label for="mensaje">Deja tu opinion: </label>
    <textarea name="mensajes" id="mensaje" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Enviar cuestionario</button>
    <button type="reset">Borrar cuestionario</button>


</form>

