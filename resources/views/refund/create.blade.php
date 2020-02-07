<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Balance</title>
</head>
<body>
    <h1> Add User Balances</h1>
    <form  method="post" action="{{route('refund.store')}}">
       
       @csrf
        Balance :<input type="text" name="balance" /><br/>
       Winning: <input type="text" name="winning" /><br/>
       Bonus: <input type="text" name="bonus" />

       <input type="submit" value="submit" />

    </form>
</body>
</html>