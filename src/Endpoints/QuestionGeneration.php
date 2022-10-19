<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Question Generation from WriteSonic
 *
 *
 * <b> A tool to create engaging questions and polls that increase audience participation and engagement. </b>
 */
final class QuestionGeneration extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/question-generation';
    public const PARAMS = ['paragraph'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $paragraph;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $paragraph)
    {
        $this->paragraph = $paragraph;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor paragraph attribute
     *
     * @return string
     */
    public function getParagraph(): string
    {
        return $this->paragraph;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setParagraph(string $value): self
    {
        $this->paragraph = $value;
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
                 "paragraph" => $this->getParagraph(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
