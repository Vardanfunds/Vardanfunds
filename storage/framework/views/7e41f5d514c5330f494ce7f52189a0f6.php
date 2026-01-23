<?php $__env->startSection('admincontent'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Silder</h4>
                        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
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
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $silderModel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($item['title']); ?></td>
                                                <td><img src="<?php echo e(asset($item->img)); ?>" width="150" height="80" alt="Slider Image"></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <a id="<?php echo e($item->id); ?>" onclick="editsilder(this.id)"><i style="font-size:20px;  color: rgb(89, 0, 255);" class="bx bx-edit"></i></a>
                                                        </div>
                                                       
                                                        <div class="col-lg-6">
                                                            <a href="#" onclick="deletesilder('<?php echo e($item->id); ?>')"><i style="font-size:20px;  color:red;" class="bx bx-trash"></i>
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
<div class="modal fade" id="addRowModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold"> Add</span>
                    <span class="fw-light"> Silder </span>
                </h5>
            </div>
            <div class="modal-body">

                    <form id="sliderForm">
                         <input id="txtid" type="hidden" class="form-control" placeholder="Title" />
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Title</label>
                                <input id="txttile" type="text" class="form-control" placeholder="Title" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Image</label>
                                <input id="txtimg" type="file" class="form-control" placeholder="Image" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
           
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addRowButton">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\Vardanfunds\resources\views/admin/silder.blade.php ENDPATH**/ ?>