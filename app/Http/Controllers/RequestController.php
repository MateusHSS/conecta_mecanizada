<?php

namespace App\Http\Controllers;

use App\Request as EmployeeRequest;
use Illuminate\Http\Request;
use App\User;
use App\RequestCriticality;
use App\RequestStatus;
use App\Equipment;
use App\Plan;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.requests.list_requests');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.requests.new_request');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee_request = new EmployeeRequest;
        //MUDAR
        $employee_request->employee_id = User::find(2)->employee()->first()->id;
        $employee_request->request_criticality_id = RequestCriticality::find($request->criticality)->id;
        $employee_request->equipment_id = Equipment::find($request->equipment)->id;
        $employee_request->request_status_id = RequestStatus::where('slug', 'aberto')->first()->id;

        if(isset($request->plan)){
            $employee_request->plan_id = Plan::find($request->plan)->id;
        }

        $employee_request->date = date('Y-m-d');
        $employee_request->reference = $request->reference;
        $employee_request->position = $request->position;
        $employee_request->observations = $request->obs;
        $employee_request->description = $request->description;

        $employee_request->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  EmployeeRequest  $employee_request
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeRequest $employee_request)
    {
        echo json_encode($employee_request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  EmployeeRequest  $employee_request
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeRequest $employee_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  EmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeRequest $employee_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  EmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeRequest $employee_request)
    {
        //
    }
}
