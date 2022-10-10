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

    function __construct(string $product, string $description)
    {
        $this->product = $product;
        $this->description = $description;
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
