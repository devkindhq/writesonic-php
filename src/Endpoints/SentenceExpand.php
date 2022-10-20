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
    public const ENDPOINT = '/v1/business/content/sentence-expand';
    public const PARAMS = ['content_to_expand', 'tone_of_voice'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $content_to_expand;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $content_to_expand, string $tone_of_voice)
    {
        $this->content_to_expand = $content_to_expand;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setContentToExpand(string $value): self
    {
        $this->content_to_expand = $value;
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
                 "content_to_expand" => $this->getContentToExpand(),
                 "tone_of_voice" => $this->getToneOfVoice(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
