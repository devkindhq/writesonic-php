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
     *
     * @return string
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
     * Accessor primary_keyword attribute
     *
     * @return string
     */
    public function getPrimaryKeyword(): string
    {
        return $this->primary_keyword;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "product_name" => $this->getProductName(),
            "product_description" => $this->getProductDescription(),
            "primary_keyword" => $this->getPrimaryKeyword(),
            "secondary_keywords" => $this->getSecondaryKeywords(),
        ]);
    }
}
