<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Blog Ideas from WriteSonic
 *
 *
 * <b> Article/blog ideas that you can use to generate more traffic, leads, and sales for your business. </b>
 */
final class BlogIdeas extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/blog-ideas';
    public const PARAMS = ['topic', 'primary_keyword'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $topic;

    /** @var string */
    protected string $primary_keyword;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $topic, string $primary_keyword)
    {
        $this->topic = $topic;
        $this->primary_keyword = $primary_keyword;
        return $this->request(self::ENDPOINT, $this->toString());
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
     * Accessor primary_keyword attribute
     *
     * @return string
     */
    public function getPrimaryKeyword(): string
    {
        return $this->primary_keyword;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPrimaryKeyword(string $value): self
    {
        $this->primary_keyword = $value;
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
                 "primary_keyword" => $this->getPrimaryKeyword(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
