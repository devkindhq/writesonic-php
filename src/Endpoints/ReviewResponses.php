<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Review Responses from WriteSonic
 *
 *
 * <b> Automatically generate personalized replies for both positive and negative reviews. </b>
 */
final class ReviewResponses extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/review-responses';
    public const PARAMS = ['review', 'type', 'company', 'contact', 'user'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $review;

    /** @var string */
    protected string $type;

    /** @var string */
    protected string $company;

    /** @var string */
    protected string $contact;

    /** @var string */
    protected string $user;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $review, string $type, string $company, string $contact, string $user)
    {
        $this->review = $review;
        $this->type = $type;
        $this->company = $company;
        $this->contact = $contact;
        $this->user = $user;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor review attribute
     *
     * @return string
     */
    public function getReview(): string
    {
        return $this->review;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setReview(string $value): self
    {
        $this->review = $value;
        return $this;
    }

    /**
     * Accessor type attribute
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setType(string $value): self
    {
        $this->type = $value;
        return $this;
    }

    /**
     * Accessor company attribute
     *
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setCompany(string $value): self
    {
        $this->company = $value;
        return $this;
    }

    /**
     * Accessor contact attribute
     *
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setContact(string $value): self
    {
        $this->contact = $value;
        return $this;
    }

    /**
     * Accessor user attribute
     *
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setUser(string $value): self
    {
        $this->user = $value;
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
                 "review" => $this->getReview(),
                 "type" => $this->getType(),
                 "company" => $this->getCompany(),
                 "contact" => $this->getContact(),
                 "user" => $this->getUser(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
