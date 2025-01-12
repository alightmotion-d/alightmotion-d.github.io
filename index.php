<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlightMotion下载站</title>
    <meta name='description' content='一个AlightMotion破解汉化及各种版本的合集下载站'>
<link rel="icon" href="https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/75/95/78/75957825-6a0c-d021-8730-363a4aa5dd94/AppIcon-0-0-1x_U007emarketing-0-4-0-0-0-0-85-220.png/246x0w.webp" type="image/png">
    <style>
        /* 全局样式 */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* 使页面内容居中 */
        .app-container {
            width: 100%;
            max-width: 480px;
            padding: 20px;
            margin-top: 80px; /* 给导航栏留出空间 */
            box-sizing: border-box;
        }

        /* 导航栏样式 */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
            display: flex;
            align-items: center;
            border-radius: 12px;
            z-index: 1000;
        }

        /* LOGO样式 */
        .navbar .logo {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            overflow: hidden; /* 避免图片超出圆角 */
            margin-right: 15px;
        }

        .navbar .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* 保证图片填满容器 */
        }

        /* 导航栏文字 */
        .navbar .title {
            font-size: 20px;
            color: #333;
            font-weight: bold;
        }

        /* 卡片样式 */
        .app-card {
            background-color: #fff;  /* 奶白色背景 */
            border-radius: 12px;         /* 圆角效果 */
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);  /* 阴影效果 */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }

        /* 卡片悬浮效果 */
        .app-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        /* 卡片出现的动画 */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* 应用卡片图标 */
        .app-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px; /* 圆角效果 */
            overflow: hidden; /* 避免图片超出圆角 */
            margin-bottom: 10px;
        }

        .app-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* 保证图片填满容器 */
        }

        /* 应用卡片标题 */
        .app-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        /* 应用卡片描述 */
        .app-description {
            font-size: 14px;
            color: #666;
            margin-top: 8px;
        }

        /* 下载按钮 */
        .download-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        /* 按钮悬停效果 */
        .download-btn:hover {
            background-color: #ff8c00;
        }

        /* 公告卡片样式 */
        .announcement-card {
            background-color: #fff;  /* 奶白色背景 */
            border-radius: 12px;         /* 圆角效果 */
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);  /* 阴影效果 */
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }

        /* 公告标题 */
        .announcement-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        /* 公告描述 */
        .announcement-description {
            font-size: 14px;
            color: #666;
            margin-top: 8px;
        }
.animated-link {
            text-decoration: none; /* 去除下划线 */
            color: #3498db; /* 默认颜色 */
            transition: color 0.3s ease; /* 动画效果 */
        }

        .animated-link:hover {
            color: #2980b9; /* 悬停时颜色 */
        }

        .animated-link:active {
            color: #e74c3c; /* 按下时颜色 */
        }
    </style>
</head>
<body>

    <!-- 导航栏 -->
    <div class="navbar">
        <div class="logo">
            <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/75/95/78/75957825-6a0c-d021-8730-363a4aa5dd94/AppIcon-0-0-1x_U007emarketing-0-4-0-0-0-0-85-220.png/246x0w.webp" alt="LOGO">
        </div>
        <!-- 导航栏标题 -->
        <div class="title">AlightMotion下载站</div>
    </div>

    <!-- 应用卡片列表 -->
    <div class="app-container">
       <!-- 公告卡片 -->
        <div class="announcement-card">
            <div class="announcement-title">公告</div>
            <div class="announcement-description">感谢您访问我们的下载站！本站有2个网址<a href="https://alightmotiondwl.us.kg/" class="animated-link">主</a>和<a href="https://alightmotion-d.github.io/" class="animated-link">备</a>，我们的下载地址使用自研CDN云盘的国内节点，速度OK</div>
   </div>
        <div class="app-card">
            <div class="app-icon">
                <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/75/95/78/75957825-6a0c-d021-8730-363a4aa5dd94/AppIcon-0-0-1x_U007emarketing-0-4-0-0-0-0-85-220.png/246x0w.webp" alt="App图标">
            </div>
            <div class="app-title">Alight Motion</div>
            <div class="app-description">V5.0原版汉化破解，豪用！</div>
            <a href="https://apis.jxcxin.cn/api/lanzou?url=https://ywtd.lanzouo.com/iNyZ02kp6a8h&pwd=67b9&type=down" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="download-btn">立即下载</a>
        </div>

        <div class="app-card">
            <div class="app-icon">
                <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/75/95/78/75957825-6a0c-d021-8730-363a4aa5dd94/AppIcon-0-0-1x_U007emarketing-0-4-0-0-0-0-85-220.png/246x0w.webp" alt="App图标">
            </div>
            <div class="app-title">Alight Motion</div>
            <div class="app-description">V4.0原版汉化破解，不豪用！</div>
            <a href="https://apis.jxcxin.cn/api/lanzou?url=https://ywtd.lanzouo.com/irMDW2kp6rzg&pwd=byep&type=down" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="download-btn">立即下载</a>
        </div>

    <div class="app-card">
            <div class="app-icon">
                <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/75/95/78/75957825-6a0c-d021-8730-363a4aa5dd94/AppIcon-0-0-1x_U007emarketing-0-4-0-0-0-0-85-220.png/246x0w.webp" alt="App图标">
            </div>
            <div class="app-title">Alight Motion</div>
            <div class="app-description">官方V5.0</div>
        <?php
// 生成一个唯一的 token
function generateToken($id) {
    return bin2hex(random_bytes(16)) . '-' . $id; // 生成随机 token
}

// 假设文件 ID
$fileId = 4; // 这里可以是从数据库中获取的文件 ID
$token = generateToken($fileId);

// 生成下载链接
$downloadLink = "https://cloud.alightmotiondwl.us.kg/download.php?id=$fileId&tk=$token";
echo "下载链接: <a href='$downloadLink'>点击下载</a>";
?>
<br>
            <a href="https://apps.apple.com/us/app/id1459833443" class="download-btn">IOS下载</a>
        </div>

            <div class="app-card">
            <div class="app-icon">
                <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/75/95/78/75957825-6a0c-d021-8730-363a4aa5dd94/AppIcon-0-0-1x_U007emarketing-0-4-0-0-0-0-85-220.png/246x0w.webp" alt="App图标">
            </div>
            <div class="app-title">Alight Motion</div>
            <div class="app-description">官方汉化V5.0</div>
            <a href="http://cloud.alightmotiondwl.us.kg/download.php?id=3" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="download-btn">立即下载</a>
        </div>

<div class="app-card">
            <div class="app-icon">
                <img src="https://itopdog.xyxza.com/mgwyx/imgfile/20240906/06101235salz.png" alt="App图标">
            </div>
            <div class="app-title">AM Ls</div>
            <div class="app-description">V5.5.7</div>
            <a href="https://www.mgwyx.com/android/odgghj-16131.html" class="download-btn">外链下载</a>
        </div>

<div class="app-card">
            <div class="app-icon">
                <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/75/95/78/75957825-6a0c-d021-8730-363a4aa5dd94/AppIcon-0-0-1x_U007emarketing-0-4-0-0-0-0-85-220.png/246x0w.webp" alt="App图标">
            </div>
            <div class="app-title">AM凌风版</div>
            <div class="app-description">v5.0</div>
            <a href="https://www.xue51.com/mac/89713.html" class="download-btn">外链下载</a>
        </div>
        
    </div>

</body>
</html>