<?php 
    session_start();

    $u_id = $_SESSION['c_id']; 

    // echo $u_id;

    $p_name= $_POST['p_ncard'];
    $p_card= $_POST['p_card'];
    $pExp_month= $_POST['p_em'];
    $pExp_year= $_POST['p_ey'];
    $pcvv= $_POST['p_cw'];
    
    // $pi_id= $_POST['o_id'];
    $pa_name= $_POST['Full_name'];
    $pa_address= $_POST['address'];
    $pa_zip= $_POST['zip_code'];
    $pi_id= $_POST['o_id'];
    $ptotal= $_POST['price'];


    $conn = new mysqli('localhost','root','','online fashion store');
    if(!$conn){
        die("Couldnot connect to database".mysgli_connect_error());
    }else{
        $stmt = $conn->prepare("INSERT INTO payment(Card_name,Card_num,Exp_month,Exp_year,cvv,c_id,Item_ID,name,Address,zip_code,Total)
		values(?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sisiiiissii",$p_name,$p_card,$pExp_month,$pExp_year,$pcvv,$u_id,$pi_id,$pa_name,$pa_address,$pa_zip,$ptotal);
		
		echo "Successfully submitted";
        header('location: ../payment_history.php');
		//echo "<a href='../payment_history.php'>Click me</a>";
		
        $stmt->execute();
		//$stmt->close();
		$conn->close();
      
        
    }
?>