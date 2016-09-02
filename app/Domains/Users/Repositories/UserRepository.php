<?php

namespace VCCon\Domains\Users\Repositories;

use VCCon\Domains\Users\User;

class UserRepository
{
	
	public function getAll($paginate = false, $take = 10)
	{
		$query = User::query();

		if($paginate)
		{
			return $query->paginate($take);
		}

		if(is_int($take))
		{
			$query->take($take);
		}

		return $query->get();
	}
}