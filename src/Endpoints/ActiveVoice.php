<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Active Voice from WriteSonic
 *
 *
 * <b> Easy and quick solution to converting your passive voice sentences into active voice sentences. </b>
 */
final class ActiveVoice extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/active-voice';
    public const PARAMS = ['sentence'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $sentence;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $sentence)
    {
        $this->sentence = $sentence;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor sentence attribute
     *
     * @return string
     */
    public function getSentence(): string
    {
        return $this->sentence;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setSentence(string $value): self
    {
        $this->sentence = $value;
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
                 "sentence" => $this->getSentence(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
