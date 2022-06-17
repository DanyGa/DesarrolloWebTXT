<?php
include_once("Conexion.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wnombreth=device-wnombreth, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/StyleP.css">
    <link rel="stylesheet" href="assets/css/StyleBD.css">


    <link href="assets/img/mini.jpg" rel="icon">
    <link href="assets/img/mini.jpg" rel="apple-touch-icon">
    
    <title>BASE DE DATOS | TOMORROW x TOGETHER | TXT</title>
    

</head>

<body>

    <table>
        <tr><th colspan="5"><h1>LISTA TEST</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
        <tr>
          <th>ID</th>
			    <th>Código</th>
          <th>Nombre</th>
          <th>Edad</th>
          <th>Teléfono</th>
          <th>Acción</th>
			  </tr>

        <?php 
        $queryusuarios = mysqli_query($conn, "SELECT * FROM test ORDER BY codigo asc");

        $numerofila = 0;
         while($mostrar = mysqli_fetch_array($queryusuarios)) 
         {    
          $numerofila++;   
          echo "<tr>";
			    echo "<td>".$numerofila."</td>";
          echo "<td>".$mostrar['codigo']."</td>";
          echo "<td>".$mostrar['nombre']."</td>";
          echo "<td>".$mostrar['edad']."</td>";    
			    echo "<td>".$mostrar['telefono']."</td>";  
          echo "<td style='width:26%'><a href=\"Editar.php?codigo=$mostrar[codigo]\">Modificar</a> | <a href=\"Eliminar.php?codigo=$mostrar[codigo]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nombre]?')\">Eliminar</a></td>";           
        }
        ?>
    </table>

    <script>
      function abrirform() 
      {
        document.getElementById("formregistrar").style.display = "block";
      }

      function cancelarform() 
      {
        document.getElementById("formregistrar").style.display = "none";
      }
    </script>

    <div class="caja_popup" id="formregistrar">
      <form action="Agregar.php" class="contenedor_popup" method="POST">
        <table>
          <tr><th colspan="2">Nueva Persona</th></tr>
          <tr>
            <td>Codigo</td>
            <td><input type="text" name="txtcodigo" required></td>
          </tr>
          <tr>
            <td>Nombre</td>
            <td><input type="text" name="txtnombre" required></td>
          </tr>
          <tr> 
            <td>Edad</td>
            <td><input type="text" name="txtedad" required></td>
            </tr>
            <tr> 
              <td>Teléfono</td>
              <td><input type="text" name="txttelefono" required></td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a esta persona?');">
			</td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>