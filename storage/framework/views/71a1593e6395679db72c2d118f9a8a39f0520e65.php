<?php $__env->startSection('title', 'Staff'); ?>

<?php $__env->startSection('content'); ?>
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">College Staffs</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Staffs</li>
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
                                        <th>Student Name</th>
                                        <th>Fees Type</th>
                                        <th>Date</th>
                                        <th>Invoice No.</th>
                                        <th>Payment Type</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111</td>
                                        <td>Corrine Johnson</td>
                                        <td>Annual</td>
                                        <td>12 Jan 2018</td>
                                        <td>IN-4578</td>
                                        <td>cash</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td>248$</td>
                                    </tr>
                                    <tr>
                                        <td>112</td>
                                        <td>Gladys Smith</td>
                                        <td>Tuition</td>
                                        <td>12 Feb 2018</td>
                                        <td>IN-3695</td>
                                        <td>cheque</td>
                                        <td><span class="tag tag-orange">pending</span></td>
                                        <td>124$</td>
                                    </tr>
                                    <tr>
                                        <td>113</td>
                                        <td>Alice Smith</td>
                                        <td>Annual</td>
                                        <td>24 Feb 2018</td>
                                        <td>IN-4679</td>
                                        <td>credit card</td>
                                        <td><span class="tag tag-red">unpaid</span></td>
                                        <td>340$</td>
                                    </tr>
                                    <tr>
                                        <td>114</td>
                                        <td>Gladys Smith</td>
                                        <td>Tuition</td>
                                        <td>25 Feb 2018</td>
                                        <td>IN-2839</td>
                                        <td>cashn</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td>112$</td>
                                    </tr>
                                    <tr>
                                        <td>115</td>
                                        <td>Corrine Johnson</td>
                                        <td>Transport</td>
                                        <td>12 March 2018</td>
                                        <td>IN-4916</td>
                                        <td>cheque</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td>340$</td>
                                    </tr>
                                    <tr>
                                        <td>116</td>
                                        <td>Gladys Smith</td>
                                        <td>Tuition</td>
                                        <td>12 May 2018</td>
                                        <td>IN-7542</td>
                                        <td>cashn</td>
                                        <td><span class="tag tag-red">unpaid</span></td>
                                        <td>421$</td>
                                    </tr>
                                    <tr>
                                        <td>117</td>
                                        <td>Alice Smith</td>
                                        <td>Transport</td>
                                        <td>12 May 2018</td>
                                        <td>IN-8653</td>
                                        <td>credit card</td>
                                        <td><span class="tag tag-orange">pending</span></td>
                                        <td>124$</td>
                                    </tr>
                                    <tr>
                                        <td>118</td>
                                        <td>Gladys Smith</td>
                                        <td>Library</td>
                                        <td>12 May 2018</td>
                                        <td>IN-4859</td>
                                        <td>cheque</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td>485$</td>
                                    </tr>
                                    <tr>
                                        <td>119</td>
                                        <td>Alice Smith</td>
                                        <td>Annual</td>
                                        <td>12 Jun 2018</td>
                                        <td>IN-2648</td>
                                        <td>cheque</td>
                                        <td><span class="tag tag-orange">pending</span></td>
                                        <td>231$</td>
                                    </tr>
                                    <tr>
                                        <td>120</td>
                                        <td>Corrine Johnson</td>
                                        <td>Tuition</td>
                                        <td>21 Jun 2018</td>
                                        <td>IN-4875</td>
                                        <td>cashn</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td>4856$</td>
                                    </tr>
                                    <tr>
                                        <td>121</td>
                                        <td>Gladys Smith</td>
                                        <td>Transport</td>
                                        <td>28 Jun 2018</td>
                                        <td>IN-7946</td>
                                        <td>credit card</td>
                                        <td><span class="tag tag-red">unpaid</span></td>
                                        <td>340$</td>
                                    </tr>
                                    <tr>
                                        <td>122</td>
                                        <td>Ken Smith</td>
                                        <td>Annual</td>
                                        <td>12 Jun 2018</td>
                                        <td>IN-9135</td>
                                        <td>cheque</td>
                                        <td><span class="tag tag-orange">pending</span></td>
                                        <td>340$</td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>Corrine Johnson</td>
                                        <td>Annual</td>
                                        <td>22 Jun 2018</td>
                                        <td>IN-5284</td>
                                        <td>credit card</td>
                                        <td><span class="tag tag-orange">pending</span></td>
                                        <td>340$</td>
                                    </tr>
                                    <tr>
                                        <td>124</td>
                                        <td>Ken Smith</td>
                                        <td>Transport</td>
                                        <td>18 Aug 2018</td>
                                        <td>IN-4613</td>
                                        <td>cashn</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td>254$</td>
                                    </tr>
                                    <tr>
                                        <td>125</td>
                                        <td>Emmett Johnson</td>
                                        <td>Annual</td>
                                        <td>13 Aug 2018</td>
                                        <td>IN-1826</td>
                                        <td>credit card</td>
                                        <td><span class="tag tag-red">unpaid</span></td>
                                        <td>340$</td>
                                    </tr>
                                    <tr>
                                        <td>126</td>
                                        <td>Ken Smith</td>
                                        <td>Library</td>
                                        <td>17 Aug 2018</td>
                                        <td>IN-76149</td>
                                        <td>cashn</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td>340$</td>
                                    </tr>
                                    <tr>
                                        <td>127</td>
                                        <td>Emmett Johnson</td>
                                        <td>Annual</td>
                                        <td>4 Sept 2018</td>
                                        <td>IN-3794</td>
                                        <td>credit card</td>
                                        <td><span class="tag tag-orange">pending</span></td>
                                        <td>548$</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <form action="<?php echo e(route('apply')); ?>"  enctype="multipart/form-data" id="apply_online" method="POST">
                    <?php echo csrf_field(); ?>
                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Basic Information</h3>
                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="firstname">
                                            </div>
                                            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lastname">
                                            </div>
                                            <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input data-provide="datepicker" data-date-autoclose="true" name="date_of_birth" class="form-control" placeholder="Date of Birth">
                                            </div>
                                            <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label>Gender</label>
                                            <select class="form-control show-tick">
                                                <option value="">-- Select --</option>
                                                <option value="10">Male</option>
                                                <option value="20">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <input type="text" class="form-control" name="department">
                                            </div>
                                            <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>National ID</label>
                                                <input type="text" class="form-control" name="NIN">
                                            </div>
                                            <?php $__errorArgs = ['NIN'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>
                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Responsibility</label>
                                                <input type="text" class="form-control" name="responsibility">
                                            </div>
                                            <?php $__errorArgs = ['responsibility'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                                <label>Blood Group</label>
                                                <select class="form-control show-tick">
                                                    <option value="">-- Select --</option>
                                                    <option value="10">Male</option>
                                                    <option value="20">Female</option>
                                                </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Religion</label>
                                                <input type="text" class="form-control" name="religion">
                                            </div>
                                            <?php $__errorArgs = ['religion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Address </label>
                                                <input type="text" class="form-control" name="address">
                                            </div>
                                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                        <div class="card-header">
                                        <h3 class="card-title">Academic Information</h3>
                                        </div>
                                              <div class="row clearfix">
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="email">
                                                    </div>
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Passsword</label>
                                                        <input type="text" class="form-control" name="password">
                                                    </div>
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Salary Pay Grade</label>
                                                        <input type="text" class="form-control" name="salary_pay_grade">
                                                    </div>
                                                    <?php $__errorArgs = ['salary_pay_grade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Salary type</label>
                                                        <input type="text" class="form-control" name="salary_type">
                                                    </div>
                                                    <?php $__errorArgs = ['salary_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Role</label>
                                                        <input type="text" class="form-control" name="role">
                                                    </div>
                                                    <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-sm-12">
                                                    <B>Resume</B>
                                                    <div class="form-group mt-2 mb-3">
                                                        <input type="file" class="dropify" name="resume">
                                                        <small id="fileHelp" class="form-text text-muted"></small>
                                                    </div>
                                                    <?php $__errorArgs = ['resume'];
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

<?php echo $__env->make('dashboard.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/school/resources/views/dashboard/staff/index.blade.php ENDPATH**/ ?>