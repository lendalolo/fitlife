<?php

namespace Database\Seeders;

use App\Models\Goal;
use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MideaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image_1 = storage_path('images\blog-two.jpg');
        $image_2 = storage_path('images\class-one.jpg');
        for ($i = 1; $i <= 20; $i++) {
            $plan = Plan::find($i);
            $plan
                ->addMedia($image_1)
                ->preservingOriginal()
                ->toMediaCollection('plans');
        }
        for ($i = 1; $i <= 10; $i++) {
            $goal = Goal::find($i);
            $goal
                ->addMedia($image_2)
                ->preservingOriginal()
                ->toMediaCollection('goals');
        }
    }
}
