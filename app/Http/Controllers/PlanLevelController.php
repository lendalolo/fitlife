<?php

namespace App\Http\Controllers;

use App\Models\PlanLevel;
use App\Http\Requests\StorePlanLevelRequest;
use App\Http\Requests\UpdatePlanLevelRequest;

class PlanLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = PlanLevel::with(['plan', 'level'])->get();
        return response()->json($index);
    }

    public function getPlanForGoals($ids)
    {
        $plans = PlanLevel::query()
            ->with(['plan', 'level'])
            ->whereHas('goalPlanLevel', function ($q)  use ($ids) {
                $q->where('goal_id', $ids);
            })
            ->get();

        return response()->json($plans);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PlanLevel $planLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanLevelRequest $request, PlanLevel $planLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanLevel $planLevel)
    {
        //
    }
}
