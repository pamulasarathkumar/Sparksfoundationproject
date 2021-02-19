<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    a{
    background-color: #f44336;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    input[type=submit]{
    background-color: #f44336;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    form{
        margin-top:25px;
        margin-left:240px;
    }
    select{
      display: block;
      font-size: 16px;
      font-family: sans-serif;
      /* color:mediumseagreen; */
      padding: 12px 8px;
      align:"center"; 
      width: 50%;
      box-sizing: border-box;
      border: 1px solid #aaa;
      box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
      appearance: none;
      background-color: #fff;
      }
      input[type=text]{
        display: block;
        /* color:mediumseagreen; */
        font-size: 16px;
        font-family: sans-serif;
        padding: 12px 8px;
        align:"center"; 
        width: 50%;
        box-sizing: border-box;
        border: 1px solid #aaa;
        box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
        appearance: none;
        background-color: #fff;
      }
      h1{
          color:#f44336;
      }
      h2{
          color:slateblue;
      }
    </style>
</head>
<body>

<div align="right">
<a href="users.php">User Details</a>
<a href="transaction_table.php">Transactions</a> 
</div>

<h1>Transfer Money</h1>

    <div class="form">
    <form  method="POST" action="transactions.php">
    <h2>Sender:</h2>
    <select name="sender" > 
            <option value=sender>Select sender</option>
            <option value="johndoe">JohnDoe</option>
            <option value="ramkumar">RamKumar</option>
            <option value="kumarsai">KumarSai</option> 
            <option value="rakesh">Rakesh</option> 
            <option value="ameersultan">AmeerSultan</option> 
            <option value="victorpaul">VictorPaul</option> 
            <option value="rumaise">Rumaise</option> 
            <option value="varij">Varij</option> 
            <option value="govardhan">Govardhan</option> 
            <option value="tijo">Tijo</option> 
    </select>
    <br>
    <h2>Receiver:</h2>
    <select name="receiver" > 
        <option value="receiver">Select receiver</option>
        <option value="johndoe">JohnDoe</option>
        <option value="ramkumar">RamKumar</option>
        <option value="kumarsai">KumarSai</option> 
        <option value="rakesh">Rakesh</option> 
        <option value="ameersultan">AmeerSultan</option> 
        <option value="victorpaul">VictorPaul</option> 
        <option value="rumaise">Rumaise</option> 
        <option value="varij">Varij</option> 
        <option value="govardhan">Govardhan</option> 
        <option value="tijo">Tijo</option> 
    </select>
    <h2>Amount: </h2><input type="text" name="amount"><br>
    <input type="submit" value="Transfer">
    </form>
    </div>

</body>
</html>