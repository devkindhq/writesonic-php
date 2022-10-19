<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Conclusion Writer from WriteSonic
 *
 *
 * <b> Powerful conclusion copy that will make a reader take action. </b>
 */
final class ConclusionWriter extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/conclusion-writer';
    public const PARAMS = ['article'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $article;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $article)
    {
        $this->article = $article;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor article attribute
     *
     * @return string
     */
    public function getArticle(): string
    {
        return $this->article;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setArticle(string $value): self
    {
        $this->article = $value;
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
                 "article" => $this->getArticle(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
