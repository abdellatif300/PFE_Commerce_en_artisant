<?php
function getProducts() {
    $sql = "SELECT * FROM produits";

    return mysqli_query(connect(), $sql);
}

function getFilteredProducts() {
   
    $nom = $_GET["nom"] ?? "";
    $min = $_GET["min"] ?? "";
    $max = $_GET["max"] ?? "";

    $sql = "SELECT * FROM produits ";

    $criteres = [];

   

    if($nom !== "") {
        $criteres[] = "nproduit LIKE '%$nom%'";
    }

   

    if($min !== "" and $max !== "") {
        $criteres[] = "Prix BETWEEN $min AND $max";
    } elseif($min !== "") {
        $criteres[] = "Prix > $min";
    } elseif($max !== "") {
        $criteres[] = "Prix < $max";
    }

    if(count($criteres) > 0) {
        $sql .= "WHERE " . implode(" and ", $criteres);
    }
return mysqli_query(connect(),$sql);
}
?>