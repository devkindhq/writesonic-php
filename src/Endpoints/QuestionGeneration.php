<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Question Generation from WriteSonic
 *
 *
 * <b> A tool to create engaging questions and polls that increase audience participation and engagement. </b>
 */
final class QuestionGeneration extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/question-generation';

    /** @var string */
    protected string $paragraph;

    function __construct(string $paragraph)
    {
        $this->paragraph = $paragraph;
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
