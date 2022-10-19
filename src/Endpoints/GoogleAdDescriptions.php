<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Google Ad Descriptions from WriteSonic
 *
 *
 * <b> Top-performing Google ad copy that converts visitors into customers. </b>
 */
final class GoogleAdDescriptions extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/google-ad-descriptions';
    public const PARAMS = ['product_name', 'product_description', 'primary_keyword', 'secondary_keywords'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $primary_keyword;

    /** @var string */
    protected string $secondary_keywords;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(
        string $product_name,
        string $product_description,
        string $primary_keyword,
        string $secondary_keywords,
    ) {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->primary_keyword = $primary_keyword;
        $this->secondary_keywords = $secondary_keywords;
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
     * Accessor secondary_keywords attribute
     *
     * @return string
     */
    public function getSecondaryKeywords(): string
    {
        return $this->secondary_keywords;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setSecondaryKeywords(string $value): self
    {
        $this->secondary_keywords = $value;
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
                 "primary_keyword" => $this->getPrimaryKeyword(),
                 "secondary_keywords" => $this->getSecondaryKeywords(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
