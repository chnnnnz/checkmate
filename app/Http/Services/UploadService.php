<?php

namespace App\Http\Services;

use Exception;
use App\Models\Dto\Response;
use App\Http\Interfaces\AwsInterface;
use App\Http\Interfaces\UploadInterface;

class UploadService implements UploadInterface {
    protected int $maxFileSize;
    protected int $maxUploadSize;
    protected array $allowedImageExtension;
    protected AwsInterface $awsService;

    public function __construct(AwsInterface $awsService) {
        $this->maxFileSize = config("resource.MAX_FILE_SIZE");
        $this->maxUploadSize = config("resource.MAX_UPLOAD_SIZE");
        $this->allowedImageExtension = config("resource.ALLOWED_IMAGE_EXTENSIONS");
        $this->awsService = $awsService;
    }

    /**
     * @throws Exception
     */
    public function uploadImage($file, $directory): string {
        $routeFile = "";
        if (!empty($file->getSize()) && $file->getError() == 0) {
            if ($file->getSize() > $this->maxFileSize) {
                $response = new Response(config("response.ERROR_RESPONSE.E21"));
                throw new Exception($response->getMessage(), $response->getCode());
            } else if (!in_array($file->getMimeType(), $this->allowedImageExtension)) {
                $response = new Response(config("response.ERROR_RESPONSE.E22"));
                throw new Exception($response->getMessage(), $response->getCode());
            } else {
                $extension = explode(".", $file->getClientOriginalName());
                $extension = strtolower($extension[count($extension) - 1]);
                $routeFile = md5(microtime().rand(0, 9999));
                $routeFile = $routeFile.'.'.$extension;
                $uploadData = [
                    "directory" => $directory,
                    "fileName" => $routeFile,
                    "target" => $file->getPathname()];
                $this->awsService->uploadS3($uploadData);
            }
        }
        return $routeFile;
    }

	/**
	 * @throws Exception
	 */
	public function uploadMultiImage($directory, $files, $titles = []): array {
	    $imageArray = array();
		if (empty($files)) return $imageArray;

		foreach ($files as $index => $file) {
			if (!empty($file->getSize()) && $file->getError() == 0) {
				$imageArray[] = $this->uploadImage($file, $directory);
			} else if (!empty($titles[$index])) {
				$imageArray[] = $titles[$index];
			}
		}
        return $imageArray;
    }
}
