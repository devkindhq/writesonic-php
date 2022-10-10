<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Product Names from WriteSonic
 *
 *
 * <b> Catchy and meaningful names that fit your product or service. </b>
 */
final class ProductNames extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/product-names';

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $target_keywords;

    function __construct(string $product_description, string $target_keywords)
    {
        $this->product_description = $product_description;
        $this->target_keywords = $target_keywords;
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
     * Accessor target_keywords attribute
     *
     * @return string
     */
    public function getTargetKeywords(): string
    {
        return $this->target_keywords;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "product_description" => $this->getProductDescription(),
            "target_keywords" => $this->getTargetKeywords(),
        ]);
    }
}
