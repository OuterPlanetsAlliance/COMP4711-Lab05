<?php
use PHPUnit\Framework\TestCase;

class TaskListTest  extends TestCase {

  function setUp() {
    $this->CI = &get_instance();
    $this->CI->load->model('Tasks');
    $this->CI->load->model('Task');
    $this->tasklist = new Tasks();
  }

  function testUndoneVsDone(){
      $this->assertGreaterThan($this->tasklist->completed, $this->tasklist->uncompleted);
  }

}
