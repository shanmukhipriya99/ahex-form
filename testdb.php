<?php
   
    $username = "";
    $email = "";
    $phone = "";
    $password = "";
	$cp = "";
	
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect("localhost", "root", "", "ahex");
    echo 'Connected';       
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}
	
// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['name'];
    $posts[1] = $_POST['email'];
    $posts[2] = $_POST['phone'];
    $posts[3] = $_POST['password'];
    $posts[4] = $_POST['confirm'];
    return $posts;
}

// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query =  "INSERT INTO registration_form (`username`, `email`, `phone`, `password`, `confirm_pass`) VALUES ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

?>