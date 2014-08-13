<?php
/**
 * Resource Factory
 *
 * A factory for the resource service.
 *
 * @package NinjaAuthorization\Service
 * @filesource
 */

namespace NinjaAuthorization\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Resource Factory
 *
 * A factory for the resource service.
 *
 * @package NinjaAuthorization\Service
 */
class ResourceFactory implements ServiceLocatorInterface
{

    /**
     * Create Service
     *
     * Creates the resource service.
     *
     * @param ServiceLocatorInterface $serviceLocator The service locator.
     * @return Resource The resource service.
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new Resource();
    }
}