<?php

namespace Devkind\WritesonicPhp\Tests;

use Devkind\WritesonicPhp\Endpoints\GoogleAds;
use Devkind\WritesonicPhp\Writesonic as WritesonicPhp;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class WritesonicPhpTest extends TestCase
{
    /**
     * @test
     */
    public function writesonic_phpis_initialized_properly(): void
    {
        $object  =  new WritesonicPhp('test');
        $this->assertTrue(get_class($object->GoogleAds) == GoogleAds::class);
        $this->assertTrue($object->GoogleAds->getLanguage() == 'en');
        $this->assertTrue($object->getRoot() == 'api.writesonic.com');
    }


    /**
     * @test
     */
    public function writesonic_phpis_initialized_properly_using_make(): void
    {
        $object  =  WritesonicPhp::make('test');
        $this->assertTrue(get_class($object->GoogleAds) == GoogleAds::class);
        $this->assertTrue($object->GoogleAds->getLanguage() == 'en');
        $this->assertTrue($object->getRoot() == 'api.writesonic.com');
    }


    /**
     * @test
     */
    public function writesonic_throw_exception_in_case_of_invalid_endpoint(): void
    {
        try {
            $object  =  new WritesonicPhp('test123');
            $this->assertTrue(get_class($object->GoogleAd) == GoogleAds::class);
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == RuntimeException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfInvalidCredientials(): void
    {
        try {
            $object  =  new WritesonicPhp('test123');
            /** @var \Devkind\WritesonicPhp\Endpoints\GoogleAds */
            $endpoint = $object->GoogleAds;
            $endpoint->generate('test', 'test', 'test');
            $this->assertTrue(is_array($endpoint->generate('test', 'test', 'test')));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \GuzzleHttp\Exception\ClientException::class);
        }
    }
}
