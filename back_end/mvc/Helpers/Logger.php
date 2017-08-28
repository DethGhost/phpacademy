<?php

class Logger
{

    const LOG_LEVEL_ERROR = "error";
    const LOG_LEVEL_REQUEST = "request";

    public function __construct($type, $message = "")
    {
        $filePath = self::getFilePath($type);
        $content = self::getFileContents($filePath);
        $content[] = [
            'message' => $message,
            'time' => time()
        ];
        $this->filePutContents($filePath, $content);
    }

    private static function getFilePath($type)
    {
        return realpath(__DIR__ . "/../storage/" . $type . ".json");
    }

    private static function getFileContents($filePath)
    {
        if (!file_exists($filePath)) {
            throw new Exception("FILE NOT FOUND BY PATH: " . $filePath);
        }
        return json_decode(file_get_contents($filePath), true);
    }

    private function filePutContents($filePath, $data)
    {
        return (bool)file_put_contents($filePath, json_encode($data));
    }

    public static function getAllErrors()
    {
        return self::getFileContents(self::getFilePath(Logger::LOG_LEVEL_ERROR));
    }

    public static function getAllRequests()
    {
        return self::getFileContents(self::getFilePath(Logger::LOG_LEVEL_REQUEST));
    }
}