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
echo json_encode($Solo);

echo "<br> Hp sum:";
function hp_sum($arr){
  $hp_sum = 0;
  foreach ($arr as $hp) {
    $hp_nxt = $hp[5];
    $hp_sum += $hp_nxt;
  }
  return $hp_sum;
}
echo hp_sum($Solo);

echo "<br> Average of attack:";
function ave_attack($arr){
  $att_sum = 0;
  foreach ($arr as $attack) {
    $att_nxt = $attack[6];
    $attave = $att_sum += $att_nxt;
  }
  return $attave/10;
}
echo ave_attack($Solo);
 ?>