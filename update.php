<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mise à jour</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
<style>

body {
  background: linear-gradient(45deg, #FC466B, #3F5EFB);
  height: 100vh;
  font-family: 'Montserrat', sans-serif;
}

.container {
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
}

form {
  background: rgba(255,255,255,0.3);
  padding: 3em;
  height: 320px;
  border-radius: 20px;
  border-left: 1px solid rgba(255,255,255,0.3);
  border-top: 1px solid rgba(255,255,255,0.3);
  backdrop-filter: blur(10px);
  box-shadow: 20px 20px 40px -6px rgba(0,0,0,0.2);
  text-align: center;
  position: relative;
  transition: all 0.2s ease-in-out;
  
  p {
    font-weight: 500;
    color: #fff;
    opacity: 0.7;
    font-size: 1.4rem;
    margin-top: 0;
    margin-bottom: 60px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
  }
  
  a {
    text-decoration: none;
    color: #ddd;
    font-size: 12px;
    
    &:hover {
      text-shadow: 2px 2px 6px #00000040;
    }
    
    &:active {
      text-shadow: none;
    }
  }
  
  
  &:hover {
    margin: 4px;
  }
}

::placeholder {
  font-family: Montserrat, sans-serif;
  font-weight: 400;
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
}

.drop {
  background: $white;
  backdrop-filter: blur(10px);
  border-radius: 10px;
  border-left: 1px solid rgba(255,255,255,0.3);;
  border-top: 1px solid rgba(255,255,255,0.3);
  box-shadow: 10px 10px 60px -8px rgba(0,0,0,0.2);
  position: absolute;
  transition: all 0.2s ease;
  
  &-1 {
    height: 80px;
    width: 80px;
    top: -20px;
    left: -40px;
    z-index: -1;
  }
  
  &-2 {
    height: 80px;
    width: 80px;
    bottom: -30px;
    right: -10px;
  }
  
  &-3 {
    height: 100px;
    width: 100px;
    bottom: 120px;
    right: -50px;
    z-index: -1;
  }
  
  &-4 {
    height: 120px;
    width: 120px;
    top: -60px;
    right: -60px;
  }
  
  &-5 {
    height: 60px;
    width: 60px;
    bottom: 170px;
    left: 90px;
    z-index: -1;
  }
}

a,
input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}
</style>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
<body>
<div class="container">
  <form >
    <h1>MaxenceDEVCMS</1>
    <p><?php
$url = 
'https://maxencedev.fr/MaxenceDEVCMS.zip';
  
// Use basename() function to return the base name of file
$file_name = basename($url);
  
// Use file_get_contents() function to get the file
// from url and use file_put_contents() function to
// save the file by using base name
if (file_put_contents($file_name, file_get_contents($url)))
{
    
    $master = dirname(__FILE__).'/MaxenceDEVCMS.zip';


    $zip = new ZipArchive;
    $res = $zip->open('MaxenceDEVCMS.zip');

    $jsonout = file_get_contents('https://maxencedev.fr/config/cms.json');
    $out = json_decode($jsonout, true);
    $version = $out['version'];
    if ($res === TRUE) {
        $zip->extractTo('.'); // directory to extract contents to
        $zip->close();
        unlink('MaxenceDEVCMS.zip');
        echo 'Le CMS à bien été mise à jour vers sa nouvelle version ! <br><br> La version actuelle est : <br>'.$version;
    } else {
        echo 'Le CMS n\'a pas été mise à jour, veuiller vérifier les permissions ainsi que les dépendances !';
    }
     
}
else
{
    echo 'Le CMS n\'a pas été mise à jour, veuiller vérifier les permissions ainsi que les dépendances !';
    
}
?></p>
  </form>

  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>


</body>
</html>