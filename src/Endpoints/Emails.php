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
    public const ENDPOINT = '/v1/business/content/emails';

    /** @var string */
    protected string $key_points;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $key_points)
    {
        $this->key_points = $key_points;
        return $this->request(self::ENDPOINT, $this->toString());
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
