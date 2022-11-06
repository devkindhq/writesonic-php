<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Cold Emails from WriteSonic
 *
 *
 * <b>  Personalized email outreach to your target prospects that get better results. </b>
 */
final class ColdEmails extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/cold-emails';
    public const PARAMS = ['you', 'to', 'goal', 'scenario'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $you;

    /** @var string */
    protected string $to;

    /** @var string */
    protected string $goal;

    /** @var string */
    protected string $scenario;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $you, string $to, string $goal, string $scenario)
    {
        $this->you = $you;
        $this->to = $to;
        $this->goal = $goal;
        $this->scenario = $scenario;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor you attribute
     *
     * @return string
     */
    public function getYou(): string
    {
        return $this->you;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setYou(string $value): self
    {
        $this->you = $value;
        return $this;
    }

    /**
     * Accessor to attribute
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setTo(string $value): self
    {
        $this->to = $value;
        return $this;
    }

    /**
     * Accessor goal attribute
     *
     * @return string
     */
    public function getGoal(): string
    {
        return $this->goal;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setGoal(string $value): self
    {
        $this->goal = $value;
        return $this;
    }

    /**
     * Accessor scenario attribute
     *
     * @return string
     */
    public function getScenario(): string
    {
        return $this->scenario;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setScenario(string $value): self
    {
        $this->scenario = $value;
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
                 "you" => $this->getYou(),
                 "to" => $this->getTo(),
                 "goal" => $this->getGoal(),
                 "scenario" => $this->getScenario(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
