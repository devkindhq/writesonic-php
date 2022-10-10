<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Analogies from WriteSonic
 *
 *
 * <b> Unique analogies that make your sales pitch more memorable and engaging. </b>
 */
final class Analogies extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/analogies';

    /** @var string */
    protected string $content;

    function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * Accessor content attribute
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "content" => $this->getContent(),
        ]);
    }
}
