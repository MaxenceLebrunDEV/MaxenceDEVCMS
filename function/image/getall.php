<?php
    require_once __DIR__ . '/vendor/autoload.php';

use ImageKit\ImageKit;
// For demonstration purposes, the documentation would use https://ik.imagekit.io/demo as urlEndpoint
$imageKit = new ImageKit(
    "public_XJ3k/GItBzqhSCbB5TvEqe8Q4lc=",
    "private_HdrMIGwBk1BjZJDpgCgGNqZ/fFk=",
    "https://ik.imagekit.io/mpo47/" 
);
$listFiles = $imageKit->listFiles(array(
    'skip' => 0,
    'limit' => 1,
));