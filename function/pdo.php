<?php
//GET CREDITENTIALS FOR DATABASE
$propertiesjson = file_get_contents('/home/mpo/config/db.json');
$properties = json_decode($propertiesjson, true);
$host = $properties['hostname'];
$user = $properties['user'];
$db = $properties['dbname'];
$pass = $properties['password'];
$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$charset = 'utf8mb4';

    //GET LICENSE KEY REMOTE
$remotejson = file_get_contents('https://maxencedev.fr/config/licenses.json');
$remote = json_decode($remotejson, true);

    //GET LICENSE KEY LOCALLY
$mylicensejson = file_get_contents('/home/mpo/config/cms.json');
$mylicense = json_decode($mylicensejson, true);
$licenselocal = $mylicense['license'];
if (in_array($licenselocal, $remote['license'])) {
    
    
try {
    $pdo = New PDO ("mysql:host=$host;dbname=$db","$user","$pass");
} catch (Exception $e) {
    echo $e->getMessage();
}
}else{
    echo 'VOUS N\'AVEZ PAS DE LICENCE ('.$mylicense['license'].')! Veuillez contacter Maxence pour en obtenir une';
}
   
