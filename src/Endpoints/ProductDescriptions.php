<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Product Descriptions from WriteSonic
 *
 *
 * <b> Authentic product descriptions that will compel, inspire, and influence. </b>
 */
final class ProductDescriptions extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/product-descriptions';

    public const PARAMS = [
        'product_name',
        'product_characteristics',
        'primary_keyword',
        'secondary_keyword',
        'tone_of_voice',
    ];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_characteristics;

    /** @var string */
    protected string $primary_keyword;

    /** @var string */
    protected string $secondary_keyword;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(
        string $product_name,
        string $product_characteristics,
        string $primary_keyword,
        string $secondary_keyword,
        string $tone_of_voice,
    ) {
        $this->product_name = $product_name;
        $this->product_characteristics = $product_characteristics;
        $this->primary_keyword = $primary_keyword;
        $this->secondary_keyword = $secondary_keyword;
        $this->tone_of_voice = $tone_of_voice;
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
     * Accessor product_characteristics attribute
     *
     * @return string
     */
    public function getProductCharacteristics(): string
    {
        return $this->product_characteristics;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setProductCharacteristics(string $value): self
    {
        $this->product_characteristics = $value;
        return $this;
    }

    /**
     * Accessor primary_keyword attribute
     *
     * @return string
     */
    public function getPrimaryKeyword(): string
    {
        return $this->primary_keyword;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPrimaryKeyword(string $value): self
    {
        $this->primary_keyword = $value;
        return $this;
    }

    /**
     * Accessor secondary_keyword attribute
     *
     * @return string
     */
    public function getSecondaryKeyword(): string
    {
        return $this->secondary_keyword;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setSecondaryKeyword(string $value): self
    {
        $this->secondary_keyword = $value;
        return $this;
    }

    /**
     * Accessor tone_of_voice attribute
     *
     * @return string
     */
    public function getToneOfVoice(): string
    {
        return $this->tone_of_voice;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setToneOfVoice(string $value): self
    {
        $this->tone_of_voice = $value;
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
                 "product_characteristics" => $this->getProductCharacteristics(),
                 "primary_keyword" => $this->getPrimaryKeyword(),
                 "secondary_keyword" => $this->getSecondaryKeyword(),
                 "tone_of_voice" => $this->getToneOfVoice(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
