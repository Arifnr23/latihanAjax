<?php
$a[] = "Petrus Rynanson Sianipar";
$a[] = "Kurnia Prijiandi";
$a[] = "As Daniel";
$a[] = "Buk Dwi Manis";
$a[] = "Cistin";
$a[] = "Melisa";
$a[] = "Kurnia Prijiandi";
$a[] = "Arif Nurrahman";

//get the q parameter from URl
$q = $_REQUEST["q"];
$hint = "";

//lookup all hints from array if $q is different form ""
if ($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($a as $name) {
		if (stristr($q, substr($name, 0, $len))){
			if ($hint === ""){
				$hint = $name;
			} else {
				$hint .= ", $name";
			}
		}
	}
}
//output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
