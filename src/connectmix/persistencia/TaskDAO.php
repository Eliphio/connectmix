<?php

namespace connectmix\persistencia;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use connectmix\persistencia\TaskDAO;
use connectmix\entidades\Task;

class TaskDAO extends AbstractDAO{

public function __construct() {
		parent::__construct('connectmix\entidades\Task');
	}


}
