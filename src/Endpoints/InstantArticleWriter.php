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
    final public const ENDPOINT = '/v1/business/content/instant-article-writer';

    /** @var string */
    protected string $article_title;

    function __construct(string $article_title)
    {
        $this->article_title = $article_title;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "article_title" => $this->getArticleTitle(),
        ]);
    }
}