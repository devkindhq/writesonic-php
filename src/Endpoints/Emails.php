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
    public const PARAMS = ['key_points'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $key_points;

    /**
     * Generates the content on the basis of required parameters.
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setKeyPoints(string $value): self
    {
        $this->key_points = $value;
        return $this;
    }

    /**
     * Accessor for Payload attribute
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPayload(array $value): self
    {
        $this->payload = $value;
        return $this;
    }

    /**
     * Accessor for endpoint attribute
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * Accessor for getting Required Parameters attribute
     *
     * @return array
     */
    public function getRequiredParameters(): array
    {
        return self::PARAMS;
    }

    /**
     * Array representation of this endpoint
     *
     * @return array
     */
    public function toArray(): array
    {
        try {
            return [
                 "key_points" => $this->getKeyPoints(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
