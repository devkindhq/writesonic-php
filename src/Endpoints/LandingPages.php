<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Landing Pages from WriteSonic
 *
 *
 * <b> Tailored high-converting landing page copies that drive more leads, sales, and signups. </b>
 */
final class LandingPages extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/landing-pages';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $feature_1;

    /** @var string */
    protected string $feature_2;

    /** @var string */
    protected string $feature_3;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(
        string $product_name,
        string $product_description,
        string $feature_1,
        string $feature_2,
        string $feature_3,
    ) {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->feature_1 = $feature_1;
        $this->feature_2 = $feature_2;
        $this->feature_3 = $feature_3;
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
     * Accessor feature_1 attribute
     *
     * @return string
     */
    public function getFeature1(): string
    {
        return $this->feature_1;
    }

    /**
     * Accessor feature_2 attribute
     *
     * @return string
     */
    public function getFeature2(): string
    {
        return $this->feature_2;
    }

    /**
     * Accessor feature_3 attribute
     *
     * @return string
     */
    public function getFeature3(): string
    {
        return $this->feature_3;
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
            "feature_1" => $this->getFeature1(),
            "feature_2" => $this->getFeature2(),
            "feature_3" => $this->getFeature3(),
        ]);
    }
}
