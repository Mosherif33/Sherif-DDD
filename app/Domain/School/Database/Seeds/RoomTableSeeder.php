<?php

namespace App\Domain\School\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Domain\School\Entities\Room;

class RoomTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Room::factory(3)->times(50);
    }
}
