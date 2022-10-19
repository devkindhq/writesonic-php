<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Paragraph Writer from WriteSonic
 *
 *
 * <b> Perfectly structured paragraphs that are easy to read and packed with persuasive words. </b>
 */
final class ParagraphWriter extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/paragraph-writer';
    public const PARAMS = ['paragraph_title'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $paragraph_title;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $paragraph_title)
    {
        $this->paragraph_title = $paragraph_title;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor paragraph_title attribute
     *
     * @return string
     */
    public function getParagraphTitle(): string
    {
        return $this->paragraph_title;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setParagraphTitle(string $value): self
    {
        $this->paragraph_title = $value;
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
                 "paragraph_title" => $this->getParagraphTitle(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
