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
    public const ENDPOINT = '/v1/business/content/real-estate-listing';

    public const PARAMS = [
        'type',
        'price',
        'location',
        'floor_area',
        'bedroom',
        'kitchen',
        'bathroom',
        'additional_features',
    ];

    /** @var array */
    protected array $payload =[];

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
        $this->request(self::ENDPOINT, $this->toString());
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setType(string $value): self
    {
        $this->type = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPrice(string $value): self
    {
        $this->price = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setLocation(string $value): self
    {
        $this->location = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setFloorArea(string $value): self
    {
        $this->floor_area = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setBedroom(string $value): self
    {
        $this->bedroom = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setKitchen(string $value): self
    {
        $this->kitchen = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setBathroom(string $value): self
    {
        $this->bathroom = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setAdditionalFeatures(string $value): self
    {
        $this->additional_features = $value;
        return $this;
    }

    /**
     * Accessor for Payload attribute
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPayload(array $value): self
    {
        $this->payload = $value;
        return $this;
    }

    /**
     * Accessor for endpoint attribute
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * Accessor for getting Required Parameters attribute
     *
     * @return array
     */
    public function getRequiredParameters(): array
    {
        return self::PARAMS;
    }

    /**
     * Array representation of this endpoint
     *
     * @return array
     */
    public function toArray(): array
    {
        try {
            return [
                 "type" => $this->getType(),
                 "price" => $this->getPrice(),
                 "location" => $this->getLocation(),
                 "floor_area" => $this->getFloorArea(),
                 "bedroom" => $this->getBedroom(),
                 "kitchen" => $this->getKitchen(),
                 "bathroom" => $this->getBathroom(),
                 "additional_features" => $this->getAdditionalFeatures(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
