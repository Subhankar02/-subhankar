<?php
include 'db.php';
/*Insert into Database */
function adduser($user){
    $nam=$user['name'];
    $em=$user['email'];
    $ph=$user['phone'];
    $g=$user['gen'];
    $nu=$user['pass'];
    $e_p=md5($nu);
    $con=$GLOBALS['con'];
    $sql="insert into regi(Name,Email,phone,gen,pass) values(?,?,?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("sssss",$nam,$em,$ph,$g,$e_p);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}

/*Login Form*/
function login($user){
    $con=$GLOBALS ['con'];
    $name=$user['name'];
    $pass=$user['pass'];
     $e_p=md5($pass);
    $sql="select Name,pass from regi where Name=? and pass=?";
    $st=$con->prepare($sql);
        $st->bind_param("ss",$name,$e_p);
        echo $e_p;
        if($st->execute()){
            $rs=$st->get_result();
            if($rs->num_rows>0){ 
                return true;
               //echo "hh1";
            }
            else
            {
                
                echo  $rs->error;
            }
        }
        else{
            echo $con->error;
        }
 }


 /*Insert into Database Book*/
function addrest($user){
    $nam=$user['name'];
    $em=$user['email'];
    $nu=$user['pass'];
    $d=$user['dept'];
    $bo=$user['des'];
    $con=$GLOBALS['con'];
    $sql="insert into restdel(title,location,number,link,imgname) values(?,?,?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("sssss",$nam,$em,$bo,$d,$nu);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Get Image Form DataBase */
function getFiles(){
    $con=$GLOBALS['con'];
    $sql="select * from restdel";
    $result=$con->query($sql);
    $img=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $img[]=$row;
        }
    }
    return  $img;
}

/*Insert into Database Resturent*/
function addrest1($user){
    $nam=$user['name'];
    $em=$user['des'];
    $nu=$user['pass'];
    $con=$GLOBALS['con'];
    $sql="insert into resturent(title,des,rimg) values(?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("sss",$nam,$em,$nu);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Get Image Form DataBase For resturent */
function getFiles1(){
    $con=$GLOBALS['con'];
    $sql="select * from resturent";
    $result=$con->query($sql);
    $img=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $img[]=$row;
        }
    }
    return  $img;
}

function item1($id){
    $con=$GLOBALS['con'];
    $sql="select * from booked_item as bi inner join book as b on bi.book_id=b.id where bi.user_id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    $st->execute();
    $res=$st->get_result();
    $users=array();
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
        $users[]=$row;
        }
    }
    return $users;
}
?>