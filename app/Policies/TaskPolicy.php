<?php

namespace Cinema\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Cinema\User;
use Cinema\Task;

class TaskPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Task $task)
    {
        return $user->id === $task->user_id;   
    }
}
