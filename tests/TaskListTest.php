<?php

use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase {

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('Task');
        $this->CI->load->model('Tasks');
        $this->bowl = new Task();
    }

    function testMoreUncompletedThanCompleted() {
        $uncompleted = 0;
        $completed = 0;
        $expected = 1;
        $result = 0;

        foreach ($this->tasks->all() as $task) {
            if ($task->status == 'in progress') {
                $uncompleted++;
            } else if ($task->status == 'complete') {
                $completed++;
            }
        }

        if ($uncompleted > $completed) {
            $result = 1;
        } else {
            $result = 0;
        }

        $this->assertEquals($expected, $result);
    }

}
