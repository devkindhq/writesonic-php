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
    public const ENDPOINT = '/v1/business/content/tweets';

    /** @var string */
    protected string $topic;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $topic)
    {
        $this->topic = $topic;
        return $this->request(self::ENDPOINT, $this->toString());
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
