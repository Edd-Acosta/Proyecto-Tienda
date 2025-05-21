<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
        
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKPN22P1K9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZKPN22P1K9');
</script>
        
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mostrar Productos</title>
    <!-- Fuentes de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Nunito:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        .header_section {
            background-color: #2c3e50;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 600;
            color: white;
            font-size: 24px;
        }

        .nav-link {
            font-family: 'Montserrat', sans-serif;
            color: #ecf0f1;
            margin: 0 15px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #3498db;
        }

        /* Contenedor principal */
        .product-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        h3 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 600;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
        }

        /* Tabla de productos */
        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 16px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        .product-table th, .product-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .product-table th {
            background-color: #3498db;
            color: white;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
        }

        .product-table tr {
            transition: all 0.3s;
        }

        .product-table tr:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Botones de acción */
        .action-btn a {
            display: inline-block;
            margin-right: 10px;
            transition: transform 0.3s;
        }

        .action-btn img {
            height: 30px;
            width: auto;
        }

        .action-btn a:hover {
            transform: scale(1.1);
        }

        /* Botón Agregar Producto */
        .add-product-btn {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .add-product-btn:hover {
            background-color: #27ae60;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
            font-family: 'Nunito', sans-serif;
        }

        footer p {
            margin: 5px 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .product-table {
                display: block;
                overflow-x: auto;
            }
            
            .product-container {
                margin: 20px;
                padding: 15px;
            }
            
            h3 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            Abarrotes El Profe
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login-nuevo.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mostrar.php">Productos (actual)</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div class="product-container">
        <h3>Catálogo de productos</h3>
        
        <table class="product-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Fabricante</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("php/abre.php");
                $consulta = "SELECT * FROM registro";
                $resultado = $conexion->query($consulta);
                while ($row=$resultado->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td> 
                    <td><?php echo $row['nombre']; ?></td>       
                    <td>$<?php echo number_format($row['precio'], 2); ?></td>
                    <td><?php echo $row['descripcion']; ?></td> 
                    <td><?php echo $row['fabricante']; ?></td>  
                    <td class="action-btn">
                        <a href="php/modificar.php?id=<?php echo $row['id']; ?>">
                            <img src="img/actualizar.png" alt="Modificar">
                        </a>
                        <a href="php/eliminar.php?id=<?php echo $row['id']; ?>">
                            <img src="img/eliminar.png" alt="Eliminar">
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <div class="text-center">
            <a href="php/agregar.php" class="add-product-btn">Agregar Producto</a>
        </div>
    </div>

    <footer>
        <div class="text-center"><center>
            <p>mundocubico@gmail.com</p>
            <p>Praxedis G.Guerrero, Ciudad Juarez, Chihuahua.</p>
        </center></div>
    </footer>
</body>
</html>