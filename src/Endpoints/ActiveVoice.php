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

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $sentence)
    {
        $this->sentence = $sentence;
        return $this->request(self::ENDPOINT, $this->toString());
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
