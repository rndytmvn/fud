<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo "\n";
echo "\e[96m            (SELAMAT DATANG PEJUANG KELUARGA)               \n";
echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
// function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("nevy","📲 Nomor : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("green","📶 Cek Kode OTP")."\n";
        otp:
        echo color("purple","💬 Otp : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","✔️ OK SUKSES\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("nevy","+] Your access token : ".$token."\n\n");
        save("token.txt",$token);
        echo color("nevy","\n▬▬▬▬▬▬▬▬▬▬▬▬🛠AUTO KLAIM🛠▬▬▬▬▬▬▬▬▬▬▬▬");
        echo "\n".color("nevy","🔒 GOFOOD");
        echo "\n".color("yellow","⏳ SABAR");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"EBADAHMAKANFD"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","🔓 Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐 Message: ".$message);
	      gocar:
        echo "\n".color("nevy","🔒 GOFOOD A");
        echo "\n".color("yellow","⏳ SABAR");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(20);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"EBADAHMAKANA"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","🔓 Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐 Message: ".$message);
        gofood:
        echo "\n".color("nevy","🔒 GOFOOD B");
        echo "\n".color("yellow","⏳ SABAR");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"EBADAHMAKANB"}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("green","🔓 Message: ".$message);
        echo "\n".color("nevy","🔒 SPESIAL ANTI BAU");
        echo "\n".color("yellow","⏳ SABAR");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(5);
        $boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"AXEANTIMATIGAYA"}');
        $messageboba09 = fetch_value($boba09,'"message":"','"');
        echo "\n".color("green","🔓 Message: ".$messageboba09);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        echo "\n".color("purple","🎫 VOCHERMU ".$total." : ");
        echo "\n".color("nevy","                     1. ".$voucher1);
        echo "\n".color("nevy","                     2. ".$voucher2);
        echo "\n".color("nevy","                     3. ".$voucher3);
        echo "\n".color("nevy","                     4. ".$voucher4);
        echo "\n".color("nevy","                     5. ".$voucher5);
        echo "\n".color("nevy","                     6. ".$voucher6);
        echo "\n".color("nevy","                     7. ".$voucher7);
        echo "\n".color("nevy","                     8. ".$voucher8);
        echo "\n".color("nevy","                     9. ".$voucher9);
        echo "\n".color("nevy","                     10. ".$voucher10);
      	echo "\n".color("nevy","                     11. ".$voucher11);
        echo "\n".color("nevy","                     12. ".$voucher12);
        echo "\n".color("nevy","                     13. ".$voucher13);
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
        
         setpin:
         echo "\n".color("purple","🔧 SET PIN !!!: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("nevy","▬▬▬▬▬▬▬▬▬▬▬▬▬▬🔧 PIN MU = 111222 🔧▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data2 = '{"pin":"111222"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }
         }
         }else{
         echo color("red","-] OTP SALAH, CEK LAGI");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("purple","!] ULANGI\n");
         goto otp;
         }
         }else{
         echo color("red","-] NOMOR SUDAH DIPAKAI");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("purple","!] ULANGI\n");
         }
//  }

// echo change()."\n";
