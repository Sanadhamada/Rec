<?php

namespace Container5FuF4RJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3UNpEKRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3UNpEKR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3UNpEKR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\CondidateRepository', 'getCondidateRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\CondidateRepository',
        ]);
    }
}
