<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Summary from WriteSonic
 *
 *
 * <b> Shortened text copy that provides the main ideas and most important details of your original text. </b>
 */
final class Summary extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/summary';
    public const PARAMS = ['article_url', 'article_text'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $article_url;

    /** @var string */
    protected string $article_text;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $article_url, string $article_text)
    {
        $this->article_url = $article_url;
        $this->article_text = $article_text;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor article_url attribute
     *
     * @return string
     */
    public function getArticleUrl(): string
    {
        return $this->article_url;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setArticleUrl(string $value): self
    {
        $this->article_url = $value;
        return $this;
    }

    /**
     * Accessor article_text attribute
     *
     * @return string
     */
    public function getArticleText(): string
    {
        return $this->article_text;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setArticleText(string $value): self
    {
        $this->article_text = $value;
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
                 "article_url" => $this->getArticleUrl(),
                 "article_text" => $this->getArticleText(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
