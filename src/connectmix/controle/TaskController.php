<?php

namespace connectmix\controle;

use  connectmix\persistencia\TaskDAO;
use  connectmix\entidades\Task;
use connectmix\controle\AbstractController;

class TaskController extends AbstractController {

	public function __construct() {
	    parent::__construct(new TaskDAO ());
	}

	public function insert($json){
		$task = new Task($json->id,$json->title,$json->description,$json->status);
    	$this->getDao()->insert ( $task );
    	return ["mensagem"=>"Chamado inserido com sucesso"];
	}
	
	public function update($id, $json){
		
	}

	public function delete($id){
		
	}
}
