<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Donation Response</title>
</head>
<body>
    <div class = "container text-primary">
        <h1>
            <?php
                require_once('PHPMailer/PHPMailerAutoload.php');
                $db_user = "root";
                $db_pass = "";
                $dsn = "mysql:host=localhost;dbname=2CP08_project";
                try{
                    $db = new PDO($dsn,$db_user,$db_pass);
                    // echo "Successfull Connected";
                }
                catch(PDOException $e){
                    $error_message = $e->getMessage();
                    echo $error_message;
                    exit();
                }
                if(isset($_POST['send']))
                    $temp;
                    $name = $_POST['name'];
                    $email= $_POST['email'];
                    $phone   = $_POST['phone'];
                    $address = $_POST['address'];
                    $country = $_POST['country'];
                    $table_choice = $_POST['choice'];
                    $donation;
                    $option;
                    $sql;
                    // echo $name . ' '. $email . ' ' . $phone. ' '. $address. ' '.$country. ' '.$table_choice;
                    if($table_choice == 1){
                        $donation = $_POST['donate1'];
                        $option = $_POST['other1'];
                        if ($donation == 0) {
                            $donation = $option;
                        }
                        $sql = "INSERT INTO education_donate(name,email,phone,address,country,donation) values(?,?,?,?,?,?)"; 
                    }
                    else if($table_choice == 2){
                        $donation = $_POST['donate2'];
                        $option = $_POST['other2'];
                        if ($donation == 0) {
                            $donation = $option;
                        }
                        $sql = "INSERT INTO training_donate(name,email,phone,address,country,donation) values(?,?,?,?,?,?)";
                        
                    }
                    else if($table_choice == 3){
                        $donation = $_POST['donate3'];
                        $sql = "INSERT INTO disaster_donate(name,email,phone,address,country,donation) values(?,?,?,?,?,?)";
                        
                    }
                    else if($table_choice == 4){
                        $donation = $_POST['donate4'];
                        $sql = "INSERT INTO covid_donate(name,email,phone,address,country,donation) values(?,?,?,?,?,?)";
                    }
                    else if($table_choice == 5){
                        $donation = $_POST['donate5'];
                        $option = $_POST['other3'];
                        if ($donation == 0) {
                            $donation = $option;
                        }
                        $sql = "INSERT INTO child_healthcare_donate(name,email,phone,address,country,donation) values(?,?,?,?,?,?)";
                    }
                    // echo $sql;
                    $stmtinsert = $db->prepare($sql);
                    $result = $stmtinsert->execute([$name,$email,$phone,$address,$country,$donation]);
                    //echo "value of radio button:".$donation;                    
                    if($result){
                        echo "Donation Received Successfully.<br>";
                        echo "Thank You For Donating";
                        $mail = new PHPMailer();
                        $mail->isSMTP();
                        $mail->SMTPAuth=true;
                        $mail->SMTPSecure = 'ssl';
                        $mail->Host = 'smtp.gmail.com';
                        $mail->Port = '465';
                        $mail->isHTML();
                        $mail->Username = 'partners8085@gmail.com';
                        $mail->Password = 'pro@8085';
                        $mail->setFrom('partners8085@gmail.com');
                        $mail->Subject = 'Thank You Very Much';
                        $mail->Body = 'Dear '.$name .', on behalf of the people you have helped we sincerely thank you for your generous donation.may you live long and prosper!';
                        $mail->addAddress($email);
                        $mail->send();
                        }
                    else{
                    echo "problem occured in saving.";
                    }
            ?>
        </h1>
    </div>
    <script>
        setTimeout(function () {
            window.location.replace("donate.php"); //will redirect to main page (index.html)
        }, 3000); //will call the function after 3 secs.
    </script>   
</body>
</html>