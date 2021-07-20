@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2> Show User</h2>
            </div>
        </div>
        <div class="col-lg-6 margin-tb">
            <div class="pull-right" style="float:right;">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>

    </div>
    <div class="row form_data">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->full_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Age:</strong>
                {{ $user->age }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Created Date:</strong>
                {{ $user->frm_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>File Number:</strong>
                {{ $user->file_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Martial Status:</strong>
                {{ $user->social_status }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $user->gender }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Occupation:</strong>
                {{ $user->function }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Close Family member's Name:</strong>
                {{ $user->closest_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Close Family member's Phone:</strong>
                {{ $user->other_phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Where you did about clinic:</strong>
                {{ $user->about_clinic }}
            </div>
        </div>

    </div>




    {{-- {{$userQuestion}} --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="form-group group1 ">
                <strong class="strong">User Question Details:</strong>

                @foreach ($userQuestion as $u)




                    <table class="table table-bordered">

                        <tbody>
                            <tr>
                                <div class="row data ">
                                    <div class="col-11 " id="d1">

                                        <label class="">{{ $u->discription }}</label>
                                    </div>
                                    <div class="col-1 " id="d2">
                                        <span>{{ $u->answer }}</span>
                                    </div>
                                    <p>@if($u->reasons) {{$u->reasons}} @endif</p>


                                </div>

                            </tr>

                        </tbody>
                    </table>
                @endforeach

            </div>
        </div>
    </div>
@endsection
