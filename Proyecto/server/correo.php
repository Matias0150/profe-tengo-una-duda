<?php
$Nombre = $_POST['Nombre'];

$Telefono = $_POST['Telefono'];

$Email = $_POST['Email'];

$Consultas = $_POST['Consultas'];

$Destinatario = 'matias.dpereira1.2gmail.com';

$header = 'Enviado desde la web';

$mensajeCompleto = $Consultas . '\nAtentamente: '. $Nombre. '\n' . $Email;

mail($Destinatario, $Consultas, $mensajeCompleto, $header);

echo'<script>setTimeout(\'location.href ="index.html"\', 0)</script>';

echo'<script>setTimeout(\'location.href ="../pages/filosofia.html"\', 0)</script>';
?>