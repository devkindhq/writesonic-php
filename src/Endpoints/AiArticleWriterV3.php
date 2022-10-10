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
    final public const ENDPOINT = '/v1/business/content/ai-article-writer-v3';

    /** @var string */
    protected string $article_title;

    /** @var string */
    protected string $article_intro;

    /** @var string */
    protected string $article_sections;

    function __construct(string $article_title, string $article_intro, string $article_sections)
    {
        $this->article_title = $article_title;
        $this->article_intro = $article_intro;
        $this->article_sections = $article_sections;
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
     * Accessor article_intro attribute
     *
     * @return string
     */
    public function getArticleIntro(): string
    {
        return $this->article_intro;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "article_title" => $this->getArticleTitle(),
            "article_intro" => $this->getArticleIntro(),
            "article_sections" => $this->getArticleSections(),
        ]);
    }
}
