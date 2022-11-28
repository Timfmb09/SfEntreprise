<?php

namespace ContainerNjxMxfy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U45yg42Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u45yg42' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u45yg42'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EmployeController::index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\EmployeController::show' => ['privates', '.service_locator.r8eZeNu', 'get_ServiceLocator_R8eZeNuService', true],
            'App\\Controller\\EntrepriseController::add' => ['privates', '.service_locator.DreI4eC', 'get_ServiceLocator_DreI4eCService', true],
            'App\\Controller\\EntrepriseController::index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\EntrepriseController::show' => ['privates', '.service_locator._o8oKgv', 'get_ServiceLocator_O8oKgvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\EmployeController:index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\EmployeController:show' => ['privates', '.service_locator.r8eZeNu', 'get_ServiceLocator_R8eZeNuService', true],
            'App\\Controller\\EntrepriseController:add' => ['privates', '.service_locator.DreI4eC', 'get_ServiceLocator_DreI4eCService', true],
            'App\\Controller\\EntrepriseController:index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\EntrepriseController:show' => ['privates', '.service_locator._o8oKgv', 'get_ServiceLocator_O8oKgvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\EmployeController::index' => '?',
            'App\\Controller\\EmployeController::show' => '?',
            'App\\Controller\\EntrepriseController::add' => '?',
            'App\\Controller\\EntrepriseController::index' => '?',
            'App\\Controller\\EntrepriseController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\EmployeController:index' => '?',
            'App\\Controller\\EmployeController:show' => '?',
            'App\\Controller\\EntrepriseController:add' => '?',
            'App\\Controller\\EntrepriseController:index' => '?',
            'App\\Controller\\EntrepriseController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
