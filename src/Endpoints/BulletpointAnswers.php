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

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $question)
    {
        $this->question = $question;
        return $this->request(self::ENDPOINT, $this->toString());
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
