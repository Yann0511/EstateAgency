<?php

namespace App\Repositories;

use App\Models\Offre;

class OffreRepository extends ResourceRepository
{

    public function __construct(Offre $offre)
	{
		$this->model = $offre;
	}

	public function getpagination($n)
	{
		return $this->offre->whith('propriete')->orderBy('offre.created_at', 'desc')->pagination($n);
	}

}