@extends('layouts.app', ['activePage' => 'educations', 'titlePage' => __('Education Edit')])

@push('css')
    <style>
        label{
            color: black;
        }
    </style>
@endpush

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Education Edit</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('educations.update') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $education->id }}" name="id">
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Education Title') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('title') }}" value="{{ $education->title }}" required="true" aria-required="true"/>
                        @if ($errors->has('title'))
                            <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('institute') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('institute') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('institute') ? ' is-invalid' : '' }}" name="institute" id="input-institute" type="text" placeholder="{{ __('institute') }}" value="{{ $education->institute }}" required="true" aria-required="true"/>
                        @if ($errors->has('institute'))
                            <span id="institute-error" class="error text-danger" for="input-institute">{{ $errors->first('institute') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Start Date') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('start_date') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}" name="start_date" id="input-start_date" type="text" placeholder="{{ __('start_date') }}" value="{{ $education->start_date }}" required="true" aria-required="true"/>
                        @if ($errors->has('start_date'))
                            <span id="start_date-error" class="error text-danger" for="input-start_date">{{ $errors->first('start_date') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('End Date') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('end_date') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}" name="end_date" id="input-end_date" type="text" placeholder="{{ __('end_date') }}" value="{{ $education->end_date }}" required="true" aria-required="true"/>
                        @if ($errors->has('end_date'))
                            <span id="end_date-error" class="error text-danger" for="input-end_date">{{ $errors->first('end_date') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('desc') ? ' has-danger' : '' }}">
                        <textarea class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" id="input-desc" type="text" placeholder="{{ __('desc') }}" required="true" aria-required="true"/>{{ $education->desc }}</textarea>
                        @if ($errors->has('desc'))
                            <span id="desc-error" class="error text-danger" for="input-desc">{{ $errors->first('desc') }}</span>
                        @endif
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary mt-3 float-right">
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
