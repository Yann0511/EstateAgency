<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\Input;

class UserRepository extends ResourceRepository
{

    public function __construct(User $user)
	{
		$this->model = $user;
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	private function save(User $user, Array $inputs)
	{
		$user->role = $inputs['role'];
		$user->surname = $inputs['surname'];
		$user->name = $inputs['name'];
		$user->email = $inputs['email'];
		$user->adresse = $inputs['adresse'];
		$user->about = $inputs['about'];

		$user->save();
	}

	public function store(array $data)
    {
        return User::create([
            'role' => $data['role'],
            'surname' => $data['surname'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}