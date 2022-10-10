<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Linkedin Ad Descriptions from WriteSonic
 *
 *
 * <b> Professional and eye-catching ad descriptions that will make your product shine. </b>
 */
final class LinkedinAdDescriptions extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/linkedin-ad-descriptions';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $target_keywords;

    /** @var string */
    protected string $promotion;

    function __construct(string $product_name, string $product_description, string $target_keywords, string $promotion)
    {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->target_keywords = $target_keywords;
        $this->promotion = $promotion;
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
     * Accessor target_keywords attribute
     *
     * @return string
     */
    public function getTargetKeywords(): string
    {
        return $this->target_keywords;
    }

    /**
     * Accessor promotion attribute
     *
     * @return string
     */
    public function getPromotion(): string
    {
        return $this->promotion;
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
            "target_keywords" => $this->getTargetKeywords(),
            "promotion" => $this->getPromotion(),
        ]);
    }
}
