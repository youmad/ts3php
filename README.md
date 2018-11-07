# TeamSpeak3 PHP API

## Status

This project is no longer maintained.

## Usage

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Youmad\TeamSpeak3\{
    Config,
    Query
};

$login = 'serveradmin';
$password = 'SuperSecret';

// Create Config
$config = new Config('localhost', 10011, 5);

// Create Query
$query = new Query($config);

// Connect to server
$query->connect();

// Get API
$api = $query->getApi();

// Login to server
$api->login($login, $password);

// Get virtual servers
/* @var $servers \Youmad\TeamSpeak3\Model\VirtualServer[] */
$servers = $api->getServers();

// Select first virtual server
/* @var $server \Youmad\TeamSpeak3\Model\VirtualServer */
$server = $servers->first();

// Use selected server
$api->use($server->getId());

// Get virtual server info
/* @var $serverInfo \Youmad\TeamSpeak3\Model\VirtualServerInfo */
$serverInfo = $api->getServerInfo();

// Bind virtual server info to virtual server
$server->setVirtualServerInfo($serverInfo);

// Get current virtual server channels
/* @var $channels \Youmad\TeamSpeak3\Model\Channel[] */
$channels = $api->getChannels();

/* @var $channel \Youmad\TeamSpeak3\Model\Channel */
foreach ($channels as $channel) {
    // Bind channel info to channel
    $channel->setChannelInfo($api->getChannelInfo($channel->getId()));

    // If channel has parent
    if ($parentId = $channel->getParentId()) {
        // Set parent channel
        $channel->setParent($channels->get($parentId));
    }
}

// Bind channels to virtual server
$server->setChannels($channels);

// Get current virtual server clients
/* @var $clients \Youmad\TeamSpeak3\Model\Client[] */
$clients = $api->getClients();

/* @var $client \Youmad\TeamSpeak3\Model\Client */
foreach ($clients as $client) {
    // Bind client info to client
    $client->setClientInfo($api->getClientInfo($client->getId()));

    // Set client channel
    $client->setChannel($channels->get($client->getChannelId()));
}

// Quit
$api->quit();

```
