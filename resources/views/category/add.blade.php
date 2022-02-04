@extends('dashboard')

@section('page_name')
   ADD COMPLAINT CATEGORY
@endsection

@section('page_intro')
    NEW COMPLAINT CATEGORY
@endsection

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>CATEGORY NAME</label>
            <input id="default-ml" maxlength="25" class="form-control" type="text" placeholder="Enter Complaint Category Name" required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>DEPARTIMENT</label>
                <select tabindex="3" class="form-control">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
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
