<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Paragraph Writer from WriteSonic
 *
 *
 * <b> Perfectly structured paragraphs that are easy to read and packed with persuasive words. </b>
 */
final class ParagraphWriter extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/paragraph-writer';

    /** @var string */
    protected string $paragraph_title;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $paragraph_title)
    {
        $this->paragraph_title = $paragraph_title;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor paragraph_title attribute
     *
     * @return string
     */
    public function getParagraphTitle(): string
    {
        return $this->paragraph_title;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "paragraph_title" => $this->getParagraphTitle(),
        ]);
    }
}
