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

# CODE FOR CLEARING CORE OF ALL DOCS ===>

$deleteResponse = $client->deleteByQuery("*:*");

$client->commit(true);

print_r($deleteResponse->getResponse());

# <=== END OF CODE FOR CLEARING CORE OF ALL DOCS

# CODE FOR ADDING NEW DOC ===>

#$doc = new SolrInputDocument();

#$doc->addField('id', '090945');
#$doc->addField('link', 'www.test.com');
#$doc->addField('text', 'this is another test');

#$updateResponse = $client->addDocument($doc);

#$client->commit(true);

#print_r($updateResponse->getResponse());

# <=== END OF ADDING NEW DOC CODE

# QUERYING DOCUMENTS CODE ===>

#$query = new SolrQuery();

#$query->setQuery('george');

#$query->setStart(0);

#$query->setRows(50);

#$query->addField('cat')->addField('features')->addField('id')->addField('timestamp');

#$query_response = $client->query($query);

#$response = $query_response->getResponse();

#print_r($response);

# <=== END OF QUERYING DOCUMENTS CODE
?>
