<? php
/ *
* Nama: Otp Spam Sederhana
* File: version.php
* Penulis: DulLah
* Github: https://github.com/dz-id
* Telegram: https://t.me/unikers
* Tanggal: 26-01-2020
* Versi: 1.0
* /

function  CekUp () {
	$ ch = curl_init ( "https://raw.githubusercontent.com/dz-id/SimpleSpamOtp/master/version.txt" );
	curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , true );
	$ cek = preg_replace ( "/ \ s + /" , "" , curl_exec ( $ ch ));
	if ( $ cek == "1.1" ) {
		echo  "Memperbarui SimpleSpamOtp ... \ n" ;
		sistem ( "cd ..; rm -rf SimpleSpamOtp" );
		sistem ( "cd ..; git clone https://github.com/dz-id/SimpleSpamOtp" );
	}
} CekUp (); ?>
