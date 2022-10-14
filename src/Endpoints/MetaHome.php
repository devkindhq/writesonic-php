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
     *
     * @return string
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
            "primary_keyword" => $this->getPrimaryKeyword(),
        ]);
    }
}
