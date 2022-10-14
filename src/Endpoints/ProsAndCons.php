<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Pros And Cons from WriteSonic
 *
 *
 * <b> List of the main benefits versus the most common problems and concerns. </b>
 */
final class ProsAndCons extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/pros-and-cons';

    /** @var string */
    protected string $paragraph;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $paragraph)
    {
        $this->paragraph = $paragraph;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor paragraph attribute
     *
     * @return string
     */
    public function getParagraph(): string
    {
        return $this->paragraph;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "paragraph" => $this->getParagraph(),
        ]);
    }
}
