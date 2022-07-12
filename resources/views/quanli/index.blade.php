<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <table border=1 cellspacing=0 cellpadding=8>
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Tên học sinh</th>
                    <th>Điểm</th>
                    <th>Xếp loại</th>
                    <th>Ngày nhập</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>

            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->score }}</td>
                        <td> 
                        @php
                        {{
                            if($student->score >= 8){
                            echo 'Loại A';
                        }else if($student->score >= 7){
                            echo 'Loại B';
                        }else if($student->score >= 6){
                            echo 'Loại C';
                        }else if($student->score >= 5){
                            echo 'Loại D';
                        }else{
                            echo 'Loại E';
                        }
                        }}

                        @endphp
                        </td>
                        <td>{{ date('H-m-s : D-d-M-y',strtotime($student->dob)) }}</td>
                        <td><a href="{{ route('quanli.edit', ['id'=>$student->id]) }}">Sửa</a></td>
                        <td><a href="{{ route('quanli.delete', ['id'=>$student->id]) }}">Xóa</a></td>

                    </tr>
                @empty
                <tr>
                    <td align="center" valign="1" colspan="6">Không tồn tại dữ liệu</td>
                </tr>    
                @endforelse
            </tbody>
        </table>
    </form>
</body>
</html>