<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册确认邮件</title>
</head>
<body>
    <h1>感谢您在 Weibo App 网站进行注册！</h1>
    <p>
        请点击下面的链接完成注册！
        <a href="{{ route('confirm_email', $user->activation_token) }}" title="">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>
    <p>
        如果这不是您本人的操作，请忽略邮件。
    </p>
</body>
</html>
