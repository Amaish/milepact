<?php


class SignUpUser
{

    private $name, $typeOfBusiness, $phoneNumber, $email,  $location, $password, $confirmPassword;

    function __construct(){

        session_start();
        
        global $conn;
        

        include_once($_SERVER["DOCUMENT_ROOT"] . '/milePact/loader.php');
        
        if(isset($_REQUEST['name']) AND isset($_REQUEST['typeOfBusiness']) AND isset($_REQUEST['phoneNumber']) AND isset($_REQUEST['email'])AND isset($_REQUEST['location']) AND isset($_REQUEST['confirmPassword']) AND isset($_REQUEST['password'])){
            
            // sanitize variables

            $this->name                 = mysqli_real_escape_string($conn, $_REQUEST['name']);
            $this->typeOfBusiness       = mysqli_real_escape_string($conn, $_REQUEST['typeOfBusiness']);
            $this->phoneNumber          = mysqli_real_escape_string($conn, $_REQUEST['phoneNumber']);
            $this->email                = mysqli_real_escape_string($conn, $_REQUEST['email']);
            $this->location             = mysqli_real_escape_string($conn, $_REQUEST['location']);
            $this->password             = mysqli_real_escape_string($conn, $_REQUEST['password']);
            $this->confirmPassword      = mysqli_real_escape_string($conn,$_REQUEST['confirmPassword']);

            
            
            if(empty($this->name) OR empty($this->typeOfBusiness) OR empty($this->phoneNumber) OR empty($this->email) OR empty($this->location) OR empty($this->password) OR empty($this->confirmPassword)){
                die('Please fill all fields');
            }
            
            // validate name
            if (!preg_match("/^[a-zA-Z ]*$/",$this->name)) {
                die('Only letters and white space allowed for input name');
            }
            
            //validate email
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                die('Invalid email format');
            }

            // check if number is char            
            if(!ctype_digit($this->phoneNumber)){
                die('Invalid phone number format');
            }

            // check phonenumber length
            if(strlen($this->phoneNumber) !== 10){
                die('Invalid phone number');
            }
            
            if(strlen($this->password) < 6){
                die('The password should be at least 6 characters');
            }
            
            // validate information to avoid duplicates
            $emailarguments = array('email' => $this->email);
            if(returnExists('users', $emailarguments) > 0){
                die('The email is already registered');
            }

            // format phone
            $formated_phone = "+254".substr($this->phoneNumber, -9);
            
            // validate information to avoid duplicates
            $phonearguments = array('phoneNumber' => $formated_phone);
            if(returnExists('users', $phonearguments) > 0){
                die('The phone number is already registered');
            }
            
            // add date
            $date          = date('d/M/Y H:i:s');

            // generate code
            $code          = rand(1000,99999);
            
            //encrypt password
            $encpassword   = sha1($this->password);
            
            
            // insert into database
            $query = "INSERT INTO `users`(`companyName`,`email`,`phoneNumber`,`location`,`password`,`date_created`,`code`,`typeOfBusiness`)
                VALUES('$this->name','$this->email','$formated_phone','$this->location','$encpassword','$date','$code','$this->typeOfBusiness')";
            
            // run query
            $saveUser = mysqli_query($conn, $query);
            
            if($saveUser){
                $message     = "Hello ".$this->name.", your verfication code is ".$code;
                //call send function
                sendMessage($formated_phone,$message);

                // start a session
                $_SESSION['loggeduser'] = $formated_phone;

                echo "1";
            }else{
                echo "Oops! Something went wrong";
            }
        }
        
        
    }
}

$createNewUser = new SignUpUser();

?>