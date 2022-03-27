<?php
// Show Session Varriables
// echo "User ID " . $_SESSION["id_"] . ".<br>";
// echo "Password " . $_SESSION["pass_"] . ".<br>";
?>
<!DOCTYPE HTML>
<html>

<body>
    <h1>Mantenimiento - Agenda de Contacto</h1>
    <form method="post">
        <label for="id">Número de Identificación:</label><br>
        <input autocomplete="off" required type="text" id="Numero_de_Identificacion" name="id"><br><br>

        <label for="name">Nombre:</label><br>
        <input autocomplete="off" required type="text" id="Nombre" name="name"><br><br>

        <label for="lastname">Apellidos:</label><br>
        <input autocomplete="off" required type="text" id="Apellidos" name="lastname"><br><br>

        <label for="gender">Género:</label><br>
        <input autocomplete="off" required type="text" id="Genero" name="gender"><br><br>

        <label for="phone">Teléfono:</label><br>
        <input autocomplete="off" required type="tel" id="Telefono" name="phone"><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input autocomplete="off" required type="email" id="Correo_Electronico" name="email"><br><br>

        <label for="date_of_birth">Fecha de nacimiento:</label><br>
        <input autocomplete="off" required type="date" id="Fecha_de_nacimiento" name="date_of_birth"><br><br>

        <label for="attached_file">Adjunto: (Opcional)</label><br>
        <input type="file" id="Documento_Adjunto" name="attached_file"><br><br>

        <input type="submit" name="saveContact" value="Guardar Contacto">
    </form>
    <br>
    <form method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>