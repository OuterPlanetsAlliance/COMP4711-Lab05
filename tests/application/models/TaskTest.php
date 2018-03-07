<?php

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
  function setUp() {
    $this->CI = &get_instance();
    $this->CI->load->model('task');
    $this->item = new Task();
}

  public function testId() {
    $this->assertEquals("", $this->item->setId(1));
  }

  public function testTask() {
    $this->assertLessThan(64,
    strlen($this->item->setTask("18BD5E442A899731024D2B316396919864B07FB8F9B754F18F5A3CAA0534C27C")));
  }

  public function testPriority() {
    $this->assertLessThan(4, $this->item->setPriority(3));
  }

  public function testSize() {
    $this->expectException(Exception::class);
    $this->assertGreaterThan(4, $this->item->setSize(5));
  }

  public function testGroup() {
    $this->expectException(Exception::class);
    $this->assertGreaterThan(4, $this->item->setGroup(5));
  }
}
