w<?php

class Task extends Entity {
    protected $task;
    protected $priority;
    protected $size;
    protected $group;
    protected $status;
    
// insist that a Task be present and no longer than 30 characters
public function setTask($value) {
if (empty($value))
    throw new Exception('A Name cannot be empty');
if (strlen($value) > 30)
    throw new Exception('A task cannot be longer than 30 characters');
$this->task = $value;
return $this;
}

// insist that a priority be one of small, medium, or large
public function setPriority($value) {
$allowed = ['small', 'medium', 'large'];
if (!in_array($value, $allowed))
    throw new Exception('Priority must be either small, medium, or large');
$this->priority = $value;
return $this;
}

// insist that a size be one of small, medium, or large
public function setSize($value) {
$allowed = ['small', 'medium', 'large'];
if (!in_array($value, $allowed))
    throw new Exception('The size must be either small, medium, or large');
$this->size = $value;
return $this;
}

// insist that a group be one of house, school, work, or family
public function setGroup($value) {
$allowed = ['house', 'school', 'work', 'family'];
if (!in_array($value, $allowed))
    throw new Exception('Please choose one of the valid groups');
$this->group = $value;
return $this;
}

// insist that a status be either complete or in progress.
public function setStatus($value) {
$allowed = ['complete', 'in progress'];
if (!in_array($value, $allowed))
    throw new Exception('A status must be either complete or in progress');
$this->status = $value;
return $this;
}
}