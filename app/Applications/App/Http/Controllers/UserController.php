<?php

namespace VCCon\Applications\App\Http\Controllers;

use VCCon\Domains\Users\Repositories\UserRepository;

class UserController extends AppBaseController
{
	
	private $users;

	public function __construct(UserRepository $users)
	{
		$this->users = $users;
	}

	public function index()
	{
		$users = $this->users->getAll(true, 10);

		return $this->view('user.index', compact('users'));
	}
}