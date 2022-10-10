<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Linkedin Ads from WriteSonic
 *
 *
 * <b> Eye-catching ads that will not only attract the right audience but also drive them to your lead magnet. </b>
 */
final class LinkedinAds extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/linkedin-ads';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $target_keywords;

    /** @var string */
    protected string $promotion;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(
        string $product_name,
        string $product_description,
        string $target_keywords,
        string $promotion,
    ) {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->target_keywords = $target_keywords;
        $this->promotion = $promotion;
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
