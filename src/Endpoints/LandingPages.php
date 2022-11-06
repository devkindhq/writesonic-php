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
    public const PARAMS = ['product_name', 'product_description', 'feature_1', 'feature_2', 'feature_3'];

    /** @var array */
    protected array $payload =[];

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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setProductName(string $value): self
    {
        $this->product_name = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setProductDescription(string $value): self
    {
        $this->product_description = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setFeature1(string $value): self
    {
        $this->feature_1 = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setFeature2(string $value): self
    {
        $this->feature_2 = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setFeature3(string $value): self
    {
        $this->feature_3 = $value;
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
                 "product_name" => $this->getProductName(),
                 "product_description" => $this->getProductDescription(),
                 "feature_1" => $this->getFeature1(),
                 "feature_2" => $this->getFeature2(),
                 "feature_3" => $this->getFeature3(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
