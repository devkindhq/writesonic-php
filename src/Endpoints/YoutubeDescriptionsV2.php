<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Youtube Descriptions V2 from WriteSonic
 *
 *
 * <b> Catchy and persuasive YouTube descriptions that help your videos rank higher. </b>
 */
final class YoutubeDescriptionsV2 extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/youtube-descriptions-v2';

    /** @var string */
    protected string $video_title;

    /** @var string */
    protected string $keywords;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $video_title, string $keywords)
    {
        $this->video_title = $video_title;
        $this->keywords = $keywords;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor video_title attribute
     *
     * @return string
     */
    public function getVideoTitle(): string
    {
        return $this->video_title;
    }

    /**
     * Accessor keywords attribute
     *
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "video_title" => $this->getVideoTitle(),
            "keywords" => $this->getKeywords(),
        ]);
    }
}
