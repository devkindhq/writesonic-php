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
    public const ENDPOINT = '/v1/business/content/listicle-ideas';

    /** @var string */
    protected string $search_term;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $search_term)
    {
        $this->search_term = $search_term;
        return $this->request(self::ENDPOINT, $this->toString());
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
