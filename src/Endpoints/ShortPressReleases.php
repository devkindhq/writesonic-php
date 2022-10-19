<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Short Press Releases from WriteSonic
 *
 *
 * <b> Press release that you can use to promote your product or service to the media. </b>
 */
final class ShortPressReleases extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/short-press-releases';
    public const PARAMS = ['information', 'product_name', 'target_keyword', 'tone_of_voice'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $information;

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $target_keyword;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $information, string $product_name, string $target_keyword, string $tone_of_voice)
    {
        $this->information = $information;
        $this->product_name = $product_name;
        $this->target_keyword = $target_keyword;
        $this->tone_of_voice = $tone_of_voice;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor information attribute
     *
     * @return string
     */
    public function getInformation(): string
    {
        return $this->information;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setInformation(string $value): self
    {
        $this->information = $value;
        return $this;
    }

    /**
     * Accessor product_name attribute
     *
     * @return string
     */
    public function getProductName(): string
    {
        return $this->product_name;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setProductName(string $value): self
    {
        $this->product_name = $value;
        return $this;
    }

    /**
     * Accessor target_keyword attribute
     *
     * @return string
     */
    public function getTargetKeyword(): string
    {
        return $this->target_keyword;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setTargetKeyword(string $value): self
    {
        $this->target_keyword = $value;
        return $this;
    }

    /**
     * Accessor tone_of_voice attribute
     *
     * @return string
     */
    public function getToneOfVoice(): string
    {
        return $this->tone_of_voice;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setToneOfVoice(string $value): self
    {
        $this->tone_of_voice = $value;
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
                 "information" => $this->getInformation(),
                 "product_name" => $this->getProductName(),
                 "target_keyword" => $this->getTargetKeyword(),
                 "tone_of_voice" => $this->getToneOfVoice(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
