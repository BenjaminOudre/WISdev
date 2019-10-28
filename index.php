<?php
require ("model.php");
$resetu=getEtudiants();
echo "Salut";

require("view.php");
$resforma=getEtudiant();

/* $server = "localhost";
$user = "root";
$password = "root";
$dbname="cours-sql";
$conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$password);
    
*/

    echo"connexion tip top";
    $res=$conn->query("SELECT * FROM etudiants" INNER JOIN formation);
    print_r ($res->fetch());


    

    ?>