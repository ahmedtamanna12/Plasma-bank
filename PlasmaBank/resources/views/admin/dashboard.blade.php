@extends('admin.layouts.master')


@section('title')
     Dashboard | Plasma Bank
@endsection




@section('content')

<div class="row">
    <div class="col-md-12"> 
    <div class="card">
              <div class="card-header">
                <h4 class="card-title">About Plasma Bank</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                    <body>
                        <p>If you are fully recovered from COVID-19 and ready to help other patients, please fill out this form. Once your initial eligibility is confirmed, we will contact you via phone within 1-3 business days to schedule your donation.
                        We may provide your information to a non-Red Cross donor center for qualification and scheduling if your address is closer to that center.  
                        </p>
                    </body>   
                </div>
            </div>
        </div>
    </div>
</div>
<style>
  h4 {
    color: red;
  }
</style>
@endsection


@section('scripts')

@endsection