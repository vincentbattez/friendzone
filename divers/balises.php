<?php

/**
 * Cette fonction sert à créer une balise <input> avec tout ce qu'il faut à l'intérieur
 * @param  string $type                   Nom du type
 * @param  string $name                   Nom que tu utilisera en php (name)
 * @param  array  [$attributes = array()] Les attribues eventuelles comme class, id etc...
 * @return string retourne la balise html input
 *                                   Exemple :
 *                                   input(text,nom)
 */
function input($type,$name,$attributes = array()) {
	$opt = attrs($attributes);
	return "<input type='$type' name='$name' $opt />";
}

function select($name,$tabValeurs) {
	$tmp ="";
	foreach($tabValeurs as $ret=>$val) {
		$tmp = $tmp. "<option value='$ret'>$val</option>\n";
	}

	return "<select name='$name'>$tmp</select>";
}
 
?>