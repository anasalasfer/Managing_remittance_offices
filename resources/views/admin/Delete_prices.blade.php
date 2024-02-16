

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>جميع أسعار الصرف</title>
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    width: 80%;
    margin: 50px auto;
}

h1 {
    color: #007bff;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #007bff;
    color: #fff;
}

p {
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
    color: #333;
}
    </style>
</head>
<body>

    <div class="container">
        <h1>جميع أسعار الصرف</h1>
    
        @if ($exchangeRates->isNotEmpty())
            <table border="1">
                <thead>
@foreach ($exchangeRates as $rate)
    <tr>
        <td>{{ $rate->id }}</td>
        <td>{{ $rate->office_name }}</td>
        <td>{{ $rate->publish_date }}</td>
        <td>{{ $rate->usd_to_try }}</td>
        <td>{{ $rate->try_to_usd }}</td>
        <td>{{ $rate->usd_to_syp }}</td>
        <td>{{ $rate->syp_to_usd }}</td>
        <td>{{ $rate->created_at }}</td>
        <td>{{ $rate->updated_at }}</td>
        <td>
            <form action="{{ route('admin.delete', $rate->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
            </form>
        </td>
    </tr>
@endforeach

</tbody>
</table>
@else
<p>لا توجد أسعار متاحة حالياً.</p>
@endif
</div>

</body>
</html>