<?php

$picked_movie = 'Kill Bill Vol. 1';

if(isset($picked_movie)) {
	$movie = $picked_movie;
} else {
	$$movie = 'The Incredibles';
}


$movie = isset($picked_movie) ? $picked_movie : 'The Incredibles';

