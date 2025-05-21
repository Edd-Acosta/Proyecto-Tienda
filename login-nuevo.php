<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Fuentes de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Nunito:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/logo.ico"/>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
            background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        /* Contenedor del formulario */
        .login-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            transition: transform 0.3s ease;
            margin: 20px;
            position: relative;
            overflow: hidden;
        }

        .login-container:hover {
            transform: translateY(-5px);
        }

        /* Título */
        .login-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #2c3e50;
            font-weight: 600;
            font-family: 'Josefin Sans', sans-serif;
        }

        /* Mensaje de error */
        .error-message {
            background-color: #ffebee;
            color: #c62828;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
            border-left: 4px solid #c62828;
            font-family: 'Nunito', sans-serif;
        }

        /* Grupo de campos de formulario */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            font-size: 16px;
            font-family: 'Montserrat', sans-serif;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f8c8d;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: 'Nunito', sans-serif;
        }

        .form-control:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        /* Botón de envío */
        .btn-login {
            width: 100%;
            padding: 14px;
            background-color: #3498db;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 15px;
        }

        .btn-login:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        /* Botones adicionales */
        .btn-back, .btn-enlace {
            display: inline-block;
            width: 48%;
            padding: 10px;
            text-align: center;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.3s ease;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-back {
            background-color: #f1f1f1;
            color: #333;
            margin-right: 4%;
        }

        .btn-back:hover {
            background-color: #e0e0e0;
            text-decoration: none;
        }

        .btn-enlace {
            background-color: #2ecc71;
            color: white;
        }

        .btn-enlace:hover {
            background-color: #27ae60;
            color: white;
            text-decoration: none;
        }

        /* Footer */
        .login-footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #7f8c8d;
            border-top: 1px solid #eee;
            padding-top: 20px;
            font-family: 'Nunito', sans-serif;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                padding: 25px;
                margin: 15px;
            }
            
            .btn-back, .btn-enlace {
                width: 100%;
                margin-bottom: 10px;
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">Login</h1>
       
        <?php if (isset($error_message)): ?>
            <div class="error-message">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
       
        <form action="mostrar.php" method="POST">
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <div class="input-icon">
                    <i class="bi bi-envelope-fill"></i>
                    <input type="email" class="form-control" name="email" required placeholder="tu@email.com">
                </div>
            </div>
           
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <div class="input-icon">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" class="form-control" name="password" required placeholder="••••••••">
                </div>
            </div>
           
            <button type="submit" class="btn-login">
                Iniciar sesión
            </button>
            
            <div style="display: flex; justify-content: space-between; margin-top: 15px;">
                <a href="index.html" class="btn-back">
                    <i class="bi bi-arrow-left"></i> Volver al Inicio
                </a>
              
            </div>
        </form>
       
        <div class="login-footer">
            Abarrotes el profe &copy; <?php echo date('Y'); ?> - Panel de Administración
        </div>
    </div>
</body>
</html>