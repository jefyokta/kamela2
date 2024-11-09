<?php

namespace Kamela\Websocket;

use Swoole\Coroutine;
use Swoole\Table;
use Swoole\WebSocket\Frame;
use Swoole\WebSocket\Server;

class Notification
{


    public static function handle(Server $server, Frame $frame, Table $table)
    {

        $data = $frame->data;

        $message =  json_decode($data);

        foreach ($table as $fd => $row) {
            $details = json_decode($row['details']);
            if ($details->isAdmin === 1) {
                if ($server->exists($fd)) {
                    $server->push($fd, json_encode(["message" => $message->message, "guestName" => $message->guestName, "houseId" => $message->houseId]));
                }
            }
        }
        $server->push($frame->fd, json_encode($data));
    }


    public static function house(Server $server, Frame $frame, Table $table)
    {
        $data = json_decode($frame->data);

        foreach ($server->connections as $fd) {

            $server->push($fd, json_encode(["event" => "houseUpdate", "house" => [
                "id" => $data->id,
                "status" => $data->status
            ]]));
        }
    }
}
