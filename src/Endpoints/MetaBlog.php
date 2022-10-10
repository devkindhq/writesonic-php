<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Seo Meta Tags Blog from WriteSonic
 *
 *
 * <b> A set of optimized meta title and meta description tags that will boost your search rankings for your blog. </b>
 */
final class MetaBlog extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/meta-blog';

    /** @var string */
    protected string $blog_description;

    /** @var string */
    protected string $search_term;

    /** @var string */
    protected string $blog_title;

    /** @var string */
    protected string $primary_keyword;

    function __construct(string $blog_description, string $search_term, string $blog_title, string $primary_keyword)
    {
        $this->blog_description = $blog_description;
        $this->search_term = $search_term;
        $this->blog_title = $blog_title;
        $this->primary_keyword = $primary_keyword;
    }

    /**
     * Accessor blog_description attribute
     *
     * @return string
     */
    public function getBlogDescription(): string
    {
        return $this->blog_description;
    }

    /**
     * Accessor search_term attribute
     *
     * @return string
     */
    public function getSearchTerm(): string
    {
        return $this->search_term;
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
     * Accessor primary_keyword attribute
     *
     * @return string
     */
    public function getPrimaryKeyword(): string
    {
        return $this->primary_keyword;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "blog_description" => $this->getBlogDescription(),
            "search_term" => $this->getSearchTerm(),
            "blog_title" => $this->getBlogTitle(),
            "primary_keyword" => $this->getPrimaryKeyword(),
        ]);
    }
}
