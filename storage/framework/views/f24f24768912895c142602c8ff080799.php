<?php $__env->startSection('title'); ?>
    Drafts
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
    
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Drafts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Drafts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-11">
            <div class=" card w-100 ">
              <div class="card-header">
                <div class="car-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  All Drafts
                </div>
              </div>
              <div class="p-lg-5 gap-4 m-lg-5 m-0  justify-content-center align-items-center flex">
                <div class="row justify-content-center  align-items-center ">
                    <div class="col-lg-5 col-12 p-4 text-center bg-warning ">
                      <h2>
                        All Drafts
                      </h2>
                    </div>
                  </div>
                <table class="table table-bordered table-stripped table-dark">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Post Title</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $allDrafts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th class="text-center"><?php echo e($item->id); ?></th>
                            <td class="text-center"><?php echo e($item->title); ?></td>
                            <td class="text-center"><?php echo e($item->category_id); ?></td>
                            <td class="text-center"><?php echo e($item->status); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(route('post.edit', $item->id)); ?>" class="fa fa-edit mx-1"></a>
                                <a href="<?php echo e(route('post.delete', $item->id)); ?>" class="fa fa-trash mx-1"></a>
                                <a href="<?php echo e(route('post.public', $item->id)); ?>" class="btn btn-info btn-sm mx-2">PUBLISH</a>
                            </td>
                        </tr>                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($allDrafts->links()); ?>

              </div>

            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script>
    var msg = Session::get('alert');
    var exist = Session::has('alert');

    if(exist){
      alert(msg);
    }
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lpy\Desktop\MovieBlog_YT\resources\views/admin/post/drafts.blade.php ENDPATH**/ ?>