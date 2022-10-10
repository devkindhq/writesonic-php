<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Subject Lines from WriteSonic
 *
 *
 * <b> Powerful email subject lines that increase open rates </b>
 */
final class SubjectLines extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/subject-lines';

    /** @var string */
    protected string $product;

    /** @var string */
    protected string $description;

    /**
    * Generates the content on the basis of required parameters.
 *
 * @return string
 */
    public function generate(string $product, string $description)
    {
        $this->product = $product;
        $this->description = $description;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor product attribute
     *
     * @return string
     */
    public function getProduct(): string
    {
        return $this->product;
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
            "product" => $this->getProduct(),
            "description" => $this->getDescription(),
        ]);
    }
}
