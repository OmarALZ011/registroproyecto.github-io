<?php 
	
	$servidor = "localhost";
	$usuario = "root";
	$clave = "";
	$baseDeDatos = "ejemplo";

	$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos); 

	if (isset($_POST['registro'])){

		$nombre = $_POST ['nombre']; 
		$correo = $_POST ['correo']; 
		$telefono = $_POST ['telefono']; 
		$mensaje = $_POST ['mensaje']; 

		$insertarDatos = "INSERT INTO datos VALUES('$nombre','$correo','$telefono','$mensaje','')"; 

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
	}


?> 

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maste Electronic</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="logo">Master <span>Electronic</span></div>
    <nav>
      <ul>
        <li><a href="#productos">Productos</a></li>
        <li><a href="#registro">Registro</a></li>
        <li><a href="#historia">Historia</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main> 
        <section id="hero">
      <h1>Encuentra lo mejor en tecnología</h1>
      <p>Computadoras, partes y accesorios al mejor precio.</p>
      <a href="#productos" class="btn">Ver productos</a>
    </section> 

    <!-- Sección de Productos -->
    <section id="productos">
      <h2>Productos Destacados</h2>
      <div class="productos-container">

        <div class="producto">
          <img src="asus.jpg" alt="Laptop">
          <h3>Laptop Gamer</h3>
          <p>$1,200.00</p>
          <button>Comprar</button>
        </div>
        <div class="producto">
          <img src="3080 rtx.jpg" alt="Tarjeta gráfica">
          <h3>Tarjeta Gráfica RTX 3080</h3>
          <p>$700.00</p>
          <button>Comprar</button>
        </div>
        <div class="producto">
          <img src="A75.jpg" alt="Teclado">
          <h3>Teclado Mecánico RGB</h3>
          <p>$80.00</p>
          <button>Comprar</button>
        </div>
          
      </div>
    </section>
 
    <!-- Sección de Registro -->
    <section id="registro">
      <h2>Regístrate como Cliente</h2>
      <form action="#" name="ejemplo" method="post">

        <label for="nombre">Nombre Completo:</label>
        <input type="text" name="nombre" placeholder="nombre" >

        <label for="correo">Correo Electrónico:</label>
        <input type="email"  name="correo" placeholder="correo" >

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" placeholder="telefono" >

        <label for="mensaje">mensaje:</label>
        <input type="text" name="mensaje" placeholder="mensaje">
        
        <!------botones------->
        <input type="submit" name="registro">
        <input type="reset">

      </form>
    </section>

    <!-- Sección de Historia -->
    <section id="historia">
      <h2>Historia de Maste Electronic</h2>
      <p>
        Maste Electronic surge para atender las crecientes necesidades mostradas por el mercado de consumidores de electrónicos y cómputo con la idea de satisfacerlas de una forma eficaz, ágil y con precios accesibles. 
        Además, somos uno de los más grandes vendedores en la plataforma Mercado Libre (distinguidos con el nombramiento de MercadoLíder Platinum, categoría que se le otorga sólo a vendedores miembros de la comunidad que gozan de una reputación impecable).
      </p>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Master Electronic. Todos los derechos reservados. </p>
    <p> No. Atencion a cliente: 5562111245.</p>
  </footer>
</body>



</html> 
