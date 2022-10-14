<?php

namespace Devkind\WritesonicPhp\Tests;

use Devkind\WritesonicPhp\Endpoints\Endpoint;
use Devkind\WritesonicPhp\Endpoints\GoogleAds;
use Devkind\WritesonicPhp\Util;
use Devkind\WritesonicPhp\Writesonic as WritesonicPhp;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class WritesonicPhpTest extends TestCase
{
    public function testWritesonicPhpisInitializedProperly(): void
    {
        $object  =  new WritesonicPhp('test');
        $this->assertTrue(get_class($object->GoogleAds) == GoogleAds::class);
        $this->assertTrue($object->GoogleAds->getLanguage() == 'en');
        $this->assertTrue($object->getRoot() == 'api.writesonic.com');
    }


    public function testWritesonicPhpisInitializedProperlyUsingMake(): void
    {
        $object  =  WritesonicPhp::make('test');
        $this->assertTrue(get_class($object->GoogleAds) == GoogleAds::class);
        $this->assertTrue($object->GoogleAds->getLanguage() == 'en');
        $this->assertTrue($object->getRoot() == 'api.writesonic.com');
    }


    public function testWritesonicThrowExceptionInCaseOfInvalidEndpoint(): void
    {
        try {
            $object  =  new WritesonicPhp('Writesonic123');
            $this->assertTrue(get_class($object->GoogleAd) == GoogleAds::class);
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == RuntimeException::class);
        }
    }

    public function testWritesonicPhpisAbleToMakeCallProperly(): void
    {
        $object  =  new WritesonicPhp('Writesonic123');
        /** @var \Devkind\WritesonicPhp\Endpoints\GoogleAds */
        $endpoint = $object->GoogleAds;
        $endpoint->generate('test', 'test', 'test');
        $this->assertTrue(is_array($endpoint->generate('test', 'test', 'test')));
    }
}