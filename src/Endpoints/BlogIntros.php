<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Blog Intros from WriteSonic
 *
 *
 * <b> Enticing article/blog introductions that capture the attention of the audience. </b>
 */
final class BlogIntros extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/blog-intros';
    public const PARAMS = ['blog_title'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $blog_title;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $blog_title)
    {
        $this->blog_title = $blog_title;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor blog_title attribute
     *
     * @return string
     */
    public function getBlogTitle(): string
    {
        return $this->blog_title;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setBlogTitle(string $value): self
    {
        $this->blog_title = $value;
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
                 "blog_title" => $this->getBlogTitle(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
