<?php 
$a[] = "Algi Fahri";
$a[] = "Arif Nurrachman";
$a[] = "Hendra Purnomo";
$a[] = "Petrus Rynanson";
$a[] = "As Daniel";
$a[] = "Alif Siraj";

$q = $_REQUEST["q"];

$hint="";

if ($q!=="") {
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($a as $name) {
		if (stristr($q, substr($name, 0, $len))) {
			if ($hint === "") {
				$hint = $name;
			}
			else{
				$hint .= ", $name";
			}
		}
	}
}
echo $hint === "" ? "no suggestion" :$hint;
?>