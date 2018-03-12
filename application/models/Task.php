<?php

 class Task extends Entity {
    protected $id;
    protected $task;
    protected $priority;
    protected $size;
    protected $group;
    protected $status;

    public function setId($value) {
        if (empty($value))
            throw new Exception('An Id must have a value');

        $this->id = $value;

    }

    public function setTask($value) {
        if (strlen($value) > 64) {
          throw new Exception('Task cannot exceed 64 characters');
        }
        if (!ctype_alnum(trim(str_replace(' ','',$value))))
            throw new Exception('Task contains invalid characters');

        $this->priority = $value;
    }

    public function setPriority($value) {
      if (! is_numeric($value))
          throw new Exception('Priority cannot be empty');
      if ($value > 4)
          throw new Exception('Please choose a valid priority');

      $this->priority = $value;
    }

    public function setSize($value) {
      if (! is_numeric($value))
          throw new Exception('Size cannot be empty');
      if ($value > 4)
          throw new Exception('Please choose a valid size');

      $this->size = $value;
    }

    public function setGroup($value) {
      if (! is_numeric($value))
          throw new Exception('Group cannot be empty');
      if ($value > 4)
          throw new Exception('Please choose a valid group');

      $this->group = $value;
    }

     public function setStatus($value) {
         if (! is_numeric($value))
             throw new Exception('Status cannot be empty');
         if ($value > 2)
             throw new Exception('Please choose a valid status');

         $this->status = $value;
     }
}
