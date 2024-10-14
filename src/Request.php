<?php

namespace Slmatthew\Tetragram;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Request {
    private static ?Client $client = null;

    private static Telegram $telegram;

    private static string $currentAction;

    private static $actions = [
        'getMe',
    ];

    public static function initialize(Telegram $telegram): void {
        self::$telegram = $telegram;
        self::setClient(self::$client ?: new Client(['base_uri' => 'https://api.telegram.org/']));
    }

    public static function setClient(Client $client): void {
        self::$client = $client;
    }

    public static function execute(string $action, array $data = []): ?string {
        try {
            $response = self::$client->post('/bot' . self::$telegram->getToken() . '/' . $action);
            $result   = $response->getBody();
        } catch (GuzzleException $e) {
            $result   = null;
        }

        return $result;
    }

    public static function send(string $action, array $data = []): bool|array {
        self::$currentAction = $action;

        $raw_response = self::execute($action, $data);
        $response     = json_decode($raw_response, true);

        if($response == null) {
            return false;
        }

        self::$currentAction = '';

        return $response;
    }

    public static function __callStatic(string $action, array $data) {
        return static::send($action, reset($data) ?: []);
    }
}