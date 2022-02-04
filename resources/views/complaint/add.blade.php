@extends('dashboard')

@section('page_name')
   COMPLAINTS
@endsection

@section('page_intro')
    NEW COMPLAINT
@endsection

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Branch Name</label>
                <select tabindex="3" class="form-control">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Complaint Categories</label>
                <select tabindex="3" class="form-control">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Complaint Details</label>
            <textarea class="form-control" rows="5" name="message" id="message" placeholder="Write your complaint in details..." required></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-2 control-label">Complaint File</label>
            <div class="col-sm-10">
                <input type="file" class="filestyle" data-buttonText="Find file" placeholder="Upload Complaint File..." data-iconName="fa fa-inbox">
            </div>
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
