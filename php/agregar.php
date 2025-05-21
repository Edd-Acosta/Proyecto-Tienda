<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Agregar Producto</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Header */
        .header_section {
            background-color: #2c3e50;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
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

        /* Contenedor del formulario */
        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            margin: 80px 20px 40px;
            transition: all 0.3s;
        }

        .form-container:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        /* Título */
        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 600;
            color: #2c3e50;
            font-size: 28px;
        }

        /* Grupo de campos de formulario */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s;
            font-family: 'Nunito', sans-serif;
        }

        .form-group input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        /* Placeholder */
        .form-group input::placeholder {
            color: #95a5a6;
        }

        /* Botón de envío */
        .form-submit {
            width: 100%;
            padding: 12px;
            background-color: #2ecc71;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .form-submit:hover {
            background-color: #27ae60;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Iconos para campos específicos */
        .form-group input[name="precio"] {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%2395a5a6" viewBox="0 0 16 16"><path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/></svg>');
            background-repeat: no-repeat;
            background-position: 95% center;
            background-size: 16px;
            padding-right: 40px;
        }

        .form-group input[name="fabricante"] {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%2395a5a6" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/></svg>');
            background-repeat: no-repeat;
            background-position: 95% center;
            background-size: 16px;
            padding-right: 40px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-container {
                padding: 30px;
                margin: 80px 15px 30px;
            }
            
            .form-title {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 20px;
                margin: 80px 10px 20px;
            }
            
            .form-group input {
                padding: 10px 12px;
            }
            
            .form-submit {
                padding: 10px;
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
                
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div class="form-container">
        <h1 class="form-title">Registro de Artículos</h1>
        <form action="guardar.php" method="POST" enctype="multipart/form-data" class="product-form">
            <div class="form-group">
                <input type="text" name="nombre" placeholder="Nombre del producto" required>
            </div>
            
            <div class="form-group">
                <input type="text" name="descripcion" placeholder="Descripción del producto" required>
            </div>
            
            <div class="form-group">
                <input type="text" name="precio" placeholder="Precio (ej. 19.99)" required>
            </div>
            
            <div class="form-group">
                <input type="text" name="fabricante" placeholder="Fabricante" required>
            </div>
            
            <button type="submit" class="form-submit">Guardar Producto</button>
        </form>
    </div>
</body>
</html>