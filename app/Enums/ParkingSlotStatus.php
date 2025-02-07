<?php

namespace App\Enums;

enum ParkingSlotStatus: string
{
    case AVAILABLE = 'available';
    case OCCUPIED = 'occupied';
}
