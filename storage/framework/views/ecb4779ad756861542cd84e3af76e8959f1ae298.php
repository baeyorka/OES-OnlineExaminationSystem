<?php $__env->startSection('title','Result'); ?>
<?php $__env->startSection('content'); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Result</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2">&nbsp;</div>
          <div class="col-sm-8">

            <div class="card mt-4">
              <div class="card-body">
                <h2>Basic Information</h2>
               <table class="table">
                <tr>
                  <td>Name</td>
                  <td><?php echo e($student_info->name); ?></td>
                </tr>
                <tr>
                  <td>E-Mail</td>
                  <td><?php echo e($student_info->email); ?></td>
                </tr>
                <tr>
                  <td>DOB</td>
                  <td><?php echo e($student_info->dob); ?></td>
                </tr>
                <tr>
                  <td>Exam Name</td>
                  <td><?php echo e($student_info->title); ?></td>
                </tr>
                <tr>
                  <td>Exam Date</td>
                  <td><?php echo e($student_info->exam_date); ?></td>
                </tr>
               </table>
               <h2>Result Information</h2>
               <table class="table">
               	<tr>
               		<td>Pass Marks</td>
               		<td><?php echo e($result_info->yes_ans); ?></td>
               	</tr>
               	<tr>
               		<td>Fail Marks</td>
               		<td><?php echo e($result_info->no_ans); ?></td>
               	</tr>
               	<tr>
               		<td>Total</td>
               		<td><?php echo e($result_info->yes_ans+$result_info->no_ans); ?></td>
               	</tr>
               </table>
              </div>
              <!-- /.card-body -->
             
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div> 
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>