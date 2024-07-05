<?php

namespace App\Services;

use App\Repositories\TodoRepositoryInterface;
use App\Models\Todo;

class TodoService
{
    protected $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function getAll()
    {
        return $this->todoRepository->getAll();
    }

    public function getId($id)
    {
        return $this->todoRepository->getById($id);
    }

    public function create(array $attributes)
    {
        return $this->todoRepository->create($attributes);
    }

    public function update(Todo $todo, array $attributes)
    {
        return $this->todoRepository->update($todo, $attributes);
    }

    public function delete(Todo $todo)
    {
        return $this->todoRepository->delete($todo);
    }
}