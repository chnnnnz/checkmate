<?php

namespace App\Http\Services;

use App\Http\Interfaces\AwsInterface;
use Aws\Credentials\Credentials;
use Aws\S3\S3Client;

class AwsService implements AwsInterface {

    public function uploadS3(array $uploadData): void {
        $credentials = new Credentials(env("AWS_S3_ACCESS_KEY"), env("AWS_S3_SECRET_ACCESS_KEY"));
        $s3Config = config("resource.AWS_S3_CONFIG");
        $s3Config["credentials"] = $credentials;
        $s3 = new S3Client($s3Config);
        $s3->putObject([
            "Bucket" => env("AWS_S3_BUCKET_NAME"),
            "Key" => $uploadData["directory"].$uploadData["fileName"],
            "Body" => fopen($uploadData["target"], "r")]);
    }
}
