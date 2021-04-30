<!DOCTYPE html>
<html>
<head>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<table id="t01">
<caption>Order History</caption>
  <tr>
    <th>Vehicle ID</th>
    <th>Payment ID</th>
    <th>Date From</th> 
    <th>Date Till</th>
  </tr>
  @foreach ($Orders as $order)
  <tr>
    <td>{{ $order->vehicle_id }}</td>
    <td>{{ $order->payment_id }}</td>
    <td>{{ $order->from_date }}</td>
    <td>{{ $order->to_date }}</td>
  </tr>
  @endforeach
  </table>

</body>
</html>
