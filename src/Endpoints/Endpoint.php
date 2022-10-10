<?php

namespace Devkind\WritesonicPhp\Endpoints;

use Devkind\WritesonicPhp\Endpoints;
use InvalidArgumentException;
use Devkind\WritesonicPhp\WritesonicPhp;


/**
 * Class Endpoint.
 *
 * @mixin WritesonicPhp
 *
 * @property string endpoint
 * @property array ids
 */
class Endpoint implements Endpoints
{

    /** @var string $language */
    protected $language = 'en';

    /** @var string $engine */
    protected $engine = 'economy';


    /** @var WritesonicPhp $client */
    protected $client;

    /**
     * Endpoint constructor.
     *
     * @param WritesonicPhp $client
     */
    public function __construct(WritesonicPhp $client)
    {
        $this->client = $client;
    }

    /**
     * Set our endpoint by accessing it via a property.
     *
     * @param string $property
     *
     * @return $this
     */
    public function __get($property)
    {
        return $this->$property ?? $this->client->__get($property);
    }

    /**
     * Handle dynamic method calls into the model.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return $method();
        }

        if (in_array($method, array_keys(static::ENDPOINTS))) {
            if ($parameters === []) {
                throw new InvalidArgumentException('Calling ' . $method . ' from ' . $this->client->api . ' requires an id');
            }

            return $this->client->$method(...$parameters);
        }

        return $this->client->$method(...$parameters);
    }

    /**
     * Get the value of language
     */
    public function generate($parameters)
    {

        $request =   $this->client->request(
            'POST',
            '?language=' . $this->getLanguage() . '&engine=' . $this->getEngine(),
            ['form_params' =>  $parameters]
        );



        $data = json_decode($request->getBody()->getContents(), true);
        return  $data;
    }


    /**
     * Get the value of language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Get the value of engine
     */
    public function getEngine()
    {
        return $this->engine;
    }
}
