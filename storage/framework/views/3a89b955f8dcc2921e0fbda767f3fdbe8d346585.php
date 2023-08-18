<?php $__env->startSection('title', 'Exam Suggestion'); ?>

<?php $__env->startSection('content'); ?>


<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Exam</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Suggestion</li>
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
                                        <th>SN</th>
                                        <th>Suggestion Title</th>
                                        <th>Exam Title</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Corrine Johnson</td>
                                        <td>Annual</td>
                                        <td>124$</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Gladys Smith</td>
                                        <td>Annual$</td>
                                        <td>124$</td>
                                        <td><span class="tag tag-orange">pending</span></td>
                                    </tr>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <div class="row clearfix">
                            <form action="<?php echo e(route('addSuggestion')); ?>"  enctype="multipart/form-data" id="apply_online" method="POST">
                                <?php echo csrf_field(); ?>
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
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Suggestion Title</label>
                                                            <input type="text" class="form-control" name="suggestion_title" placeholder="Suggestion Title">
                                                        </div>
                                                        <?php $__errorArgs = ['suggestion_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label>Exam</label>
                                                        <select class="form-control show-tick" name="exam">
                                                            <option value="">-- Select --</option>
                                                            <option value="10">Male</option>
                                                            <option value="20">Female</option>
                                                        </select>
                                                        <?php $__errorArgs = ['exam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label>Class</label>
                                                        <select class="form-control show-tick" name="class">
                                                            <option value="">-- Select --</option>
                                                            <option value="10">Male</option>
                                                            <option value="20">Female</option>
                                                        </select>
                                                        <?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label>Subject</label>
                                                        <select class="form-control show-tick" name="subject">
                                                            <option value="">-- Select --</option>
                                                            <option value="10">Staff</option>
                                                            <option value="20">Lecturer</option>
                                                        </select>
                                                        <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <B>Suggestion</B>
                                                        <div class="form-group mt-2 mb-3">
                                                            <input type="file" class="dropify" name="suggestion">
                                                            <small id="fileHelp" class="form-text text-muted"></small>
                                                        </div>
                                                        <?php $__errorArgs = ['suggestion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mt-3">
                                                            <label>Note</label>
                                                            <textarea rows="4" class="form-control no-resize" name="note" placeholder="Please type what you want..."></textarea>
                                                        </div>
                                                        <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                        
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/school/resources/views/dashboard/exam/suggestion.blade.php ENDPATH**/ ?>