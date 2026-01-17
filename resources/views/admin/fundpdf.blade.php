@extends('layouts.admin')
@section('admincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Teams</h4>
                        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addfunddpf">
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
                                            <th>Fund PDF</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($newpaper as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>

                                                <td><a href="{{ asset($item->file) }}" target="_blank">
                                                        @if ($item['type'] == 1)
                                                            Vardan Ceqube India Investment Fund
                                                        @else
                                                            Vardan Venus Investment Fund Series 1
                                                        @endif
                                                    </a></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <a href="#"
                                                                onclick="deletefundpdf('{{ $item->id }}')"><i
                                                                    style="font-size:20px;  color:red;"
                                                                    class="bx bx-trash"></i>
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
<div class="modal fade" id="addfunddpf" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold" id="modalTitle">Add</span>
                    <span class="fw-light">Fund PDF</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form id="fundpdfform" enctype="multipart/form-data">
                    <input id="txtfundid" name="id" type="hidden" />

                    <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>File name</label>
                                <input id="txtfullname" type="text" class="form-control" placeholder="Enter name" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Fund Type</label>
                                <select class="form-control" id="txtfundtype" name="txtfundtype">
                                    <option value="">Select Fund Type</option>
                                    <option value="1">Vardan Ceqube India Investment Fund</option>
                                    <option value="2">Vardan Venus Investment Fund Series 1</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>PDF File</label>
                                <input id="txtfundpdf" type="file" class="form-control" />
                                <div id="currentPdfFile" class="mt-1"></div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>

            <div class="modal-footer border-0">
                <button type="button" id="addfundpdf" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
