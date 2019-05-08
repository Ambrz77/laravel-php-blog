<html>
<head>
    <title>
        users
    </title>
</head>
<body dir='rtl'>
<h1> users </h1>

 <?php echo $x[0]['fname'] ?>
  {{$x[0]['fname']}}
  @foreach($x as $user)
      {{$user['fname']}} <br>
  @endforeach

<table border="i">
    <tr>
        <td> ردیف</td>
        <td> نام</td>
        <td> نام خانوادگی</td>
        <td> سن</td>
    </tr>

    @foreach ($x as $key => $val)
        <tr>
            <td> {{$key+1}}</td>
            <td> {{$val['fname']}}</td>
            <td> {{$val['lname']}}</td>
            <td> {{$val['age']}}</td>
        </tr>
    @endforeach

</table>

</body>
</html>