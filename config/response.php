<?php

return [
    "DEFAULT_RESPONSE" => array("code" => "S00", "message" => "정상"),
    "STATE_RESPONSE" => [
        "S01" => array("code" => "S01", "message" => "로그인되었습니다."),
        "S02" => array("code" => "S02", "message" => "로그아웃되었습니다."),
        "S03" => array("code" => "S02", "message" => "회원가입되었습니다."),
    ],
    "ERROR_RESPONSE" => [
        "E00" => array("code" => "E00", "message" => "헤더 값이 유효하지 않습니다."),
        "E01" => array("code" => "E01", "message" => "유효하지 않은 API 호출입니다."),
        "E02" => array("code" => "E02", "message" => "유효하지 않은 데이터 양식입니다."),
        "E21" => array("code" => "E21", "message" => "상품 이미지 사이즈가 허용 용량보다 커서 등록되지 않았습니다."),
        "E22" => array("code" => "E22", "message" => "허용되지 않은 확장자 형식입니다."),
        "E50" => array("code" => "E50", "message" => "SQL 에러가 발생하였습니다."),
        "E51" => array("code" => "E51", "message" => "REDIS 에러가 발생하였습니다."),
        "E52" => array("code" => "E50", "message" => "ELOQUENT 에러가 발생하였습니다."),
        "E99" => array("code" => "E99", "message" => "존재하지 않는 액션입니다."),
    ],
];
