#Kami Mohon Jangan Di Recode
#Recode Kami Bantai 1 Team
#Aoh loh

<? php
sistem ( "jelas" );
termasuk ( "src / version.php" );
termasuk ( "src / otp.php" );

gema  "
\ 033 [34m╔════════════════════════════════╗
  \ 033 [31m⏣ \ 033 [32mAuthor \ 033 [37m: st∆rz stj
  \ 033 [31m⏣ \ 033 [Tim 32mMy Saya \ 033 [37m: Program Jalanan
  \ 033 [31m⏣ \ 033 [32mwhatsapp \ 033 [37m: 081391211019
  \ 033 [31m⏣ \ 033 [32mCodeName \ 033 [37m: \ 033 [36mMr.ST∆RZ STJ
\ 033 [34m╚════════════════════════════════╝
###### SPAM SMS OTP WORK #######
  \ e [92m01 \ e [0m. Spam Otp MyPoin
  \ e [92m02 \ e [0m. Spam Otp ALTBaljai
  \ e [92m03 \ e [0m. Sms Gratis PayuTeruz
  \ e [92m04 \ e [0m. Spam Otp TokoTalk
  \ e [92m05 \ e [0m. Spam Otp OyoHotels
  \ e [92m06 \ e [0m. Spam Otp AyoSrc
  \ e [92m07 \ e [0m. Spam Otp CodaShopTsel \ n \ n " ;

coba {
	echo  "\ e [96m [+] \ e [91mroot @ Fikri_stj \ e [0m />" ;
	$ choice = trim ( fgets ( STDIN ));
	$ Spam yang = baru  SimpleSpam \ Otp ();

	if ( is_numeric ( $ choice )) {
		if ( $ choice == 1 ) {
			echo  "\ e [96m [*] \ e [0mNomor (62):" ;
			$ nomor = trim ( fgets ( STDIN ));

			if ( substr ( $ nomor , 0 , 2 )! == "62" ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Nomor awalan harus 62 gan !! \ n" );
				keluar ( 0 );
			}
			echo  "\ e [96m [*] \ e [0mLooping:" ;
			$ loop = trim ( fgets ( STDIN ));
			if ( is_numeric ( $ loop )! == true ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Looping woy / limit, begokk !! \ n" );
				keluar ( 0 );
			}

			$ spam -> MyPoin (
				$ nomor , $ loop
			);

		} lain  jika ( $ choice == 2 ) {
			echo  "\ e [96m [*] \ e [0mNomor (62):" ;
			$ nomor = trim ( fgets ( STDIN ));

			if ( substr ( $ nomor , 0 , 2 )! == "62" ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Nomor awalan harus 62 gan !! \ n" );
				keluar ( 0 );
			}
			echo  "\ e [96m [*] \ e [0mLooping:" ;
			$ loop = trim ( fgets ( STDIN ));
			if ( is_numeric ( $ loop )! == true ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Looping woy / limit, begokk !! \ n" );
				keluar ( 0 );
			}

			$ spam -> AltBaljai (
				$ nomor , $ loop
			);

		} lain  jika ( $ choice == 3 ) {
			echo  "\ e [96m [*] \ e [0mNomor (62):" ;
			$ nomor = trim ( fgets ( STDIN ));

			if ( substr ( $ nomor , 0 , 2 )! == "62" ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Nomor awalan harus 62 gan !! \ n" );
				keluar ( 0 );
			}
			echo  "\ e [96m [*] \ e [0mPesan (min 10 karakter):" ;
			$ pesan = trim ( fgets ( STDIN ));
			if ( strlen ( $ pesan ) < 10 ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Dapatkan minimal 10 karakter, babi bandel sangat lu jadi org !! \ n" );
				keluar ( 0 );
			}
			$ response = $ spam -> SmsPayuTerusBis (
				$ nomor , $ pesan
			);
			if ( strpos ( $ response , "SMS Gratis Telah Dikirim" )) {
				echo  "\ e [92m [*] \ e [0mTerkirim broo [$ pesan] \ n" ;

			} lain  jika ( strpos ( $ response , "MAAF ....!" )) {
				echo  "\ e [91m [*] \ e [0mTunggu 15 menit sebelum mengirim Pesan yang sama !! \ n" ;

			} lain {
				gema  "\ e [91m [*] \ e [0magag Coba coba lagi !! \ n" ;
			}

		} lain  jika ( $ choice == 4 ) {
			echo  "\ e [96m [*] \ e [0mNomor (62):" ;
			$ nomor = trim ( fgets ( STDIN ));

			if ( substr ( $ nomor , 0 , 2 )! == "62" ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Nomor awalan harus 62 gan !! \ n" );
				keluar ( 0 );
			}
			echo  "\ e [96m [*] \ e [0mLooping:" ;
			$ loop = trim ( fgets ( STDIN ));
			if ( is_numeric ( $ loop )! == true ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Looping woy / limit, begokk !! \ n" );
				keluar ( 0 );
			}

			$ spam -> TokoTalk (
				$ nomor , $ loop
			);

		} lain  jika ( $ choice == 5 ) {
			echo  "\ e [96m [*] \ e [0mNomor (08):" ;
			$ nomor = trim ( fgets ( STDIN ));

			if ( substr ( $ nomor , 0 , 2 )! == "08" ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Nomor awalan harus 08 gan !! \ n" );
				keluar ( 0 );
			}
			echo  "\ e [96m [*] \ e [0mLooping:" ;
			$ loop = trim ( fgets ( STDIN ));
			if ( is_numeric ( $ loop )! == true ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Looping woy / limit, begokk !! \ n" );
				keluar ( 0 );
			}

			$ spam -> Lainnya (
				$ nomor , $ loop , "OyoHotels"
			);

		} lain  jika ( $ choice == 6 ) {
			echo  "\ e [96m [*] \ e [0mNomor (62):" ;
			$ nomor = trim ( fgets ( STDIN ));

			if ( substr ( $ nomor , 0 , 2 )! == "62" ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Nomor awalan harus 62 gan !! \ n" );
				keluar ( 0 );
			}
			echo  "\ e [96m [*] \ e [0mLooping:" ;
			$ loop = trim ( fgets ( STDIN ));
			if ( is_numeric ( $ loop )! == true ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Looping woy / limit, begokk !! \ n" );
				keluar ( 0 );
			}

			$ spam -> Lainnya (
				$ nomor , $ loop , "AyoSrc"
			);

		} lain  jika ( $ choice == 7 ) {
			echo  "\ e [91m [!] \ e [0m Catatan: khusus TelkomNyet Yahh! \ n" ;
			echo  "\ e [96m [*] \ e [0mNomor (62):" ;
			$ nomor = trim ( fgets ( STDIN ));

			if ( substr ( $ nomor , 0 , 2 )! == "62" ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Nomor awalan harus 62 gan !! \ n" );
				keluar ( 0 );
			}
			echo  "\ e [96m [*] \ e [0mLooping:" ;
			$ loop = trim ( fgets ( STDIN ));
			if ( is_numeric ( $ loop )! == true ) {
				throw  Exception baru  ( "\ e [91m [!] \ e [0m Looping woy / limit, begokk !! \ n" );
				keluar ( 0 );
			}

			$ spam -> Lainnya (
				$ nomor , $ loop , "CodaShopTsel"
			);

		} lain {
			throw  Exception baru  ( "\ e [91m [!] \ e [0m Menu liat dong! \ n" );
			keluar ( 0 );
		}
		echo  "\ e [93m [*] Byee \ e [0m \ n" ;
		keluar ( 0 );

	} lain {
		throw  Exception baru  ( "\ e [91m [!] \ e [0m Tolol Liat Menu nya Lu pilih Nomer! \ n" );
	}

} catch ( Pengecualian  $ e ) {
	echo  $ e -> getMessage ();
} ?>
