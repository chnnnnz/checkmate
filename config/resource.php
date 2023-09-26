<?php

return [
    "MAX_FILE_SIZE" => 1024 * 1024 * 10,
    "MAX_UPLOAD_SIZE" => 1024 * 1024 * 200,
    "ALLOWED_IMAGE_EXTENSIONS" => ["image/jpeg", "image/png", "image/gif", "image/pjpeg"],
    "ALLOWED_EXCEL_EXTENSIONS" => [
        "xls",
        "xlsx",
        "application/x-excel",
        "application/vnd.ms-excel",
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"],
    "AWS_CLOUD_FRONT_URL" => "d39h0xn1r3o9zb.cloudfront.net",
    "IMAGE_URL" => "https://d39h0xn1r3o9zb.cloudfront.net/".env("APP_ENV")."/",
    "AWS_S3_CONFIG" => [
        "region" => "ap-northeast-2",
        "version" => "latest",
        "http" => [
            "verify" => env("AWS_S3_HTTP_VERIFY")]],
    "ROUTE_S3_BANNER" => env("APP_ENV")."/banner/",
    "ROUTE_S3_PRODUCT" => env("APP_ENV")."/product/",
];
