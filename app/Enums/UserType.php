<?php

namespace App\Enums;

enum UserType: string
{
    case COMPANY = 'company';
    case CANDIDATE = 'candidate';
    case ADMIN = 'admin';
    case SUPERADMIN = 'super_admin';
}
