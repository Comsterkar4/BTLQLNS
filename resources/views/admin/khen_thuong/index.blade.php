<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh sách Khen Thưởng</title>
</head>

<body>

    <h1>Danh sách Khen Thưởng</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nhân viên (ID)</th>
            <th>Ngày quyết định</th>
            <th>Số quyết định</th>
            <th>Hình thức</th>
            <th>Số tiền</th>
            <th>Lý do</th>
        </tr>

        @foreach($khenThuong as $kt)
        <tr>
            <td>{{ $kt['id'] }}</td>
            <td>{{ $kt['nhan_vien_id'] }}</td>
            <td>{{ $kt['ngay_quyet_dinh'] }}</td>
            <td>{{ $kt['so_quyet_dinh'] }}</td>
            <td>{{ $kt['hinh_thuc'] }}</td>
            <td>{{ number_format($kt['so_tien'], 0, '.', ',') }}</td>
            <td>{{ $kt['ly_do'] }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>