<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Emails V2 from WriteSonic
 *
 *
 * <b> Professional-looking emails that help you engage leads and customers. </b>
 */
final class EmailsV2 extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/emails-v2';

    /** @var string */
    protected string $recipient;

    /** @var string */
    protected string $recipient_position;

    /** @var string */
    protected string $description;

    /**
     * Generates the content on the basis of required parameters.
     *
     * @return string
     */
    public function generate(string $recipient, string $recipient_position, string $description)
    {
        $this->recipient = $recipient;
        $this->recipient_position = $recipient_position;
        $this->description = $description;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor recipient attribute
     *
     * @return string
     */
    public function getRecipient(): string
    {
        return $this->recipient;
    }

    /**
     * Accessor recipient_position attribute
     *
     * @return string
     */
    public function getRecipientPosition(): string
    {
        return $this->recipient_position;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "recipient" => $this->getRecipient(),
            "recipient_position" => $this->getRecipientPosition(),
            "description" => $this->getDescription(),
        ]);
    }
}
