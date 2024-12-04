<?php

namespace App\Enums;

enum ApplicationStatus: string
{
    case Draft = 'draft';
    case Pending = 'pending';
    case Accepted = 'accepted';
    case Rejected = 'rejected';
}
