<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Emails from WriteSonic
 *
 *
 * <b> Professional-looking emails that help you engage leads and customers. </b>
 */
final class Emails extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/emails';

    /** @var string */
    protected string $key_points;

    function __construct(string $key_points)
    {
        $this->key_points = $key_points;
    }

    /**
     * Accessor key_points attribute
     *
     * @return string
     */
    public function getKeyPoints(): string
    {
        return $this->key_points;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "key_points" => $this->getKeyPoints(),
        ]);
    }
}