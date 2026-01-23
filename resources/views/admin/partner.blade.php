@extends('layouts.admin')
@section('admincontent')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Partners & Associates</h4>
                        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addpartner">
                            <i class="fa fa-plus"></i>
                            Add Record
                        </button>
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
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($newpaper as $key=>$item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td><img src="{{ asset($item->partner) }}" target="_blank" width="150" height="80"></img></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <a id="{{ $item->id }}" onclick="editpartner(this.id)"><i style="font-size:20px;  color: rgb(89, 0, 255);" class="bx bx-edit"></i></a>
                                                        </div>
                                                       
                                                        <div class="col-lg-6">
                                                            <a href="#" onclick="deletepartner('{{ $item->id }}')"><i style="font-size:20px;  color:red;" class="bx bx-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
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
<!-- Modal -->
<div class="modal fade" id="addpartner" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold" id="modalTitle">Add</span>
                    <span class="fw-light">Partners & Associates</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form id="partnerform" enctype="multipart/form-data">
                    <input id="txtpartnerid" name="id" type="hidden" />

                    <div class="row">

                       
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>File</label>
                                <input id="txtpartner" type="file" class="form-control" />
                                <div id="currentImage" class="mt-1"></div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addbtnpartner">Save changes</button>
            </div>
        </div>
    </div>
</div>
