<?php
namespace Modules\Restaurant\Services\Restaurant;

use Illuminate\Database\Eloquent\Collection;

class GetCategories
{
    /** @var DBContract */
    private $repository;

    public function __construct(DBContract $repository)
    {
        $this->repository = $repository;
    }

    public function get(): Collection
    {
        return $this->repository->getVisibleWithProducts();
    }
}
