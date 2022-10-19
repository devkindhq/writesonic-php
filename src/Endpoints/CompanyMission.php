<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Company Mission from WriteSonic
 *
 *
 * <b> A clear and concise statement of your company's goals and purpose. </b>
 */
final class CompanyMission extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/company-mission';
    public const PARAMS = ['company_name', 'company_description'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $company_name;

    /** @var string */
    protected string $company_description;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $company_name, string $company_description)
    {
        $this->company_name = $company_name;
        $this->company_description = $company_description;
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
     * Accessor company_description attribute
     *
     * @return string
     */
    public function getCompanyDescription(): string
    {
        return $this->company_description;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setCompanyDescription(string $value): self
    {
        $this->company_description = $value;
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
                 "company_description" => $this->getCompanyDescription(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
