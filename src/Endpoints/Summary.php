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
    final public const ENDPOINT = '/v1/business/content/summary';

    /** @var string */
    protected string $article_url;

    /** @var string */
    protected string $article_text;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
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
     * Accessor article_text attribute
     *
     * @return string
     */
    public function getArticleText(): string
    {
        return $this->article_text;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "article_url" => $this->getArticleUrl(),
            "article_text" => $this->getArticleText(),
        ]);
    }
}
