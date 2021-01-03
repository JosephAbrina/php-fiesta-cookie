<?php
$Solo = array (
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
	print_r($Solo)."<br>";
	echo $Solo[5][0]."<br>";
	echo count($Solo)."<br>";

	foreach ($Solo as $value) {
		echo $value[0].'<br>';
	}
?>
