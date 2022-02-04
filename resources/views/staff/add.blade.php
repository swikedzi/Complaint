@extends('dashboard')

@section('page_name')
   STAFF REGISTRATION
@endsection

@section('page_intro')
    NEW STAFF
@endsection

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>STAFF NAME</label>
            <input id="default-ml" " class="form-control" type="text" placeholder="Enter Full Name..." required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>E-MAIL</label>
            <input id="default-ml"  class="form-control" type="email" placeholder="Enter Staff E-mail address..." required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>CONTACT NO</label>
            <input id="default-ml"  class="form-control" type="text" placeholder="Enter Contact..." required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>GENDER</label>
                <select tabindex="3" class="form-control">
                        <option value="MALE">MALE</option>
                        <option value="NV">FEMALE</option>
                </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>DEPARTIMENT</label>
                <select tabindex="3" class="form-control">
                        <option value="">FINANCE & ACCOUNTING</option>
                </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>BRANCH</label>
                <select tabindex="3" class="form-control">
                        <option value="">DAR ES SALAAM</option>
                        <option value="">DODOMA</option>
                        <option value="">MBEYA</option>
                        <option value="">MWANZA</option>
                </select>
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
