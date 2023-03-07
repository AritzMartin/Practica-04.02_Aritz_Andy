<!DOCTYPE HTML>
<header class="principal">
   <h1>Mi formulario de contacto HTML5</h1>;
</header>
<section class="principal">
  <!-- Aquí irá nuestro formulario -->
</section>
<form name="login" accept-charset="utf-8" method="post" action="index.php">
    <ul>
      <p>
        <label for="nombre">Nombre</label>
        <input type="username" name="nombre" placeholder="Tu nombre." required>
      </p>
      <p>
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" placeholder="email@servicio.com" required>
      </p>
      <p>
        <label for="mensaje">Mensaje</label>
        <input type="text" name="mensaje" placeholder="Tu mensaje." required>
      </p>
      <p>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </p>
    </ul>
  </form>  


