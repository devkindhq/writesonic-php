<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Instagram Captions from WriteSonic
 *
 *
 * <b> Captions that turn your images into attention-grabbing Instagram posts. </b>
 */
final class InstagramCaptions extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/instagram-captions';
    public const PARAMS = ['description', 'tone_of_voice'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $description;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $description, string $tone_of_voice)
    {
        $this->description = $description;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor description attribute
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;
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
                 "description" => $this->getDescription(),
                 "tone_of_voice" => $this->getToneOfVoice(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
