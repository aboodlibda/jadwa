<?php

namespace App\Http\Controllers;

use App\Models\admin\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects.index');
    }
    public function get_projects()
    {
        $project = Project::select('*');
        
        return DataTables::of($project)
            ->addIndexcolumn()
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn = $btn . '&nbsp; <a data-bs-toggle="modal" data-bs-target="#kt_modal_1" title="تأكيد البريد" style="cursor: pointer"  data-id="{{ $user->id }}" class="text-primary"><i
                class="mdi mdi-email-send font-size-18"></i></a>';
                $btn = $btn . '&nbsp;<a href="" title="تعديل" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>';
                $btn = $btn . '&nbsp;<a data-bs-toggle="modal" data-bs-target="#kt_modal_2" title="حذف" style="cursor: pointer"  data-id="{{ $user->id }}"  class="text-danger"><i
                                                    class="mdi mdi-delete font-size-18"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
           
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
