<?php
class Tarefas extends model {
	
	public function listar() {
		$array = array();
                 //pega as tarefas
		$sql = "SELECT * FROM tarefas";
		$sql = $this->db->query($sql);
                //verifica se tem alguma tarefa
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
                //retorna o array
		return $array;
	}
        //adiciona tarefa
	public function addTarefa($titulo) {
		$this->db->query("INSERT INTO tarefas SET titulo = '$titulo'");
	}
             //recebe o id e deleta
	public function delTarefa($id) {
		$this->db->query("DELETE FROM tarefas WHERE id = '$id'");
	}
       // 1 tarefa concluida
	public function updateStatus($status, $id) {
		$this->db->query("UPDATE tarefas SET status = '$status' WHERE id = '$id'");
	}

}