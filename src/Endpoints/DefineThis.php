<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Define This from WriteSonic
 *
 *
 * <b> A definition for a word, phrase, or acronym that's used often by your target buyers. </b>
 */
final class DefineThis extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/define-this';

    /** @var string */
    protected string $keyword;

    function __construct(string $keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * Accessor keyword attribute
     *
     * @return string
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "keyword" => $this->getKeyword(),
        ]);
    }
}
