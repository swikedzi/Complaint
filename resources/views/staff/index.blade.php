@extends('dashboard')

@section('page_name')
    STAFF
@endsection

@section('page_intro')
    ALL STAFF
@endsection

@section('contents')
<a href={{url('/staff-registration/add')}}>
    <button class="btn btn-raised btn-success">
        <i class="glyphicon glyphicon-plus"></i>
        <span>NEW STAFF</span>
    </button>
</a>
<section class="boxs bg-white">
    <div class="boxs-header">
        <h3 class="custom-font">
            <strong>STAFF</strong></h3>
    </div>
    <div class="boxs-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>FULLNAME</th>
                        <th>E-MAIL</th>
                        <th>GENDER</th>
                        <th>DEPARTIMENT</th>
                        <th>BRANCH</th>
                        <th>CONTACT NO</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>mark@mark.com</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
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
