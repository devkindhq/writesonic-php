<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Call To Action from WriteSonic
 *
 *
 * <b> Eye-catching calls to action that will encourage conversions and boost your sales. </b>
 */
final class CallToAction extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/call-to-action';

    /** @var string */
    protected string $description;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $description)
    {
        $this->description = $description;
        return $this->request(self::ENDPOINT, $this->toString());
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
            "description" => $this->getDescription(),
        ]);
    }
}
