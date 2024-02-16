{{-- <x-app-layout>
    <x-slot name="header">
    <title>لوحة التحكم - Office</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="card-body">
        <!-- محتوى لوحة التحكم يمكن أن يكون هنا -->
    
        <!-- زر تسجيل الخروج -->
        <form action="{{ route('welcome') }}" method="post" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger">تسجيل الخروج</button>
        </form>
    </div>

<center>
    <h2>صفحة المكتب الخاصة بك</h2>
    <h2>لوحة التحكم </h2>

    <a href="{{ route('Office.create') }}">إضافة حوالة</a>
    <a href="{{ route('Office.create1') }}">إضافة أسعار صرف</a>

</center>
</x-slot>
</x-app-layout> --}}

<x-app-layout>
    <x-slot name="header">
        <title>لوحة التحكم - Office</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f8f9fa;
                margin: 0;
                padding: 20px;
            }

            h2 {
                color: #007bff;
                margin-bottom: 20px;
            }

            a.button {
                display: inline-block;
                margin: 10px 0;
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease-in-out;
            }

            a.button:hover {
                background-color: #0056b3;
            }

            .content {
                text-align: center;
            }

            .logout-button {
                margin-top: 20px;
            }
        </style>
    

    <div class="card-body content">
        <!-- محتوى لوحة التحكم يمكن أن يكون هنا -->

        <!-- زر تسجيل الخروج -->
        {{-- <form action="{{ route('welcome') }}" method="post" class="d-inline logout-button">
            @csrf
            <button type="submit" class="btn btn-danger">تسجيل الخروج</button>
        </form> --}}

        <h2>صفحة المكتب الخاصة بك</h2>
        <h2>لوحة التحكم</h2>

        <a href="{{ route('Office.create') }}" class="button">إضافة حوالة</a>
        <a href="{{ route('Office.create1') }}" class="button">إضافة أسعار صرف</a>
    </div>
</x-slot>
</x-app-layout>
