<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background-color: #F6F3EE; /* Cambia el color de fondo de toda la página */
      font-family: Arial, sans-serif;
    }

    h1 {
      font-family: 'Smoothy Butter', sans-serif;
    }

    .menu-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #735E59;
      color: white;
      padding: 10px 20px;
    }

    .menu-bar a {
      color: white;
      text-decoration: none;
      margin-left: 30px;
      font-family: 'Smoothy Butter', sans-serif;
      font-size: 30px;
    }

    .menu-bar a:hover {
      color: #ccc;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center; /* Centra horizontalmente */
      margin-top: 50px;
    }

    .row {
      display: flex;
      justify-content: center; /* Centra horizontalmente */
      align-items: center; /* Centra verticalmente */
      width: 100%;
    }

    .col {
      flex: 0 0 auto;
    }

    .movie-blog {
      color: white; /* Cambio de color solo para "Movie Blog" */
    }

    .registro-peliculas {
      font-size: 77px; /* Tamaño de fuente para la frase */
      font-family: 'Bell MT', serif; /* Cambio de tipo de letra */
      color: #735E59; /* Cambio de color de letra */
      text-align: center; /* Centra horizontalmente */
    }

    .imagenes {
      margin-top: 20px; /* Espacio entre la frase y las imágenes */
      text-align: center; /* Centra horizontalmente las imágenes */
    }

    .imagen {
      width: 300px; /* Ancho fijo para todas las imágenes */
      height: 300px;
      margin: 0 10px; /* Espacio entre las imágenes */
    }

    .texto-bajo-imagen {
      margin-top: 10px; /* Espacio entre las imágenes y el texto */
      font-size: 24px; /* Tamaño de fuente del texto */
      font-family: 'Bradley Hand ITC', cursive; /* Fuente del texto */
      color: #735E59; /* Color del texto */
      font-weight: bold; /* Texto en negritas */
    }
  </style>
</head>

<body>
  <div class="menu-bar">
    <div>
      <h1><span class="movie-blog">Movie Blog</span></h1>
    </div>
    <div>
      <a href="/categorias">Categorías</a>
      <a href="/peliculas">Películas</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="registro-peliculas">Crea tu registro de películas favoritas</h1>
        <div class="imagenes">
          <img class="imagen" src="https://i.pinimg.com/736x/a2/a2/e4/a2a2e45f21b6b26df2a9a30913491d2f.jpg" alt="Imagen 1">
          <img class="imagen" src="https://thumbs.dreamstime.com/b/ejemplos-dibujados-del-dise%C3%B1o-garabato-vector-estilo-de-la-mano-libros-pila-121074351.jpg" alt="Imagen 2">
          <img class="imagen" src="https://i.pinimg.com/originals/d0/33/d2/d033d219a4120c05a861548d96b14808.jpg" alt="Imagen 3">
          <div class="texto-bajo-imagen">Bienvenido, esta aplicación está diseñada para que puedas tener un registro de tus películas favoritas.
             Puedes colocar tus categorías favoritas y tus películas favoritas del momento.
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
