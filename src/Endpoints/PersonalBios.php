<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Personal Bios from WriteSonic
 *
 *
 * <b> Perfect bio copy that shows your expertise and drives more clients to you. </b>
 */
final class PersonalBios extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/personal-bios';

    /** @var string */
    protected string $name;

    /** @var string */
    protected string $personal_info;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $name, string $personal_info, string $tone_of_voice)
    {
        $this->name = $name;
        $this->personal_info = $personal_info;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor name attribute
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Accessor personal_info attribute
     *
     * @return string
     */
    public function getPersonalInfo(): string
    {
        return $this->personal_info;
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
            "name" => $this->getName(),
            "personal_info" => $this->getPersonalInfo(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
