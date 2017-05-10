<?php

namespace Http\Client\Common;

use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;

/**
 * Create a PluginClient instance configured with an array of plugins. A factory may add or modify the plugins or change
 * the HttpClient.
 *
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
interface PluginClientFactoryInterface
{
    /**
     * @param HttpClient|HttpAsyncClient $client
     * @param Plugin[]                   $plugins
     * @param array                      $options
     *
     * @see PluginClient constructor for $options details.
     *
     * @return PluginClient
     */
    public function createClient($client, array $plugins = [], array $options = []);
}
