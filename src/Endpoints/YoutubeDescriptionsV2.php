<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Youtube Descriptions V2 from WriteSonic
 *
 *
 * <b> Catchy and persuasive YouTube descriptions that help your videos rank higher. </b>
 */
final class YoutubeDescriptionsV2 extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/youtube-descriptions-v2';
    public const PARAMS = ['video_title', 'keywords'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $video_title;

    /** @var string */
    protected string $keywords;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $video_title, string $keywords)
    {
        $this->video_title = $video_title;
        $this->keywords = $keywords;
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
     * Accessor keywords attribute
     *
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setKeywords(string $value): self
    {
        $this->keywords = $value;
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
                 "keywords" => $this->getKeywords(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
