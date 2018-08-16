@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quiz Registration page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('newQuiz') }}" method="post">

                        @csrf

                    <div class="form-group row">
                            <label for="quiz_code" class="col-md-4 col-form-label text-md-right">{{ __('Quiz Code') }}</label>

                            <div class="col-md-6">
                                <input id="quiz_code" type="text" class="form-control{{ $errors->has('quiz_code') ? ' is-invalid' : '' }}" name="quiz_code" value="{{ old('quiz_code') }}" required autofocus>

                                @if ($errors->has('quiz_code'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('quiz_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="quiz_name" class="col-md-4 col-form-label text-md-right">{{ __('Quiz Name') }}</label>

                            <div class="col-md-6">
                                <input id="quiz_name" type="text" class="form-control{{ $errors->has('quiz_name') ? ' is-invalid' : '' }}" name="quiz_name" value="{{ old('quiz_name') }}" required>

                                @if ($errors->has('quiz_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('quiz_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="questionNum" class="col-md-4 col-form-label text-md-right">{{ __('Number of Questions') }}</label>

                            <div class="col-md-6">
                                <input id="questionNum" type="number" class="form-control{{ $errors->has('questionNum') ? ' is-invalid' : '' }}" name="questionNum" value="{{ old('questionNum') }}" required>

                                @if ($errors->has('questionNum'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('questionNum') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Quiz Duration') }}</label>

                            <div class="col-md-6">
                                <input id="duration" type="number" class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}" name="duration" value="{{ old('duration') }}" required>

                                @if ($errors->has('duration'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>          

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
