<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مكاتب الصرافة</title>
    <style>
        body {
            font-family: 'Tahoma', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* خلفية فاتحة */
            color: #495057; /* لون النص */
        }

        header {
            background-color: #f7f7f8; /* لون الهيدر */
            padding: 20px;
            text-align: center;
            color: #fff; /* لون النص في الهيدر */
        }

        section {
            padding: 40px;
            text-align: center;
        }

        h1 {
            color: #343a40; /* لون العنوان الرئيسي */
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #6c757d; /* لون النص الفاتح */
        }

        .services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .service {
            background-color: #ffffff; /* خلفية صفحة الخدمات */
            border: 1px solid #dee2e6; /* لون الحدود */
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            width: 30%;
            box-sizing: border-box;
        }

        footer {
            background-color: #343a40; /* لون الفوتر */
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        div.navbar {
            text-align: center;
            margin-top: 20px;
        }

        a.nav-link {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            background-color: #0223fc; /* لون روابط القائمة */
            color: #ffffff;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        a.nav-link:hover {
            background-color: #5e87b3; /* تغيير لون الرابط عند التحويم */
        }
    </style>
</head>
<body>
    <div class="navbar">
        @auth
        <a href="{{ route('admin.login') }}" class="nav-link">Log in admin</a>
        <a href="{{ route('Office.login') }}" class="nav-link">Log in Office</a>
        <a href="{{ route('login') }}" class="nav-link">Log in</a>
        {{-- @if (Route::has('register')) --}}
            <a href="{{ route('register') }}" class="nav-link">Register</a>
        {{-- @endif --}}
        {{-- <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a> --}}
        @else
            <a href="{{ route('admin.login') }}" class="nav-link">Log in admin</a>
            <a href="{{ route('Office.login') }}" class="nav-link">Log in Office</a>
            <a href="{{ route('login') }}" class="nav-link">Log in</a>
            {{-- @if (Route::has('register')) --}}
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            {{-- @endif --}}
        @endauth
    </div>

    <header>
        <h1>مكاتب الصرافة</h1>
        <p>تقدم لك خدمات تبادل العملات بأفضل الأسعار</p>
    </header>

    <section>
        <h2>خدماتنا</h2>
        <div class="services">
            <div class="service">
                <h3>صرف العملات</h3>
                <p>نقدم خدمات صرف لمختلف العملات العالمية بأسعار تنافسية.</p>
            </div>
            <div class="service">
                <h3>تحويل الأموال</h3>
                <p>قم بتحويل الأموال بسهولة وأمان مع خدمات التحويل المتاحة لدينا.</p>
            </div>
            <div class="service">
                <h3>استشارات العملات</h3>
                <p>احصل على استشارات حول تحركات العملات والأسواق المالية من خبرائنا.</p>
            </div>
        </div>
    </section>

    {{-- <footer>
        <p>حقوق النشر © 2024 مكاتب الصرافة. جميع الحقوق محفوظة.</p>
    </footer> --}}

</body>
</html>
