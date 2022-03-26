<?php
session_start();

echo "User ID " . $_SESSION["id_"] . ".<br>";
echo "Password" . $_SESSION["pass_"] . ".<br>";
?>
<!DOCTYPE HTML>
<html>

<body>
    <?php

    function write_to_console($data)
    {
        $console = $data;
        if (is_array($console))
            $console = implode(',', $console);

        echo "<script>console.log('Console: " . $console . "' );</script>";
    }
    write_to_console("Hello World!");
    write_to_console($_SESSION["id_"]);

    ?>

    <h1>Mantenimiento - Agenda de Contacto</h1>
    <form action="config.php">
        <!--  method="get" -->
        <label for="id">Número de Identificación:</label><br>
        <input autocomplete="off" required type="text" id="Numero_de_Identificacion" name="id"><br><br>

        <label for="name">Nombre:</label><br>
        <input autocomplete="off" required type="text" id="Nombre" name="name"><br><br>

        <label for="lastname">Apellidos:</label><br>
        <input autocomplete="off" required type="text" id="Apellidos" name="lastname"><br><br>

        <label for="gender">Género:</label><br>
        <input autocomplete="off" required type="text" id="Género" name="gender"><br><br>

        <label for="phone">Teléfono:</label><br>
        <input autocomplete="off" required type="tel" id="Teléfono" name="phone"><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input autocomplete="off" required type="email" id="Correo_Electrónico" name="email"><br><br>

        <label for="date_of_birth">Fecha de nacimiento:</label><br>
        <input autocomplete="off" required type="date" id="Fecha_de_nacimiento" name="date_of_birth"><br><br>

        <label for="attached_file">Adjunto: (Opcional)</label><br>
        <input type="file" id="Documento_Adjunto" name="attached_file"><br><br>

        <input type="submit" value="Guardar Contacto">
    </form>
    <br>
    <form method="post">
        <input type="submit" value="CerrarSession">
        <!-- // initialize a session variable
$_SESSION['logged_in_user_id'] = '1';
 
// unset a session variable
unset($_SESSION['logged_in_user_id']); -->
    </form>

    <?php
    function back()
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
    if (isset($_POST['submit'])) {
        back();
    }
    ?>

    <?php
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'CerrarSession':
                insert();
                break;
            case 'select':
                select();
                break;
        }
    }

    function select()
    {
        echo "The select function is called.";
        echo '<script language="javascript">alert(" Contraseña y/o Identificación select");</script>';
        header("Location: http://localhost/partial2/View/login.php");
        exit();
    }

    function insert()
    {
        echo '<script language="javascript">alert(" Contraseña y/o Identificación insert");</script>';

        header("Location: http://localhost/partial2/View/login.php");
        exit();
    }
    ?>

</body>

</html>