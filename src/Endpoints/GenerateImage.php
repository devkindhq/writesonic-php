<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Generate Image from WriteSonic
 *
 *
 * <b> Generate images that will make your content stand out from the crowd. </b>
 */
final class GenerateImage extends Endpoint
{
    final public const ENDPOINT = '/v1/business/photosonic/generate-image';

    /** @var string */
    protected string $prompt;

    /** @var int */
    protected int $num_images;

    /** @var int */
    protected int $image_width;

    /** @var int */
    protected int $image_height;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $prompt, int $num_images, int $image_width, int $image_height)
    {
        $this->prompt = $prompt;
        $this->num_images = $num_images;
        $this->image_width = $image_width;
        $this->image_height = $image_height;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor prompt attribute
     *
     * @return string
     */
    public function getPrompt(): string
    {
        return $this->prompt;
    }

    /**
     * Accessor num_images attribute
     *
     * @return int
     */
    public function getNumImages(): int
    {
        return $this->num_images;
    }

    /**
     * Accessor image_width attribute
     *
     * @return int
     */
    public function getImageWidth(): int
    {
        return $this->image_width;
    }

    /**
     * Accessor image_height attribute
     *
     * @return int
     */
    public function getImageHeight(): int
    {
        return $this->image_height;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "prompt" => $this->getPrompt(),
            "num_images" => $this->getNumImages(),
            "image_width" => $this->getImageWidth(),
            "image_height" => $this->getImageHeight(),
        ]);
    }
}
