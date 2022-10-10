<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Landing Page Headlines from WriteSonic
 *
 *
 * <b> Unique and catchy headlines that are perfect for your product or service. </b>
 */
final class LandingPageHeadlines extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/landing-page-headlines';

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
