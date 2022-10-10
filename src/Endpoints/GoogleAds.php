<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Google Ads from WriteSonic
 *
 *
 * <b> Quality ads that rank in the search results and drive more traffic. </b>
 */
final class GoogleAds extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/google-ads';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $search_term;

    function __construct(string $product_name, string $product_description, string $search_term)
    {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->search_term = $search_term;
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
        ]);
    }
}
