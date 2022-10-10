<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Amazon Product Features from WriteSonic
 *
 *
 * <b> Advantages and features of your products that will make them irresistible to shoppers. </b>
 */
final class AmazonProductFeatures extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/amazon-product-features';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    function __construct(string $product_name, string $product_description)
    {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "product_name" => $this->getProductName(),
            "product_description" => $this->getProductDescription(),
        ]);
    }
}
