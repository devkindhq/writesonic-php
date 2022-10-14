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
    public const ENDPOINT = '/v1/business/content/tiktok-hooks';

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
