
<?php $__env->startSection('title', 'Library'); ?>

<?php $__env->startSection('content'); ?>
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">College Library</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    <li class="breadcrumb-item active" aria-current="page">Members</li>

                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
                <?php if(Auth::user()->utype =="ADM"): ?>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Fees-add">Add New</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="Fees-all">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                <thead>
                                    <tr>
                                        <th>Roll No.</th>
                                        <th>Photo</th>
                                        <th>Library ID</th>
                                        <th>Student Name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Action </th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111</td>
                                        <td>Corrine Johnson</td>
                                        <td>Annual</td>
                                        <td>12 Jan 2018</td>
                                        <td>IN-4578</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td><i class="fa fa-trash "></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Basic Information</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Date of Birth">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <label>Gender</label>
                                        <select class="form-control show-tick">
                                            <option value="">-- Gender --</option>
                                            <option value="10">Male</option>
                                            <option value="20">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Enter Your Email</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Website URL</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-2 mb-3">
                                            <input type="file" class="dropify">
                                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label>Messages</label>
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/dashboard/library/members.blade.php ENDPATH**/ ?>