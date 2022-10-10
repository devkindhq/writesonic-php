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

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate()
    {
        return $this->request(self::ENDPOINT, $this->toString());
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
