<?php
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {

    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->item = new Task();
        $this->item->task = "New task";
        $this->item->priority = "low";
        $this->item->size = "small";
        $this->item->group = "house";
        $this->item->status = "in progress";
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
        //$this->expectException('InvalidArgumentException');
        $this->item->task = null;
    }
    
    function testTaskPresent() {
        $expected = "Mow lawn";
        $this->item->task = $expected;
        $this->assertEquals($expected, $this->item->task);
    }

    function testTaskAbsent() {
        $badvalue = "";
        $this->expectException(Exception::class);
        $this->item->task = $badvalue; // this should croak
    }

    function testTaskTooLong() {
        $badvalue = "Mow the lawn. Make sure the grass is short but not too short. I think about"
                . "5cm would be good. Actually, nevermind. Make it 1 cm. Actually... 1cm is too short."
                . "Make it around 3cm. Yes, 3cm would be perfect.";
        $this->expectException('A task cannot be longer than 30 characters');
        $this->item->task = $badvalue; // this should croak
    }

    function testInvalidPriority() {
        $badvalue = "kinda low";
        $this->expectException('Priority must be either small, medium, or large');
        $this->item->priority = $badvalue; // this should croak
    }
    
    function testInvalidSize() {
        $badvalue = "too small";
        $this->expectException('The size must be either small, medium, or large');
        $this->item->size = $badvalue; // this should croak

    }

    function testInvalidGroup() {
        $badvalue = "party";
        $this->expectException('Please choose one of the valid groups');
        $this->item->group = $badvalue; // this should croak

    }

    function testInvalidStatus() {
        $badvalue = "almost done";
        $this->expectException('A status must be either complete or in progress');
        $this->item->status = $badvalue; // this should croak

    }
    
    


}