<?php
header('Content-Type: text/html; charset=UTF-8');
?>

<?php


$request_param = $_POST;


$request_datetime = date("Y年m月d日 H時i分s秒");


$mailto = $request_param['email'];
$to = 'device8781@gmail.com,r.kanbayashi@luckydakara.com,k.yumita@luckydakara.com,e.yumita@luckydakara.com,s.watanabe@luckydakara.com,m.hata@luckydakara.com,h.oozeki@luckydakara.com,c.nishida@luckydakara.com,m.inoue@luckydakara.com,m.imano@luckydakara.com,s.hoshi@luckydakara.com,s.sakai@luckydakara.com,a.nishimura@luckydakara.com,y.honoka@luckydakara.com,y.hosoda@luckydakara.com'; 
$mailfrom = "https://www.luckydakara.com"; 
$subject = "お問い合わせ有難うございます。";

$content = "";
$content .= $request_param['name1']. " 様\r\n";
$content .= "お問い合わせ有難うございます。\r\n";
$content .= "お問い合わせ内容は下記通りでございます。\r\n";
$content .= "=================================\r\n";
$content .= "お名前(性)        " . htmlspecialchars($request_param['name1'])."\r\n";
$content .= "お名前(名)        " . htmlspecialchars($request_param['name2'])."\r\n";
$content .= "メールアドレス   " . htmlspecialchars($request_param['email'])."\r\n";
$content .= "電話番号   " . htmlspecialchars($request_param['tel'])."\r\n";
//$content .= "参加人数   " . htmlspecialchars($request_param['sub'])."\r\n";
$content .= "応募理由   " . htmlspecialchars($request_param['message'])."\r\n";
$content .= "お問い合わせ日時   " . $request_datetime."\r\n";
$content .= "=================================\r\n";


$subject2 = "888万LP【応募する】よりお問い合わせがありました。";
$content2 = "";
$content2 .= "お問い合わせがありました。\r\n";
$content2 .= "お問い合わせ内容は下記通りです。\r\n";
$content2 .= "=================================\r\n";
$content2 .= "お名前(性)       " . htmlspecialchars($request_param['name1'])."\r\n";
$content2 .= "お名前(名)       " . htmlspecialchars($request_param['name2'])."\r\n";
$content2 .= "メールアドレス   " . htmlspecialchars($request_param['email'])."\r\n";
//$content2 .= "参加人数   " . htmlspecialchars($request_param['sub'])."\r\n";
$content2 .= "電話番号   " . htmlspecialchars($request_param['tel'])."\r\n";
$content2 .= "応募理由   " . htmlspecialchars($request_param['message'])."\r\n";
$content2 .= "お問い合わせ日時   " . $request_datetime."\r\n";
$content2 .= "================================="."\r\n";

mb_language("ja");
mb_internal_encoding("UTF-8");

if($request_param['token'] === '1234567'){
if(mb_send_mail($to,$subject2, $content2, $mailfrom)){
    mb_send_mail($mailto,$subject,$content,$mailfrom);
    
  echo "";
?>
<div align="center">
	<br><br>
<h1>入力内容を送信しました</h1>
<h1><a href="https://www.luckydakara.com/sinchiku">戻る</a></h1>
</div>
    <?php
} else {
    header('Content-Type: text/html; charset=UTF-8');
  echo "メールの送信に失敗しました";
};
} else {
echo "メールの送信に失敗しました（トークンエラー）";
}
  ?>