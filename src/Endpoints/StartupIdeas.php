<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Startup Ideas from WriteSonic
 *
 *
 * <b> Great startup ideas that you can get started on right away. </b>
 */
final class StartupIdeas extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/startup-ideas';

    function __construct()
    {
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
        ]);
    }
}
