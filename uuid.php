<?php 
//include 'phpqrcode/phpqrcode.php';
/**
  * Generates an UUID
  *
  * @author     Anis uddin Ahmad 
  * @param      string  an optional prefix
  * @return     string  the formatted uuid
  */
  function uuid($prefix = '')
  {
    $chars = md5(uniqid(mt_rand(), true));
    $uuid  = substr($chars,0,8) . '-';
    $uuid .= substr($chars,8,4) . '-';
    $uuid .= substr($chars,12,4) . '-';
    $uuid .= substr($chars,16,4) . '-';
    $uuid .= substr($chars,20,12);
    return $prefix . $uuid;
  }  
 for($i=1;$i<=500;$i++){
//Example of using the function -
//Using without prefix.
     $s =uuid();
//echo $s;
//echo $value  = "https://adicniv.com/adicniv/index.php/".$s; //Returns like ��1225c695-cfb8-4ebb-aaaa-80da344e8352��   
//echo"</br>";
echo $value  = "https://www.adicniv.cn/index.php/".$s;
echo"</br>";
//$errorCorrectionLevel = 'L';//�ݴ���
//$matrixPointSize = 6;//����ͼƬ��С
//QRcode::png($value, $s.'qrcode.png', $errorCorrectionLevel, $matrixPointSize, 1);
//$logo = 'joomla.png';//׼���õ�logoͼƬ
//$QR = $s.'qrcode.png';//�Ѿ����ɵ�ԭʼ��ά��ͼ
//imagepng($QR, 'helloweixin.png');
//echo '<img src="'.$QR.'">';
//echo"</br>";
 }
/**
 * echo"</br>";
//Using with prefix
echo uuid("urn:uuid:");//Returns like ��urn:uuid:1225c695-cfb8-4ebb-aaaa-80da344e8352��
 * 
 * 
 */ 

