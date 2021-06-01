<?php

namespace App\Repositories;

use App\Models\Propriete;

class ProprieteRepository extends ResourceRepository
{

    public function __construct(Propriete $propriete)
	{
		$this->model = $propriete;
	}

	public function getPagination($n)
	{
		return $this->model->paginate($n);
	}

}