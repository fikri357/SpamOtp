#Kami Mohon Jangan Di Recode
#Recode Kami Bantai 1 Team
#Awas loh

<?php
system("clear");
include("src/version.php");
include("src/otp.php");

echo " 
\033[34m╔════════════════════════════════╗
  \033[31m⏣ \033[32mAuthor   \033[37m: Dimas Gans
  \033[31m⏣ \033[32mMy Team  \033[37m: Program Jalanan
  \033[31m⏣ \033[32mwhatsapp \033[37m: 083813844572
  \033[31m⏣ \033[32mCodeName \033[37m: \033[36mMr.Tcg_Cyber
\033[34m╚════════════════════════════════╝

###### SPAM SMS OTP WORK #######
  \e[92m01\e[0m. Spam Otp MyPoin
  \e[92m02\e[0m. Spam Otp ALTBaljai
  \e[92m03\e[0m. Sms Gratis PayuTeruz
  \e[92m04\e[0m. Spam Otp TokoTalk
  \e[92m05\e[0m. Spam Otp OyoHotels
  \e[92m06\e[0m. Spam Otp AyoSrc
  \e[92m07\e[0m. Spam Otp CodaShopTsel\n\n";

try {
	echo "\e[96m[+] \e[91mroot@Dimas_Gans\e[0m/> ";
	$choice = trim(fgets(STDIN));
	$spam = new SimpleSpam\Otp();

	if (is_numeric($choice)) {
		if ($choice == 1) {
			echo "\e[96m[*] \e[0mNomor (62) : ";
			$nomor = trim(fgets(STDIN));

			if (substr($nomor, 0, 2) !== "62") {
				throw new Exception("\e[91m[!]\e[0m Nomor awalan harus 62 gan!!\n");
				exit(0);
			}
			echo "\e[96m[*] \e[0mLooping : ";
			$loop = trim(fgets(STDIN));
			if (is_numeric($loop) !==true) {
				throw new Exception("\e[91m[!]\e[0m Looping woy/limit, begokk!!\n");
				exit(0);
			}

			$spam->MyPoin(
				$nomor, $loop
			);

		} else if ($choice == 2) {
			echo "\e[96m[*] \e[0mNomor (62) : ";
			$nomor = trim(fgets(STDIN));

			if (substr($nomor, 0, 2) !== "62") {
				throw new Exception("\e[91m[!]\e[0m Nomor awalan harus 62 gan!!\n");
				exit(0);
			}
			echo "\e[96m[*] \e[0mLooping : ";
			$loop = trim(fgets(STDIN));
			if (is_numeric($loop) !==true) {
				throw new Exception("\e[91m[!]\e[0m Looping woy/limit, begokk!!\n");
				exit(0);
			}

			$spam->AltBaljai(
				$nomor, $loop
			);

		} else if ($choice == 3) {
			echo "\e[96m[*] \e[0mNomor (62) : ";
			$nomor = trim(fgets(STDIN));

			if (substr($nomor, 0, 2) !== "62") {
				throw new Exception("\e[91m[!]\e[0m Nomor awalan harus 62 gan!!\n");
				exit(0);
			}
			echo "\e[96m[*] \e[0mPesan (min 10 karakter) : ";
			$pesan = trim(fgets(STDIN));
			if (strlen($pesan) < 10) {
				throw new Exception("\e[91m[!]\e[0m Gue bilang minimal 10 karakter, babi bandel amat lu jadi org!!\n");
				exit(0);
			}
			$response = $spam->SmsPayuTerusBis(
				$nomor, $pesan
			);
			if (strpos($response, "SMS Gratis Telah Dikirim")) {
				echo "\e[92m[*] \e[0mTerkirim broo [ $pesan ]\n";

			} else if (strpos($response, "MAAF....!")) {
				echo "\e[91m[*] \e[0mTunggu 15 menit sebelum mengirim Pesan yang sama!!\n";

			} else {
				echo "\e[91m[*] \e[0mGagal silahkan coba lagi!!\n";
			}

		} else if ($choice == 4) {
			echo "\e[96m[*] \e[0mNomor (62) : ";
			$nomor = trim(fgets(STDIN));

			if (substr($nomor, 0, 2) !== "62") {
				throw new Exception("\e[91m[!]\e[0m Nomor awalan harus 62 gan!!\n");
				exit(0);
			}
			echo "\e[96m[*] \e[0mLooping : ";
			$loop = trim(fgets(STDIN));
			if (is_numeric($loop) !==true) {
				throw new Exception("\e[91m[!]\e[0m Looping woy/limit, begokk!!\n");
				exit(0);
			}

			$spam->TokoTalk(
				$nomor, $loop
			);

		} else if ($choice == 5) {
			echo "\e[96m[*] \e[0mNomor (08) : ";
			$nomor = trim(fgets(STDIN));

			if (substr($nomor, 0, 2) !== "08") {
				throw new Exception("\e[91m[!]\e[0m Nomor awalan harus 08 gan!!\n");
				exit(0);
			}
			echo "\e[96m[*] \e[0mLooping : ";
			$loop = trim(fgets(STDIN));
			if (is_numeric($loop) !==true) {
				throw new Exception("\e[91m[!]\e[0m Looping woy/limit, begokk!!\n");
				exit(0);
			}

			$spam->Other(
				$nomor, $loop, "OyoHotels"
			);

		} else if ($choice == 6) {
			echo "\e[96m[*] \e[0mNomor (62) : ";
			$nomor = trim(fgets(STDIN));

			if (substr($nomor, 0, 2) !== "62") {
				throw new Exception("\e[91m[!]\e[0m Nomor awalan harus 62 gan!!\n");
				exit(0);
			}
			echo "\e[96m[*] \e[0mLooping : ";
			$loop = trim(fgets(STDIN));
			if (is_numeric($loop) !==true) {
				throw new Exception("\e[91m[!]\e[0m Looping woy/limit, begokk!!\n");
				exit(0);
			}

			$spam->Other(
				$nomor, $loop, "AyoSrc"
			);

		} else if ($choice == 7) {
			echo "\e[91m[!]\e[0m Note : khusus TelkomNyet Yahh!\n";
			echo "\e[96m[*] \e[0mNomor (62) : ";
			$nomor = trim(fgets(STDIN));

			if (substr($nomor, 0, 2) !== "62") {
				throw new Exception("\e[91m[!]\e[0m Nomor awalan harus 62 gan!!\n");
				exit(0);
			}
			echo "\e[96m[*] \e[0mLooping : ";
			$loop = trim(fgets(STDIN));
			if (is_numeric($loop) !==true) {
				throw new Exception("\e[91m[!]\e[0m Looping woy/limit, begokk!!\n");
				exit(0);
			}

			$spam->Other(
				$nomor, $loop, "CodaShopTsel"
			);

		} else {
			throw new Exception("\e[91m[!]\e[0m Liat menu dong!\n");
			exit(0);
		}
		echo "\e[93m[*] Byee\e[0m\n";
		exit(0);

	} else {
		throw new Exception("\e[91m[!]\e[0m Tolol Liat Menu nya Lu pilih Nomer!\n");
	}

} catch (Exception $e) {
	echo $e->getMessage();
} ?>
