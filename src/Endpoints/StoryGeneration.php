<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Story Generation from WriteSonic
 *
 *
 * <b> Engaging and persuasive stories that will capture your reader's attention and interest. </b>
 */
final class StoryGeneration extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/story-generation';

    /** @var string */
    protected string $description;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $description, string $tone_of_voice)
    {
        $this->description = $description;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
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
            "description" => $this->getDescription(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
