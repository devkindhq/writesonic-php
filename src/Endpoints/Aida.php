<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Aida from WriteSonic
 *
 *
 * <b> Tried and tested formula of Attention, Interest, Desire, Action that is proven to convert. </b>
 */
final class Aida extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/aida';
    public const PARAMS = ['product_description'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $product_description;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $product_description)
    {
        $this->product_description = $product_description;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor product_description attribute
     *
     * @return string
     */
    public function getProductDescription(): string
    {
        return $this->product_description;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setProductDescription(string $value): self
    {
        $this->product_description = $value;
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
                 "product_description" => $this->getProductDescription(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
