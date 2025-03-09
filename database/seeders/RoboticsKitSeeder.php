<?php

namespace Database\Seeders;

use App\Models\RoboticsKit;
use Illuminate\Database\Seeder;

class RoboticsKitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        RoboticsKit::create(['name' => 'StarterKit']);
        RoboticsKit::create(['name' => 'Educational Robotics Kit']);
        RoboticsKit::create(['name' => 'Kit5']);
    }
}