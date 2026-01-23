<?php $__env->startSection('admincontent'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Teams</h4>
                        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                            data-bs-target="#addnewsletter">
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
                                            <th>Name</th>
                                            <th>New Letter</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $newpaper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e($item['name']); ?></td>
                                                <td><a href="<?php echo e(asset($item->file)); ?>" target="_blank" width="150"
                                                        height="80"><?php echo e($item['name']); ?></a></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <a id="<?php echo e($item->id); ?>" onclick="editnewletter(this.id)"><i
                                                                    style="font-size:20px;  color: rgb(89, 0, 255);"
                                                                    class="bx bx-edit"></i></a>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <a href="#"
                                                                onclick="deletenewsletter('<?php echo e($item->id); ?>')"><i
                                                                    style="font-size:20px;  color:red;"
                                                                    class="bx bx-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<!-- Modal -->
<div class="modal fade" id="addnewsletter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold" id="modalTitle">Add</span>
                    <span class="fw-light">News Letter</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form id="newletterform" enctype="multipart/form-data">
                    <input id="txtfileid" name="id" type="hidden" />

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>File name</label>
                                <input id="txtfullname" type="text" class="form-control" placeholder="Enter name" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Title Image</label>
                                <input id="txttitle" type="file" class="form-control" />
                                <div id="currentTitleImage" class="mt-1"></div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>PDF File</label>
                                <input id="txtnewsletterimg" type="file" class="form-control" />
                                <div id="currentPdfFile" class="mt-1"></div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>

            <div class="modal-footer border-0">
                <button type="button" id="addnewletter" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\Vardanfunds\resources\views/admin/newspaper.blade.php ENDPATH**/ ?>