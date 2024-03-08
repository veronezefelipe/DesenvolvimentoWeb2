<?php
class TaskModel {
    private $tasks = array();

    public function __construct() {
        $this->tasks = array(
            array('id' => 1, 'tarefa' => 'Ir na aula', 'completed' => false),
            array('id' => 2, 'tarefa' => 'Trabalhar', 'completed' => true),
            array('id' => 3, 'tarefa' => 'Ir na academia', 'completed' => false)
        );
    }

    public function getTasks() {
        return $this->tasks;
    }
}
?>
