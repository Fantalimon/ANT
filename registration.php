<?php
//
//include_once 'autoload.php';
//
//$name = '';
//$seurname = '';
//$sex = '';
//$group = '';
//$email = '';
//$balls = '';
//$berd_year='';
//$place='';
//$userData=[];
//$error=[];
//
//$name = isset($_POST['name']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['name']))), 0,20,'UTF-8') : '';
//$seurname = isset($_POST['seurname']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['seurname']))),0,20,'UTF-8') : '';
//$sex = isset($_POST['sex']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['sex']))), 0,1,'UTF-8')  : '';
//$mygroup = isset($_POST['mygroup']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['mygroup']))), 0,5,'UTF-8')  : '';
//$email = isset($_POST['email']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['email']))), 0,40,'UTF-8')  : '';
//$balls = isset($_POST['balls']) ?  mb_substr(htmlspecialchars(strip_tags(trim($_POST['balls']))), 0,4,'UTF-8') : '';
//$berd_year = isset($_POST['berd_year']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['berd_year']))), 0,4,'UTF-8') : '';
//$place = isset($_POST['place']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['place']))), 0,20,'UTF-8')  : '';
//
//$name=(string)$name;
//$seurname=(string)$seurname;
//$sex=(int)$sex;
//$mygroup=(string)$mygroup;
//$email=(string)$email;
//$balls=(int)$balls;
//$berd_year=(string)$berd_year;
//$place=(string)$place;
//
//if(preg_match('/^[\wа-яёії]{2,20}/iu', $name)===1){
//    $userData['name']=$name;
//}else{
//    $userData['name']='ОШИБКА';
//    $error['name']='Не корректное имя';
//}
//
//
//if(preg_match('/^[\wа-яёії]{2,20}/iu', $seurname)===1){
//    $userData['seurname']=$seurname;
//}else{
//    $userData['seurname']='ОШИБКА';
//    $error['seurname']='Не корректное отчество';
//}
//
//
//if(preg_match('/^0|1$/', $sex)===1){
//    $userData['sex']=$sex;
//}else{
//    $userData['sex']='ОШИБКА';
//    $error['sex']='Не корректный пол';
//}
//
//
//if(preg_match('/^[\wа-яёії0-9]{2,5}$/iu', $mygroup)===1){
//    $userData['mygroup']=$mygroup;
//}else{
//    $userData['mygroup']='ОШИБКА';
//    $error['mygroup']='Не корректная группа';
//}
//
//
//if(preg_match('/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/i', $email)===1){
//    $userData['email']=$email;
//}else{
//    $userData['email']='ОШИБКА';
//    $error['email']='Не корректная почта';
//}
//
//
//if(preg_match('/^[0-9]{1,4}$/', $balls)===1){
//    $userData['balls']=$balls;
//}else{
//    $userData['balls']='ОШИБКА';
//    $error['balls']='Не корректные быллы';
//}
//
//
//if(preg_match('/^[0-9]{4}$/', $berd_year)===1){
//    $userData['berd_year']=$berd_year;
//}else{
//    $userData['berd_year']='ОШИБКА';
//    $error['berd_year']='Не корректный год рождения';
//}
//
//
//if(preg_match('/^[\wа-яёії]{2,20}/iu', $place)===1){
//    $userData['place']=$place;
//}else{
//    $userData['place']='ОШИБКА';
//    $error['place']='Не корректный город';
//}
//
//
//if (in_array('ОШИБКА', $userData,true)){
//echo json_encode($error);
//}else{
//
//    $user=new Addusers($userData);
//    $result=$user->save();
//
//
//    if($result==true){
//        $_SESSION['userdata']=serialize($user);
//      setcookie('sit',session_id(),strtotime('10 year'));
//        header('location: ' . SITE);
//    }
//
//};

















include_once 'autoload.php';

$name = '';
$seurname = '';
$sex = '';
$group = '';
$email = '';
$balls = '';
$berd_year='';
$place='';
$userData=[];
$error=[];

//$name = isset($_POST['name']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['name']))), 0,20,'UTF-8') : '';
//$seurname = isset($_POST['seurname']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['seurname']))),0,20,'UTF-8') : '';
//$sex = isset($_POST['sex']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['sex']))), 0,1,'UTF-8')  : '';
//$mygroup = isset($_POST['mygroup']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['mygroup']))), 0,5,'UTF-8')  : '';
//$email = isset($_POST['email']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['email']))), 0,40,'UTF-8')  : '';
//$balls = isset($_POST['balls']) ?  mb_substr(htmlspecialchars(strip_tags(trim($_POST['balls']))), 0,4,'UTF-8') : '';
//$berd_year = isset($_POST['berd_year']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['berd_year']))), 0,4,'UTF-8') : '';
//$place = isset($_POST['place']) ? mb_substr(htmlspecialchars(strip_tags(trim($_POST['place']))), 0,20,'UTF-8')  : '';
//
//$name=(string)$name;
//$seurname=(string)$seurname;
//$sex=(int)$sex;
//$mygroup=(string)$mygroup;
//$email=(string)$email;
//$balls=(int)$balls;
//$berd_year=(string)$berd_year;
//$place=(string)$place;


class name
{
    public function Autoname()
    {
        
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ';
        $generate_string = '';
        $length = rand(3, 20);
        
        for ($x = 0; $x < $length; $x++) {
            $i = rand(0, 28);
            $generate_string .= $chars{$i};
        };
        
        return $generate_string;
    }
    
}

class seurname
{
    public function Seurname()
    {
        
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ';
        $generate_string = '';
        $length = rand(3, 20);
        
        for ($x = 0; $x < $length; $x++) {
            $i = rand(0, 28);
            $generate_string .= $chars{$i};
        };
        
        return $generate_string;
    }
    
}

class sex
{
    public function Sex()
    {
        
        $generate_string = rand(0, 1);
        
        return $generate_string;
    }
    
}

class mygroup
{
    public function Mygroup()
    {
        
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ1234567890';
        $generate_string = '';
        $length = rand(3, 5);
        
        for ($x = 0; $x < $length; $x++) {
            $i = rand(0, 38);
            $generate_string .= $chars{$i};
        };
        
        return $generate_string;
    }
    
}

class email
{
    public function Email()
    {
        
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ1234567890';
        $chars2 = 'abdefhiknrstyz';
        $generate_string = '';
        $generate_string1 = '';
        $generate_string2 = '';
        $generate_string3 = '';
        
        $length = rand(3, 10);
        $length2 = rand(2, 6);
        
        for ($x = 0; $x < $length; $x++) {
            $i = rand(0, 38);
            $generate_string1 .= $chars{$i};
        };
        
        for ($i = 0; $i < $length; $i++) {
            $a = rand(0, 38);
            $generate_string2 .= $chars{$a};
        };
        
        for ($y = 0; $y < $length2; $y++) {
            $a = rand(0, 12);
            $generate_string3 .= $chars2{$a};
        };
        
        return $generate_string=$generate_string1.'@'.$generate_string2.'.'.$generate_string3;
    }
    
}

class balls
{
    public function Balls()
    {
        
        $chars = '1234567890';
        $generate_string = '';
        $length = rand(1, 4);
        
        for ($x = 0; $x < $length; $x++) {
            $i = rand(0, 9);
            $generate_string .= $chars{$i};
        };
        
        return $generate_string;
    }
}

class year
{
    public function Year()
    {
        
        $chars = '1234567890';
        $generate_string = '';
        $length = rand(4,4);
        
        for ($x = 0; $x < $length; $x++) {
            $i = rand(0, 9);
            $generate_string .= $chars{$i};
        };
        
        return $generate_string;
    }
}

class place
{
    public function Place()
    {
        
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ';
        $generate_string = '';
        $length = rand(2, 19);
        
        for ($x = 0; $x < $length; $x++) {
            $i = rand(0, 28);
            $generate_string .= $chars{$i};
        };
        
        return $generate_string;
    }
    
}

$schetcik=0;
do {
    for ($ay = 0; $ay < 100; $ay++) {
        
        
        $name = (new name())->Autoname();
        $seurname = (new seurname())->Seurname();
        $sex = (new sex())->Sex();
        $mygroup = (new mygroup())->Mygroup();
        $email = (new email())->Email();
        $balls = (new balls())->Balls();
        $berd_year = (new year())->Year();
        $place = (new place())->Place();
        
        
        if (preg_match('/^[\wа-яёії]{2,20}/iu', $name) === 1) {
            $userData['name'] = $name;
        } else {
            $userData['name'] = 'ОШИБКА';
            $error['name'] = 'Не корректное имя';
        }
        
        
        if (preg_match('/^[\wа-яёії]{2,20}/iu', $seurname) === 1) {
            $userData['seurname'] = $seurname;
        } else {
            $userData['seurname'] = 'ОШИБКА';
            $error['seurname'] = 'Не корректное отчество';
        }
        
        
        if (preg_match('/^0|1$/', $sex) === 1) {
            $userData['sex'] = $sex;
        } else {
            $userData['sex'] = 'ОШИБКА';
            $error['sex'] = 'Не корректный пол';
        }
        
        
        if (preg_match('/^[\wа-яёії0-9]{2,5}$/iu', $mygroup) === 1) {
            $userData['mygroup'] = $mygroup;
        } else {
            $userData['mygroup'] = 'ОШИБКА';
            $error['mygroup'] = 'Не корректная группа';
        }
        
        
        if (preg_match('/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/i', $email) === 1) {
            $userData['email'] = $email;
        } else {
            $userData['email'] = 'ОШИБКА';
            $error['email'] = 'Не корректная почта';
        }
        
        
        if (preg_match('/^[0-9]{1,4}$/', $balls) === 1) {
            $userData['balls'] = $balls;
        } else {
            $userData['balls'] = 'ОШИБКА';
            $error['balls'] = 'Не корректные быллы';
        }
        
        
        if (preg_match('/^[0-9]{4}$/', $berd_year) === 1) {
            $userData['berd_year'] = $berd_year;
        } else {
            $userData['berd_year'] = 'ОШИБКА';
            $error['berd_year'] = 'Не корректный год рождения';
        }
        
        
        if (preg_match('/^[\wа-яёії]{2,20}/iu', $place) === 1) {
            $userData['place'] = $place;
        } else {
            $userData['place'] = 'ОШИБКА';
            $error['place'] = 'Не корректный город';
        }
        
        
        if (in_array('ОШИБКА', $userData, true)) {
            echo json_encode($error);
        } else {
            
            $user = new Addusers($userData);
            $result = $user->save();
//    if($result==true){
//        $_SESSION['userdata']=serialize($user);
//        setcookie('sit',session_id(),strtotime('10 year'));
//        header('location: ' . SITE);
//    }
            
        };
        
    };
    $schetcik++;
}while($schetcik<5);
