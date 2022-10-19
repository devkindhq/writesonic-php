<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Tweets from WriteSonic
 *
 *
 * <b> Generate tweets using AI, that are relevant and on-trend. </b>
 */
final class Tweets extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/tweets';
    public const PARAMS = ['topic'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $topic;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $topic)
    {
        $this->topic = $topic;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor topic attribute
     *
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setTopic(string $value): self
    {
        $this->topic = $value;
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
                 "topic" => $this->getTopic(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
