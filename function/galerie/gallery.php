<!DOCTYPE html>
<html>
  <head>
    <title>Galerie</title>

    <!-- (A) CSS & JS --> <style>
.grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}</style>
  </head>
  <body>
<div class="grid">
        <?php
    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
    $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp,PNG,JPG,JPEG,GIF,BMP,WEBP}", GLOB_BRACE);

    // (C) OUTPUT IMAGES
    foreach ($images as $i) {
    
      echo '<div><img src="https://ik.imagekit.io/mpo47/tr:w-200/'.basename($i).'"><br><input type="text"  id="myInput" value="https://mpo-47.fr/function/galerie/gallery/'.basename($i).'"><button onclick="myFunction()">Copier le lien</button></div>';
    }?>
  
			
		</div>

    <script>function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Texte copié: " + copyText.value);
}</script>
  </body>
</html>
