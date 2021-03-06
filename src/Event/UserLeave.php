<?php declare(strict_types=1);

namespace Room11\StackChat\Event;

use Room11\StackChat\Event\Traits\RoomSource;
use Room11\StackChat\Event\Traits\UserSource;
use Room11\StackChat\Room\Room as ChatRoom;

class UserLeave extends BaseEvent implements RoomSourcedEvent, UserSourcedEvent
{
    use RoomSource, UserSource;

    const TYPE_ID = EventType::USER_LEFT;

    public function __construct(array $data, ChatRoom $room)
    {
        parent::__construct($data, $room->getHost());

        $this->room     = $room;

        $this->userId   = $data['user_id'];
        $this->userName = $data['user_name'];
    }
}
