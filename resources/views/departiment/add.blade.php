@extends('dashboard')

@section('page_name')
   DEPARTIMENTS
@endsection

@section('page_intro')
    NEW DEPARTIMENT
@endsection

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>DEPARTIMRNT NAME</label>
            <input id="default-ml" maxlength="25" class="form-control" type="text" placeholder="Enter Deprtiment Name" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <button class="btn btn-raised btn-success">
                <i class="glyphicon glyphicon-floppy-save"></i>
                <span>Save</span>
            </button>
        </div>
    </div>
</div>
@endsection
