<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Tu correo">
    </div>

    <div class="campo">
        <label for="passwword">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="Tu contraseña">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesion">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>