<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Product Descriptions from WriteSonic
 *
 *
 * <b> Authentic product descriptions that will compel, inspire, and influence. </b>
 */
final class ProductDescriptions extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/product-descriptions';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $product_characteristics;

    /** @var string */
    protected string $primary_keyword;

    /** @var string */
    protected string $secondary_keyword;

    /** @var string */
    protected string $tone_of_voice;

    function __construct(
        string $product_name,
        string $product_characteristics,
        string $primary_keyword,
        string $secondary_keyword,
        string $tone_of_voice,
    ) {
        $this->product_name = $product_name;
        $this->product_characteristics = $product_characteristics;
        $this->primary_keyword = $primary_keyword;
        $this->secondary_keyword = $secondary_keyword;
        $this->tone_of_voice = $tone_of_voice;
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
     * Accessor product_characteristics attribute
     *
     * @return string
     */
    public function getProductCharacteristics(): string
    {
        return $this->product_characteristics;
    }

    /**
     * Accessor primary_keyword attribute
     *
     * @return string
     */
    public function getPrimaryKeyword(): string
    {
        return $this->primary_keyword;
    }

    /**
     * Accessor secondary_keyword attribute
     *
     * @return string
     */
    public function getSecondaryKeyword(): string
    {
        return $this->secondary_keyword;
    }

    /**
     * Accessor tone_of_voice attribute
     *
     * @return string
     */
    public function getToneOfVoice(): string
    {
        return $this->tone_of_voice;
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
            "product_characteristics" => $this->getProductCharacteristics(),
            "primary_keyword" => $this->getPrimaryKeyword(),
            "secondary_keyword" => $this->getSecondaryKeyword(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
