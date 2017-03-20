<?php declare(strict_types = 1);

namespace Room11\StackChat\WebSocket;

use Amp\Promise;
use Room11\StackChat\Entities\ChatMessage;
use Room11\StackChat\Event\Event;
use Room11\StackChat\Room\Identifier;

interface EventDispatcher
{
    function onWebSocketEvent(Event $event): Promise;

    function onMessageEvent(ChatMessage $message): Promise;

    function onConnect(Identifier $identifier): Promise;

    function onDisconnect(Identifier $identifier): Promise;
}
