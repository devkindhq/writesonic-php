<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Growth Ideas from WriteSonic
 *
 *
 * <b> High-impact growth tactics to help your business grow. </b>
 */
final class GrowthIdeas extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/growth-ideas';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_description;

    /** @var string */
    protected string $target_keywords;

    /** @var string */
    protected string $target_audience;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(
        string $product_name,
        string $product_description,
        string $target_keywords,
        string $target_audience,
    ) {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->target_keywords = $target_keywords;
        $this->target_audience = $target_audience;
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
     * Accessor target_audience attribute
     *
     * @return string
     */
    public function getTargetAudience(): string
    {
        return $this->target_audience;
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
            "target_audience" => $this->getTargetAudience(),
        ]);
    }
}
