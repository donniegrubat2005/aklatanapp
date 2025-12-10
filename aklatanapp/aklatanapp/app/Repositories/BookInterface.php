<?php

namespace App\Repositories;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface BookInterface
{
    public function paginate(int $perPage = 15): LengthAwarePaginator;
    public function find(int $id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id): bool;
}
