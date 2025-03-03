<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PicHotelBranch;

class PicHotelBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pic = [
            [
                'hotel_branch_id' => 1,
                'user_id' => 2,
            ]
        ];

        foreach ($pic as $key => $value) {
            PicHotelBranch::create($value);
        }
    }
}
