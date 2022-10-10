<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Youtube Intros V2 from WriteSonic
 *
 *
 * <b> Catchy intros that will get viewers hooked before they even start watching. </b>
 */
final class YoutubeIntrosV2 extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/youtube-intros-v2';

    /** @var string */
    protected string $video_title;

    /** @var string */
    protected string $hook;

    /** @var string */
    protected string $tone;

    function __construct(string $video_title, string $hook, string $tone)
    {
        $this->video_title = $video_title;
        $this->hook = $hook;
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
     * Accessor hook attribute
     *
     * @return string
     */
    public function getHook(): string
    {
        return $this->hook;
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
            "hook" => $this->getHook(),
            "tone" => $this->getTone(),
        ]);
    }
}
