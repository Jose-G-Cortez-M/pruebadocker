<?php

namespace ContainerE52Ow6G;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb4a3e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9e776 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0f6f7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getConnection', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getMetadataFactory', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getExpressionBuilder', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'beginTransaction', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getCache', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'transactional', array('func' => $func), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->transactional($func);
    }

    public function commit()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'commit', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->commit();
    }

    public function rollback()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'rollback', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getClassMetadata', array('className' => $className), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'createQuery', array('dql' => $dql), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'createNamedQuery', array('name' => $name), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'createQueryBuilder', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'flush', array('entity' => $entity), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'clear', array('entityName' => $entityName), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->clear($entityName);
    }

    public function close()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'close', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->close();
    }

    public function persist($entity)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'persist', array('entity' => $entity), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'remove', array('entity' => $entity), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'refresh', array('entity' => $entity), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'detach', array('entity' => $entity), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'merge', array('entity' => $entity), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'contains', array('entity' => $entity), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getEventManager', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getConfiguration', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'isOpen', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getUnitOfWork', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getProxyFactory', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'initializeObject', array('obj' => $obj), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'getFilters', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'isFiltersStateClean', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'hasFilters', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return $this->valueHolderb4a3e->hasFilters();
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

        $instance->initializer9e776 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb4a3e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb4a3e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb4a3e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, '__get', ['name' => $name], $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        if (isset(self::$publicProperties0f6f7[$name])) {
            return $this->valueHolderb4a3e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4a3e;

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

        $targetObject = $this->valueHolderb4a3e;
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
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4a3e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb4a3e;
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
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, '__isset', array('name' => $name), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4a3e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb4a3e;
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
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, '__unset', array('name' => $name), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4a3e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb4a3e;
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
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, '__clone', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        $this->valueHolderb4a3e = clone $this->valueHolderb4a3e;
    }

    public function __sleep()
    {
        $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, '__sleep', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;

        return array('valueHolderb4a3e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9e776 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9e776;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9e776 && ($this->initializer9e776->__invoke($valueHolderb4a3e, $this, 'initializeProxy', array(), $this->initializer9e776) || 1) && $this->valueHolderb4a3e = $valueHolderb4a3e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb4a3e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb4a3e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
