<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Content Shorten from WriteSonic
 *
 *
 * <b> Short your content in a different voice and style to appeal to different readers. </b>
 */
final class ContentShorten extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/content-shorten';
    public const PARAMS = ['content_to_shorten'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $content_to_shorten;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $content_to_shorten)
    {
        $this->content_to_shorten = $content_to_shorten;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor content_to_shorten attribute
     *
     * @return string
     */
    public function getContentToShorten(): string
    {
        return $this->content_to_shorten;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setContentToShorten(string $value): self
    {
        $this->content_to_shorten = $value;
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
                 "content_to_shorten" => $this->getContentToShorten(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
