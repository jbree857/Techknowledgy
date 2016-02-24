<?php

$searchResult = 'null';

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	$searchText = $_GET["searchText"];

	if (empty($searchText))
	{
		$searchResult = 'No search text submitted';
	}
	else
	{
		$searchResult = getResults($searchText);
	}
}
else
{
	$searchResult = 'request was not GET';
}

return array(

	"searchResult" => $searchResult,

	);

?>