<?php

namespace App\Common;

class UploadCertificate
{
    public static function upload($path, $file, $disk)
    {
        return $file->store($path, $disk);
    }
}
