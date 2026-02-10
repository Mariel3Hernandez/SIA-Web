<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="recursos/styles.css">
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <h1>SIA Web</h1>
        </header>
        <main class="main-content">
            <h2>Iniciar Sesión</h2>
            <form action="vista/Home.php" method="POST" class="login-form">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Ingresar</button>
            </form>
        </main>
        <footer class="footer">
            <p>&copy; 2024 SIA Web. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>
</html>