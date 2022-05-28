
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$uploads_dir = '../galerie/gallery/';
$file = $_FILES['fileToUpload']['tmp_name'];
$name = basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($file, "$uploads_dir/$name");
  /*  require_once __DIR__ . '/vendor/autoload.php';

use ImageKit\ImageKit;
echo $file;
 For demonstration purposes, the documentation would use https://ik.imagekit.io/demo as urlEndpoint
$imageKit = new ImageKit(
    "public_XJ3k/GItBzqhSCbB5TvEqe8Q4lc=",
    "private_HdrMIGwBk1BjZJDpgCgGNqZ/fFk=",
    "https://ik.imagekit.io/mpo47/" 
);
$imageKit->upload(array(
    "file" => $file,
    "fileName" => "ififii.jpg",
));

echo $listFiles->url;**/
        $error = 'Fichier uploadé sur la base de donnée  !.';
        
setcookie('error', $error, time() + (1), "/");
 echo '<br><br>';

 header("location: ../galerie.php");
?>