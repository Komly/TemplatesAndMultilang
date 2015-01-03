<?php namespace Komly\HTTP;

class Response {

    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }
}
