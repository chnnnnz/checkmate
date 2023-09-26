<?php

namespace App\Http\Interfaces;

interface UploadInterface {

    /**
     * 이미지 업로드
     *
     * @param array $file
     * @param string $directory
     * @return string
     */
    public function uploadImage(array $file, string $directory): string;

    /**
     * 멀티 이미지 업로드
     *
     * @param array $files
     * @param array $titles
     * @param string $directory
     * @return array
     */
    public function uploadMultiImage(string $directory, array $files, array $titles): array;

}
