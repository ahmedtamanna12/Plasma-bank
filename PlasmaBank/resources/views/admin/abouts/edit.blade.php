@extends('layouts.master')


@section('title')
     User Information Edit
@endsection


@section('content')

<div class="row">
    <div class="col-mod-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User Information - Edit Data</h4>

                <form action="{{ url('aboutus-update/'.$aboutus->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                     <div class="modal-body">
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" name="name" class="form-control" value="{{ $aboutus->name }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mobile:</label>
                            <input type="text" name="mobile" class="form-control" value="{{ $aboutus->mobile }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Blood Group:</label>
                            <input type="text" name="BloodGroup" class="form-control" value="{{ $aboutus->BloodGroup }}">   
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Covid_Result:</label>
                            <input type="text" name="CovidResult" class="form-control" value="{{ $aboutus->CovidResult }}">
                        </div>
        
                        </div>
                        <div class="modal-footer">
                            <a href="{{ url('abouts') }}" class="btn btn-secondary">BACK</a>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
