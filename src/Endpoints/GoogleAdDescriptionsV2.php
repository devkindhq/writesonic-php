<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Google Adv Descriptions V2 from WriteSonic
 *
 *
 * <b> The best-performing Google ad copy converts visitors into customers.. </b>
 */
final class GoogleAdDescriptionsV2 extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/google-ad-descriptions-v2';

    /** @var string */
    protected string $name;

    /** @var string */
    protected string $details;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $name, string $details)
    {
        $this->name = $name;
        $this->details = $details;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor name attribute
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Accessor details attribute
     *
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "name" => $this->getName(),
            "details" => $this->getDetails(),
        ]);
    }
}
