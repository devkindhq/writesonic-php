<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Content Rephrase from WriteSonic
 *
 *
 * <b> Rephrase your content in a different voice and style to appeal to different readers. </b>
 */
final class ContentRephrase extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/content-rephrase';

    /** @var string */
    protected string $content_to_rephrase;

    /** @var string */
    protected string $tone_of_voice;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $content_to_rephrase, string $tone_of_voice)
    {
        $this->content_to_rephrase = $content_to_rephrase;
        $this->tone_of_voice = $tone_of_voice;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor content_to_rephrase attribute
     *
     * @return string
     */
    public function getContentToRephrase(): string
    {
        return $this->content_to_rephrase;
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
            "content_to_rephrase" => $this->getContentToRephrase(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
