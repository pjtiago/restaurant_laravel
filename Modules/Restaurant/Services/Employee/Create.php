<?php
namespace Modules\Restaurant\Services\Employee;

use App\Helpers\UploadFile;
use Modules\Restaurant\Http\Models\Employee;

class Create
{
    public function save(array $data)
    {
        Employee::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'birthday' => $data['birthday'],
            'linkdin' => $data['linkdin'],
            'twitter' => $data['twitter'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'fk_visible' => $data['fk_visible'],
            'fk_role' => $data['fk_role'],
            'photo' => isset($data['photo']) ? UploadFile::upload($data['photo'], 'employees') : null,
        ]);
    }
}
