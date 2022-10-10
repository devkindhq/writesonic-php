<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Bulletpoint Answers from WriteSonic
 *
 *
 * <b> Precise and informative bullet points that provide quick and valuable answers to your customers' questions. </b>
 */
final class BulletpointAnswers extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/bulletpoint-answers';

    /** @var string */
    protected string $question;

    function __construct(string $question)
    {
        $this->question = $question;
    }

    /**
     * Accessor question attribute
     *
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "question" => $this->getQuestion(),
        ]);
    }
}
