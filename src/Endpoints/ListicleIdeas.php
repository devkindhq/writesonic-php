<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Listicle Ideas from WriteSonic
 *
 *
 * <b> Creative listicle ideas that are easy to write and perform well on social media. </b>
 */
final class ListicleIdeas extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/listicle-ideas';

    /** @var string */
    protected string $search_term;

    function __construct(string $search_term)
    {
        $this->search_term = $search_term;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "search_term" => $this->getSearchTerm(),
        ]);
    }
}
