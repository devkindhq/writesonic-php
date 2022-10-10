<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Youtube Ideas from WriteSonic
 *
 *
 * <b> Ready-made product video campaign ideas for you to use on YouTube. </b>
 */
final class YoutubeIdeas extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/youtube-ideas';

    /** @var string */
    protected string $video_topic;

    /** @var string */
    protected string $search_term;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $video_topic, string $search_term, string $tone_of_voice)
    {
        $this->video_topic = $video_topic;
        $this->search_term = $search_term;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor video_topic attribute
     *
     * @return string
     */
    public function getVideoTopic(): string
    {
        return $this->video_topic;
    }

    /**
     * Accessor search_term attribute
     *
     * @return string
     */
    public function getSearchTerm(): string
    {
        return $this->search_term;
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
            "video_topic" => $this->getVideoTopic(),
            "search_term" => $this->getSearchTerm(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
