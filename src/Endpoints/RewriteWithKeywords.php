<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Rewrite With Keywords from WriteSonic
 *
 *
 * <b> Rewrite your existing content to include more keywords and boost your search engine rankings. </b>
 */
final class RewriteWithKeywords extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/rewrite-with-keywords';
    public const PARAMS = ['article', 'keywords'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $article;

    /** @var string */
    protected string $keywords;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $article, string $keywords)
    {
        $this->article = $article;
        $this->keywords = $keywords;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor article attribute
     *
     * @return string
     */
    public function getArticle(): string
    {
        return $this->article;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setArticle(string $value): self
    {
        $this->article = $value;
        return $this;
    }

    /**
     * Accessor keywords attribute
     *
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setKeywords(string $value): self
    {
        $this->keywords = $value;
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
                 "article" => $this->getArticle(),
                 "keywords" => $this->getKeywords(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
