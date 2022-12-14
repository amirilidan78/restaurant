<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\MealPlan;
use App\Services\Date\DateService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealPlanSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run()
    {
        $plans = [] ;
        $meals = Meal::all() ;
        foreach ( $meals as $index => $meal ) {
            $plans[] = [
                [
                    "date" => DateService::CarbonToDate(now()->addDays($index))
                ],
                [
                    "meal_id" => $meal["id"]
                ]
            ];
        }

        foreach ( $plans as $plan ) {
            MealPlan::query()->updateOrCreate(...$plan) ;
        }
    }
}
