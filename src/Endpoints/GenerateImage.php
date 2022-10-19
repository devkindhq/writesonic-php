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
    public const ENDPOINT = '/v1/business/photosonic/generate-image';
    public const PARAMS = ['prompt', 'num_images', 'image_width', 'image_height'];

    /** @var array */
    protected array $payload =[];

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
     */
    public function generate(string $prompt, int $num_images, int $image_width, int $image_height)
    {
        $this->prompt = $prompt;
        $this->num_images = $num_images;
        $this->image_width = $image_width;
        $this->image_height = $image_height;
        $this->request(self::ENDPOINT, $this->toString());
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPrompt(string $value): self
    {
        $this->prompt = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setNumImages(int $value): self
    {
        $this->num_images = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setImageWidth(int $value): self
    {
        $this->image_width = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setImageHeight(int $value): self
    {
        $this->image_height = $value;
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
                 "prompt" => $this->getPrompt(),
                 "num_images" => $this->getNumImages(),
                 "image_width" => $this->getImageWidth(),
                 "image_height" => $this->getImageHeight(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
