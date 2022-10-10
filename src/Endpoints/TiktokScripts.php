<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Tiktok Scripts from WriteSonic
 *
 *
 * <b> Video scripts that are ready to shoot and will make you go viral. </b>
 */
final class TiktokScripts extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/tiktok-scripts';

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
