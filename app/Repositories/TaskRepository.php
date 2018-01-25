<?php

namespace Cinema\Repositories;

use Cinema\User;
use Cinema\Task;

class TaskRepository
{
	public function forUser(User $user)	
	{
		return Task::where('user_id',$user->id)
				->orderBy('created_at','des')
				->get();
	}
}