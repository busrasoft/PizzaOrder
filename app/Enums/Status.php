<?php

namespace App\Enums;

class Status
{
    const CANCELED = 'Canceled';
    const DELEVIRY = 'Delivery';
    const not_in_delivery = 'not in delivery';
    const ready_for_delivery = 'ready for delivery';
    const DISPATCHED = 'Dispatched';
}