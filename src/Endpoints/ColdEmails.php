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
    final public const ENDPOINT = '/v1/business/content/cold-emails';

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
     *
     * @return string
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
     * Accessor to attribute
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
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
     * Accessor scenario attribute
     *
     * @return string
     */
    public function getScenario(): string
    {
        return $this->scenario;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode([
            "you" => $this->getYou(),
            "to" => $this->getTo(),
            "goal" => $this->getGoal(),
            "scenario" => $this->getScenario(),
        ]);
    }
}
