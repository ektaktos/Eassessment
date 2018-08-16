@extends('layouts.app')

@section('content')
<div class="container">

           <h4 align="center">Set Question page</h4>
           <br>

    <div class="justify-content-center row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Multiple Choice</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form method="post" action="{{route('setQuestion')}}">

                        @csrf

                        <input type="hidden" name="category" value="Multiple Choice">

                        <div class="form-group row">
                            <label for="quizcode1"class="col-md-4 col-form-label text-md-right">{{ __('Quiz Code') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="quiz_code" id="quizcode1" required>
                                    <option value="">--Select Quiz--</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question1" class="col-md-4 col-form-label text-md-right">{{ __('Enter Question') }}</label>

                            <div class="col-md-6">
                                <input id="question1" type="text" class="form-control{{ $errors->has('question1') ? ' is-invalid' : '' }}" name="question1" value="{{ old('question1') }}" required>

                                @if ($errors->has('question1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('question1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option1" class="col-md-4 col-form-label text-md-right">{{ __('Enter First Option') }}</label>

                            <div class="col-md-6">
                                <input id="option1" type="text" class="form-control{{ $errors->has('option1') ? ' is-invalid' : '' }}" name="option1" value="{{ old('option1') }}" required>

                                @if ($errors->has('option1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('option1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option2" class="col-md-4 col-form-label text-md-right">{{ __('Enter Second Option') }}</label>

                            <div class="col-md-6">
                                <input id="option2" type="text" class="form-control{{ $errors->has('option2') ? ' is-invalid' : '' }}" name="option2" value="{{ old('option2') }}" required>

                                @if ($errors->has('option2'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('option2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option3" class="col-md-4 col-form-label text-md-right">{{ __('Enter Third Option') }}</label>

                            <div class="col-md-6">
                                <input id="option3" type="text" class="form-control{{ $errors->has('option3') ? ' is-invalid' : '' }}" name="option3" value="{{ old('option3') }}" required>

                                @if ($errors->has('option3'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('option3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option4" class="col-md-4 col-form-label text-md-right">{{ __('Enter Fourth Option') }}</label>

                            <div class="col-md-6">
                                <input id="option4" type="text" class="form-control{{ $errors->has('option4') ? ' is-invalid' : '' }}" name="option4" value="{{ old('option4') }}" required>

                                @if ($errors->has('option4'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('option4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="answer1" class="col-md-4 col-form-label text-md-right">{{ __('Enter Answer') }}</label>

                            <div class="col-md-6">
                                <input id="answer1" type="text" class="form-control{{ $errors->has('answer1') ? ' is-invalid' : '' }}" name="answer1" value="{{ old('answer1') }}" required>

                                @if ($errors->has('answer1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('answer1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                        </div>

                    </form>   

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">True or False</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post">

                        @csrf

                        <input type="hidden" name="category" value="true or false">

                        <div class="form-group row">
                            <label for="quizcode2" class="col-md-4 col-form-label text-md-right">{{ __('Quiz Code') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="quiz_code" id="quizcode2" required>
                                    <option value="">--Select Quiz--</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question" class="col-md-4 col-form-label text-md-right">{{ __('Enter Question') }}</label>

                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" value="{{ old('question') }}" required>

                                @if ($errors->has('question'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="answer2" class="col-md-4 col-form-label text-md-right">{{ __('Select Answer') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="answer2" id="answer2" required>
                                    <option value="">--Select Answer--</option>
                                    <option value="true">True</option>
                                    <option value="false">False</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                        </div>

                    </form>   
                </div>
            </div>

            <br>
            <div class="card">

                @if (session('uploadStatus'))
                        <div class="alert alert-warning">
                            {{ session('uploadStatus') }}
                        </div>
                @endif

                <div class="card-header">Upload Aiken Format</div>
                <div class="card-body">
                    <form method="post" enctype='multipart/form-data' action="/uploadAiken">

                        @csrf

                        <div class="form-group row">
                            <label for="upload" class="col-md-4 col-form-label text-md-right">{{ __('Upload Question File') }}</label>

                            <div class="col-md-6">  
                                <input id="questionFile" type="file" class="form-control" name="questionFile" required>

                                @if ($errors->has('questionFile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('questionFile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                        </div>

                    </form>
                </div>
        </div>

    </div>
</div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>

<script type="text/javascript">
 
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
 
</script>
<script type="text/javascript">

    $(document).ready(function() {

        $.ajax({
          url: '/select-ajax',
          method: 'GET',
          success: function(data) {
            var len = data.length;
            for(var i=0; i<len; i++){
                var code = data[i]['quiz_code'];
                var option = new Option(code, code); 
                $('#quizcode1').append($(option));
            }

            for(var i=0; i<len; i++){
                var code = data[i]['quiz_code'];
                var option = new Option(code, code); 
                $('#quizcode2').append($(option));
            }
            
          }
      });
    });
</script>