
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
session_start();
        if(isset($_REQUEST['Username'])){
				//connection
                  include("config.php");
				//รับค่า user & password
                  $Username = $_REQUEST['Username'];
                  $Password = $_REQUEST['Password'];
				//query 
                  $sql="SELECT * FROM tbl_member Where member_username='".$Username."' and member_password='".$Password."' ";
 
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["UserID"] = $row["member_id"];//ประกาศตัวแปรUserIDไว้เพื่อส่งค่า
                      $_SESSION["User"] = $row["member_firstname"]." ".$row["member_lastname"];//ประกาศตัวแปรUserไว้เพื่อส่งค่า
                      $_SESSION["Userlevel"] = $row["member_level"];//ประกาศตัวแปรUserlevelไว้เพื่อส่งค่า
 
                      if($_SESSION["Userlevel"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: adminpage.php");
 
                      }
 
                      if ($_SESSION["Userlevel"]=="m"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: userpage.php");
 
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: c_form.php"); //user & password incorrect back to login again
 
        }
?>