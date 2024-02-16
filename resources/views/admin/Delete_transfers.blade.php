<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الحوالات</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            direction: rtl;
            text-align: right;
        }

        .container {
            margin-top: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: #f2f2f2;
        }

        p {
            color: #777;
        }

        .delete-btn {
            background-color: #ff5050;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>عرض الحوالات</h1>

    @if (count($transfers) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>المكتب المرسل</th>
                    <th>المرسل</th>
                    <th>المكتب المستقبل</th>
                    <th>المستلم</th>
                    <th>المبلغ</th>
                    <th>تاريخ الإرسال</th>
                    <th>خيارات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transfers as $transfer)
                    <tr>
                        <td>{{ $transfer->sender_office }}</td>
                        <td>{{ $transfer->sender_name }}</td>
                        <td>{{ $transfer->receiver_office }}</td>
                        <td>{{ $transfer->receiver_name }}</td>
                        <td>{{ $transfer->amount }}</td>
                        <td>{{ $transfer->send_date }}</td>
                        <td>
                            <form action="{{ route('admin.delete', $transfer->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="delete-btn" type="submit">حذف الحوالة</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>لا توجد حوالات حالياً.</p>
    @endif
</div>

</body>
</html>
