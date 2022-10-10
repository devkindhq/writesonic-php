<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Real Estate Listing from WriteSonic
 *
 *
 * <b> Copy that makes your real-estate listings stand out from the crowd. </b>
 */
final class RealEstateListing extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/real-estate-listing';

    /** @var string */
    protected string $type;

    /** @var string */
    protected string $price;

    /** @var string */
    protected string $location;

    /** @var string */
    protected string $floor_area;

    /** @var string */
    protected string $bedroom;

    /** @var string */
    protected string $kitchen;

    /** @var string */
    protected string $bathroom;

    /** @var string */
    protected string $additional_features;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(
        string $type,
        string $price,
        string $location,
        string $floor_area,
        string $bedroom,
        string $kitchen,
        string $bathroom,
        string $additional_features,
    ) {
        $this->type = $type;
        $this->price = $price;
        $this->location = $location;
        $this->floor_area = $floor_area;
        $this->bedroom = $bedroom;
        $this->kitchen = $kitchen;
        $this->bathroom = $bathroom;
        $this->additional_features = $additional_features;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor type attribute
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Accessor price attribute
     *
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * Accessor location attribute
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Accessor floor_area attribute
     *
     * @return string
     */
    public function getFloorArea(): string
    {
        return $this->floor_area;
    }

    /**
     * Accessor bedroom attribute
     *
     * @return string
     */
    public function getBedroom(): string
    {
        return $this->bedroom;
    }

    /**
     * Accessor kitchen attribute
     *
     * @return string
     */
    public function getKitchen(): string
    {
        return $this->kitchen;
    }

    /**
     * Accessor bathroom attribute
     *
     * @return string
     */
    public function getBathroom(): string
    {
        return $this->bathroom;
    }

    /**
     * Accessor additional_features attribute
     *
     * @return string
     */
    public function getAdditionalFeatures(): string
    {
        return $this->additional_features;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "type" => $this->getType(),
            "price" => $this->getPrice(),
            "location" => $this->getLocation(),
            "floor_area" => $this->getFloorArea(),
            "bedroom" => $this->getBedroom(),
            "kitchen" => $this->getKitchen(),
            "bathroom" => $this->getBathroom(),
            "additional_features" => $this->getAdditionalFeatures(),
        ]);
    }
}
