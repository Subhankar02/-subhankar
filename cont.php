<?php
include 'dao.php';
/*for registration*/
/*Add to database */
    if(isset($_POST['register'])){
        $nam=$_POST['text1'];
        $em=$_POST['text2'];
        $nu=$_POST['text3'];
        $gen=$_POST['gender'];
        $pas=$_POST['pass'];
        $user=array("name"=>$nam,"email"=>$em,"phone"=>$nu,"gen"=>$gen,"pass"=>$pas);
        $re=adduser($user);
        if($re){
        //   session_start();
        //   $_SESSION['n']=$nam;
          header("Location:login.php");
        }
        else{
        //   session_start();
        //   $_SESSION['msg']="user credential is wrong!!!";
          header("Location:signup.php");
        }
    }
/*Login */
if(isset($_POST['log'])){
    $nam=$_POST['logname'];
    $nu=$_POST['logpass'];
    $user=array("name"=>$nam,"pass"=>$nu);
    if(login($user)){
    //   session_start();
    //   $_SESSION['n']=$nam;
     header("location:allrest.php");
    
  }
  else{
    //  session_start();
    //  $_SESSION['msg']="user credential is wrong!!!";
    header("location:login.php");
    //echo "mm";
  }
}
/*Admin Login */
if(isset($_POST['adlog'])){
  $nam=$_POST['logname'];
  $nu=$_POST['logpass'];
  $user=array("name"=>$nam,"pass"=>$nu);
  if(login($user)){
    session_start();
    $_SESSION['n']=$nam;
   header("location:restupload.php");
  
}
else{
  //  session_start();
  //  $_SESSION['msg']="user credential is wrong!!!";
  header("location:adminlog.php");
  //echo "mm";
}
}
// if(isset($_POST['rate'])){
//  echo "ss1";
// }

/*Add resturent to database */
if(isset($_POST['adminsubmit']) && $_FILES['img01']){
  $nam=$_POST['restname'];
  $em=$_POST['address'];
  $bo=$_POST['contect'];
  $d=$_POST['link'];
  $file=$_FILES['img01'];
  $name=$file['name'];
  $type=$file['type'];
  $size=$file['size'];
  $error=$file['error'];
  $tmp_name=$file['tmp_name'];
  if($error == 0){
    if($size<1250000){
      $ext=pathinfo($name,PATHINFO_EXTENSION);
      $ext_l=strtolower($ext);
      $n_name=uniqid("IMG-",true).".".$ext_l;
      $path='upload/'.$n_name;
    }
    else{
       echo "it exist maximum file size";
    }
  }
  else{
     echo "something went wrong!!";
  }
  $user=array("name"=>$nam,"email"=>$em,"pass"=>$n_name,"dept"=>$d,"des"=>$bo);
  $re=addrest($user);
  if($re){
    move_uploaded_file($tmp_name,$path);/*Save To folder */
    header("Location:admin.php");
  }
  else{
    echo "Failed!!!";
  }
}
function getIMG(){
  $i=getFiles();
  return $i;
}

/*Add resturent to database For from*/
if(isset($_POST['addrest']) && $_FILES['img01']){
  $nam=$_POST['restname'];
  $em=$_POST['des'];
  $file=$_FILES['img01'];
  $name=$file['name'];
  $type=$file['type'];
  $size=$file['size'];
  $error=$file['error'];
  $tmp_name=$file['tmp_name'];
  if($error == 0){
    if($size<1250000){
      $ext=pathinfo($name,PATHINFO_EXTENSION);
      $ext_l=strtolower($ext);
      $n_name=uniqid("IMG-",true).".".$ext_l;
      $path='uprest/'.$n_name;
    }
    else{
       echo "it exist maximum file size";
    }
  }
  else{
     echo "something went wrong!!";
  }
  $user=array("name"=>$nam,"des"=>$em,"pass"=>$n_name);
  $re=addrest1($user);
  if($re){
    move_uploaded_file($tmp_name,$path);/*Save To folder */
    header("Location:restupload.php");
  }
  else{
    echo "Failed!!!";
  }
}
/*Form Data Featch */
function getIMG1(){
  $i=getFiles1();
  return $i;
}


?>