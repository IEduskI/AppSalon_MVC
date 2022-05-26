<h1 class="nombre-pagina">Olvide Contraseña</h1>
<p class="descripcion-pagina">Restablece tu contraseña escribiendo tu correo a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Tu correo">
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesion</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>