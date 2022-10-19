<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Linkedin Posts from WriteSonic
 *
 *
 * <b> LinkedIn posts that can be used as status updates or promoted to get more engagement. </b>
 */
final class LinkedinPosts extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/linkedin-posts';
    public const PARAMS = ['product_name', 'product_description', 'target_keywords'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $target_keywords;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $product_name, string $product_description, string $target_keywords)
    {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->target_keywords = $target_keywords;
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
     * Accessor target_keywords attribute
     *
     * @return string
     */
    public function getTargetKeywords(): string
    {
        return $this->target_keywords;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setTargetKeywords(string $value): self
    {
        $this->target_keywords = $value;
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
                 "target_keywords" => $this->getTargetKeywords(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
