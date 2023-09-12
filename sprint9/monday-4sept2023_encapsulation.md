
# encapsulation -> mengatur sebuah data bisa diakses dari luar atau tidak, jadi ini akan mengatur data yang sensitif untuk tidak terlihat dari luar

# penggunaan access level didalam class
setiap (var, public, protected, private) memiliki access level nya sendiri, jadi teliti dalam menggunakannya apakah attributes akan digunakan diluar class atau tidak
berikut rinciannya
modifier | class | subclass | world
public Y Y Y
protected Y Y N
private Y N N

* subclass adl class yang mewarisi / inherit dari class yang juga dia hasil inherit dari class sebelumnya
    jadi ceritanya ini cucu dari kakek nya, tidak berhubungan langsung tapi masih satu darah


menjadi minimalis
- membuat function menjadi public
- membuat private parameter
* membuat method didalam class untuk private attributes yang mengambil (getter) private attributes / variable yang tidak bisa diakses dari luar class. 
* Sehingga kita membuat function baru di tiap attributes private apa yang ingin kita gunakan diluar class

## yang dipelajari hari ini
    - getter dan (apa lupa)
    - access class (menentukan seberapa global sebuah attributes / field / variable untuk digunakan)


# construct & destruct
construct -> digunakan untuk membuka / menjalankan program secara otomatis yang ada didalam class, 
    sehingga kita perlu mendeklarasikan / menuliskan untuk menjalankan objek yang sudah kita buat.
    Pada kasus ini -> kita membuka koneksi ke database didalam class. Daripada kita menulis function koneksi dan harus menuliskan perintah untuk menjalankan method tadi maka akan lebih mudah kita tinggal menggunakan construction dan function yang kita tulis otomatis dijalankan.
    * ingat ini hanya digunakan didalam class (eh ga tau ding)
