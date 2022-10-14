<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Facebook Ads from WriteSonic
 *
 *
 * <b> Facebook ad copies that make your ads truly stand out. </b>
 */
final class FacebookAds extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/facebook-ads';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $occasion;

    /** @var string */
    protected string $promotion;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $product_name, string $product_description, string $occasion, string $promotion)
    {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->occasion = $occasion;
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
     * Accessor occasion attribute
     *
     * @return string
     */
    public function getOccasion(): string
    {
        return $this->occasion;
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
            "occasion" => $this->getOccasion(),
            "promotion" => $this->getPromotion(),
        ]);
    }
}
