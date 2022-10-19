<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Google Adv Titles V2 from WriteSonic
 *
 *
 * <b> Creating ads with unique and appealing titles that entice people to click on your ad and purchase from your site. </b>
 */
final class GoogleAdTitlesV2 extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/google-ad-titles-v2';
    public const PARAMS = ['company_name', 'description', 'keyword'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $company_name;

    /** @var string */
    protected string $description;

    /** @var string */
    protected string $keyword;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $company_name, string $description, string $keyword)
    {
        $this->company_name = $company_name;
        $this->description = $description;
        $this->keyword = $keyword;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor company_name attribute
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->company_name;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setCompanyName(string $value): self
    {
        $this->company_name = $value;
        return $this;
    }

    /**
     * Accessor description attribute
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;
        return $this;
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
                 "company_name" => $this->getCompanyName(),
                 "description" => $this->getDescription(),
                 "keyword" => $this->getKeyword(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
