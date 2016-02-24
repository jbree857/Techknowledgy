<?php

$searchResult = 'null';

//if ($_SERVER["REQUEST_METHOD"] == "GET")
//$searchText = $_GET["searchText"];

//	if (empty($searchText))
//	{
//		$searchResult = 'No search text submitted';
//	}
//	else
//	{
//		$searchResult = 'Search text submitted';
		//$searchResult = getResults($searchText);
//	}
//}
//else
//{
//	$searchResult = 'request was not GET';
//}
$result =  array(
	//"searchResult" => $searchResult,
	"searchResult" => "stuff",
	"search" => $searchResult

);

echo json_encode($result);

?>
