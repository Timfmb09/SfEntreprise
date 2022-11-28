<?php

namespace ContainerR1dbE4z;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa7be = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0432c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0eccc = [
        
    ];

    public function getConnection()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getConnection', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getMetadataFactory', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getExpressionBuilder', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'beginTransaction', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getCache', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'transactional', array('func' => $func), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'commit', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->commit();
    }

    public function rollback()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'rollback', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getClassMetadata', array('className' => $className), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'createQuery', array('dql' => $dql), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'createNamedQuery', array('name' => $name), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'createQueryBuilder', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'flush', array('entity' => $entity), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'clear', array('entityName' => $entityName), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->clear($entityName);
    }

    public function close()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'close', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->close();
    }

    public function persist($entity)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'persist', array('entity' => $entity), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'remove', array('entity' => $entity), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'refresh', array('entity' => $entity), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'detach', array('entity' => $entity), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'merge', array('entity' => $entity), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'contains', array('entity' => $entity), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getEventManager', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getConfiguration', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'isOpen', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getUnitOfWork', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getProxyFactory', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'initializeObject', array('obj' => $obj), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'getFilters', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'isFiltersStateClean', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'hasFilters', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return $this->valueHolderaa7be->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer0432c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderaa7be) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa7be = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa7be->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, '__get', ['name' => $name], $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        if (isset(self::$publicProperties0eccc[$name])) {
            return $this->valueHolderaa7be->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa7be;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa7be;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa7be;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa7be;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, '__isset', array('name' => $name), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa7be;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa7be;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, '__unset', array('name' => $name), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa7be;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa7be;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, '__clone', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        $this->valueHolderaa7be = clone $this->valueHolderaa7be;
    }

    public function __sleep()
    {
        $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, '__sleep', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;

        return array('valueHolderaa7be');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0432c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0432c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0432c && ($this->initializer0432c->__invoke($valueHolderaa7be, $this, 'initializeProxy', array(), $this->initializer0432c) || 1) && $this->valueHolderaa7be = $valueHolderaa7be;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa7be;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa7be;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
