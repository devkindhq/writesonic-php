<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Youtube Hooks from WriteSonic
 *
 *
 * <b> Generate catchy Youtube hooks to make your video stand out.  </b>
 */
final class YoutubeHooks extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/youtube-hooks';

    /** @var string */
    protected string $video_title;

    /** @var string */
    protected string $tone;

    function __construct(string $video_title, string $tone)
    {
        $this->video_title = $video_title;
        $this->tone = $tone;
    }

    /**
     * Accessor video_title attribute
     *
     * @return string
     */
    public function getVideoTitle(): string
    {
        return $this->video_title;
    }

    /**
     * Accessor tone attribute
     *
     * @return string
     */
    public function getTone(): string
    {
        return $this->tone;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "video_title" => $this->getVideoTitle(),
            "tone" => $this->getTone(),
        ]);
    }
}
