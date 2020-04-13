<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>Today's date will be</title>
</head>
 <body>
 <?php
      $dayofweek = date("w");

      switch ($dayofweek) {
        case 1:
          echo "It is Monday April 13, 2020!";
          break;
        case 2:
          echo "It is Tuesday April 14, 2020!";
          break;
        case 3:
          echo "It is Wednesday April 15, 2020!";
          break;
        case 4:
          echo "It is Thursday April 16, 2020!";
          break;
        case 5:
          echo "It is Friday April 17, 2020!";
          break;
        case 6:
          echo "It is Saturday April 18, 2020!";
          break;
        case 0:
          echo "It is Sunday April 19, 2020!";
          break;
        default:
          echo "Error!";
          break;
      }
    ?>
  </body>
</html>
