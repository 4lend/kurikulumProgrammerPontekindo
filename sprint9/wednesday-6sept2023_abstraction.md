
properties dijadikan object == encapsulation

4 pilar sudah menjadi pondasi dalam penyusunan / pembangunan OOP

# abstraction
    adl mekanisme saat proses dalam sebuah objek disembunyikan.
    # fokus pada satu tanpa tau bagaimana itu berjalan dilatar belakang
    
* abstraction ada 2 :
    - abtract class         --> blueprint tidak bisa dijadikan object. tapi langsung diturunkan menjadi child class
    - abtract function
* abstraction merupakan sebuah blueprint

* jadi ketika sebuah class atau function kita jadikan abstract maka tidak bisa dijadikan sebuah object
* jika static properties maka tidak bisa di print. Bisa diprint dengan menggunakan nama class nya secara langsung | echo Kendaraan::$string;

* "self" digunakan pada subclass ketika ingin mamanggil properties dari class yang sama (subclass)
* jika ingin memanggil properties dari parent class maka gunakan "parent"  --  dah itu doang bedanya
* 'self' dapat digunakan untuk memanggil / menggunakan method, cons, etc. Tapi di class yang sama
    berbeda dengan 'this' dimana kita bisa menggunakan attributes dari parent class di child class

*   jadi jika bukan static / properties biasa maka kita memanggilnya dengan namaClass->propertiesYangInginDipanggil,
    sedangkan jika itu static function maka cara memanggilnya dengan namaClass::propertiesYangInginDipanggil

* abstract tidak bisa dijadikan sebuah object

### yang udah dipelajari didalam kelas jangan dicari lagi, biar ga ngulang ###

- ada 3 (apa)
    - abstract
        - bisa memiliki apa saja
        - * harus di overriding
        - * perlu kita sebutkan methodnya (yang ingin dijalankan)
    - interface -- implements  |  berbeda dengan class, dia hanya sebagai patokan
        - tidak boleh ada properties ($propeties)
        - cons
        - interface bisa di inheritance | tapi interface bukan class
        - implements bisa mengambil lebih dari satu interface
    - trait
        - trait bisa digunakan didalam class
        - didalam trait bisa memiliki properties
##### trait menyusul ya ges yak, karena ini berat. hanya buat yang senior / ketika program yang dibuat sudah membutuhkan trait #####


# PR | CARI APA ITU ERROR HANDLING

## AND, MATERI PHP OOP SELESAI -> UNTUK KURIKULUM DARI PONTEKINDO, SELAIN ITU CARI SENDIRI!!!
