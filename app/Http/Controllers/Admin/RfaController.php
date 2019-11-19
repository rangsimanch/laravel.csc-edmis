<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyRfaRequest;
use App\Http\Requests\StoreRfaRequest;
use App\Http\Requests\UpdateRfaRequest;
use App\Rfa;
use App\RfaCommentStatus;
use App\RfaDocumentStatus;
use App\Rfatype;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RfaController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('rfa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rfas = Rfa::all();

        return view('admin.rfas.index', compact('rfas'));
    }

    public function create()
    {
        abort_if(Gate::denies('rfa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = Rfatype::all()->pluck('type_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $issuebies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $assigns = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $create_bies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $action_bies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comment_bies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $information_bies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comment_statuses = RfaCommentStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $for_statuses = RfaCommentStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $document_statuses = RfaDocumentStatus::all()->pluck('status_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.rfas.create', compact('types', 'issuebies', 'assigns', 'create_bies', 'action_bies', 'comment_bies', 'information_bies', 'comment_statuses', 'for_statuses', 'document_statuses'));
    }

    public function store(StoreRfaRequest $request)
    {
        $rfa = Rfa::create($request->all());

        foreach ($request->input('file_upload_1', []) as $file) {
            $rfa->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('file_upload_1');
        }

        return redirect()->route('admin.rfas.index');
    }

    public function edit(Rfa $rfa)
    {
        abort_if(Gate::denies('rfa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = Rfatype::all()->pluck('type_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $issuebies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $assigns = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $create_bies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $action_bies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comment_bies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $information_bies = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comment_statuses = RfaCommentStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $for_statuses = RfaCommentStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $document_statuses = RfaDocumentStatus::all()->pluck('status_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $rfa->load('type', 'issueby', 'assign', 'create_by', 'action_by', 'comment_by', 'information_by', 'comment_status', 'for_status', 'document_status');

        return view('admin.rfas.edit', compact('types', 'issuebies', 'assigns', 'create_bies', 'action_bies', 'comment_bies', 'information_bies', 'comment_statuses', 'for_statuses', 'document_statuses', 'rfa'));
    }

    public function update(UpdateRfaRequest $request, Rfa $rfa)
    {
        $rfa->update($request->all());

        if (count($rfa->file_upload_1) > 0) {
            foreach ($rfa->file_upload_1 as $media) {
                if (!in_array($media->file_name, $request->input('file_upload_1', []))) {
                    $media->delete();
                }
            }
        }

        $media = $rfa->file_upload_1->pluck('file_name')->toArray();

        foreach ($request->input('file_upload_1', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $rfa->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('file_upload_1');
            }
        }

        return redirect()->route('admin.rfas.index');
    }

    public function show(Rfa $rfa)
    {
        abort_if(Gate::denies('rfa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rfa->load('type', 'issueby', 'assign', 'create_by', 'action_by', 'comment_by', 'information_by', 'comment_status', 'for_status', 'document_status');

        return view('admin.rfas.show', compact('rfa'));
    }

    public function destroy(Rfa $rfa)
    {
        abort_if(Gate::denies('rfa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rfa->delete();

        return back();
    }

    public function massDestroy(MassDestroyRfaRequest $request)
    {
        Rfa::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
