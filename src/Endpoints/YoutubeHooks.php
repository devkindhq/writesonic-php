<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Youtube Hooks from WriteSonic
 *
 *
 * <b> Generate catchy Youtube hooks to make your video stand out.  </b>
 */
final class YoutubeHooks extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/youtube-hooks';
    public const PARAMS = ['video_title', 'tone'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $video_title;

    /** @var string */
    protected string $tone;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $video_title, string $tone)
    {
        $this->video_title = $video_title;
        $this->tone = $tone;
        $this->request(self::ENDPOINT, $this->toString());
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setVideoTitle(string $value): self
    {
        $this->video_title = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setTone(string $value): self
    {
        $this->tone = $value;
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
                 "video_title" => $this->getVideoTitle(),
                 "tone" => $this->getTone(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
