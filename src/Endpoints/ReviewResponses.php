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
    final public const ENDPOINT = '/v1/business/content/review-responses';

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

    function __construct(string $review, string $type, string $company, string $contact, string $user)
    {
        $this->review = $review;
        $this->type = $type;
        $this->company = $company;
        $this->contact = $contact;
        $this->user = $user;
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
     * Accessor type attribute
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
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
     * Accessor contact attribute
     *
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
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
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "review" => $this->getReview(),
            "type" => $this->getType(),
            "company" => $this->getCompany(),
            "contact" => $this->getContact(),
            "user" => $this->getUser(),
        ]);
    }
}
