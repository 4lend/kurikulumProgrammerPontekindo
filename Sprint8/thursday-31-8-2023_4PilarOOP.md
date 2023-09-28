
# 4 pilar PHP OOP
4 pilar OOP
- inheritance / pewarisan
    hal yg bisa diwariskan (yg tdk bisa dirubah) -> cons, method, properties
    - meneruskan fungsi / perintah / kodingan dari induk

    macam2 inheritance
    - single
    - multilevel -> satu anak satu cucu
    - multiple -> satu bapak banyak anak
    - hierarchical ->
    - hybrid

- encapsulation
    kakek yang isinya ada hal yang bisa diwariskan ada yang tidak
    - yang dibungkus tidak bisa diwariskan
    - membatasi akses agar tidak bias diakses dari luar
        - memudahkan dev untuk memastikan bahwa 
    * bukan menyembunyikan sebuah data, tapi menyebabkan data tersebunyi dari pihak luar
    tersembunyi == tidak bisa diakses
    * encapsulation seperti bungkus / casing laptop untuk menyembunyikan hdd, ram, etc dari yg terlihat. Tapi bukan berarti tidak ada. Mereka ada hanya saja tidak terlihat oleh user biasa / yang tidak membuka bungkusan encapsulation

- abstraction
    menyembunyikan dan hanya menampilkan apa yang dibutuhkan oleh pihak luar
    * menghindari dari kompleksitas sebuah sistem
    |-> bayangkan ketika menginjak pedal gas mobil kita harus mengetahui bagaimana pedal gas tersebut dapat membuat mobil berjalan

- polymorphism / banyak bentuk | poly->banyak morphism->bentuk
    


# Namespace
    digunakan jika ingin membuat nama class yang sama agar tidak error

    e.g.
    class Laptop {}

    - yang bisa kita tambahkan kedalam Namespace
        1. class
        1. const
        1. method
        1. etc,
    * berapapun object bisa satu class ==> ga tau tadi buat apaan, yg penting catat dulu dah || izipizi

    - penggunaan use keyword --> 'use' agar tidak perlu menuliskan kembali path2 setiap membuat object(apaan lupa) yang sama
    - group use declaration --> digunakan untuk mengimport beberapa class, etc dengan satu use :: caranya dengan menggunakan "{}" ketika mengimport
    - 'use' --> digunakan untuk mengimport (nanti yaa, ane lupa)

# global Namespace


# class itu cuma kertas, maka itu diperlukan botol | harus dipanggil, dengan memasukkannya kedalam variable

* object menggunakan    ->
* array mengguanakn     []
** karena sudah belajar object maka disarankan untuk menggunakan object
