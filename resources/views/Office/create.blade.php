
{{-- <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة حوالة</title>
    <!-- Include Bootstrap CSS (adjust the path as needed) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Custom styles for better layout */
        body {
            background-color: #f8f9fa; /* Set your desired background color */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Choose a suitable font */
        }
        .card {
            margin-top: 20px;
        }
        .card-header {
            background-color: #007bff; /* Set your desired header color */
            color: #ffffff; /* Set your desired text color */
            text-align: right;
        }
        .form-group {
            text-align: right;
        }
        .btn-primary {
            background-color: #007bff; /* Set your desired button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Set your desired button hover color */
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        إضافة حوالة
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('Office.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="sender_office">اسم المكتب المرسل:</label>
                                <input type="text" name="sender_office" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="receiver_office">اسم المكتب المستقبل:</label>
                                <input type="text" name="receiver_office" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="sender_name">اسم الشخص المرسل:</label>
                                <input type="text" name="sender_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="receiver_name">اسم الشخص المستلم:</label>
                                <input type="text" name="receiver_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="amount">مبلغ الحوالة:</label>
                                <input type="number" name="amount" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="send_date">تاريخ الإرسال:</label>
                                <input type="date" name="send_date" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">إضافة الحوالة</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (adjust the path as needed) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة حوالة</title>
    <!-- Include Bootstrap CSS (adjust the path as needed) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        /* Custom styles for better layout */
        body {
            background-color: #f8f9fa; /* Set your desired background color */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Choose a suitable font */
        }
        .card {
            margin-top: 20px;
        }
        .card-header {
            background-color: #007bff; /* Set your desired header color */
            color: #ffffff; /* Set your desired text color */
            text-align: center;
        }
        .form-group {
            text-align: right;
        }
        .btn-primary {
            background-color: #007bff; /* Set your desired button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Set your desired button hover color */
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">إضافة حوالة</h3>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('Office.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="sender_office">اسم المكتب المرسل:</label>
                                <input type="text" name="sender_office" class="form-control" value="{{ Auth::guard('Office')->user()->name }}" readonly>
                            </div>
                            

                            <div class="form-group">
                                <label for="receiver_office">اسم المكتب المستقبل:</label>
                                <input type="text" name="receiver_office" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="sender_name">اسم الشخص المرسل:</label>
                                <input type="text" name="sender_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="receiver_name">اسم الشخص المستلم:</label>
                                <input type="text" name="receiver_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="amount">مبلغ الحوالة:</label>
                                <input type="number" name="amount" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="send_date">تاريخ الإرسال:</label>
                                <input type="date" name="send_date" class="form-control" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">إضافة الحوالة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
