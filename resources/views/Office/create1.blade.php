<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            direction: rtl; /* إضافة توجيه النصوص للعربية */
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #333;
        }


        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-bottom: 15px;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus {
            border-color: #007bff;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            width: 100%;
            text-transform: uppercase; /* تحويل النص في الزر إلى حالة كبيرة الحروف */
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>نشر أسعار الصرف</title>
</head>
<body>

<div class="container">
    <h1>نشر أسعار الصرف</h1>

    <form method="post" action="{{ route('Office.store1') }}">
        @csrf
        <div class="form-group">
            <label for="office_name">اسم المكتب</label>
            <input type="text" class="form-control" id="office_name" name="office_name" value="{{ Auth::guard('Office')->user()->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="publish_date">تاريخ النشر</label>
            <input type="date" class="form-control" id="publish_date" name="publish_date" required>
        </div>
        <div class="form-group">
            <label for="usd_to_try">الدولار إلى التركي</label>
            <input type="number" step="0.01" class="form-control" id="usd_to_try" name="usd_to_try" required>
        </div>
        <div class="form-group">
            <label for="try_to_usd">التركي إلى الدولار</label>
            <input type="number" step="0.01" class="form-control" id="try_to_usd" name="try_to_usd" required>
        </div>
        <div class="form-group">
            <label for="usd_to_syp">الدولار إلى السوري</label>
            <input type="number" step="0.01" class="form-control" id="usd_to_syp" name="usd_to_syp" required>
        </div>
        <div class="form-group">
            <label for="syp_to_usd">السوري إلى الدولار</label>
            <input type="number" step="0.01" class="form-control" id="syp_to_usd" name="syp_to_usd" required>
        </div>
        <button type="submit" class="btn btn-primary">نشر</button>
    </form>
</div>


</body>
</html>