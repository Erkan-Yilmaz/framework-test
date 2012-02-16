<?php

require_once dirname(__FILE__) . '/../../../packfire/packfire/datetime/pDatePeriod.php';

/**
 * Test class for pDatePeriod.
 * Generated by PHPUnit on 2012-02-16 at 10:26:45.
 */
class pDatePeriodTest extends PHPUnit_Framework_TestCase {

    /**
     * @var pDatePeriod
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new pDatePeriod(new pDateTime(2012, 1, 10), new pTimeSpan(2 * 86400), 5);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    
    function testRun(){
        $array = array();
        foreach($this->object as $date){
            $array[] = $date;
        }
        $this->assertEquals(10, $array[0]->day());
        $this->assertEquals(1, $array[0]->month());
        $this->assertEquals(2012, $array[0]->year());
        $this->assertEquals(12, $array[1]->day());
        $this->assertEquals(1, $array[1]->month());
        $this->assertEquals(2012, $array[1]->year());
        $this->assertEquals(14, $array[2]->day());
        $this->assertEquals(1, $array[2]->month());
        $this->assertEquals(2012, $array[2]->year());
    }

}
