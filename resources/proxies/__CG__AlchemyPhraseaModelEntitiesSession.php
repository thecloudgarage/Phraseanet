<?php

namespace Alchemy\Phrasea\Model\Proxies\__CG__\Alchemy\Phrasea\Model\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Session extends \Alchemy\Phrasea\Model\Entities\Session implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'id', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'user', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'user_agent', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'ip_address', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'platform', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'browser_name', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'browser_version', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'screen_width', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'screen_height', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'token', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'nonce', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'created', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'updated', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'modules'];
        }

        return ['__isInitialized__', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'id', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'user', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'user_agent', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'ip_address', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'platform', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'browser_name', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'browser_version', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'screen_width', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'screen_height', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'token', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'nonce', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'created', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'updated', '' . "\0" . 'Alchemy\\Phrasea\\Model\\Entities\\Session' . "\0" . 'modules'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Session $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Alchemy\Phrasea\Model\Entities\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserAgent($userAgent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserAgent', [$userAgent]);

        return parent::setUserAgent($userAgent);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserAgent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserAgent', []);

        return parent::getUserAgent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress($ipAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', [$ipAddress]);

        return parent::setIpAddress($ipAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', []);

        return parent::getIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlatform($platform)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlatform', [$platform]);

        return parent::setPlatform($platform);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlatform()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlatform', []);

        return parent::getPlatform();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrowserName($browserName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrowserName', [$browserName]);

        return parent::setBrowserName($browserName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrowserName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrowserName', []);

        return parent::getBrowserName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrowserVersion($browserVersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrowserVersion', [$browserVersion]);

        return parent::setBrowserVersion($browserVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrowserVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrowserVersion', []);

        return parent::getBrowserVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setScreenWidth($screenWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScreenWidth', [$screenWidth]);

        return parent::setScreenWidth($screenWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getScreenWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScreenWidth', []);

        return parent::getScreenWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setScreenHeight($screenHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScreenHeight', [$screenHeight]);

        return parent::setScreenHeight($screenHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getScreenHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScreenHeight', []);

        return parent::getScreenHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setNonce($nonce)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNonce', [$nonce]);

        return parent::setNonce($nonce);
    }

    /**
     * {@inheritDoc}
     */
    public function getNonce()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNonce', []);

        return parent::getNonce();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated(\DateTime $updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function addModule(\Alchemy\Phrasea\Model\Entities\SessionModule $modules)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addModule', [$modules]);

        return parent::addModule($modules);
    }

    /**
     * {@inheritDoc}
     */
    public function removeModule(\Alchemy\Phrasea\Model\Entities\SessionModule $modules)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeModule', [$modules]);

        return parent::removeModule($modules);
    }

    /**
     * {@inheritDoc}
     */
    public function getModules()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModules', []);

        return parent::getModules();
    }

    /**
     * {@inheritDoc}
     */
    public function getModuleById($moduleId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModuleById', [$moduleId]);

        return parent::getModuleById($moduleId);
    }

    /**
     * {@inheritDoc}
     */
    public function hasModuleId($moduleId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasModuleId', [$moduleId]);

        return parent::hasModuleId($moduleId);
    }

}
