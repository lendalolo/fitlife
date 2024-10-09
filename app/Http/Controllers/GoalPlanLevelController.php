<?php

namespace App\Http\Controllers;

use App\Models\GoalPlanLevel;
use App\Http\Requests\StoreGoalPlanLevelRequest;
use App\Http\Requests\UpdateGoalPlanLevelRequest;

class GoalPlanLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getPlanForGoals($ids)
    {
        $idsArray = explode(',', $ids);
        $targets = GoalPlanLevel::query()->whereIn('goal_id', $idsArray)->with(['planLevels.plan', 'planLevels.level'])->get();
        return response()->json($targets);
    }

    // public function getPlanForGoals($ids)
    // {
    //     $plans = PlanLevel::query()
    //         ->with(['plan', 'level'])
    //         ->whereHas('goalPlanLevel', function ($q)  use ($ids) {
    //             $q->where('goal_id', $ids);
    //         })
    //         ->get();

    //     return response()->json($plans);
    // }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoalPlanLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GoalPlanLevel $goalPlanLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoalPlanLevelRequest $request, GoalPlanLevel $goalPlanLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GoalPlanLevel $goalPlanLevel)
    {
        //
    }
}
