<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Lyrics Generator from WriteSonic
 *
 *
 * <b> Unique song lyrics that will be perfect for your next hit song. </b>
 */
final class LyricsGenerator extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/lyrics-generator';

    /** @var string */
    protected string $topic;

    /** @var string */
    protected string $genre;

    function __construct(string $topic, string $genre)
    {
        $this->topic = $topic;
        $this->genre = $genre;
    }

    /**
     * Accessor topic attribute
     *
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * Accessor genre attribute
     *
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "topic" => $this->getTopic(),
            "genre" => $this->getGenre(),
        ]);
    }
}
