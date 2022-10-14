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
    public const ENDPOINT = '/v1/business/content/define-this';

    /** @var string */
    protected string $keyword;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $keyword)
    {
        $this->keyword = $keyword;
        return $this->request(self::ENDPOINT, $this->toString());
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
