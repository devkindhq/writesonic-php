<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Short Press Releases from WriteSonic
 *
 *
 * <b> Press release that you can use to promote your product or service to the media. </b>
 */
final class ShortPressReleases extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/short-press-releases';

    /** @var string */
    protected string $information;

    /** @var string */
    protected string $product_name;

    /** @var string */
    protected string $target_keyword;

    /** @var string */
    protected string $tone_of_voice;

    function __construct(string $information, string $product_name, string $target_keyword, string $tone_of_voice)
    {
        $this->information = $information;
        $this->product_name = $product_name;
        $this->target_keyword = $target_keyword;
        $this->tone_of_voice = $tone_of_voice;
    }

    /**
     * Accessor information attribute
     *
     * @return string
     */
    public function getInformation(): string
    {
        return $this->information;
    }

    /**
     * Accessor product_name attribute
     *
     * @return string
     */
    public function getProductName(): string
    {
        return $this->product_name;
    }

    /**
     * Accessor target_keyword attribute
     *
     * @return string
     */
    public function getTargetKeyword(): string
    {
        return $this->target_keyword;
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
            "information" => $this->getInformation(),
            "product_name" => $this->getProductName(),
            "target_keyword" => $this->getTargetKeyword(),
            "tone_of_voice" => $this->getToneOfVoice(),
        ]);
    }
}
