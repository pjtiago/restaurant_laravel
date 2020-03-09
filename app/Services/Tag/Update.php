<?php
namespace App\Services\Tag;

use App\Models\Tag;

class Update
{
    public function save(Tag $tag, array $data)
    {
        $tag->update([
            'name' => $data['name'],
            'tag' => strtoupper($data['name']),
            'fk_status' => $data['fk_status'],
        ]);
    }
}
