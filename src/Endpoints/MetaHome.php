<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Seo Meta Tags Home from WriteSonic
 *
 *
 * <b> A set of optimized meta title and meta description tags that will boost your search rankings for your home page. </b>
 */
final class MetaHome extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/meta-home';
    public const PARAMS = ['product_name', 'product_description', 'search_term', 'primary_keyword'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $search_term;

    /** @var string */
    protected string $primary_keyword;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(
        string $product_name,
        string $product_description,
        string $search_term,
        string $primary_keyword,
    ) {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->search_term = $search_term;
        $this->primary_keyword = $primary_keyword;
        return $this->request(self::ENDPOINT, $this->toString());
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
     * Accessor search_term attribute
     *
     * @return string
     */
    public function getSearchTerm(): string
    {
        return $this->search_term;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setSearchTerm(string $value): self
    {
        $this->search_term = $value;
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
                 "search_term" => $this->getSearchTerm(),
                 "primary_keyword" => $this->getPrimaryKeyword(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
