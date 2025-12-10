<?php

namespace App\Repositories;

use App\Models\Book;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BookRepository implements BookInterface
{
    public function __construct(protected Book $model) {}

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->orderBy('title')->paginate($perPage);
    }
    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update(int $id, array $data)
    {
        $book = $this->find($id);
        $book->update($data);
        return $book;
    }
    public function delete(int $id): bool
    {
        return $this->find($id)->delete();
    }
}
