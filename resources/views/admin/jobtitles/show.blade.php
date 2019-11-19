@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.jobtitle.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.jobtitle.fields.id') }}
                        </th>
                        <td>
                            {{ $jobtitle->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobtitle.fields.name') }}
                        </th>
                        <td>
                            {{ $jobtitle->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Department
                        </th>
                        <td>
                            @foreach($jobtitle->departments as $id => $department)
                                <span class="label label-info label-many">{{ $department->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection