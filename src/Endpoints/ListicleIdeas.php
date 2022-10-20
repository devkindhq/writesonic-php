<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Listicle Ideas from WriteSonic
 *
 *
 * <b> Creative listicle ideas that are easy to write and perform well on social media. </b>
 */
final class ListicleIdeas extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/listicle-ideas';
    public const PARAMS = ['search_term'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $search_term;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $search_term)
    {
        $this->search_term = $search_term;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor search_term attribute
     *
     * @return string
     */
    public function getSearchTerm(): string
    {
        return $this->search_term;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setSearchTerm(string $value): self
    {
        $this->search_term = $value;
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
                 "search_term" => $this->getSearchTerm(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
