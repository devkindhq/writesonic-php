<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Aida from WriteSonic
 *
 *
 * <b> Tried and tested formula of Attention, Interest, Desire, Action that is proven to convert. </b>
 */
final class Aida extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/aida';

    /** @var string */
    protected string $product_description;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $product_description)
    {
        $this->product_description = $product_description;
        return $this->request(self::ENDPOINT, $this->toString());
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "product_description" => $this->getProductDescription(),
        ]);
    }
}
