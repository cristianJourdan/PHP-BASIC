<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function getKorting(){
    $leeftijd = $_GET['leeftijd'];
    
    switch ($leeftijd) {
        case $leeftijd > 19:
          echo "0,00";
          break;
        case 19:
          echo "0,19";
          break;
        case 18:
          echo "0,18";
          break;
        case 17:
          echo "0,17";
          break;
        case 16:
          echo "0,16";
          break;
        case $leeftijd < 16:
          echo "1,00";
          break;
        default:
          echo "Uw Korting";
      }
}function getTotaal(){
    $productnummer = $_GET['productnummer'];
    $aantalProd = $_GET['aantal'];
    echo $prijs[$productnummer] * $aantalProd;
}
?>