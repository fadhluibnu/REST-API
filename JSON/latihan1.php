<?php

// $mahasiswa = [
//     [
//         "nama" => "Fadhlu Ibnu 'Abbad",
//         "nis" => "310312079",
//         "email" => "fahluibnu@gmail.com"
//     ],

//     [
//         "nama" => "Fadhlu Ibnu",
//         "nis" => "310319099",
//         "email" => "fahluibnu12@gmail.com"
//     ]


// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare("SELECT * FROM mahasiswa");
$db->execute();

$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


// mengubah array manjadi json
$data = json_encode($mahasiswa);
echo ($data);
