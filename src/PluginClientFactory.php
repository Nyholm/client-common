<?php

namespace Http\Client\Common;

/**
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
final class PluginClientFactory implements PluginClientFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createClient($client, array $plugins = [], array $options = [])
    {
        return new PluginClient($client, $plugins, $options);
    }
}
