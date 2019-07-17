<?php $__env->startSection('title'); ?>
   - <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header card">
   <div class="card-block">
      <h5 class="m-b-10">مقدمى الخدمة</h5>
      <ul class="breadcrumb-title b-t-default p-t-10">
         <li class="breadcrumb-item">
            <a href="<?php echo e(url('admin/dashboard')); ?>">الرئيسية</a>
         </li>
         <li class="breadcrumb-item"><a href="<?php echo e(url('admin/providers')); ?>">مقدمى الخدمة</a>
         </li>
         <li class="breadcrumb-item"><a>عرض</a>
         </li>
      </ul>
   </div>
</div>
<!-- Page-header end -->
<div class="page-body">
   <!--profile cover start-->
   <div class="row">
      <div class="col-lg-12">
         <div class="cover-profile">
            <div class="profile-bg-img">
               <img class="profile-bg-img img-fluid" src="<?php echo e(($merchant->image_url) ? $merchant->image_url : url("/storage/app/public/users/avatar.png")); ?>" alt="bg-img">
               <div class="card-block user-info">
                  <div class="col-md-12">
                     <div class="media-left">
                        <a href="#" class="profile-image">
                        <img style="height: 108px; width: 108px" class="user-img img-radius" src="<?php echo e(($merchant->image_url) ? $merchant->image_url : url("/storage/app/public/users/avatar.png")); ?>" alt="user-img">
                        </a>
                     </div>
                     <div class="media-body row">
                        <div class="col-lg-12">
                           <div class="user-title">
                              <h2><?php echo e($merchant->ar_name); ?></h2>
                              <span class="text-white"><?php echo e($merchant->ar_description); ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--profile cover end-->
   <div class="row">
      <div class="col-lg-12">
         <!-- tab header start -->
         <div class="tab-header card">
            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">المعلومات الشخصية</a>
                  <div class="slide"></div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">الفروع</a>
                  <div class="slide"></div>
               </li>
               <!-- <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User's Contacts</a>
                  <div class="slide"></div>
               </li> -->
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#review" role="tab">التذاكر</a>
                  <div class="slide"></div>
               </li>
            </ul>
         </div>
         <!-- tab header end -->
         <!-- tab content start -->
         <div class="tab-content">
            <!-- tab panel personal start -->
            <div class="tab-pane active" id="personal" role="tabpanel">
               <!-- personal card start -->
               <div class="card">
                  <div class="card-block">
                     <div class="view-info">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="general-info">
                                 <div class="row">
                                    <div class="col-lg-12 col-xl-6">
                                       <div class="table-responsive">
                                          <table class="table m-0">
                                             <tbody>
                                                <tr>
                                                   <th scope="row">الاسم بالكامل</th>
                                                   <td><?php echo e($merchant->ar_name); ?></td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">الدولة</th>
                                                   <td><?php echo e($merchant->country_name); ?></td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">المدينة</th>
                                                   <td><?php echo e($merchant->city_name); ?></td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">البريد الالكتروني</th>
                                                   <td><a><?php echo e($merchant->email); ?></a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">نسبة التطبيق</th>
                                                    <td><a><?php echo e($merchant->order_app_percentage); ?> %</a></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">الاشتراك</th>
                                                    <td><a><?php echo e(($merchant->has_subscriptions == '1') ? 'يوجد' : 'لا يوجد'); ?></a></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">مدة الاشتراك</th>
                                                    <td><a><?php echo e(($merchant->subscriptions_period == "1" ) ? 'شهرى' : 'سنوى'); ?></a></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">قيمة الاشتراك</th>
                                                    <td><a><?php echo e($merchant->subscriptions_amount); ?> ريال </a></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">التصنيف</th>
                                                    <td><a><?php echo e($merchant->cat_name); ?></a></td>
                                                </tr>

                                                <tr>
                                                   <th scope="row">حالة الحساب</th>
                                                   <td>
                                                      <?php if($merchant->accountactivated == 1): ?> { ?>
                                                         <label class="label label-success">حساب مفعل</label>
                                                      <?php else: ?>
                                                         <label class="label label-danger">حساب غير مفعل</label>
                                                      <?php endif; ?>
                                                   </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">تفعيل رقم الهاتف</th>
                                                    <td>
                                                        <?php if($merchant->phoneactivated == 1): ?> { ?>
                                                        <label class="label label-success">حساب مفعل</label>
                                                        <?php else: ?>
                                                            <label class="label label-danger">حساب غير مفعل</label>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>

                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <!-- end of table col-lg-6 -->
                                    <div class="col-lg-12 col-xl-6">
                                       <div class="table-responsive">
                                          <table class="table">
                                             <tbody>
                                                <tr>
                                                   <th scope="row">رقم الجوال</th>
                                                   <td><?php echo e($merchant->phone); ?></td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">الرصيد</th>
                                                   <td><?php echo e($merchant->balance); ?> ريال</td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">تاريخ التسجيل</th>
                                                   <td><?php echo e($merchant->created_at); ?></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <!-- end of table col-lg-6 -->
                                 </div>
                                 <!-- end of row -->
                              </div>
                              <!-- end of general info -->
                           </div>
                           <!-- end of col-lg-12 -->
                        </div>
                        <!-- end of row -->
                     </div>
                  </div>
                  <!-- end of card-block -->
               </div>
               <!-- personal card end-->
            </div>
            <!-- tab pane personal end -->
            <!-- tab pane info start -->
            <div class="tab-pane" id="binfo">
                <div class="row">
                  <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-block post-timelines">
                                <span style="float: left;" class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip"></span>
                                <div class="dropdown-menu dropdown-menu-left b-none services-list">
                                    <a class="dropdown-item" href="<?php echo e(url("/admin/branches/view/" . $branch->id)); ?>">عرض تفاصيل الفرع</a>
                                </div>
                                <div class="media bg-white d-flex">
                                    <div class="media-left media-middle">
                                        <a href="<?php echo e(url("/admin/branches/view/" . $branch->id)); ?>">
                                            <img style="width: 128px; height: 128px;" class="media-object" src="<?php echo e(($branch->branch_image_url) ? $branch->branch_image_url : url("/storage/app/public/users/avatar.png")); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body friend-elipsis" style="padding-right: 20px;">

                                        <table class="table m-0">
                                            <tbody>
                                            <tr>
                                                <th scope="row">العنوان</th>
                                                <td><?php echo e($branch->ar_address); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">الحجز</th>
                                                <td><?php echo e(( $branch->has_booking == "1") ? 'يوجد' : 'لا يوجد'); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">نوع الحجز</th>
                                                <td><?php if($branch->booking_status == "0" ): ?> افراد <?php elseif($branch->booking_status == "1"): ?> عوائل <?php else: ?> عوائل و افراد <?php endif; ?></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">عدد الوجبات</th>
                                                <td><?php echo e($branch->meal_count); ?></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">عدد الحجوزات</th>
                                                <td><?php echo e($branch->res_count); ?></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">عدد الطلبات</th>
                                                <td><?php echo e($branch->orders_count); ?></td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- tab pane info end -->
            <div class="tab-pane" id="review" role="tabpanel">
               <div class="card">
                  <div class="card-block">
                     <ul class="media-list">
                        <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="media">
                              <div class="media-left">
                                 <a href="#">
                                 <img class="media-object img-radius comment-img" src="<?php echo e(( $merchant->image_url ) ? $merchant->image_url : url("/storage/app/public/users/avatar.png")); ?>">
                                 </a>
                              </div>
                              <div class="media-body" style="padding-right: 20px;">
                                 <h6 class="media-heading"><?php echo e($merchant->ar_name); ?><span class="f-12 text-muted m-l-5" style="padding-right: 5px;"><?php echo e($ticket->created_at); ?></span></h6>
                                 <p class="m-b-0"><?php echo e($ticket->title); ?></p>
                                 <hr>
                                 <!-- Nested media object -->
                                 <?php $__currentLoopData = $ticket->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="media mt-2">
                                       <a class="media-left" href="#">
                                       <img class="media-object img-radius comment-img" src="">
                                       </a>
                                       <div class="media-body" style="padding-right: 20px;">
                                          <h6 class="media-heading"><?php echo e(($reply->FromUser == 1) ? $merchant->ar_name : 'ادارة التطبيق'); ?><span style="padding-right: 5px;" class="f-12 text-muted m-l-5"><?php echo e($reply->created_at); ?></span></h6>
                                          <p class="m-b-0"><?php echo e($reply->reply); ?></p>
                                          <hr>
                                       </div>
                                    </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                           </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- tab content end -->
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_panel.blank', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>