<?php

namespace App\Jobs;

use App\Models\ParkingAssignment;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteExpiredParkingAssignmentsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct() {}

    public function handle(): void
    {

        $deletedRecords = ParkingAssignment::where('expires_at', '<=', Carbon::now())->delete();

        ParkingAssignment::where('expires_at', '<=', Carbon::now())->delete();

        logger()->info("Deleted {$deletedRecords} expired parking assignments.");
    }
}
