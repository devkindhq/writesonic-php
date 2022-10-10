<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Conclusion Writer from WriteSonic
 *
 *
 * <b> Powerful conclusion copy that will make a reader take action. </b>
 */
final class ConclusionWriter extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/conclusion-writer';

    /** @var string */
    protected string $article;

    function __construct(string $article)
    {
        $this->article = $article;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "article" => $this->getArticle(),
        ]);
    }
}
