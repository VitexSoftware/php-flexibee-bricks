<?php
/**
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright (c) 2018-2020, Vítězslav Dvořák
 */

namespace Test\FlexiPeeHP\Bricks;

use \FlexiPeeHP\Bricks\HookReciever;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2018-04-20 at 20:42:56.
 */
class HookRecieverTest extends \Test\FlexiPeeHP\ChangesTest
{
    /**
     * @var HookReciever
     */
    protected $object;

    /**
     * Fake Change ID
     * 
     * @return int
     */
    public static function getFakeChangeId()
    {
        return time() - 1524247660;
    }

    /**
     * Sets up the fixture, for example, opens a network connection
     * This method is called before a test is executed.
     */
    protected function setUp() : void
    {
        $this->object = new HookReciever(null, ['debug' => true]);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() : void
    {
        
    }

    /**
     * @covers \FlexiPeeHP\Bricks\HookReciever::listen
     */
    public function testListen()
    {
        $this->object->listen();
        $this->object->listen('tests/config.json');
        $this->object->listen('tests/phpunit.xml');
    }

    /**
     * @covers \FlexiPeeHP\Bricks\HookReciever::takeChanges
     */
    public function testTakeChanges()
    {
        $this->object->takeChanges(null);
        $this->assertEquals(254924,
            $this->object->takeChanges($this->object->listen('tests/changes.json')));
    }

    /**
     * @covers \FlexiPeeHP\Bricks\HookReciever::processChanges
     * @depends testTakeChanges
     */
    public function testProcessChanges()
    {
        $this->object->processChanges();
        $globalVersion = self::getFakeChangeId();
        $changes       = $this->object->listen('tests/changes.json');
        foreach ($changes['winstrom']['changes'] as $chPos => $change) {
            $changes['winstrom']['changes'][$chPos]['@in-version'] = $globalVersion++;
        }
        $changes['winstrom']['@globalVersion'] = $globalVersion;
        $this->object->takeChanges($changes);
        $this->object->processChanges();
    }

    /**
     * @covers \FlexiPeeHP\Bricks\HookReciever::saveLastProcessedVersion
     * @covers \FlexiPeeHP\Bricks\HookReciever::getLastProcessedVersion
     */
    public function testSaveLastProcessedVersion()
    {
        $this->object->saveLastProcessedVersion('X');
        $fchid = self::getFakeChangeId();
        $this->object->saveLastProcessedVersion($fchid);
        $this->assertEquals($fchid, $this->object->getLastProcessedVersion());
    }
}
