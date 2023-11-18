<?php
require_once('connection.php');
$errors = [];
if (isset($_POST['register'])) {
    // Escape special characters in string for use in SQL statement	
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Check for empty fields
    if (empty($name) || empty($password) || empty($email)) {
        if (empty($name)) {
            $errors[] = "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($email)) {
            $errors[] = "<font color='red'>Email field is empty.</font><br/>";
        }

        if (empty($email)) {
            $errors[] =  "<font color='red'>Email field is empty.</font><br/>";
        }

        // Show link to the previous page
        //  echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // Define your SQL query with placeholders
        $sql = "INSERT INTO users (`name`, `email`, `password`) VALUES (:name, :email, :password)";

        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);
        $password = md5($password);
        // Bind values to the placeholders
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        // Execute the prepared statement
        if ($stmt->execute()) {
            $errors[] = "<p><font color='green'>Registration successful!</p>";
        } else {
            $errors[] = "<p><font color='green'>Failed to register!</p>";
        }
    }
}
?>
<?php require_once("partials/top.php"); ?>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <?php require_once("partials/header.php"); ?>
        <!-- end header section -->
    </div>
    <!-- contact section -->
    <section class="contact_section ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <img src="images/contact-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
                        <div class="heading_container">
                            <h2>
                                Register your account
                            </h2>
                        </div>
                        <div>
                            <?php
                            if (count($errors)) {
                                foreach ($errors as $error) {
                                    echo $error;
                                }
                            }
                            ?>
                        </div>
                        <form action="" method="POST">
                            <div>
                                <input type="text" placeholder="Full Name" name="full_name" />
                            </div>
                            <div>
                                <input type="email" placeholder="Email" name="email" />
                            </div>
                            <div>
                                <input type="password" placeholder="Password" name="password" />
                            </div>
                            <div class="d-flex ">
                                <button type="submit" name="register">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="info_items">
                <a href="">
                    <div class="item ">
                        <div class="img-box box-1">
                            <img src="" alt="">
                        </div>
                        <div class="detail-box">
                            <p>
                                Location
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="item ">
                        <div class="img-box box-2">
                            <img src="" alt="">
                        </div>
                        <div class="detail-box">
                            <p>
                                +02 624634634
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="item ">
                        <div class="img-box box-3">
                            <img src="" alt="">
                        </div>
                        <div class="detail-box">
                            <p>
                                demo@gmail.com
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <?php require_once('partials/footer.php'); ?>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>