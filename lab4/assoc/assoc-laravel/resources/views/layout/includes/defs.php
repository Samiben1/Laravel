<?php
/* Functions for PM database example. */
/* Load sample data, an array of associative arrays. */
global $emessage;
include "pms.php";
/* Search sample data for $name or $year or $state from form. */
function search($name, $year, $state) {
		global $pms;
		
	if (empty($name) && empty($year) && empty($state))
	{
		echo "Atleast one field must contain value";
		$results = array();
		$pms = $results;
	}

	elseif (!is_numeric($name) && !empty($name)) {
		$results = array();
		foreach ($pms as $pm) {
			if (stripos($pm['name'], $name) !== FALSE) {
				$results[] = $pm;
			}
		}
		$pms = $results;
   }
    //Filter $pms by $year
    elseif (is_numeric($year)) {
		$results = array();
		foreach ($pms as $pm) {
			if (strpos($pm['from'], $year) !== FALSE ||
				strpos($pm['to'], $year) !== FALSE) {
				$results[] = $pm;
			}
		}
		$pms = $results;
    }
   // Filter $pms by $state
   elseif (!is_numeric($state) && !empty($state)) {
		$results = array();
		foreach ($pms as $pm) {
			if (stripos($pm['state'], $state) !== FALSE) {
				$results[] = $pm;
			}
		}
		$pms = $results;
	}
	else{
		$pms = [];
		if (is_numeric($name))
		{
			echo "Name must be a string";
		}
		elseif (!is_numeric($year) && !empty($year))
		{
			echo "year must be an integer";
		}
		elseif (is_numeric($state))
		{
			echo "State needs to be a string";
		}
		else
		{
			echo "Invalid input";
		}
	}

	return $pms;

}
?>
