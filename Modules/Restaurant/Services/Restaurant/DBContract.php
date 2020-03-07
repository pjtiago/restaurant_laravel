<?php
namespace Modules\Restaurant\Services\Restaurant;

use Illuminate\Database\Eloquent\Collection;

interface DBContract
{
    public function getVisibleWithProducts(): Collection;
}
