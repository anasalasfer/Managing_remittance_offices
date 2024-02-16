<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Page</title>
    <!-- تضمين مكتبة بوتستراب -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- تضمين مكتبة الأيقونات FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-oGhg52TZDR5b2Db6gRJTyWYjOMl6IQ9eU0e3MjFqKc27EYOhU8EjWOcqp5tLg9kN" crossorigin="anonymous">
    <!-- تخصيص النموذج -->
    <style>
        body {
            background-color: #f8f9fa;
            transition: background-color 0.3s ease;
        }
    
        .container {
            max-width: 800px;
            margin-top: 50px;
            transition: margin-top 0.3s ease;
        }
    
        .admin-title {
            text-align: center;
            color: #ff0000;
            margin-bottom: 30px;
            transition: color 0.3s ease;
        }
    
        .btn-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }
    
        .btn-group a {
            width: 48%;
            margin-bottom: 10px;
        }
    
        .card-body {
            text-align: right;
            padding: 10px;
        }
    
        /* تغيير لون الزر الرئيسي */
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            transition: background-color 0.3s ease;
        }
    
        /* تغيير لون الزر الثانوي */
        .btn-secondary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }
    
        /* تغيير لون زر التسجيل الخروج */
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            transition: background-color 0.3s ease;
        }
    
        /* تأثير تحويل اللغة */
        body.rtl {
            direction: rtl;
            text-align: right;
        }
    </style>
    
</head>

<body>

    <div class="container mt-5">
        <div class="card">
     <Center>       <div class="card-header">
        <h2 class="mb-0">لوحة التحكم</h2>
    </div></Center>

            <div class="card-body">
                <!-- زر تسجيل الخروج -->
                <form action="{{ route('welcome') }}" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">تسجيل الخروج</button>
                </form>
            </div>

            <div class="container mt-5">
                <h2 class="admin-title">مرحبًا بك في صفحة المدير</h2>

                <div class="btn-group">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> إنشاء
                        مكتب</a>
                    <a href="{{ route('admin.index') }}" class="btn btn-secondary"><i class="fas fa-eye"></i> عرض
                        المكاتب</a>
                    <a href="{{ route('admin.show') }}" class="btn btn-secondary"><i class="fas fa-eye"></i> عرض حذف
                        الحوالات</a>
                    <a href="{{ route('admin.Delete_prices') }}" class="btn btn-secondary"><i class="fas fa-eye"></i>
                        عرض حذف الأسعار</a>
                </div>
            </div>

        </div>
    </div>

    <!-- تضمين مكتبة الجافا سكريبت لبوتستراب -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
