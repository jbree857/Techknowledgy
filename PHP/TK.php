<?php

$searchResult = 'null';

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	$searchText = $_GET["searchquery"];

	if ($searchResult == '')
	{
		$searchResult = 'No search text submitted';
	}
	else
	{
		$searchResult = $searchText;
		//$searchResult = 'Search text submitted';
		//$searchResult = getResults($searchText);
	}
}
else
{
	$searchResult = 'request was not GET';
}
$result =  array(
	//"searchResult" => $searchResult,
	"searchResult" => "stuff",
	"search" => $searchResult

);

echo json_encode($result);

?>
