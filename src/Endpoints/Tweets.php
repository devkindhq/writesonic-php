<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Tweets from WriteSonic
 *
 *
 * <b> Generate tweets using AI, that are relevant and on-trend. </b>
 */
final class Tweets extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/tweets';

    /** @var string */
    protected string $topic;

    function __construct(string $topic)
    {
        $this->topic = $topic;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "topic" => $this->getTopic(),
        ]);
    }
}
