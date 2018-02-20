<?php
/**
 * PHPStorm IDE Helper
 *
 * Code completion for Interop/Container
 *
 * @author Dale Paget
 * @see https://confluence.jetbrains.com/display/PhpStorm/PhpStorm+Advanced+Metadata
 */
namespace PHPSTORM_META {
    override(\Doctrine\ORM\EntityManager::find(0), map([
        '' => '@',
    ]));
    override(\Interop\Container\ContainerInterface::get(0), map([
        '' => '@',
        // custom mappings
        'doctrine.entitymanager.orm_default' => \Doctrine\ORM\EntityManager::class,
        'doctrine.connection.orm_default' => \Doctrine\DBAL\Connection::class,
        'Logger' => Logging\Logger::class,
        // default ZF services
        'Application' => Zend\Mvc\ApplicationInterface::class,
        'ControllerManager' => Zend\Mvc\Controller\ControllerManager::class,
        'HttpRouter' => Zend\Mvc\Router\Http\TreeRouteStack::class,
        'ValidatorManager' => \Zend\Validator\ValidatorPluginManager::class,
        'ViewRenderer' => Zend\View\Renderer\RendererInterface::class,
    ]));
}
