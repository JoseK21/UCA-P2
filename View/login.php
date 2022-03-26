<?php
session_start();

function write_to_console($data)
{
    $console = $data;
    if (is_array($console))
        $console = implode(',', $console);

    echo "<script>console.log('Console: " . $console . "' );</script>";
}
?>

<!DOCTYPE HTML>
<html>

<body>
    <h1>Acceso / Login</h1>

    <?php
    if (isset($_POST['login'])) {
        echo '<script language="javascript">alert(' + $_POST['action'] + ');</script>';
        // if ($_POST['action'] == 'login') {
            $_loginCredentials->setPassword("");
            $_loginCredentials->setId(455);

            $userWithPerissions = $_loginCredentials->isValidUser();

            if ($userWithPerissions) {
                echo '<script language="javascript">alert("12321321434324");</script>';
            } else {
                echo '<script language="javascript">alert("34234324 Nop 234234234");</script>';
            }
            echo "The insert function is called.";
            echo '<script language="javascript">alert(" Nop");</script>';
        // }
    }
    ?>
    <!-- action="form.php" -->
    <form method="post">
        <label for="id">Número de Identificación:</label><br>
        <input autocomplete="off" required type="text" id="Numero_de_Identificacion" name="id"><br><br>

        <label for="password">Contraseña:</label><br>
        <input autocomplete="off" required type="password" id="Contraseña" name="password"><br><br>

        <input type="submit" name="login" value="login">
    </form>


</body>

</html>