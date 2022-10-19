<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Lyrics Generator from WriteSonic
 *
 *
 * <b> Unique song lyrics that will be perfect for your next hit song. </b>
 */
final class LyricsGenerator extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/lyrics-generator';
    public const PARAMS = ['topic', 'genre'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $topic;

    /** @var string */
    protected string $genre;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $topic, string $genre)
    {
        $this->topic = $topic;
        $this->genre = $genre;
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
     * Accessor genre attribute
     *
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setGenre(string $value): self
    {
        $this->genre = $value;
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
                 "genre" => $this->getGenre(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
