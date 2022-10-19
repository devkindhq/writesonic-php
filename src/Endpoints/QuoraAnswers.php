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
    public const ENDPOINT = '/v1/business/content/quora-answers';
    public const PARAMS = ['question', 'info'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $question;

    /** @var string */
    protected string $info;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $question, string $info)
    {
        $this->question = $question;
        $this->info = $info;
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
     * Accessor info attribute
     *
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setInfo(string $value): self
    {
        $this->info = $value;
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
                 "info" => $this->getInfo(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
