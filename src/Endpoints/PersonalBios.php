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
    public const ENDPOINT = '/v1/business/content/personal-bios';
    public const PARAMS = ['name', 'personal_info', 'tone_of_voice'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $name;

    /** @var string */
    protected string $personal_info;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $name, string $personal_info, string $tone_of_voice)
    {
        $this->name = $name;
        $this->personal_info = $personal_info;
        $this->tone_of_voice = $tone_of_voice;
        $this->request(self::ENDPOINT, $this->toString());
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setName(string $value): self
    {
        $this->name = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPersonalInfo(string $value): self
    {
        $this->personal_info = $value;
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
                 "name" => $this->getName(),
                 "personal_info" => $this->getPersonalInfo(),
                 "tone_of_voice" => $this->getToneOfVoice(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
