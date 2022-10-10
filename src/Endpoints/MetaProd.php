<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Seo Meta Tags Product from WriteSonic
 *
 *
 * <b> A set of optimized meta title and meta description tags that will boost your search rankings for your product page. </b>
 */
final class MetaProd extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/meta-prod';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $search_term;

    /** @var string */
    protected string $company_name;

    /** @var string */
    protected string $primary_keyword;

    function __construct(
        string $product_name,
        string $product_description,
        string $search_term,
        string $company_name,
        string $primary_keyword,
    ) {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->search_term = $search_term;
        $this->company_name = $company_name;
        $this->primary_keyword = $primary_keyword;
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
     * Accessor product_description attribute
     *
     * @return string
     */
    public function getProductDescription(): string
    {
        return $this->product_description;
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
     * Accessor company_name attribute
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->company_name;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "product_name" => $this->getProductName(),
            "product_description" => $this->getProductDescription(),
            "search_term" => $this->getSearchTerm(),
            "company_name" => $this->getCompanyName(),
            "primary_keyword" => $this->getPrimaryKeyword(),
        ]);
    }
}
