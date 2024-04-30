<?php
    // Check if the form is submitted
    if(isset($_POST['submit'])) {
        // Assign form values to variables
        $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $city = isset($_POST['city']) ? $_POST['city'] : '';
        $country = isset($_POST['country']) ? $_POST['country'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $zip = isset($_POST['zip']) ? $_POST['zip'] : '';

        // Database details
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_maputol";

        // Create a database connection
        $con = mysqli_connect($host, $username, $password, $dbname);

        // Check if the connection is successful
        if (!$con) {
            die("Connection failed!" . mysqli_connect_error());
        }

        // SQL query to insert data into the table
        $sql = "INSERT INTO tbl_hotel_registritionform (first_name, last_name, address, city, country, phone, email, birth_date, gender, zip) VALUES ('$first_name', '$last_name', '$address', '$city', '$country', '$phone', '$email', '$birth_date', '$gender', '$zip')";

        // Execute the query
        $rs = mysqli_query($con, $sql);

        // Check if the query executed successfully
        if($rs) {
            echo "Entries added!";
        } else {
            echo "Error: " . mysqli_error($con);
        }

        // Close the database connection
        mysqli_close($con);
    }
?>
