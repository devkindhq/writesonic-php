<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Active Voice from WriteSonic
 *
 *
 * <b> Easy and quick solution to converting your passive voice sentences into active voice sentences. </b>
 */
final class ActiveVoice extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/active-voice';

    /** @var string */
    protected string $sentence;

    function __construct(string $sentence)
    {
        $this->sentence = $sentence;
    }

    /**
     * Accessor sentence attribute
     *
     * @return string
     */
    public function getSentence(): string
    {
        return $this->sentence;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "sentence" => $this->getSentence(),
        ]);
    }
}
