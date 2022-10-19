<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Facebook Ads from WriteSonic
 *
 *
 * <b> Facebook ad copies that make your ads truly stand out. </b>
 */
final class FacebookAds extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/facebook-ads';
    public const PARAMS = ['product_name', 'product_description', 'occasion', 'promotion'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $occasion;

    /** @var string */
    protected string $promotion;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $product_name, string $product_description, string $occasion, string $promotion)
    {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->occasion = $occasion;
        $this->promotion = $promotion;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor product_name attribute
     *
     * @return string
     */
    public function getProductName(): string
    {
        return $this->product_name;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setProductName(string $value): self
    {
        $this->product_name = $value;
        return $this;
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
     * Accessor occasion attribute
     *
     * @return string
     */
    public function getOccasion(): string
    {
        return $this->occasion;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setOccasion(string $value): self
    {
        $this->occasion = $value;
        return $this;
    }

    /**
     * Accessor promotion attribute
     *
     * @return string
     */
    public function getPromotion(): string
    {
        return $this->promotion;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPromotion(string $value): self
    {
        $this->promotion = $value;
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
                 "product_name" => $this->getProductName(),
                 "product_description" => $this->getProductDescription(),
                 "occasion" => $this->getOccasion(),
                 "promotion" => $this->getPromotion(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
