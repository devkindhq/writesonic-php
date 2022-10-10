<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Youtube Intros from WriteSonic
 *
 *
 * <b> Catchy intros that will get viewers hooked before they even start watching. </b>
 */
final class YoutubeIntros extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/youtube-intros';

    /** @var string */
    protected string $video_title;

    /** @var string */
    protected string $search_term;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $video_title, string $search_term, string $tone_of_voice)
    {
        $this->video_title = $video_title;
        $this->search_term = $search_term;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
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
            "video_title" => $this->getVideoTitle(),
            "search_term" => $this->getSearchTerm(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
