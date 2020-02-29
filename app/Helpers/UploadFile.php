<?php
namespace App\Helpers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

class UploadFile
{
    const BASE_PATH = '/uploads/images/';
    const DISK = 'public';

    /**
     * @param FormRequest $request
     * @param string $field
     * @param string $folder
     * @return false|string
     */
    public static function uploadWithForm(FormRequest $request, string $field, string $folder)
    {
        $self = new self;

        if ($request->has($field)) {
            $image = $request->file($field);
            $name = explode(".", $image->getClientOriginalName(), 2)[0];

            $filePath = $self->save($image, $folder, $name);
        }

        return $filePath ?? false;
    }

    /**
     * @param UploadedFile $image
     * @param string $folder
     * @return false|string
     */
    public static function upload(UploadedFile $image, string $folder)
    {
        $self = new self;

        $name = explode(".", $image->getClientOriginalName(), 2)[0];
        $filePath = $self->save($image, $folder, $name);


        return $filePath ?? false;
    }

    /**
     * @param UploadedFile $uploadedFile
     * @param $folder
     * @param $filename
     * @return false|string
     */
    private function save(UploadedFile $uploadedFile, $folder, $filename)
    {
        $name = sprintf('%s_%s', $filename, time());
        $folder = sprintf('%s%s', self::BASE_PATH, $folder);

        return $uploadedFile->storeAs(
            $folder,
            $name.'.'. $uploadedFile->getClientOriginalExtension(),
            self::DISK
        );
    }
}
