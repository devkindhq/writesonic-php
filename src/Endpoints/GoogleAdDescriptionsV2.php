<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Google Adv Descriptions V2 from WriteSonic
 *
 *
 * <b> The best-performing Google ad copy converts visitors into customers.. </b>
 */
final class GoogleAdDescriptionsV2 extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/google-ad-descriptions-v2';
    public const PARAMS = ['name', 'details'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $name;

    /** @var string */
    protected string $details;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $name, string $details)
    {
        $this->name = $name;
        $this->details = $details;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor name attribute
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setName(string $value): self
    {
        $this->name = $value;
        return $this;
    }

    /**
     * Accessor details attribute
     *
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setDetails(string $value): self
    {
        $this->details = $value;
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
                 "name" => $this->getName(),
                 "details" => $this->getDetails(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
