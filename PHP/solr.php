<?php

$core = 'techknowledgy_core';

$options = array
(
    'hostname' => 'localhost',
    'port'     => 8983,
    'timeout'  => 10,
    'path'     => '/solr/' . $core
);

$client = new SolrClient($options);

if (!$client->ping()) {
    exit('Solr service not responding.');
}
else{
    print "Worked!";
}

#$query = new SolrQuery();

#$query->setQuery('lucene');

#$query->setStart(0);

#$query->setRows(50);

#$query->addField('cat')->addField('features')->addField('id')->addField('timestamp');

#$query_response = $client->query($query);

#$response = $query_response->getResponse();

#print_r($response);
?>
