<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Ans My Ques from WriteSonic
 *
 *
 * <b> Instant, quality answers to any questions or concerns that your audience might have. </b>
 */
final class AnsMyQues extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/ans-my-ques';

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
