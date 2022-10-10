<?php

namespace Devkind\WritesonicPhp\Tests;

use Devkind\WritesonicPhp\Endpoints\Endpoint;
use Devkind\WritesonicPhp\Util;
use Devkind\WritesonicPhp\WritesonicPhp;
use PHPUnit\Framework\TestCase;

final class WritesonicPhpTest extends TestCase
{
    public function testWritesonicPhpisInitializedProperly(): void
    {
        $object  =  new WritesonicPhp('Writesonic123');
        dump($object->GoogleAd->generate(
            json_decode('{
                "product_name": "Writesonic",
                "product_description": "Writesonic makes it super easy and fast for you to compose high-performing landing pages, product descriptions, ads, and blog posts in seconds.",
                "search_term": "Best Copywriting App"
              }', true)
        ));  
        $this->assertTrue(get_class($object->googleAds) == Endpoint::class);
        $this->assertTrue($object->GoogleAd->getLanguage() == 'en');
        $this->assertTrue($object->getRoot() == 'api.writesonic.com');


    }
}