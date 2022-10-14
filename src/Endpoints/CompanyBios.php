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

    /** @var string */
    protected string $company_name;

    /** @var string */
    protected string $company_info;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $company_name, string $company_info, string $tone_of_voice)
    {
        $this->company_name = $company_name;
        $this->company_info = $company_info;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
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
     * Accessor company_info attribute
     *
     * @return string
     */
    public function getCompanyInfo(): string
    {
        return $this->company_info;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "company_name" => $this->getCompanyName(),
            "company_info" => $this->getCompanyInfo(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
