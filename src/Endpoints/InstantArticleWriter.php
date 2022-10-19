<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Instant Article Writer from WriteSonic
 *
 *
 * <b> Instantly generate 1500-word articles with one click. This is an automated process, so your title must be very precise. </b>
 */
final class InstantArticleWriter extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/instant-article-writer';
    public const PARAMS = ['article_title'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $article_title;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $article_title)
    {
        $this->article_title = $article_title;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor article_title attribute
     *
     * @return string
     */
    public function getArticleTitle(): string
    {
        return $this->article_title;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setArticleTitle(string $value): self
    {
        $this->article_title = $value;
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
                 "article_title" => $this->getArticleTitle(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
