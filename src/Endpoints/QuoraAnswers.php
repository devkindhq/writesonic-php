<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Quora Answers from WriteSonic
 *
 *
 * <b> Answers to Quora questions that will position you as an authority. </b>
 */
final class QuoraAnswers extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/quora-answers';

    /** @var string */
    protected string $question;

    /** @var string */
    protected string $info;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $question, string $info)
    {
        $this->question = $question;
        $this->info = $info;
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
     * Accessor info attribute
     *
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
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
            "info" => $this->getInfo(),
        ]);
    }
}
