<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Ai Article Writer V3 from WriteSonic
 *
 *
 * <b> Create up to 1500-word articles in just four steps with a guided process. You can choose title, intro, and outline, and customize them as needed. </b>
 */
final class AiArticleWriterV3 extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/ai-article-writer-v3';
    public const PARAMS = ['article_title', 'article_intro', 'article_sections'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $article_title;

    /** @var string */
    protected string $article_intro;

    /** @var string */
    protected string $article_sections;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $article_title, string $article_intro, string $article_sections)
    {
        $this->article_title = $article_title;
        $this->article_intro = $article_intro;
        $this->article_sections = $article_sections;
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
     * Accessor article_intro attribute
     *
     * @return string
     */
    public function getArticleIntro(): string
    {
        return $this->article_intro;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setArticleIntro(string $value): self
    {
        $this->article_intro = $value;
        return $this;
    }

    /**
     * Accessor article_sections attribute
     *
     * @return string
     */
    public function getArticleSections(): string
    {
        return $this->article_sections;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setArticleSections(string $value): self
    {
        $this->article_sections = $value;
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
                 "article_intro" => $this->getArticleIntro(),
                 "article_sections" => $this->getArticleSections(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
