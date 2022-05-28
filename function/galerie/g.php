<!DOCTYPE html>
<html>
  <head>
    <title>Galerie</title>
    <script src="https://kit.fontawesome.com/aebd204a73.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
    <!-- (A) CSS & JS -->
    <style>
        body{
            background-color: #011F3F;
            color: white;
        }
        
        span{
            color: #fff;
        }
.grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 30px;
}

a {
    position: relative;
    display: inline-block;
    padding: 0 60px;
    outline: none;
    border: none;
    background-color: #1d9650;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 1em;
    line-height: 4;
}
a:hover {
    position: relative;
    display: inline-block;
    padding: 0 60px;
    outline: none;
    border: none;
    background-color: #188144;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 1em;
    line-height: 4;
}
button {
    position: relative;
    display: inline-block;
    padding: 0 60px;
    outline: none;
    border: none;
    background-color: #1d9650;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 1em;
    line-height: 4;
}
button:hover {
    position: relative;
    display: inline-block;
    padding: 0 60px;
    outline: none;
    border: none;
    background-color: #188144;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 1em;
    line-height: 4;
}
button:active {
  background-color: #10562d;
  transform: translateY(4px);
}
input {
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #148544;
    font-weight: 700;
    padding: 1em;
    font-size: 0.8em;
    -webkit-backface-visibility: hidden;
}</style>
  </head>
  <body>
    
  <div class="uk-container">
  <h2 class="uk-heading-line uk-text-center"><span>Galerie</span></h2>
 <a href="../../dashboard.php" class="back">Retour à l'accueil &nbsp;<i class="fa-solid fa-rotate-left"></i></a><br><br> <br>
  <div class="wrapper">
		<div class="grid">
        <?php
        
  $propertiesjson = file_get_contents('./assets/cms.json');
  $properties = json_decode($propertiesjson, true);

    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = "/home/mpo/assets/gallery/";
    $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp,PNG,JPG,JPEG,GIF,BMP,WEBP}", GLOB_BRACE);
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    // (C) OUTPUT IMAGES
    foreach ($images as $i) {
        
        $name = basename($i);
$func = generateRandomString();
      echo '<div><img src="https://ik.imagekit.io/mpo47/tr:ar-1-1,w-256/'.$name.'"><input type="text"  id="'.$name.'" value="https://ik.imagekit.io/mpo47/tr:ar-1-1,w-256/'.$name.'"><br><button onclick="'.$func.'()">Copier le lien</button></div><script>function '.$func.'() {
        /* Get the text field */
        var copyText = document.getElementById("'.$name.'");
        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        
         /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
        
        /* Alert the copied text */
        alert("Le lien à bien été copié.'.$name.'");
        }</script>';
    }
      ?> </div>

  </body>
</html>
