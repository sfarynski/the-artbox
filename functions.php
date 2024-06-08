<?php
// functions.php

function countOeuvres(array $oeuvres) : int
{
    return count($oeuvres);
}

function isValidId(array $oeuvres, int $id) : bool
{
    if ($id >0 && $id <= countOeuvres($oeuvres)) {
        $isIdValid = true;
    } else {
		
        $isIdValid = false;
    }

    return $isIdValid;
}

function getOeuvresWithId(array $oeuvres, int $id) : array
{
	$Oeuvre = [];
	$quantity= 0;
	$nbOeuvres=countOeuvres($oeuvres);
    if (isValidId($oeuvres, $id)) {
		for ($i=1; $i<=$nbOeuvres; $i++){
			if ($id == $oeuvres[$i-1]['number']){
				$quantity++;
				//echo 'oeuvre '.$i. ' trouvee<br/>';
				$Oeuvre[]= $oeuvres[$i-1];
			}
		}
		if ($quantity>1){
			echo 'Plusieurs oeuvres ont le numero '.$id;
		}
    }
	else{
		echo 'id de l\'oeuvre non valide';
	}
	return $Oeuvre;
}

function getOeuvres(array $oeuvres) : array
{
    $validOeuvres = [];

    foreach($oeuvres as $oeuvre) {
        //if (isValidOeuvre($oeuvre)) {
            $validOeuvres[] = $oeuvre;
        //}
    }

    return $validOeuvres;
}
$newdOeuvres = 	[
	'number'=>18,
	'name' => 'Kit Van Der Borght',
	'artist' => 'Red Washover',
	'image' => 'img/steve-johnson.png',
	'description' => 'Nunc euismod ullamcorper tortor, id efficitur ante interdum in. Integer eu condimentum nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra suscipit feugiat. Mauris vehicula luctus tellus, eu hendrerit libero laoreet ut. In tristique vehicula nisl in tempus. Morbi tempus aliquet gravida. In eget est congue, rhoncus sapien at, cursus metus.',
];


function setOeuvres(array $oeuvres) : array
{
    $totaloeuvres=array();
	//global $newdOeuvres;
	echo "contenu de global: ".$GLOBALS["newdOeuvres"]['number'];


    //$oeuvres[]=$newdOeuvres;
	$totaloeuvres=array_merge($oeuvres,array($GLOBALS["newdOeuvres"]));
	return $totaloeuvres;
}
?>