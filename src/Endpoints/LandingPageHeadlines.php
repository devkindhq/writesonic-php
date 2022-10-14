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
    public const ENDPOINT = '/v1/business/content/landing-page-headlines';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $product_name, string $product_description)
    {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
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
