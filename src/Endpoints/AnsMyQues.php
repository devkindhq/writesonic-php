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
    public const ENDPOINT = '/v1/business/content/ans-my-ques';

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
