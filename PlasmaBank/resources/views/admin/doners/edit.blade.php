@extends('layouts.master')


@section('title')
     Doner Information Edit
@endsection


@section('content')

<div class="row">
    <div class="col-mod-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Doner Information - Edit Data</h4>

                <form action="{{ url('doner-update/'.$doner->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" name="Name" class="form-control" value="{{ $doner->Name }}">
                        </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Age:</label>
                            <input type="text" name="Age" class="form-control" value="{{ $doner->Age }}">
                        </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Address:</label>
                            <input type="text" name="Address" class="form-control" value="{{ $doner->Address }}">
                        </div>
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mobile:</label>
                            <input type="text" name="Mobile" class="form-control" value="{{ $doner->Mobile }}">
                        </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" name="Email" class="form-control" value="{{ $doner->Email }}">
                        </div>
                       <div class="form-group">
                            <label for="recipient-name" class="col-form-label">BloodGroup:</label>
                            <input type="text" name="BloodGroup" class="form-control" value="{{ $doner->BloodGroup }}">   
                        </div>
                    <div class="modal-body">
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">BloodPressure:</label>
                            <input type="text" name="BloodPressure" class="form-control" value="{{ $doner->BloodPressure }}">
                        </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Covidpositive:</label>
                            <input type="text" name="Covidpositive" class="form-control" value="{{ $doner->Covidpositive }}">
                        </div>
                    <div class="modal-body">
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">RecoveryDate:</label>
                            <input type="text" name="RecoveryDate" class="form-control" value="{{ $doner->RecoveryDate }}">
                        </div>
                    <div class="modal-body">
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Certified:</label>
                            <input type="text" name="Certified" class="form-control" value="{{ $doner->Certified }}">
                        </div>
        
                        </div>
                        <div class="modal-footer">
                            <a href="{{ url('doners') }}" class="btn btn-secondary">BACK</a>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
