<?php

header('Content-Type: application/json');

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
		$queryResults = getResults($searchResult);
		$result =  array(

        		"searchResult" => $queryResults,

		);

		echo json_encode($result);
		//echo $queryResults;
	}
}
else
{
	$searchResult = 'request was not GET';
}

function getResults($userQuery) 
{
	$core = 'techknowledgy_core';

	$options = array
	(
    		'hostname' => 'localhost',
    		'port'     => 8983,
    		'timeout'  => 10,
    		'path'     => '/solr/' . $core
	);

	$client = new SolrClient($options);

	#if (!$client->ping()) {
    	#	exit('Solr service not responding.');
	#}
	#else{
    	#	print "Worked!";
	#}
	
	$query = new SolrQuery();

	$query->setQuery($userQuery);

	$query->setStart(0);

	$query->setRows(1000);

	$query->addField('url')->addField('title')->addField('host')->addField('content');

	$query_response = $client->query($query);

	$response = $query_response->getResponse();

	#print_r($response);
	return $response;
}

?>
