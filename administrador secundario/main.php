<?php 
include(".././control general/session_validar.php");
// En caso de qué un rol no perteneciente esté aquí, lo mande a redirigirse
include("control/validar_rol.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/styleindex.css">
    <title>Principal</title>
</head>
<body class="container-body">
<header class="header-main">
        <div class="cajadetexto-main">
    <a href="system_help.php" class="link-main">Sistema de solicitud de ayudas</a>
        </div>
        <div class="cajadetexto-main">
    <a href="registro.php" class="link-main">Registrar nueva persona</a>
        </div>
        <div class="cajadetexto-main">
    <a href="configuracion_user.php" class="link-main">Configuración de usuario</a>
        </div>
        <div class="cajadetexto-main">
    <a href=".././control general/logout.php" class="link-main">Cerrar Sesión</a>
        </div>
        <div class="infousuario-main">
            <p>Rol: Administrador Secundario
            </p>
            </div>
    </header>
    <main class="main-content">
        <section class="section-main">
            <h1>Bienvenido al Sistema de Solicitud de Ayudas</h1>
            <p>Utilice el menú de arriba para navegar por las diferentes secciones del sistema.</p>
        </section>
        <section class="section-main">
            <h2>Últimas Noticias</h2>
            <ul>
                <li>Actualización del sistema realizada el 13/3/2025.</li>
                <li>Nuevas funcionalidades añadidas para mejorar la experiencia del usuario.</li>
                <li>Recuerde actualizar su perfil en la sección de configuración de usuario.</li>
            </ul>
        </section>
        <section class="section-main">
            <h2>Características del Sistema</h2>
            <ul>
                <li>Gestión de solicitudes de ayuda de manera eficiente y rápida.</li>
                <li>Interfaz amigable y fácil de usar.</li>
                <li>Acceso seguro y protegido a través de validación de sesión.</li>
                <li>Configuración personalizada del perfil de usuario.</li>
            </ul>
        </section>
    </main>
</body>
</html>