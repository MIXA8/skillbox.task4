<?php

namespace App\Http\Enum;

enum PostStatus:string
{
    case PUBLISHED = 'PUBLISHED';
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';
}
