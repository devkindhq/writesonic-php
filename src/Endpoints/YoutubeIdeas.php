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
    public const ENDPOINT = '/v1/business/content/youtube-ideas';
    public const PARAMS = ['video_topic', 'search_term', 'tone_of_voice'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $video_topic;

    /** @var string */
    protected string $search_term;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $video_topic, string $search_term, string $tone_of_voice)
    {
        $this->video_topic = $video_topic;
        $this->search_term = $search_term;
        $this->tone_of_voice = $tone_of_voice;
        $this->request(self::ENDPOINT, $this->toString());
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setVideoTopic(string $value): self
    {
        $this->video_topic = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setSearchTerm(string $value): self
    {
        $this->search_term = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setToneOfVoice(string $value): self
    {
        $this->tone_of_voice = $value;
        return $this;
    }

    /**
     * Accessor for Payload attribute
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPayload(array $value): self
    {
        $this->payload = $value;
        return $this;
    }

    /**
     * Accessor for endpoint attribute
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * Accessor for getting Required Parameters attribute
     *
     * @return array
     */
    public function getRequiredParameters(): array
    {
        return self::PARAMS;
    }

    /**
     * Array representation of this endpoint
     *
     * @return array
     */
    public function toArray(): array
    {
        try {
            return [
                 "video_topic" => $this->getVideoTopic(),
                 "search_term" => $this->getSearchTerm(),
                 "tone_of_voice" => $this->getToneOfVoice(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
