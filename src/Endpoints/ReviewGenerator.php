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
    final public const ENDPOINT = '/v1/business/content/review-generator';

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $experience;

    /** @var string */
    protected string $description;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
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
     * Accessor experience attribute
     *
     * @return string
     */
    public function getExperience(): string
    {
        return $this->experience;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "product_name" => $this->getProductName(),
            "experience" => $this->getExperience(),
            "description" => $this->getDescription(),
        ]);
    }
}
