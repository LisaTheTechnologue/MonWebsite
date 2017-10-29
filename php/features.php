<?php
function getTitle(){
	$activePage = basename($_SERVER['PHP_SELF']);
	$rows = file('includes/navigation.txt');
	
	foreach ($rows as $row) {
		$nav = explode(":", $row);
		$page = trim($nav[0]);
		$link = trim($nav[1]);
		if($link  == $activePage) {
			echo $page;
		} else {

		}
	}
}

?>



