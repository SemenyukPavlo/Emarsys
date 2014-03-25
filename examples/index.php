<?php

require_once 'config.php';

use Snowcap\Emarsys\Client;
use Snowcap\Emarsys\Response;

/**
 * @param Response $response
 */
function testAPI(Response $response)
{
    echo PHP_EOL . str_repeat("=", 80) . PHP_EOL;
    var_dump($response);
    echo PHP_EOL . str_repeat("=", 80) . PHP_EOL;
    echo PHP_EOL;
}

$client = new Client(EMARSYS_API_USERNAME, EMARSYS_API_SECRET);


try {
    // Get available languages
    //testAPI($client->getLanguages());

    // Get availables fields
    //testAPI($client->getFields());

    // Create basic contact
    testAPI($client->createContact(array('3' => 'jerome@snowcap.be')));

    // Get a list of emails
    //testAPI($client->getEmails());

    // Get a list of emails with specific status
    //testAPI($client->getEmails(Client::EMAIL_STATUS_READY));

    // Get a list of emails for specific mailing list
    //testAPI($client->getEmails(null, 123));

    // Get a list of emails with specific status and for specific mailing list
    //testAPI($client->getEmails(Client::EMAIL_STATUS_READY, 123));

} catch (\Exception $e) {
    echo $e;
}
