<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الجدول الزمني</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .stories-container {
            display: flex;
            overflow-x: auto;
            padding: 15px 0;
            margin-bottom: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .story {
            margin-right: 15px;
            text-align: center;
            cursor: pointer;
        }
        .story-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 2px solid #3b5998;
            padding: 2px;
            object-fit: cover;
        }
        .story-name {
            margin-top: 5px;
            font-size: 12px;
        }
        .posts-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .post {
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .post-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-left: 10px;
            object-fit: cover;
        }
        .post-user-info {
            flex-grow: 1;
        }
        .post-time {
            color: #777;
            font-size: 12px;
        }
        .post-content {
            margin-bottom: 15px;
        }
        .post-image {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .friends-list {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .friend-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .friend-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- عرض الـ Stories -->
        <div class="stories-container">
            <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="story">
                    <img src="<?php echo e(asset($story->photo)); ?>" alt="<?php echo e($story->name); ?>" class="story-avatar">
                    <div class="story-name"><?php echo e($story->name); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- عرض الـ Posts -->
        <div class="posts-container">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post">
                    <div class="post-header">
                        <img src="<?php echo e(asset($post->photo)); ?>" alt="<?php echo e($post->name); ?>" class="post-avatar">
                        <div class="post-user-info">
                            <strong><?php echo e($post->name); ?></strong>
                            <div class="post-time"><?php echo e($post->created_at); ?></div> <!-- تم التعديل هنا -->
                        </div>
                    </div>
                    <div class="post-content">
                        <?php echo e($post->content); ?>

                    </div>
                    <?php if($post->image): ?>
                        <img src="<?php echo e(asset($post->image)); ?>" alt="صورة المنشور" class="post-image">
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- عرض قائمة الأصدقاء -->
        <div class="friends-list">
            <h3>أصدقاؤك</h3>
            <?php $__currentLoopData = $friendships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friendship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $friend = $friendship->accepter == auth()->user()->id ? $friendship->requesterUser : $friendship->accepterUser;
                ?>
                <div class="friend-item">
                    <img src="<?php echo e(asset($friend->photo)); ?>" alt="<?php echo e($friend->name); ?>" class="friend-avatar">
                    <span><?php echo e($friend->name); ?></span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</body>
</html><?php /**PATH /home/onesoit.com/public_html/resources/views/frontend/index.blade.php ENDPATH**/ ?>