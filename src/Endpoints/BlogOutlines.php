<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Blog Outlines from WriteSonic
 *
 *
 * <b> Detailed article outlines that help you write better content on a consistent basis. </b>
 */
final class BlogOutlines extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/blog-outlines';
    public const PARAMS = ['blog_title', 'blog_intro'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $blog_title;

    /** @var string */
    protected string $blog_intro;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $blog_title, string $blog_intro)
    {
        $this->blog_title = $blog_title;
        $this->blog_intro = $blog_intro;
        $this->request(self::ENDPOINT, $this->toString());
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
     * Accessor blog_intro attribute
     *
     * @return string
     */
    public function getBlogIntro(): string
    {
        return $this->blog_intro;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setBlogIntro(string $value): self
    {
        $this->blog_intro = $value;
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
                 "blog_intro" => $this->getBlogIntro(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
