<?php

namespace ContainerLvKHbzd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7bf59 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf1b29 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd6634 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getConnection', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getMetadataFactory', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getExpressionBuilder', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'beginTransaction', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getCache', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'transactional', array('func' => $func), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->transactional($func);
    }

    public function commit()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'commit', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->commit();
    }

    public function rollback()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'rollback', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getClassMetadata', array('className' => $className), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'createQuery', array('dql' => $dql), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'createNamedQuery', array('name' => $name), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'createQueryBuilder', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'flush', array('entity' => $entity), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'clear', array('entityName' => $entityName), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->clear($entityName);
    }

    public function close()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'close', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->close();
    }

    public function persist($entity)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'persist', array('entity' => $entity), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'remove', array('entity' => $entity), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'refresh', array('entity' => $entity), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'detach', array('entity' => $entity), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'merge', array('entity' => $entity), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'contains', array('entity' => $entity), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getEventManager', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getConfiguration', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'isOpen', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getUnitOfWork', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getProxyFactory', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'initializeObject', array('obj' => $obj), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'getFilters', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'isFiltersStateClean', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'hasFilters', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return $this->valueHolder7bf59->hasFilters();
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

        $instance->initializerf1b29 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7bf59) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7bf59 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7bf59->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, '__get', ['name' => $name], $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        if (isset(self::$publicPropertiesd6634[$name])) {
            return $this->valueHolder7bf59->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bf59;

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

        $targetObject = $this->valueHolder7bf59;
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
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bf59;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7bf59;
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
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, '__isset', array('name' => $name), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bf59;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7bf59;
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
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, '__unset', array('name' => $name), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bf59;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7bf59;
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
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, '__clone', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        $this->valueHolder7bf59 = clone $this->valueHolder7bf59;
    }

    public function __sleep()
    {
        $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, '__sleep', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;

        return array('valueHolder7bf59');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf1b29 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf1b29;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf1b29 && ($this->initializerf1b29->__invoke($valueHolder7bf59, $this, 'initializeProxy', array(), $this->initializerf1b29) || 1) && $this->valueHolder7bf59 = $valueHolder7bf59;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7bf59;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7bf59;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
