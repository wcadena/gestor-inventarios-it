pause
echo on
## C:\xampp\htdocs\inventarios3\html\desktop_app
## D:\Users\Anibal\misDoc\NetBeansProjects\inventarioAppDesktopJava\dist
## C:\Program Files\Java\jdk1.8.0_151\bin\test.jks

## jarsigner file.jar Mykey

copy D:\Users\Anibal\misDoc\NetBeansProjects\inventarioAppDesktopJava\dist\*.* C:\xampp\htdocs\inventarios3\html\desktop_app\ 
pause

"C:\Program Files\Java\jdk1.8.0_151\bin\jarsigner.exe" C:\xampp\htdocs\inventarios3\html\desktop_app\Actualizador.jar "C:\Program Files\Java\jdk1.8.0_151\bin\test"

jarsigner Actualizador.jar test

keytool -genkey -alias test -keystore test.jks
keytool -selfcert -alias test -keystore test.jks


keytool -certreq -alias test -keystore test.jks


-----BEGIN NEW CERTIFICATE REQUEST-----
MIIEQDCCA+wCAQAwbzELMAkGA1UEBhMCRUMxEjAQBgNVBAgTCVBpY2hpbmNoYTEO
MAwGA1UEBxMFUXVpdG8xETAPBgNVBAoTCEVjdWF0YXNrMREwDwYDVQQLEwhFY3Vh
dGFzazEWMBQGA1UEAxMNV2FnbmVyIENhZGVuYTCCA0IwggI1BgcqhkjOOAQBMIIC
KAKCAQEAj3k12bmq6b+r7Yh6z0lRtvMuxZ47rzcY6OrElh8+/TYG50NRqcQYMzm4
CefCrhxTm6dHW4XQEa24tHmHdUmEaVysDo8UszYIKKIv+icRCj1iqZNFNAmg/mls
Rlj4S90ggZw3CaAQV7GVrc0AIz26VIS2KR+dZI74g0SGd5ec7AS0NKasLnXpmF3i
PbApL8ERjJ/6nYGB5zONt5K3MNe540lZL2gJmHIVORXqPWuLRlPGM0WPgDsypMLg
8nKQJW5OP4o7CDihxFDk4YwaKaN9316hQ95LZv8EkD7VzxYj4VjUh8YI6X8hHNgd
yiPLbjgHZfgi40K+SEwFdjk5YBzWZwIdALr2lqaFePff3uf6Z8l3x4XvMrIzuuWA
wLzVaV0CggEAFqZcWCBIUHBOdQKjl1cEDTTaOjR4wVTU5KXALSQu4E+W5h5L0JBK
vayPN+6x4J8xgtI8kEPLZC+IAEFg7fnKCbMgdqecMqYn8kc+kYebosTnRL0ggVRM
tVuALDaNH6g+1InpTg+gaI4yQopceMR4xo0FJ7ccmjq7CwvhLERoljnn08502xAa
Zaorh/ZMaCbbPscvS1WZg0u07bAvfJDppJbTpV1TW+v8RdT2GfY/Pe27hzklwvIk
4HcxKW2oh+weR0j4fvtf3rdUhDFrIjLe5VPdrwIRKw0fAtowlzIk/ieu2oudSyki
2bqL457Z4QOmPFKBC8aIt+LtQxbh7xfb3gOCAQUAAoIBAHs34gQCvdTJciAuf5QZ
cf1fhWLoPxW0arBnnN1jzC49tIk1/kVJ7a9kWiPGQUdZjjs+Uz0cdmbYphsFfGIF
1OTN/8su7s0xSrb5HKyyzoJ5cy29qeMMjGfrK0An30g7zxzEaMw2LSm4Tt3c0Uk6
Vvc3Dm7Yx8IL3NyJpJDlsrrajnYGIhARdje2GYmvHhsZxRiswZZC57QFM/qrtUDP
9dQ+VyAd+oRT58yaaxRC7lfSoWzzRKN5odmZR1hF/eF9lARiV8pVcvxiQZFT3Z6O
cw63UqO1CIZB0UjsfhMryOOOWK9JxzJTBwAopBUzfwuamu9wKKhwySgngq3oReCL
SsKgMDAuBgkqhkiG9w0BCQ4xITAfMB0GA1UdDgQWBBRghzBKdX+aneMChE7KGeCy
6U/q1jANBglghkgBZQMEAwIFAAM/ADA8AhweluGaWF9LsyIE02jF1tMs5wLBnscD
9+pX28shAhwDMgylSkcXg+sJPTE5XLTyJeeAApjKralQ/JNN
-----END NEW CERTIFICATE REQUEST-----






