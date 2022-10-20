<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Review Generator from WriteSonic
 *
 *
 * <b> Automatically generate personalized high-quality reviews for any product or service. </b>
 */
final class ReviewGenerator extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/review-generator';
    public const PARAMS = ['product_name', 'experience', 'description'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $experience;

    /** @var string */
    protected string $description;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $product_name, string $experience, string $description)
    {
        $this->product_name = $product_name;
        $this->experience = $experience;
        $this->description = $description;
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
     * Accessor experience attribute
     *
     * @return string
     */
    public function getExperience(): string
    {
        return $this->experience;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setExperience(string $value): self
    {
        $this->experience = $value;
        return $this;
    }

    /**
     * Accessor description attribute
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;
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
                 "experience" => $this->getExperience(),
                 "description" => $this->getDescription(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
