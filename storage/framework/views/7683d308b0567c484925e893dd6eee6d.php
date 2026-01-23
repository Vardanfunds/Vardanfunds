<?php $__env->startSection('admincontent'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Users</h4>
                        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addusermodel">
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
                                            <th>Fullname</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($item['name']); ?></td>
                                                <td><?php echo e($item['username']); ?></td>
                                                <td> 
                                                    <?php if($item['status']==1): ?>
                                                       <h6 class="text-success">Active</h6>
                                                    <?php else: ?>
                                                        <h6 style="color:red;">In-active</h6>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        
                                                       
                                                      <?php if($item['status']==1): ?>
                                                        <div class="col-lg-6">
                                                            <a href="#" onclick="edituserstatus('<?php echo e($item->id); ?>')"><i style="font-size:20px;  color:red;" class="bx bx-user-x"></i>
                                                            </a>
                                                        </div>
                                                      <?php else: ?>
                                                        <div class="col-lg-6">
                                                            <a href="#" onclick="edituserstatus('<?php echo e($item->id); ?>')"><i style="font-size:20px;  color:rgb(0, 255, 68);" class="bx bx-user-check"></i>
                                                            </a>
                                                        </div>
                                                      <?php endif; ?>
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
<div class="modal fade" id="addusermodel" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold" id="modalTitle">Add</span>
                    <span class="fw-light">Users</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form id="userform" enctype="multipart/form-data">
                    <input id="txtuserid" name="id" type="hidden" />

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Fullname</label>
                                <input id="txtfullname" type="text" class="form-control" placeholder="Enter name" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Username</label>
                                <input id="txtusername" type="text" class="form-control" placeholder="Enter name" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input id="txtpasswd" type="password" class="form-control" placeholder="Enter name" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Email</label>
                                <input id="txtemail" type="text" class="form-control" placeholder="Enter name" />
                            </div>
                        </div>

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addusers">Save changes</button>
            </div>
        </div>  
    </div>
</div>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\Vardanfunds\resources\views/admin/users.blade.php ENDPATH**/ ?>