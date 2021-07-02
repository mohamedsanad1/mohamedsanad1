<?php
/*
By=>@mosanad1
CH=>@qurankarimts
تنقل اذكر المصدر 🌚
صير فرخ واخمط 🌚😹
*/
ob_start();
$API_KEY = '1830846635:AAF22M3UKB8-0MujLoozncSZlf_97nO61Us'; #توكن البوت
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
lvar_dump(curl_error($ch));
}else{return json_decode($res);}}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$from_id = $message->from->id;
$fn = $message->from->first_name;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $update->message->from->first_name;
$first = $update->callback_query->from->first_name;
$data = $update->callback_query->data;
$query=$update->callback_query;
$inline=$update->inline_query;
$admin = "1887924166"; 
$MROAN = file_get_contents("MROAN.txt");
$MROAN0 = file_get_contents("MROAN0.txt");
$MROAN1= file_get_contents("MROAN1.txt");
$MROAN5 = file_get_contents("MROAN2.txt");
$MROAN6 = file_get_contents("MROAN3.txt");
$MROAN20 = json_decode(file_get_contents('php://input'));
$MROAN18 = $update->message;
$MROAN13 = $MROAN18->chat->id;
$MROAN17 = $MROAN18->text;
$meme = $MROAN20->callback_query->data;
$MROAN12 = $MROAN20->callback_query->message->chat->id;
$MROAN14 =  $MROAN20->callback_query->message->message_id;
$MROAN15 = $MROAN18->from->first_name;
$MROAN16 = $MROAN18->from->username;
$MROAN11 = $MROAN18->from->id;
$MROAN2 = explode("\n",file_get_contents("MROAN4.txt"));
$MROAN3 = count($MROAN2)-1;
if ($MROAN18 && !in_array($MROAN11, $MROAN2)) {
    file_put_contents("MROAN4.txt", $MROAN11."\n",FILE_APPEND);
  }
$MROAN9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN0&user_id=".$MROAN11);
$MROAN10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN1&user_id=".$MROAN11);
if($MROAN18 && (strpos($MROAN9,'"status":"left"') or strpos($MROAN9,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN9,'"status":"kicked"') or strpos($MROAN10,'"status":"left"') or strpos($MROAN10,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MROAN13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$MROAN0.'
'.$MROAN1,
]);return false;}
if($MROAN17 == "/admin" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
}
if($meme == "MROAN" ){
bot('EditMessageText',[
'chat_id'=>$MROAN12,
'message_id'=>$MROAN14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN0"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN0");
}
if($MROAN17 and $MROAN == "MROAN0" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN0.txt","$MROAN17");
unlink("MROAN.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• نعم ، ✅','callback_data'=>'MROAN1'],
]    
]])
]);    
}
if($meme == "MROAN1"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN0.txt");
}
if($meme == "MROAN2"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN1");
}
if($MROAN17 and $MROAN == "MROAN1" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN1.txt","$MROAN17");
unlink("MROAN.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• نعم ، ✅','callback_data'=>'MROAN3'],
]    
]])
]);    
}
if($meme == "MROAN3"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN1.txt");
}
if($meme == "MROAN4"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $MROAN0 📢 
- القناة الثانية ،  $MROAN1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN5"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $MROAN3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN2");
}
if($MROAN18 and $MROAN == "MROAN2" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('forwardMessage', [
'chat_id'=>$MROAN2[$i],
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
unlink("MROAN.txt");
}
}
if($meme == "MROAN6"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $MROAN3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN3");
}
if($MROAN17 and $MROAN == "MROAN3" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('sendMessage', [
'chat_id'=>$MROAN2[$i],
'text'=>$MROAN17
]);
unlink("MROAN.txt");
}
}
if($meme == "MROAN7"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- عدد مشتركين البوت  [ $MROAN3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN9"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN2.txt","MROAN");
}
if($MROAN17 == "/start" and $MROAN5 == "MROAN" and $MROAN11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$MROAN15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$MROAN16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$MROAN11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $MROAN3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "MROAN10"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN2.txt");
}
if($meme == "MROAN11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN3.txt","MROAN");
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 == $admin){
bot('sendMessage',[
'chat_id'=>$MROAN18->reply_to_message->forward_from->id,
    'text'=>$MROAN17,
    ]);
}
if($meme == "MROAN12"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN3.txt");
}
if($text ==  '/start'){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>" • اهلآ بك ،  [$fn](tg://user?id=$chat_id)
` أرسل لي صورة ، فيديو ، صوت أو أي ملف آخر للحصول على رابط تحميل! الملفات ليست محذوفة وستكون دائما متاحة!`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
**🗳 Send me a photo, video, audio or any other file to get a download link! Files are not deleted and will always be available!**
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$fn",'url'=>'t.me/beinsportsmopacher']],
]
])]);}


if($message->photo){
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'text'=>"
*♻️⌛️ Creating download link ...*
`جاري تحضير الرابط `
",
]);
sleep(2);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'parse_mode'=>"MarkDown",
'text'=>"
*The file was successfully saved ✅*
📥 File name : *$patch*
🏷 Size File : *$siz*
📎URL :***https://api.telegram.org/file/bot$API_KEY/$patch***
By@mroan8
➖➖➖➖➖	➖➖➖➖
`✔تم رفع ملف بنجاح `
♨اسم ملف :*$patch*
🚸حجم الملف :*$siz*
♻رابط ملف ***https://api.telegram.org/file/bot$API_KEY/$patch***
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$API_KEY/$patch"]],[['text'=>"$fn",'url'=>"https://Telegram.me/php88"]],
],'resize_keyboard'=>true])]);}	


if($message->sticker){
$sticker = $message->sticker;
$file = $sticker->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*♻️⌛️ Creating download link ...*
`جاري تحضير الرابط `
",
]);
sleep(2);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'parse_mode'=>"MarkDown",
'text'=>"
*The file was successfully saved ✅*
📥 File name : *$patch*
🏷 Size File : *$siz*
📎URL :***https://api.telegram.org/file/bot$API_KEY/$patch***
By@mroan8
➖➖➖➖➖	➖➖➖➖
`✔تم رفع ملف بنجاح `
♨اسم ملف :*$patch*
🚸حجم الملف :*$siz*
♻رابط ملف ***https://api.telegram.org/file/bot$API_KEY/$patch***
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$API_KEY/$patch"]],[['text'=>"$fn",'url'=>"https://Telegram.me/php88"]],
],'resize_keyboard'=>true])]);}	


if($message->voice){
$voice = $message->voice;
$file = $voice->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'text'=>"
*♻️⌛️ Creating download link ...*
`جاري تحضير الرابط `
",
]);
sleep(2);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'parse_mode'=>"MarkDown",
'text'=>"
*The file was successfully saved ✅*
📥 File name : *$patch*
🏷 Size File : *$siz*
📎URL :***https://api.telegram.org/file/bot$API_KEY/$patch***
By@mroan8
➖➖➖➖➖	➖➖➖➖
`✔تم رفع ملف بنجاح `
♨اسم ملف :*$patch*
🚸حجم الملف :*$siz*
♻رابط ملف ***https://api.telegram.org/file/bot$API_KEY/$patch***
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$API_KEY/$patch"]],[['text'=>"$fn",'url'=>"https://Telegram.me/php88"]],
],'resize_keyboard'=>true])]);}	


if($message->audio){
$audio = $message->audio;
$file = $audio->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'text'=>"
*♻️⌛️ Creating download link ...*
`جاري تحضير الرابط `
",
]);
sleep(2);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'parse_mode'=>"MarkDown",
'text'=>"
*The file was successfully saved ✅*
📥 File name : *$patch*
🏷 Size File : *$siz*
📎URL :***https://api.telegram.org/file/bot$API_KEY/$patch***
By@mroan8
➖➖➖➖➖	➖➖➖➖
`✔تم رفع ملف بنجاح `
♨اسم ملف :*$patch*
🚸حجم الملف :*$siz*
♻رابط ملف ***https://api.telegram.org/file/bot$API_KEY/$patch***
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$API_KEY/$patch"]],[['text'=>"$fn",'url'=>"https://Telegram.me/php88"]],
],'resize_keyboard'=>true])]);}	


if($message->video){
$video = $message->video;
$file = $video->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'text'=>"
*♻️⌛️ Creating download link ...*
`جاري تحضير الرابط `
",
]);
sleep(2);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'parse_mode'=>"MarkDown",
'text'=>"
*The file was successfully saved ✅*
📥 File name : *$patch*
🏷 Size File : *$siz*
📎URL :***https://api.telegram.org/file/bot$API_KEY/$patch***

➖➖➖➖➖	➖➖➖➖
`✔تم رفع ملف بنجاح `
♨اسم ملف :*$patch*
🚸حجم الملف :*$siz*
♻رابط ملف ***https://api.telegram.org/file/bot$API_KEY/$patch***
By@mroan8
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$API_KEY/$patch"]],[['text'=>"$fn",'url'=>"https://Telegram.me/php88"]],
],'resize_keyboard'=>true])]);}	


if($message->document){
$document = $message->document;
$file = $document->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'text'=>"
*♻️⌛️ Creating download link ...*
`جاري تحضير الرابط `
",
]);
sleep(2);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'parse_mode'=>"MarkDown",
'text'=>"
*The file was successfully saved ✅*
📥 File name : *$patch*
🏷 Size File : *$siz*
📎URL :***https://api.telegram.org/file/bot$API_KEY/$patch***
By@mroan8

➖➖➖➖➖	➖➖➖➖
`✔تم رفع ملف بنجاح `
♨اسم ملف :*$patch*
🚸حجم الملف :*$siz*
♻رابط ملف ***https://api.telegram.org/file/bot$API_KEY/$patch***
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$API_KEY/$patch"]],[['text'=>"$fn",'url'=>"https://Telegram.me/qurankarimts"]],
],'resize_keyboard'=>true])]);}	

/*
By=>@mosanad1
CH=>@qurankarimts
تنقل اذكر المصدر 🌚
صير فرخ واخمط 🌚😹
*/
