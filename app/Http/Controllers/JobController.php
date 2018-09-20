<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\JobStoreFormRequest;
use \App\Http\Requests\JobUpdateFormRequest;
use App\Job;
use App\User;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Job::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\JobStoreFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobStoreFormRequest $request)
    {
        $job = new Job();

        $job->user_id = User::query()->first()->id;
        $job->category_id = $request->input('category_id');
        $job->contract_id = $request->input('contract_id');
        $job->title = $request->input('title');
        $job->worktime_description = $request->input('worktime_description');
        $job->workarea_description = $request->input('workarea_description');
        $job->workdaytime_description = $request->input('workdaytime_description');
        $job->salary_description = $request->input('salary_description');
        $job->feature_description = $request->input('feature_description');
        $job->skill_description = $request->input('skill_description');
        $job->holiday_description = $request->input('holiday_description');
        $job->treatment_description = $request->input('treatment_description');
        $job->company_description = $request->input('company_description');
        $job->subscription_description = $request->input('subscription_description');
        $job->inquiry_description = $request->input('inquiry_description');
        $job->comment = $request->input('comment');
        $job->search_index = $request->input('search_index');
        $job->created_at = $request->input('created_at');
        $job->updated_at = $request->input('updated_at');

        $job->save();
        return response($job, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        return response($job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\JobUpdateFormRequest  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(JobUpdateFormRequest $request, Job $job)
    {
        if($request->input('category_id')) {
            $job->category_id = $request->input('category_id');
        }
        if($request->input('contract_id')) {
            $job->contract_id = $request->input('contract_id');
        }
        if($request->input('title')) {
            $job->title = $request->input('title');
        }
        if($request->input('worktime_description')) {
            $job->worktime_description = $request->input('worktime_description');
        }
        if($request->input('workarea_description')) {
            $job->workarea_description = $request->input('workarea_description');
        }
        if($request->input('workdaytime_description')) {
            $job->workdaytime_description = $request->input('workdaytime_description');
        }
        if($request->input('salary_description')) {
            $job->salary_description = $request->input('salary_description');
        }
        if($request->input('feature_description')) {
            $job->feature_description = $request->input('feature_description');
        }
        if($request->input('skill_description')) {
            $job->skill_description = $request->input('skill_description');
        }
        if($request->input('holiday_description')) {
            $job->holiday_description = $request->input('holiday_description');
        }
        if($request->input('treatment_description')) {
            $job->treatment_description = $request->input('treatment_description');
        }
        if($request->input('company_description')) {
            $job->company_description = $request->input('company_description');
        }
        if($request->input('subscription_description')) {
            $job->subscription_description = $request->input('subscription_description');
        }
        if($request->input('inquiry_description')) {
            $job->inquiry_description = $request->input('inquiry_description');
        }
        if($request->input('comment')) {
            $job->comment = $request->input('comment');
        }
        if($request->input('search_index')) {
            $job->search_index = $request->input('search_index');
        }
        if($request->input('updated_at')) {
            $job->updated_at = $request->input('updated_at');
        }

        $job->save();
        return response($job);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return response('{}');
    }
}
