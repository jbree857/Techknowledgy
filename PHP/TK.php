<?php

$searchResult = 'null';

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	$searchResult = $_GET["searchquery"];

	if (empty($searchResult))
	{
		$searchResult = 'No search text submitted';
	}
	else
	{
		$searchResult = $searchResult;
		//$searchResult = 'Search text submitted';
		//$searchResult = getResults($searchText);
	}
}
else
{
	$searchResult = 'request was not GET';
}
$result =  array(

	"searchResult" => $searchResult

);

echo json_encode($result);

?>
