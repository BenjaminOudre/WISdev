<?php
    $server = "localhost";
    $user = "root";
    $password = "root";
    
    $dbname="cours-sql";
    $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$password);
   function GETetudiants (){
       $res=$conn->query("SELECT * FROM etudiants" INNER JOIN formation);
       return $res
   }
    function GETformation (){
       $res1=$conn->query("SELECT * FROM formation" INNER JOIN formation);
        return $res1
   }
    function GETetudiantsByNom ($){
       $res2=$conn->query("SELECT * FROM etudiants" INNER JOIN formation);
        return $res2
   }
    ?>