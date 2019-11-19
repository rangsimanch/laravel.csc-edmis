<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJobtitleRequest;
use App\Http\Requests\StoreJobtitleRequest;
use App\Http\Requests\UpdateJobtitleRequest;
use App\Jobtitle;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JobtitleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('jobtitle_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobtitles = Jobtitle::all();

        return view('admin.jobtitles.index', compact('jobtitles'));
    }

    public function create()
    {
        abort_if(Gate::denies('jobtitle_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Department::all()->pluck('name', 'id');

        return view('admin.jobtitles.create', compact('departments'));
    }

    public function store(StoreJobtitleRequest $request)
    {
        $jobtitle = Jobtitle::create($request->all());
        $jobtitle->departments()->sync($request->input('departments', []));

        return redirect()->route('admin.jobtitles.index');
    }

    public function edit(Jobtitle $jobtitle)
    {
        abort_if(Gate::denies('jobtitle_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Department::all()->pluck('name', 'id');

        $jobtitle->load('departments');

        return view('admin.jobtitles.edit', compact('departments', 'jobtitle'));
    }

    public function update(UpdateJobtitleRequest $request, Jobtitle $jobtitle)
    {
        $jobtitle->update($request->all());
        $jobtitle->departments()->sync($request->input('departments', []));

        return redirect()->route('admin.jobtitles.index');
    }

    public function show(Jobtitle $jobtitle)
    {
        abort_if(Gate::denies('jobtitle_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobtitle->load('departments');

        return view('admin.jobtitles.show', compact('jobtitle'));
    }

    public function destroy(Jobtitle $jobtitle)
    {
        abort_if(Gate::denies('jobtitle_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobtitle->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobtitleRequest $request)
    {
        Jobtitle::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
