<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Startup Ideas from WriteSonic
 *
 *
 * <b> Great startup ideas that you can get started on right away. </b>
 */
final class StartupIdeas extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/startup-ideas';
    public const PARAMS = [];

    /** @var array */
    protected array $payload =[];

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate()
    {
        $this->request(self::ENDPOINT, $this->toString());
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
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
