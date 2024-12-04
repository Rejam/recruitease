<?php

namespace App\Enums;

enum VacancyStatus: string
{
    case Draft = 'draft';
    case Published = 'published';
    case Filled = 'filled';
}
