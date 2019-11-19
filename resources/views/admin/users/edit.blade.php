@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.users.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('img_user') ? 'has-error' : '' }}">
                <label for="img_user">{{ trans('cruds.user.fields.img_user') }}</label>
                <div class="needsclick dropzone" id="img_user-dropzone">

                </div>
                @if($errors->has('img_user'))
                    <em class="invalid-feedback">
                        {{ $errors->first('img_user') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.img_user_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
                <label for="dob">{{ trans('cruds.user.fields.dob') }}*</label>
                <input type="text" id="dob" name="dob" class="form-control date" value="{{ old('dob', isset($user) ? $user->dob : '') }}" required>
                @if($errors->has('dob'))
                    <em class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.dob_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                <label for="gender">{{ trans('cruds.user.fields.gender') }}*</label>
                <select id="gender" name="gender" class="form-control" required>
                    <option value="" disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\User::GENDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gender', $user->gender) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <em class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('team_id') ? 'has-error' : '' }}">
                <label for="team">{{ trans('cruds.user.fields.team') }}*</label>
                <select name="team_id" id="team" class="form-control select2" required>
                    @foreach($teams as $id => $team)
                        <option value="{{ $id }}" {{ (isset($user) && $user->team ? $user->team->id : old('team_id')) == $id ? 'selected' : '' }}>{{ $team }}</option>
                    @endforeach
                </select>
                @if($errors->has('team_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('team_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('jobtitle_id') ? 'has-error' : '' }}">
                <label for="jobtitle">{{ trans('cruds.user.fields.jobtitle') }}</label>
                <select name="jobtitle_id" id="jobtitle" class="form-control select2">
                    @foreach($jobtitles as $id => $jobtitle)
                        <option value="{{ $id }}" {{ (isset($user) && $user->jobtitle ? $user->jobtitle->id : old('jobtitle_id')) == $id ? 'selected' : '' }}>{{ $jobtitle }}</option>
                    @endforeach
                </select>
                @if($errors->has('jobtitle_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('jobtitle_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('workphone') ? 'has-error' : '' }}">
                <label for="workphone">{{ trans('cruds.user.fields.workphone') }}</label>
                <input type="text" id="workphone" name="workphone" class="form-control" value="{{ old('workphone', isset($user) ? $user->workphone : '') }}">
                @if($errors->has('workphone'))
                    <em class="invalid-feedback">
                        {{ $errors->first('workphone') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.workphone_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.user.fields.email') }}*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input type="password" id="password" name="password" class="form-control">
                @if($errors->has('password'))
                    <em class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.password_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <em class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.roles_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('approved') ? 'has-error' : '' }}">
                <label for="approved">{{ trans('cruds.user.fields.approved') }}</label>
                <input name="approved" type="hidden" value="0">
                <input value="1" type="checkbox" id="approved" name="approved" {{ (isset($user) && $user->approved) || old('approved', 0) === 1 ? 'checked' : '' }}>
                @if($errors->has('approved'))
                    <em class="invalid-feedback">
                        {{ $errors->first('approved') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.approved_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.imgUserDropzone = {
    url: '{{ route('admin.users.storeMedia') }}',
    maxFilesize: 100, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 100,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="img_user"]').remove()
      $('form').append('<input type="hidden" name="img_user" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="img_user"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($user) && $user->img_user)
      var file = {!! json_encode($user->img_user) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $user->img_user->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="img_user" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@stop