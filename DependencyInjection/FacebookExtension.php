<?php

namespace Bundle\FacebookBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;


/**
 *
 * @author Fabien Potencier <fabien.potencier@symfony-project.com>
 */
class FacebookExtension extends Extension
{
    /**
     * Loads the Facebook configuration.
     *
     * @param array            $config    An array of configuration settings
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function configLoad($config, ContainerBuilder $container)
    {
        if (!$container->hasDefinition('facebook.auth')) {
            $loader = new XmlFileLoader($container, __DIR__.'/../Resources/config');
            $loader->load('security.xml');
        }
        
        if (isset($config['appId'])) {
            $container->setParameter('facebook.appId', $config['appId']);
        }
        
        if (isset($config['secret'])) {
            $container->setParameter('facebook.appId', $config['secret']);
        }
        
        if (isset($config['cookie'])) {
            $container->setParameter('facebook.cookie', $config['cookie']);
        }
    }

    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    public function getNamespace()
    {
        return 'http://www.symfony-project.org/schema/dic/facebook';
    }

    public function getAlias()
    {
        return 'facebook';
    }
}
