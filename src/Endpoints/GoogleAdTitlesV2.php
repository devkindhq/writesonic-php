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

    /** @var string */
    protected string $company_name;

    /** @var string */
    protected string $description;

    /** @var string */
    protected string $keyword;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $company_name, string $description, string $keyword)
    {
        $this->company_name = $company_name;
        $this->description = $description;
        $this->keyword = $keyword;
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
     * Accessor description attribute
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "company_name" => $this->getCompanyName(),
            "description" => $this->getDescription(),
            "keyword" => $this->getKeyword(),
        ]);
    }
}
