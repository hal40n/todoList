<?php

namespace App\Repositories;

use App\Models\Todo;

Interface TodoRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update(Todo $todo, array $attributes);
    public function delete(Todo $todo);
}