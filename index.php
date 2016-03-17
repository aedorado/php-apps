<?php

$r = rand(0, 1);

if ($r == 0) {
	header('Location: wordmaster/');
} else if ($r == 1) {
	header('Location: hangman/');
}


?>