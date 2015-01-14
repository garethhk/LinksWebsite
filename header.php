<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico"> 

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

  <?php
    include 'sqlconnection.php';
  ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>  
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <?php
            $sqlcategory = "SELECT ID, Name FROM Category";
            $resultcategory = $conn->query($sqlcategory);

            if ($resultcategory->num_rows > 0)
            {
              echo "<li class='dropdown'>"; 
              while($rowcategory = $resultcategory->fetch_assoc())
              {
                echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'";
                echo $rowcategory["Name"];
                echo "span class='caret'></span>";
                echo "</a>";
                $sqllink = "SELECT Link.ID, Link.Name, Link.CID, Category.ID, Category.Name FROM Link, Category WHERE Link.CID =" . $row["ID"] . "";
                $resultlink = $conn->query($sql);
                if ($resultlink->num_rows > 0)
                {
                  while($rowlink = $resultlink ->fetch_assoc())
                  {
                    echo "<li>";
                    echo "<a href='#'>" . $rowlink["Link.Name"] . "</a>";
                    echo "</li>";
                  }
                }
              }
              echo "</li>";
            }
            ?>

            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
