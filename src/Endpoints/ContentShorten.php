<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Content Shorten from WriteSonic
 *
 *
 * <b> Short your content in a different voice and style to appeal to different readers. </b>
 */
final class ContentShorten extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/content-shorten';

    /** @var string */
    protected string $content_to_shorten;

    function __construct(string $content_to_shorten)
    {
        $this->content_to_shorten = $content_to_shorten;
    }

    /**
     * Accessor content_to_shorten attribute
     *
     * @return string
     */
    public function getContentToShorten(): string
    {
        return $this->content_to_shorten;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "content_to_shorten" => $this->getContentToShorten(),
        ]);
    }
}