<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Company Bios from WriteSonic
 *
 *
 * <b> Short and sweet company bio that will help you connect with your target audience. </b>
 */
final class CompanyBios extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/company-bios';
    public const PARAMS = ['company_name', 'company_info', 'tone_of_voice'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $company_name;

    /** @var string */
    protected string $company_info;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $company_name, string $company_info, string $tone_of_voice)
    {
        $this->company_name = $company_name;
        $this->company_info = $company_info;
        $this->tone_of_voice = $tone_of_voice;
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
     * Accessor company_info attribute
     *
     * @return string
     */
    public function getCompanyInfo(): string
    {
        return $this->company_info;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setCompanyInfo(string $value): self
    {
        $this->company_info = $value;
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
                 "company_name" => $this->getCompanyName(),
                 "company_info" => $this->getCompanyInfo(),
                 "tone_of_voice" => $this->getToneOfVoice(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
