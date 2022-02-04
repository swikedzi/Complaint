@extends('dashboard')

@section('page_name')
    COMPLAINT
@endsection

@section('page_intro')
    ALL COMPLAINT
@endsection

@section('contents')
<a href={{url('/complaints/add')}}>
    <button class="btn btn-raised btn-success">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Add Complaint</span>
    </button>
</a>
<section class="boxs bg-white">
    <div class="boxs-header">
        <h3 class="custom-font">
            <strong>COMPLAINTS</strong></h3>
    </div>
    <div class="boxs-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Complaint Number</th>
                        <th>Complainant Name</th>
                        <th>Complaint Category</th>
                        <th>Complaint Details</th>
                        <th>Branch Name</th>
                        <th>Departiment</th>
                        <th>Attended By</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>
                            <button class="btn btn-raised btn-info btn-sm">View Details</button>
                            <button class="btn btn-raised btn-danger btn-sm">Delete</button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
