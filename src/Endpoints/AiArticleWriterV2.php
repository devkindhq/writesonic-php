<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Ai Article Writer V2 from WriteSonic
 *
 *
 * <b> 4-step, simplified GPT-3 article writer that can write unique articles instantly. </b>
 */
final class AiArticleWriterV2 extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/ai-article-writer-v2';

    /** @var string */
    protected string $article_title;

    /** @var string */
    protected string $article_intro;

    /** @var string */
    protected string $article_sections;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $article_title, string $article_intro, string $article_sections)
    {
        $this->article_title = $article_title;
        $this->article_intro = $article_intro;
        $this->article_sections = $article_sections;
        return $this->request(self::ENDPOINT, $this->toString());
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
