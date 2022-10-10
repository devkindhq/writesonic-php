<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get App Notifications from WriteSonic
 *
 *
 * <b> Notification messages for your apps, websites, and mobile devices that keep users coming back for more. </b>
 */
final class AppNotifications extends Endpoint
{
    final public const ENDPOINT = '/v1/business/content/app-notifications';

    /** @var string */
    protected string $description;

    function __construct(string $description)
    {
        $this->description = $description;
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
            "description" => $this->getDescription(),
        ]);
    }
}
