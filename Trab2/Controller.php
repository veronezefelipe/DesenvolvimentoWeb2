<?php
require_once('Model.php');

class TaskController {
    public function listTasksView() {
        $taskModel = new TaskModel();
        
        $tasks = $taskModel->getTasks();
        
        include('View.php');
    }
}
?>
