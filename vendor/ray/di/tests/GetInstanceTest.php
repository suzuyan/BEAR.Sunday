<?php
namespace Ray\Di;

/**
 * Test class for SingletonModule.
 */
class GetInstanceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

    public function testInSingletonInterface()
    {
        $injector = Injector::create([new Modules\SingletonModule()]);

        $dbInstance1 = $injector->getInstance('Ray\Di\Mock\DbInterface');
        $dbInstance2 = $injector->getInstance('Ray\Di\Mock\DbInterface');

        $a = spl_object_hash($dbInstance1);
        $b = spl_object_hash($dbInstance2);
        $this->assertSame($a, $b);
    }

    public function testInSingletonInterfaceWithAnnotation()
    {
        $injector = Injector::create([new Modules\SingletonAnnotationModule()]);

        $dbInstance1 = $injector->getInstance('Ray\Di\Mock\SingletonDbInterface');
        $dbInstance2 = $injector->getInstance('Ray\Di\Mock\SingletonDbInterface');

        $a = spl_object_hash($dbInstance1);
        $b = spl_object_hash($dbInstance2);
        $this->assertSame($a, $b);
    }

    public function testInjectInSingletonInterface()
    {
        $injector = Injector::create([new Modules\SingletonModule()]);

        $numberInstance1 = $injector->getInstance('Ray\Di\Mock\Number');
        $numberInstance2 = $injector->getInstance('Ray\Di\Mock\Number');

        $a = spl_object_hash($numberInstance1->db);
        $b = spl_object_hash($numberInstance2->db);
        $this->assertSame($a, $b);
    }

    public function testInjectInSingletonInterfaceWithAnnotation()
    {
        $injector = Injector::create([new Modules\SingletonAnnotationModule()]);

        $numberInstance1 = $injector->getInstance('Ray\Di\Mock\SingletonNumber');
        $numberInstance2 = $injector->getInstance('Ray\Di\Mock\SingletonNumber');

        $a = spl_object_hash($numberInstance1->db);
        $b = spl_object_hash($numberInstance2->db);
        $this->assertSame($a, $b);
    }

    public function testInjectInSingletonInterface4times()
    {
        $injector = Injector::create([new Modules\SingletonModule()]);

        $numberInstance1 = $injector->getInstance('Ray\Di\Mock\DbInterface');
        $numberInstance2 = $injector->getInstance('Ray\Di\Mock\DbInterface');
        $numberInstance3 = $injector->getInstance('Ray\Di\Mock\DbInterface');
        $numberInstance4 = $injector->getInstance('Ray\Di\Mock\DbInterface');

        $result1 = spl_object_hash($numberInstance1);
        $result2 = spl_object_hash($numberInstance2);
        $result3 = spl_object_hash($numberInstance3);
        $result4 = spl_object_hash($numberInstance4);
        $this->assertSame($result1, $result2);
        $this->assertSame($result2, $result3);
        $this->assertSame($result3, $result4);
    }

    public function testInjectInSingletonWithCache()
    {
        $injector = Injector::create([new Modules\SingletonModule()])->setCache(new \Doctrine\Common\Cache\FilesystemCache(sys_get_temp_dir()));

        $numberInstance1 = $injector->getInstance('Ray\Di\Mock\DbInterface');
        $numberInstance2 = $injector->getInstance('Ray\Di\Mock\DbInterface');
        $numberInstance3 = $injector->getInstance('Ray\Di\Mock\DbInterface');
        $numberInstance4 = $injector->getInstance('Ray\Di\Mock\DbInterface');

        $result1 = spl_object_hash($numberInstance1);
        $result2 = spl_object_hash($numberInstance2);
        $result3 = spl_object_hash($numberInstance3);
        $result4 = spl_object_hash($numberInstance4);
        $this->assertSame($result1, $result2);
        $this->assertSame($result2, $result3);
        $this->assertSame($result3, $result4);
    }

}
