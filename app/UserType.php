<?php

namespace App;

enum UserType
{
    case USER = 0;
    case ADMIN = 1;
    case MANAGER = 2;

    public function label(): string
    {
        return match ($this) {
            self::USER => 'user',
            self::ADMIN => 'admin',
            self::MANAGER => 'manager',
        };
    }
}
