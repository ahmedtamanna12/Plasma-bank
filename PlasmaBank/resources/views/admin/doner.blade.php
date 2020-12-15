@extends('layouts.master')


@section('title')
     Doner | Plasma Bank
@endsection




@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doner Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-doner" method="POST">
         {{ csrf_field() }}


      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="Name" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Age:</label>
            <input type="text" name="Age" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text" name="Address" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile:</label>
            <input type="text" name="Mobile" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="Email" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Blood Group:</label>
            <select id="blood group" type="option" class="form-control" name="BloodGroup" value="{{ old('blood group ') }}" required autofocus>
              <option disabled="disabled" selected="selected">--Choose Option</option>
                <option> A+ </option>
                <option> A- </option>
                <option> O+ </option>
                <option> O- </option>
                <option> B+ </option>
                <option> B- </option>
                <option> AB+ </option>
                <option> AB- </option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">BloodPressure:</label>
            <input type="text" name="BloodPressure" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Covid_Positive:</label>
            <select id="covidpositive" type="option" class="form-control" name="Covidpositive" value="{{ old('covidpositive') }}" required autofocus>
              <option disabled="disabled" selected="selected">--Choose Option</option>
                <option> Yes </option>
                <option> No </option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">RecoveryDate:</label>
            <input type="text" name="RecoveryDate" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Certified:</label>
            <select id="certified" type="option" class="form-control" name="Certified" value="{{ old('certified') }}" required autofocus>
              <option disabled="disabled" selected="selected">--Choose Option</option>
                <option> Yes </option>
                <option> No </option>
            </select>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SAVE</button>
      </div>
     </form>

    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12"> 
    <div class="card">
              <div class="card-header">
                <h4 class="card-title">Doner Info
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                </h4>
              </div>
              @if (session('status'))
                   <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                   </div>
                @endif
              <style>
                  .w-10p{
                    width: 10% !important;
                  }
              </style>
              <div class="card-body">
                <div class="table-responsive">
                   <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th> 
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>BloodGroup</th>
                        <th>BloodPressure</th>
                        <th>Covidpositive</th>
                        <th>RecoveryDate</th>
                        <th>Certified</th>
                        <th>EDIT</th>
                      </thead>
                    <tbody>
                    @foreach ($doner as $data)
                      <tr>
                        <td>{{  $data->id }}</td>
                        <td>{{  $data->Name }}</td>
                        <td>{{  $data->Age }}</td>
                        <td>{{  $data->Address }}</td>
                        <td>{{  $data->Mobile }}</td>
                        <td>{{  $data->Email }}</td>
                        <td>{{  $data->BloodGroup }}</td>
                        <td>{{  $data->BloodPressure }}</td>
                        <td>{{  $data->Covidpositive }}</td>
                        <td>{{  $data->RecoveryDate }}</td>
                        <td>{{  $data->Certified }}</td>
                        <td>
                           <a href="{{ url('doner/'.$data->id) }}" class="btn btn-success">EDIT</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>   
                  </table>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')

@endsection