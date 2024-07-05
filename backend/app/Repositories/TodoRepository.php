<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository implements TodoRepositoryInterface
{
    public function getAll()
    {
        return Todo::all();
    }

    public function getById($id)
    {
        return Todo::find($id);
    }

    public function create(array $attributes)
    {
        return Todo::create($attributes);
    }

    public function update(Todo $todo, array $attributes)
    {
        return $todo->update($attributes);
    }

    public function delete(Todo $todo)
    {
        return $todo->delete();
    }
}