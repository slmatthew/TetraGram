<?php

namespace Slmatthew\Tetragram\Entities\ChatMember;

use Slmatthew\Tetragram\Entities\Entity;
use Slmatthew\Tetragram\Entities\User;

/**
 * Class ChatMemberNotImplemented
 *
 * @method string getStatus() The member's status in the chat
 * @method User   getUser()   Information about the user
 */
class ChatMemberNotImplemented extends Entity implements ChatMember
{
    //
}
