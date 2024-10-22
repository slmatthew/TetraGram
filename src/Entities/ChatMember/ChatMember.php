<?php

namespace Slmatthew\Tetragram\Entities\ChatMember;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getStatus() The member's status in the chat
 */
class ChatMember extends Entity implements Factory
{
    public const string TYPE_CREATOR = 'creator';

    public const string TYPE_ADMINISTRATOR = 'administrator';

    public const string TYPE_MEMBER = 'member';

    public const string TYPE_RESTRICTED = 'restricted';

    public const string TYPE_LEFT = 'left';

    public const string TYPE_KICKED = 'kicked';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_CREATOR       => new ChatMemberOwner($data),
            self::TYPE_ADMINISTRATOR => new ChatMemberAdministrator($data),
            self::TYPE_MEMBER        => new ChatMemberMember($data),
            self::TYPE_RESTRICTED    => new ChatMemberRestricted($data),
            self::TYPE_LEFT          => new ChatMemberLeft($data),
            self::TYPE_KICKED        => new ChatMemberBanned($data),
        };
    }
}
