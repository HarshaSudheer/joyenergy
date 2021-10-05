<?php

namespace Tests\Unit;

use App\Services\MeterReadingService;
use PHPUnit\Framework\TestCase;

class JoyEndPointsTest extends TestCase
{
    /**
     * Test the read Meter Readings endpoint
     *
     * @return
     */
    private static $meterReadingService;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass(); // TODO: Change the autogenerated stub
        JoyEndPointsTest::$meterReadingService = new MeterReadingService();
    }

    public function test_getMeterReadings()
    {
        $readings = JoyEndPointsTest::$meterReadingService->getReadings("smart-meter-1");
        print_r($readings);
        $this->assertCount(2, $readings);
    }

    public function test_storeMeterReadings()
    {
        $readings = JoyEndPointsTest::$meterReadingService->getReadings("smart-meter-1");
        print_r($readings);
        $this->assertCount(2, $readings);
    }
    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass(); // TODO: Change the autogenerated stub
    }
}
