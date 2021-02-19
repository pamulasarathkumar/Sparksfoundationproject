<?php
    $servername = "localhost";
    $username = "root";

    $conn = new mysqli($servername, $username,"",'bank');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
        echo "Connected successfully";
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('KumarSai', 'kumarsai@example.com','150000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Rakesh', 'rakesh@example.com','600000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('AmeerSultan', 'ameer@example.com','100000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('VictorPaul', 'victor@example.com','750000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Rumaise', 'rumaise@example.com','1050000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Varij', 'varij@example.com','50000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Govardhan', 'govardhan@example.com','5150000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Tijo', 'tijo@example.com','100000')";       
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>