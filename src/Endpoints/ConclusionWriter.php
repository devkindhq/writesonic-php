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
    public const ENDPOINT = '/v1/business/content/conclusion-writer';

    /** @var string */
    protected string $article;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $article)
    {
        $this->article = $article;
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
