@extends('dashboard')

@section('page_name')
    COMPLAINT CATEGORIES
@endsection

@section('page_intro')
    ALL COMPLAINT CATEGOLIES
@endsection

@section('contents')
<a href={{url('/complaints-categories/add')}}>
    <button class="btn btn-raised btn-success">
        <i class="glyphicon glyphicon-plus"></i>
        <span>NEW COMPLAINT CATEGORY</span>
    </button>
</a>
<section class="boxs bg-white">
    <div class="boxs-header">
        <h3 class="custom-font">
            <strong>COMPLAINT CATEGORIES </strong></h3>
    </div>
    <div class="boxs-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> COMPLAINT CATEGORY</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>
                            <button class="btn btn-raised btn-info btn-sm">VIEW DETAILS</button>
                            <button class="btn btn-raised btn-danger btn-sm">DELETE</button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
