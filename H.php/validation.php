<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php
    include "nav.php";
    $name = $email = $password = '';
    $nameErr = $emailErr = $passwordErr = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameErr = "Name Is Required";
        } else {
            $name = sanitize_data($_POST["name"]);
        }
        if (empty($_POST['email'])) {
            $emailErr = "Email Is Required";
        } else {
            $email = sanitize_data($_POST["email"]);
        }
        if (empty($_POST['password'])) {
            $passwordErr = "Password Is Required";
        } else {
            $password = sanitize_data($_POST["password"]);
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitize_data($_POST["name"]);
        $email = sanitize_data($_POST["email"]);
        $password = sanitize_data($_POST["password"]);
        echo "Data is sanitized in appropriate format <br>";
    }

    function sanitize_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>

    <!-- <form method='post' action="">
        Name : <input type="text" name="name">
        <span class="text-danger"><?php echo $nameErr ?></span>
        <br><br>
        Email : <input type="email" name="email">
        <span class="text-danger"><?php echo $emailErr ?></span>
        <br><br>
        Password : <input type="password" name="passowrd">
        <span class="text-danger"><?php echo $passwordErr ?></span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form> -->

    <form method='post' action="">
    <div class="mb-2">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" aria-describedby="nameHelp" name="name">
    <span class="text-danger"><?php echo $nameErr ?></span>
  </div>
  <div class="mb-2">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
    <span class="text-danger"><?php echo $emailErr ?></span>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-2">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
    <span class="text-danger"><?php echo $passwordErr ?></span>
  </div>
  <button type="submit" class="btn btn-outline-dark">Submit</button>
</form>

    <?php
    error_reporting(0);
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
</body>

</html>