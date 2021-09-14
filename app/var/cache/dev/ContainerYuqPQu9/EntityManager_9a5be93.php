<?php

namespace ContainerYuqPQu9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder25f2f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4c711 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties197d1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getConnection', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getMetadataFactory', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getExpressionBuilder', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'beginTransaction', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getCache', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'transactional', array('func' => $func), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->transactional($func);
    }

    public function commit()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'commit', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->commit();
    }

    public function rollback()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'rollback', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getClassMetadata', array('className' => $className), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'createQuery', array('dql' => $dql), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'createNamedQuery', array('name' => $name), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'createQueryBuilder', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'flush', array('entity' => $entity), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'clear', array('entityName' => $entityName), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->clear($entityName);
    }

    public function close()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'close', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->close();
    }

    public function persist($entity)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'persist', array('entity' => $entity), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'remove', array('entity' => $entity), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'refresh', array('entity' => $entity), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'detach', array('entity' => $entity), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'merge', array('entity' => $entity), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'contains', array('entity' => $entity), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getEventManager', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getConfiguration', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'isOpen', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getUnitOfWork', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getProxyFactory', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'initializeObject', array('obj' => $obj), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'getFilters', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'isFiltersStateClean', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'hasFilters', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return $this->valueHolder25f2f->hasFilters();
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

        $instance->initializer4c711 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder25f2f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder25f2f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder25f2f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, '__get', ['name' => $name], $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        if (isset(self::$publicProperties197d1[$name])) {
            return $this->valueHolder25f2f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25f2f;

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

        $targetObject = $this->valueHolder25f2f;
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
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25f2f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder25f2f;
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
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, '__isset', array('name' => $name), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25f2f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder25f2f;
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
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, '__unset', array('name' => $name), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25f2f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder25f2f;
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
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, '__clone', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        $this->valueHolder25f2f = clone $this->valueHolder25f2f;
    }

    public function __sleep()
    {
        $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, '__sleep', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;

        return array('valueHolder25f2f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c711 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c711;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4c711 && ($this->initializer4c711->__invoke($valueHolder25f2f, $this, 'initializeProxy', array(), $this->initializer4c711) || 1) && $this->valueHolder25f2f = $valueHolder25f2f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder25f2f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder25f2f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
