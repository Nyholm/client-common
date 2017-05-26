<?php

namespace Http\Client\Common;

/**
 * A configurable PluginClientFactory. If no call to setFactory has been made we will fallback on the default PluginFactory.
 *
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
final class PluginClientFactory implements PluginClientFactoryInterface
{
    /**
     * @var PluginClientFactoryInterface|null
     */
    private static $factory;

    /**
     * @param PluginClientFactoryInterface $factory
     */
    public static function setFactory(PluginClientFactoryInterface $factory = null)
    {
        self::$factory = $factory;
    }

    /**
     * {@inheritdoc}
     */
    public function createClient($client, array $plugins = [], array $options = [])
    {
        if (null !== self::$factory) {
            return self::$factory->createClient($client, $plugins, $options);
        }

        return new PluginClient($client, $plugins, $options);
    }
}
