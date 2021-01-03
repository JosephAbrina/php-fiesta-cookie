<?php
$Solo = array (
  array("species","type1","type2","ability","hp","attack","defense"),
  array("Bulbasaur","Grass","Poison","Overgrow",45,49,49),
  array("Ivysaur","Grass","Poison","Overgrow",60,62,63),
  array("Venusaur","Grass","Poison","Overgrow",80,82,83),
  array("Charmander","Fire","N/A","Blaze",39,52,43),
  array("Charmeleon","Fire","N/A","Blaze",58,64,58),
  array("Charizard","Fire","Flying","Blaze",78,84,78),
  array("Squirtle","Water","N/A","Torrent",44,48,65),
  array("Wartortle","Water","N/A","Torrent",59,63,80),
  array("Blastoise","Water","N/A","Torrent",79,83,100),
  array("Caterpie","Bug","N/A","Shield Dust",50,20,55)
);
function pokemon_defense ($p1, $p2){
    foreach ($p1 as $deff) {
        if ($deff[6] >= $p2){
            echo $deff[0]."". $deff[6]."<br>";
        }
    }
}

pokemon_defense ($Solo, 50);
?>