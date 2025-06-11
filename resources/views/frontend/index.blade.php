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
            @foreach($stories as $story)
                <div class="story">
                    <img src="{{ asset($story->photo) }}" alt="{{ $story->name }}" class="story-avatar">
                    <div class="story-name">{{ $story->name }}</div>
                </div>
            @endforeach
        </div>

        <!-- عرض الـ Posts -->
        <div class="posts-container">
            @foreach($posts as $post)
                <div class="post">
                    <div class="post-header">
                        <img src="{{ asset($post->photo) }}" alt="{{ $post->name }}" class="post-avatar">
                        <div class="post-user-info">
                            <strong>{{ $post->name }}</strong>
                            <div class="post-time">{{ $post->created_at }}</div> <!-- تم التعديل هنا -->
                        </div>
                    </div>
                    <div class="post-content">
                        {{ $post->content }}
                    </div>
                    @if($post->image)
                        <img src="{{ asset($post->image) }}" alt="صورة المنشور" class="post-image">
                    @endif
                </div>
            @endforeach
        </div>

        <!-- عرض قائمة الأصدقاء -->
        <div class="friends-list">
            <h3>أصدقاؤك</h3>
            @foreach($friendships as $friendship)
                @php
                    $friend = $friendship->accepter == auth()->user()->id ? $friendship->requesterUser : $friendship->accepterUser;
                @endphp
                <div class="friend-item">
                    <img src="{{ asset($friend->photo) }}" alt="{{ $friend->name }}" class="friend-avatar">
                    <span>{{ $friend->name }}</span>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>