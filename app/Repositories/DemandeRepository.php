<?php

namespace App\Repositories;

use App\Models\Demande;

class DemandeRepository extends ResourceRepository
{

    public function __construct(Demande $demande)
	{
		$this->model = $demande;
	}

	public function getpagination($n)
	{
		return $this->model->whith('user')->orderBy('offre.created_at', 'desc')->pagination($n);
	}

}