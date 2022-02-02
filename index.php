<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.
require './class/StrUtils.php';

$newStr = new StrUtils('a word to test');

echo "<p>" . $newStr->bold('nouveau') . "</p>";

echo "<br><br>";

echo "<p>" . $newStr->italic('essai') . "</p>";

echo "<br><br>";

echo "<p>" . $newStr->underline('suite') . "</p>";

echo "<br><br>";

echo "<p>" . $newStr->capitalize('de l\'exo') . "</p>";

echo "<br><br>";

echo "<p>" . $newStr->uglify('test final') . "</p>";

