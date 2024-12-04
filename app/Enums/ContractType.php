<?php

namespace App\Enums;

enum ContractType: string
{
    case FullTime = 'full-time';
    case PartTime = 'part-time';
    case Consultant = 'consultant';

}
