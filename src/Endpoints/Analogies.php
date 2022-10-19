<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Analogies from WriteSonic
 *
 *
 * <b> Unique analogies that make your sales pitch more memorable and engaging. </b>
 */
final class Analogies extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/analogies';
    public const PARAMS = ['content'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $content;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $content)
    {
        $this->content = $content;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor content attribute
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setContent(string $value): self
    {
        $this->content = $value;
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
                 "content" => $this->getContent(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
