<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Sentence Expand from WriteSonic
 *
 *
 * <b> Expand short sentences into more descriptive and interesting ones. </b>
 */
final class SentenceExpand extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/sentence-expand';

    /** @var string */
    protected string $content_to_expand;

    /** @var string */
    protected string $tone_of_voice;

    function __construct(string $content_to_expand, string $tone_of_voice)
    {
        $this->content_to_expand = $content_to_expand;
        $this->tone_of_voice = $tone_of_voice;
    }

    /**
     * Accessor content_to_expand attribute
     *
     * @return string
     */
    public function getContentToExpand(): string
    {
        return $this->content_to_expand;
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
            "content_to_expand" => $this->getContentToExpand(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}