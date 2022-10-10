<?php

namespace Devkind\WritesonicPhp;

use GuzzleHttp\Client;
use InvalidArgumentException;
use Devkind\WritesonicPhp\Util;
use Devkind\WritesonicPhp\Endpoints\Endpoint;


class WritesonicPhp extends Client implements Endpoints
{

    public const HOST = 'https://api.writesonic.com/';


    /** @var string $base */
    protected $base = '';

    /** @var string $root */
    protected $root = '';

    /**
     * Machship constructor.
     *
     * @param string $token
     * @param string $root
     */
    public function __construct($token, $base =  'v1')
    {
        $this->root = Util::normalizeDomain(static::HOST);
        $base_uri = "https://{$this->root}/{$base}";

        $this->setBase($base);
        parent::__construct([
            'base_uri' => $base_uri,
            'headers' => [
                'x-api-key' => $token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json; charset=utf-8;',
            ],
        ]);
    }

    /**
     * @param string $root
     * @param string $token
     *
     * @return Machship
     */
    public static function make($token, $base = 'v1')
    {
        return new static($token, $base);
    }

    /**
     * @return string
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param string|null $base
     *
     * @return $this
     */
    public function setBase($base = null)
    {
        if (is_null($base)) {
            $this->base = '';
            return $this;
        }

        $this->base = $base;

        return $this;
    }

    /**
     * Set our endpoint by accessing it like a property.
     *
     * @param string $endpoint
     *
     * @return $this|Endpoint
     * @throws \Exception
     */
    public function __get($endpoint)
    {
        if (array_key_exists($endpoint, static::ENDPOINTS)) {
            $this->api = $endpoint;
        }

        return new Endpoint($this);
    }

    /**
     * Set ids for one uri() call.
     *
     * @param string $method
     * @param array  $parameters
     *
     *
     * @return $this
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return $method();
        }
        return $this->__get($method);
    }


    /**
     * Get the value of root
     */
    public function getRoot()
    {
        return $this->root;
    }
}
