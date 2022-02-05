<?php

class Task {

    public $description;
    public $completed;
    public $dueDate;

    public function __construct($description, $completed, $dueDate){
        $this->description = $description;
        $this->completed = $completed;
        $this->dueDate = $dueDate;
    }
}

$taskList = [
    new Task('Learn PHP', false, 'Monday'),
    new Task('Cook food', false, 'Sunday'),
    new Task('Take out Garbage', true, 'Everday')
];

$unFinishedTasks = array_filter($taskList, function($task){
    return ! $task->completed;
});

$completedTask = 'Cook food';

$completeTask = array_map(function($task){
    if($task->description === "Cook food"){
        $task->completed = true;
    };
    return $task;
}, $taskList);

$modifiedTasks = array_map(function($task){
    return ['Description'=> $task->description];
}, $taskList);


var_export($modifiedTasks);