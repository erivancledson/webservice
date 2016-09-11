<?php
class todoController extends controller {

    public function __construct() {
        parent::__construct();
    }
    public function index() {}


    public function listar() {
    	$array = array();
        
    	$t = new Tarefas();
        //preenchendo o array
    	$array = $t->listar();
        //o retorno vai ser um json
    	header("Content-Type: application/json");
        //passa o array como parametro
    	echo json_encode($array);
    }
      //adicionando uma tarefa
    public function add() {
    	if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
    		$titulo = addslashes($_POST['titulo']);
                 //chama o model tarefa
    		$t = new Tarefas();
    		$t->addTarefa($titulo);
    	}
    }
      
    public function del() {
    	if(isset($_POST['id']) && !empty($_POST['id'])) {
    		$id = addslashes($_POST['id']);

    		$t = new Tarefas();
    		$t->delTarefa($id);
    	}
    }

    public function update() {
    	if(isset($_POST['id']) && !empty($_POST['id'])) {
    		$id = addslashes($_POST['id']);
    		$status = addslashes($_POST['status']);

    		$t = new Tarefas();
    		$t->updateStatus($status, $id);
    	}
    }
    

}