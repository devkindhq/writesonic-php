<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Youtube Titles from WriteSonic
 *
 *
 * <b> Catchy titles that attract more views and increase the number of shares. </b>
 */
final class YoutubeTitles extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/youtube-titles';

    /** @var string */
    protected string $video_description;

    /** @var string */
    protected string $search_term;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $video_description, string $search_term, string $tone_of_voice)
    {
        $this->video_description = $video_description;
        $this->search_term = $search_term;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor video_description attribute
     *
     * @return string
     */
    public function getVideoDescription(): string
    {
        return $this->video_description;
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
            "video_description" => $this->getVideoDescription(),
            "search_term" => $this->getSearchTerm(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
