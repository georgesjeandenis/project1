<?
	$string	= "a b c d e";
	$result	= explode(" ", $_POST['me'] . " & " . $string);

	echo json_encode($result);
?>