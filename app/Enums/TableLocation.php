<?php
namespace App\Enums;
use App\Models\Table;
enum TableLocation:string
{
    case Front = 'front';
    case Inside = 'inside';
    case Outside = 'outside';
}
