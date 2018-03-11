<?php
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {

    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->item = new Task();
        $this->task = "New task";
        $this->priority = "low";
        $this->size = "small";
        $this->group = "house";
        $this->status = "in progress";
    }

    function testSetup() {
        $this->assertEquals(1, $this->item->id);
        $this->assertEquals('New task', $this->item->task);
        $this->assertEquals('low', $this->item->priority);
        $this->assertEquals('small', $this->item->size);
        $this->assertEquals('house', $this->item->group);
        $this->assertEquals('in progress', $this->item->status);

    }

    function testInvalidTask() {

    }
    
    function testTask() {
        $expected = "new task";
        $this->item->task = $expected;
        $this->assertEquals($expected, $this->item->task);
    }

    function testPriority() {
            
    }
    
    function testSize() {

    }

    function testGroup() {

    }

    function testStatus() {

    }


}