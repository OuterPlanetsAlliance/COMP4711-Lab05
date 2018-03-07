<?php
use PHPUnit\Framework\TestCase;

class TaskListTest  extends TestCase {

  function setUp() {
    $this->CI = &get_instance();
    $this->CI->load->model('Task');
    $this->CI->load->model('Tasks');
    $this->bowl = new Task();
  }

}
