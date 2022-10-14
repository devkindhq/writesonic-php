<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Analogies from WriteSonic
 *
 *
 * <b> Unique analogies that make your sales pitch more memorable and engaging. </b>
 */
final class Analogies extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/analogies';

    /** @var string */
    protected string $content;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $content)
    {
        $this->content = $content;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor content attribute
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "content" => $this->getContent(),
        ]);
    }
}
