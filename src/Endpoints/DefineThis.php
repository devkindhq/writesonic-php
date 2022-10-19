<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Define This from WriteSonic
 *
 *
 * <b> A definition for a word, phrase, or acronym that's used often by your target buyers. </b>
 */
final class DefineThis extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/define-this';
    public const PARAMS = ['keyword'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $keyword;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $keyword)
    {
        $this->keyword = $keyword;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor keyword attribute
     *
     * @return string
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setKeyword(string $value): self
    {
        $this->keyword = $value;
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
                 "keyword" => $this->getKeyword(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
