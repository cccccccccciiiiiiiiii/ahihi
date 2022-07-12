<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('quanli.store') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Tên học sinh : </td>
                <td><input type="text" placeholder="Nhập tên học sinh" name="name" style="width:180px; padding:7px; border-radius:5px"></td>
            </tr>

            <tr>
                <td>Số điểm : </td>
                <td><input type="text" placeholder="Nhập tên điểm của học sinh" name="score" style="width:180px; padding:7px; border-radius:5px"></td>
            </tr>

            <tr>
                <td>Ngày nhập : </td>
                <td><input type="datetime-local" placeholder="Nhập ngày" name="dob" style="width:180px; padding:7px; border-radius:5px"></td>
            </tr>

            <tr>
                <td>
                    <button type="submit">Nhập</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>