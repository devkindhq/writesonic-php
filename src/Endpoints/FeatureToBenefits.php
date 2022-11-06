<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Feature To Benefits from WriteSonic
 *
 *
 * <b> Unique content that focuses on features to emphasize benefits of your product or service. </b>
 */
final class FeatureToBenefits extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/feature-to-benefits';
    public const PARAMS = ['product_description', 'feature'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $feature;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $product_description, string $feature)
    {
        $this->product_description = $product_description;
        $this->feature = $feature;
        return $this->request(self::ENDPOINT, $this->toString());
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
     * Accessor feature attribute
     *
     * @return string
     */
    public function getFeature(): string
    {
        return $this->feature;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setFeature(string $value): self
    {
        $this->feature = $value;
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
                 "feature" => $this->getFeature(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
