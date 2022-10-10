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
    final public const ENDPOINT = '/v1/business/content/company-mission';

    /** @var string */
    protected string $company_name;

    /** @var string */
    protected string $company_description;

    function __construct(string $company_name, string $company_description)
    {
        $this->company_name = $company_name;
        $this->company_description = $company_description;
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
     * Accessor company_description attribute
     *
     * @return string
     */
    public function getCompanyDescription(): string
    {
        return $this->company_description;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "company_name" => $this->getCompanyName(),
            "company_description" => $this->getCompanyDescription(),
        ]);
    }
}
