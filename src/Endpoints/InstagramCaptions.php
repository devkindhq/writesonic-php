<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Instagram Captions from WriteSonic
 *
 *
 * <b> Captions that turn your images into attention-grabbing Instagram posts. </b>
 */
final class InstagramCaptions extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/instagram-captions';

    /** @var string */
    protected string $description;

    /** @var string */
    protected string $tone_of_voice;

    function __construct(string $description, string $tone_of_voice)
    {
        $this->description = $description;
        $this->tone_of_voice = $tone_of_voice;
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
     * Accessor tone_of_voice attribute
     *
     * @return string
     */
    public function getToneOfVoice(): string
    {
        return $this->tone_of_voice;
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
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
