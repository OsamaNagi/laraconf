<?php

namespace App\Enums;

enum Region: string
{
    case US = 'us';
    case EU = 'eu';
    case AU = 'au';
    case EG = 'eg';

    case ONLINE = 'online';
}
