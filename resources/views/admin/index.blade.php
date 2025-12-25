@extends('layouts.admin')
@section('admincontent')
 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Contact Details</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Vardan Funds</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item['name'] }}</td>
                                                <td>{{ $item['email'] }}</td>
                                                <td>{{ $item['phone'] }}</td>
                                                <td>{{ $item['subject'] }}</td>
                                                <td>{{ $item['msg'] }}</td>
                                                <td>{{ $item['project'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
