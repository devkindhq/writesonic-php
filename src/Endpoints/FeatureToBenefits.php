<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Feature To Benefits from WriteSonic
 *
 *
 * <b> Unique content that focuses on features to emphasize benefits of your product or service. </b>
 */
final class FeatureToBenefits extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/feature-to-benefits';

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $feature;

    function __construct(string $product_description, string $feature)
    {
        $this->product_description = $product_description;
        $this->feature = $feature;
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
     * Accessor feature attribute
     *
     * @return string
     */
    public function getFeature(): string
    {
        return $this->feature;
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
            "feature" => $this->getFeature(),
        ]);
    }
}
