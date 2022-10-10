<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Blog Ideas from WriteSonic
 *
 *
 * <b> Article/blog ideas that you can use to generate more traffic, leads, and sales for your business. </b>
 */
final class BlogIdeas extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/blog-ideas';

    /** @var string */
    protected string $topic;

    /** @var string */
    protected string $primary_keyword;

    function __construct(string $topic, string $primary_keyword)
    {
        $this->topic = $topic;
        $this->primary_keyword = $primary_keyword;
    }

    /**
     * Accessor topic attribute
     *
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
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
            "topic" => $this->getTopic(),
            "primary_keyword" => $this->getPrimaryKeyword(),
        ]);
    }
}
