<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Chúc mừng {{$booking->name}} đã đặt hàng thành công</h2>
    <table style="border: 1px solid black;">
        <thead>
          <tr>
            <th scope="col">Loại phòng: </th>
            <th scope="col">Họ tên khách hàng: </th>
            <th scope="col">Địa chỉ email: </th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Quốc gia: </th>
            <th scope="col">Ngày checkin: </th>
            <th scope="col">ngày checkout: </th>
            <th scope="col">Số lượng người lớn: </th>
            <th scope="col">Số lượng trẻ em: </th>
            <th scope="col">Ghi chú khách hàng: </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$booking->room_types->name}}</td>
            <td>{{$booking->name}}</td>
            <td>{{$booking->email}}</td>
            <td>{{$booking->number_phone}}</td>
            <td>{{$booking->country}}</td>
            <td>{{$booking->arrival_date}}</td>
            <td>{{$booking->departure_date}}</td>
            <td>{{$booking->aldult}}</td>
            <td>{{$booking->children}}</td>
            <td>{{$booking->comment}}</td>
          </tr>
        </tbody>
      </table>
</body>
</html>
