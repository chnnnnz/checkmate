<?php

namespace App\Http\Interfaces;

interface AwsInterface {

    /**
     * S3 업로드
     *
     * @param array $uploadData
     * @return void
     */
    public function uploadS3(array $uploadData): void;
}
