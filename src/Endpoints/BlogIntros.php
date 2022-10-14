<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Blog Intros from WriteSonic
 *
 *
 * <b> Enticing article/blog introductions that capture the attention of the audience. </b>
 */
final class BlogIntros extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/blog-intros';

    /** @var string */
    protected string $blog_title;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $blog_title)
    {
        $this->blog_title = $blog_title;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor blog_title attribute
     *
     * @return string
     */
    public function getBlogTitle(): string
    {
        return $this->blog_title;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "blog_title" => $this->getBlogTitle(),
        ]);
    }
}
