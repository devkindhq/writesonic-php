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
    final public const ENDPOINT = '/v1/business/content/rewrite-with-keywords';

    /** @var string */
    protected string $article;

    /** @var string */
    protected string $keywords;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
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
     * Accessor keywords attribute
     *
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords;
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
            "keywords" => $this->getKeywords(),
        ]);
    }
}
