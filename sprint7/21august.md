fungsi dari membuat error ditampilkan pada /etc/php/8.1/apache2/php.ini adl ketika sang developer ingin menampilkan apa masalah dari sebuah website tidak bisa dibuka

server adl tempat dimana kita menghubungkan antara user dan 'lupa'






cara menghubungkan ada 2 -> mysqli dan pdo

PDO
$pdo = new PDO("mysql:host=localhost,dbname:motor", "user/root" "password" );

MYSQL
$mysqli = new mysqli("localhost", "namaDatabase", "passwordDataBase", "namaDatabase");

table one to one -> table yang bisa saling dihubungkan tanpa perlu table relationship / table yang menjadi penengah | tapi syaratnya datanya harus UNIQUE agar satu data hanya bisa berkaitan dengan satu data
table relationship -> table yang menjadi penengah / penghubung antar 2 table | digunakan untuk many to many relationship


cara menggunakan JOIN dan AS pada mysql
SELECT username AS 'Nama User' FROM profil JOIN user ON (profil.id_user = user.id) JOIN profil (profil.id_user = user.id) JOIN profil_detail ON ( profil.id_profil_detail = profil_detail.id)

bedakan antara file form dengan file data

