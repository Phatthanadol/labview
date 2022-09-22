@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <form action="{{url('Electcontrol')}}" method="post">
                    @csrf
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="valueelec" value="A" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      ON
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="valueelec" value="B" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      OFF
                    </label>
                  </div>

                  <input type="submit" value="บันทึก">
                </form>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
