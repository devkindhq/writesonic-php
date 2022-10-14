<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Blog Outlines from WriteSonic
 *
 *
 * <b> Detailed article outlines that help you write better content on a consistent basis. </b>
 */
final class BlogOutlines extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/blog-outlines';

    /** @var string */
    protected string $blog_title;

    /** @var string */
    protected string $blog_intro;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $blog_title, string $blog_intro)
    {
        $this->blog_title = $blog_title;
        $this->blog_intro = $blog_intro;
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
     * Accessor blog_intro attribute
     *
     * @return string
     */
    public function getBlogIntro(): string
    {
        return $this->blog_intro;
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
            "blog_intro" => $this->getBlogIntro(),
        ]);
    }
}
