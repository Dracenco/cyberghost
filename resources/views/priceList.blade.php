{{--Pricing table. mostly living on its own. Only one reference available to it inside main header--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table table-dark" style="max-width:80%; margin: auto; margin-top: 2%; height: 100%">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Plan type</th>
        <th scope="col">Operating system</th>
        <th scope="col">Price</th>
        <th scope="col">Monthly price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>One month</td>
        <td>Windows</td>
        <td>{{$prices['windows']['one_month_total']}}</td>
        <td>{{$prices['windows']['one_month_billed']}}</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>One year</td>
        <td>Windows</td>
        <td>{{$prices['windows']['one_year_total']}}</td>
        <td>{{$prices['windows']['one_year_billed']}}</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Three years</td>
        <td>Windows</td>
        <td>{{$prices['windows']['three_years_total']}}</td>
        <td>{{$prices['windows']['three_years_billed']}}</td>
    </tr>   <tr>
        <th scope="row">4</th>
        <td>One month</td>
        <td>Linux</td>
        <td>{{$prices['linux']['one_month_total']}}</td>
        <td>{{$prices['linux']['one_month_billed']}}</td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>One year</td>
        <td>Linux</td>
        <td>{{$prices['linux']['one_year_total']}}</td>
        <td>{{$prices['linux']['one_year_billed']}}</td>
    </tr>
    <tr>
        <th scope="row">6</th>
        <td>Three years</td>
        <td>Linux</td>
        <td>{{$prices['linux']['three_years_total']}}</td>
        <td>{{$prices['linux']['three_years_billed']}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
