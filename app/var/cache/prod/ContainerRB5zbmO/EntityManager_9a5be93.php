<?php

namespace ContainerRB5zbmO;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2409c = null;
    private $initializer09d3f = null;
    private static $publicProperties8e488 = [
        
    ];
    public function getConnection()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getConnection', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getMetadataFactory', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getExpressionBuilder', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'beginTransaction', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getCache', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'transactional', array('func' => $func), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->transactional($func);
    }
    public function commit()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'commit', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->commit();
    }
    public function rollback()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'rollback', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getClassMetadata', array('className' => $className), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'createQuery', array('dql' => $dql), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'createNamedQuery', array('name' => $name), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'createQueryBuilder', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'flush', array('entity' => $entity), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'clear', array('entityName' => $entityName), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->clear($entityName);
    }
    public function close()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'close', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->close();
    }
    public function persist($entity)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'persist', array('entity' => $entity), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'remove', array('entity' => $entity), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'refresh', array('entity' => $entity), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'detach', array('entity' => $entity), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'merge', array('entity' => $entity), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'contains', array('entity' => $entity), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getEventManager', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getConfiguration', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'isOpen', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getUnitOfWork', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getProxyFactory', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'initializeObject', array('obj' => $obj), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'getFilters', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'isFiltersStateClean', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'hasFilters', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return $this->valueHolder2409c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer09d3f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2409c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2409c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2409c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, '__get', ['name' => $name], $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        if (isset(self::$publicProperties8e488[$name])) {
            return $this->valueHolder2409c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2409c;
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
        $targetObject = $this->valueHolder2409c;
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
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2409c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2409c;
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
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, '__isset', array('name' => $name), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2409c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2409c;
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
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, '__unset', array('name' => $name), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2409c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2409c;
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
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, '__clone', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        $this->valueHolder2409c = clone $this->valueHolder2409c;
    }
    public function __sleep()
    {
        $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, '__sleep', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
        return array('valueHolder2409c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer09d3f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer09d3f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer09d3f && ($this->initializer09d3f->__invoke($valueHolder2409c, $this, 'initializeProxy', array(), $this->initializer09d3f) || 1) && $this->valueHolder2409c = $valueHolder2409c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2409c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2409c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
