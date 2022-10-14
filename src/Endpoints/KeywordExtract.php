<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Keyword Extract from WriteSonic
 *
 *
 * <b> Keywords extracted from content that you can use for your optimization, SEO, or content creation purposes. </b>
 */
final class KeywordExtract extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/keyword-extract';

    /** @var string */
    protected string $content;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $content)
    {
        $this->content = $content;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor content attribute
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "content" => $this->getContent(),
        ]);
    }
}
