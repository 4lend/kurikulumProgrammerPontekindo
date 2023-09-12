
EVALUASI 5
saturday 12 August 2023

- table
    - product_detail
        - id
        - name
        - stock
        - brand
    - categories
        - id
        - categories
    - products
        - id
        - id_products_detail -> references to product_detail(id)
        - id_category -> references to categories(id)
        alter table
        - id_seller -> references to seller(id)
    - seller
        - id
        - name

1.  setiap products memiliki informasi informasi berupa; 
    detail produk yang memiliki informasi dari table product_detail,
    kategori produk yang memiliki informasi dari table products,
    seller yang memiliki informasi dari table seller.

2.  table yang dimana kondisi antar table saling berhubungan

3.  - INNER JOIN    : akan menyeleksi atau mengambil data jika 2 data saling bertemu
    - LEFT JOIN     : mengambil data jika 2 data saling bertemu / cocok ditambah dengan tabel yang disebelah kiri
    - RIGHT JOIN    : mengambil data jika 2 data saling bertemu / cocok ditambah dengan tabel yang disebelah kanan
    - CROSS JOIN    : mengambil data dari table kiri(1) dan table kanan(2)
    - SELF JOIN     : return / mengembalikan data dari data yang diambil dari dirinya sendiri

4.  - one to one relationship   : table yang saling berelasi / berhubungan / berinteraksi hanya satu ke satu table
    - one to many relationship  : table yang saling berelasi / berhubungan / berinteraksi satu ke banyak table
    - many to many relationship : table yang saling berelasi / berhubungan / berinteraksi banyak table ke banyak table
