<?php $__env->startSection("siteTitle",'网站配置'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    网站配置
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Site</a></li>
                        <li class="breadcrumb-item active" aria-current="page">config</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <?php if(isset($succ) ? true: false): ?>
                        <div type="button" class="btn btn-inverse-success btn-fw">添加成功</div>
                    <?php endif; ?>
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <form class="forms-sample" method="post" action="<?php echo e(route('admin.config.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="name" value="网站配置">
                            <input type="hidden" name="title" value="siteconfig">
                            <div class="form-group">
                                <label for="SiteTitle">网站名称</label>
                                <input type="text" name="SiteTitle" value="<?php echo e(isset($data->SiteTitle) ?  $data->SiteTitle:  ''); ?>" class="form-control" id="SiteTitle" placeholder="请输入网站名称">
                            </div>
                            <div class="form-group">
                                <label for="Domain">网站域名</label>
                                <input type="text" name="Domain" value="<?php echo e(isset($data->Domain) ?  $data->Domain:  ''); ?>" class="form-control" id="Domain" placeholder="请输入网站域名">
                            </div>
                            <div class="form-group">
                                <label for="keywords">网站关键字</label>
                                <input type="text" name="keywords" value="<?php echo e(isset($data->keywords) ?  $data->keywords:  ''); ?>" class="form-control" id="keywords" placeholder="keywords">
                            </div>
                            <div class="form-group">
                                <label for="sitedesc">网站描述</label>
                                <textarea name="sitedesc" class="form-control" id="sitedesc" placeholder="网站描述"><?php echo e(isset($data->sitedesc) ?  $data->sitedesc:  ''); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="status">网站状态</label>
                                <div class="row">
                                    <div class="col-sm-4 col-md-2 col-lg-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <?php if(isset($data->status) ?  $data->status: '1'): ?>
                                                    <?php if($data->status == 1): ?>
                                                        <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" checked>
                                                     <?php else: ?>
                                                        <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1">
                                                     <?php endif; ?>
                                                <?php else: ?>
                                                    <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" checked="" >
                                                <?php endif; ?>
                                                运行

                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2 col-lg-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <?php if(isset($data->status) ?  $data->status: '1'): ?>
                                                    <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" >
                                                <?php else: ?>
                                                    <?php if($data->status == 1): ?>
                                                        <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" >
                                                    <?php else: ?>
                                                        <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" checked>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                停止
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc">关站提示</label>
                                <textarea name="desc" class="form-control" id="desc" placeholder="关站提示"><?php echo e(isset($data->desc) ?  $data->desc:  ''); ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">提交</button>

                        </form>
                    </div>
                </div>
            </div>
            </div>
      </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mhlay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\phptools\PHPTutorial\WWW\laravel\resources\views/admin/config/siteconfig.blade.php ENDPATH**/ ?>