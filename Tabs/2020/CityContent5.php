<?php 

$i = 0;
$yearbtns = array();
$yearbtnsm = array();

while ($i <= $years_number) {
	$yearbtns[$i] = '<button class="'.$first_button_style.' '.$computer_variable.'" onclick='.'"window.open('."'".$yeartabcode[$i]."');".'"'."><".$n.">".$yeartabtxt[$i].": ".$icons[3]."</".$n."></button>"."\n";
	
	echo $yearbtns[$i];
	$i++;
}

echo "\n";

$i = 0;

while ($i <= $years_number) {
	$yearbtnsm[$i] = '<button class="w3-btn '.$color2.' w3-text-black '.$cssbtn1.' '.$mobile_variable.'" onclick='.'"window.open('."'".$yeartabcode[$i]."');".'"'."><".$m.">".$yeartabtxt[$i].": ".$icons[3]."</".$m."></button>"."\n";
	
	echo $yearbtnsm[$i];
	$i++;
}

?>