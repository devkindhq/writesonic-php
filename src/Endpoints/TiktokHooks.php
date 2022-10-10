<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Tiktok Hooks from WriteSonic
 *
 *
 * <b> Perfect TikTok video hook to get more views and followers. </b>
 */
final class TiktokHooks extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/tiktok-hooks';

    /** @var string */
    protected string $description;

    function __construct(string $description)
    {
        $this->description = $description;
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
