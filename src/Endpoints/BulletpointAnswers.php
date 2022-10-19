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
    public const ENDPOINT = '/v1/business/content/bulletpoint-answers';
    public const PARAMS = ['question'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $question;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $question)
    {
        $this->question = $question;
        $this->request(self::ENDPOINT, $this->toString());
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setQuestion(string $value): self
    {
        $this->question = $value;
        return $this;
    }

    /**
     * Accessor for Payload attribute
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPayload(array $value): self
    {
        $this->payload = $value;
        return $this;
    }

    /**
     * Accessor for endpoint attribute
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * Accessor for getting Required Parameters attribute
     *
     * @return array
     */
    public function getRequiredParameters(): array
    {
        return self::PARAMS;
    }

    /**
     * Array representation of this endpoint
     *
     * @return array
     */
    public function toArray(): array
    {
        try {
            return [
                 "question" => $this->getQuestion(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
