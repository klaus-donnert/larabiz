@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing</div>

                <div class="panel-body">
                    {!!Form::open(['action' => 'ListingsController@store', 'method' => 'post'])!!}
                    {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
                    {{Form::bsText('website','',['placeholder' => 'Company Website'])}}
                    {{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
                    {{Form::bsText('phone','',['placeholder' => 'Contact Phone'])}}
                    {{Form::bsText('address','',['placeholder' => 'Address'])}}
                    {{Form::bsTextArea('bio','',['placeholder' => 'About This Business'])}}
                    {{Form::bsSubmit('Submit',['class' => 'btn btn-primary'])}}
                    <a class="btn btn-default" href="/dashboard">Cancel</a>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection