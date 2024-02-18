<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
</head>

<body>
<h1>Trabajo Crud</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Categoria</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      
      <td>Categorias</td>
      <td><button>Seleccion</button> <a href="/categorias">hola</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
     
      <td>Peliculas</td>
      <td><button>Seleccion</button> <a href="/peliculas">hola</a></td>
      
    </tr>
    
  </tbody>
</table>

</body>

</html>