<?php

namespace App\Models\Dto;

class Response {
    public string $code;
    public string $message;
    public array $data;

    public function __construct(array $request) {
        $this->code = $request["code"];
        $this->message = $request["message"];
        $this->data = $request["data"] ?? [];
    }

    /**
     * @return string
     */
    public function getCode(): string {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function getData(): array {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function toJson(): string {
        return json_encode([
            "code" => $this->code,
            "message" => $this->message,
            "data" => $this->data
        ]);
    }
}
