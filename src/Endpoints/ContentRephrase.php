<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Content Rephrase from WriteSonic
 *
 *
 * <b> Rephrase your content in a different voice and style to appeal to different readers. </b>
 */
final class ContentRephrase extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/content-rephrase';
    public const PARAMS = ['content_to_rephrase', 'tone_of_voice'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $content_to_rephrase;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $content_to_rephrase, string $tone_of_voice)
    {
        $this->content_to_rephrase = $content_to_rephrase;
        $this->tone_of_voice = $tone_of_voice;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor content_to_rephrase attribute
     *
     * @return string
     */
    public function getContentToRephrase(): string
    {
        return $this->content_to_rephrase;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setContentToRephrase(string $value): self
    {
        $this->content_to_rephrase = $value;
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
                 "content_to_rephrase" => $this->getContentToRephrase(),
                 "tone_of_voice" => $this->getToneOfVoice(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
