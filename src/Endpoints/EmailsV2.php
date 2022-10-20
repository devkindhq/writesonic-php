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
    public const ENDPOINT = '/v1/business/content/emails-v2';
    public const PARAMS = ['recipient', 'recipient_position', 'description'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $recipient;

    /** @var string */
    protected string $recipient_position;

    /** @var string */
    protected string $description;

    /**
     * Generates the content on the basis of required parameters.
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setRecipient(string $value): self
    {
        $this->recipient = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setRecipientPosition(string $value): self
    {
        $this->recipient_position = $value;
        return $this;
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
     * Setter for payload attribute
     *
     * @return self
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;
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
                 "recipient" => $this->getRecipient(),
                 "recipient_position" => $this->getRecipientPosition(),
                 "description" => $this->getDescription(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
