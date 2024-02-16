<x-app-layout>
    <x-slot name="header">
<style>
    .nav-item {
        list-style: none;
        margin-bottom: 10px;
    }

    .nav-link {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        text-decoration: none;
        color: #007bff;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .nav-link:hover {
        background-color: #007bff;
        color: #fff;
    }
    .font-semibold text-xl text-gray-800 leading-tight{
        text-align: center 
        padding: 10px 20px;
        margin: 10px;
    }
</style>
 <center>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        أهلا وسهلا بك في صفحة إدارة أسعار الصرف وخدمات المالية
        </h2><br>
            <ul class="navbar-nav ml-auto">
                <!-- أضف هذا الرابط -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show') }}">عرض الحوالات</a>
                    <a class="nav-link" href="{{ route('show1') }}">عرض أسعار الصرف</a>
                </li>
                <!-- ... الروابط الأخرى -->
            </ul>
        </h2>
 </center>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
