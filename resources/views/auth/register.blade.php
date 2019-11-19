@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card mx-4">
            <div class="card-body p-4">

                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}  
                    <h1>{{ trans('panel.site_title') }}</h1>
                    <p class="text-muted">{{ trans('global.register') }}</p>

                    <!-- PROFILE IMAGE -->
                    <div class="input-group mb-3 justify-content-center">
                     <div class="upload-image">
                        <label for="avatar">
                            <img id="output" src="/images/default-avatar.jpg" style="height:120px; width:120px; border-radius:50%;" class="image" />
                            <div class="overlay">{{ trans('global.input_img_profile') }}</div>
                        </label>
                        <input id="avatar" type="file" name="img_user" value="{{ old('avatar') }}" hidden=true accept="image/*" onchange="loadFile(event)" />

                        <script>
                            var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                        </div>
                    </div>
                    <div class="input-group mb-3 justify-content-center">
                        <p class="text-muted">{{ trans('global.input_img_profile') }}</p>
                    </div>
                    
                    <!-- NAME -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.user_fullname') }}" value="{{ old('name', null) }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <!--- GENDER -->
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="fa fa-venus-mars fa-fw"></i>
                          </span>
                      </div>
                      <select id="gender" name="gender" class="form-control" required>
                          <option value="" disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelectGENDER') }}</option>
                          @foreach(App\User::GENDER_SELECT as $key => $label)
                              <option value="{{ $key }}" {{ old('gender', null) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                          @endforeach
                      </select>
                      @if($errors->has('gender'))
                          <em class="invalid-feedback">
                              {{ $errors->first('gender') }}
                          </em>
                      @endif
                    </div>

                    <!--- PHONE -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-phone fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" id="workphone" name="workphone" class="form-control" value="{{ old('workphone', isset($user) ? $user->workphone : '') }}" placeholder="{{ trans('global.input_phone') }} ({{ trans('global.eg') }} 0812345678)">
                        @if($errors->has('workphone'))
                            <em class="invalid-feedback">
                                {{ $errors->first('workphone') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.user.fields.workphone_helper') }}
                        </p>
                    </div>

                    <!--- DOB -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-birthday-cake fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" id="dob" name="dob" class="form-control date" value="{{ old('dob', isset($user) ? $user->dob : '') }}" required placeholder="{{ trans('global.input_dob') }}">
                        @if($errors->has('dob'))
                            <em class="invalid-feedback">
                                {{ $errors->first('dob') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.user.fields.dob_helper') }}
                        </p>
                    </div>

                    <!--- TEAM -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-users fa-fw"></i>
                            </span>
                        </div>

                        <select id="team_id" name="team_id" class="form-control" required>
                          <option value="" disabled {{ old('team', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelectTEAM') }}</option>
                            @foreach($teams as  $team)
                              <option value="{{ $team -> id }}" {{ old('team', null) === (string)$team->name ? 'selected' : '' }}>{{ $team -> name }}</option>
                            @endforeach
                        </select>


                        @if($errors->has('team_id'))
                            <em class="invalid-feedback">
                                {{ $errors->first('team_id') }}
                            </em>
                        @endif
                    </div>

                    <!--- JOBTITLE -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-address-card fa-fw"></i>
                            </span>
                        </div>
                        <select id="jobtitle_id" name="jobtitle_id" class="form-control" required>
                          <option value="" disabled {{ old('jobtitle', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelectPOSITION') }}</option>
                            @foreach($jobtitles as  $jobtitle)
                              <option value="{{ $jobtitle -> id }}" {{ old('jobtitle', null) === (string)$jobtitle->name ? 'selected' : '' }}>{{ $jobtitle -> name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('jobtitle_id'))
                            <em class="invalid-feedback">
                                {{ $errors->first('jobtitle_id') }}
                            </em>
                        @endif
                    </div>

                    <!-- EMAIL -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope fa-fw"></i>
                            </span>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    
                    <!-- PASSWORD -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock fa-fw"></i>
                            </span>
                        </div>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <!-- PASSWORD CONFIRM -->
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock fa-fw"></i>
                            </span>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
                    </div>

                    <button class="btn btn-block btn-primary">
                        {{ trans('global.register') }}
                    </button>
                    <br>
                    
                    <div class="row justify-content-center">
                    <a href="{{route('login')}}"> Log in to using EDMIS for your existing account </a>
                        </div>
                </form>
                            
            </div>
        </div>
    </div>
    

@endsection