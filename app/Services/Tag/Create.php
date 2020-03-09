<?php
namespace App\Services\Tag;

use App\Models\Tag;

class Create
{
    public function save(array $data)
    {
        Tag::create([
            'name' => $data['name'],
            'tag' => strtoupper($data['name']),
            'fk_status' => $data['fk_status'],
        ]);
    }
}
