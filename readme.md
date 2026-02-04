# REST API Stok Barang menggunakan CodeIgniter

## 📖 Deskripsi Proyek
Proyek ini merupakan implementasi **RESTful API** menggunakan **Framework CodeIgniter** yang menerapkan arsitektur **Service-Oriented Architecture (SOA)**. Aplikasi ini digunakan untuk mengelola data **stok barang** melalui layanan web berbasis HTTP dengan metode **GET, POST, PUT, dan DELETE**.

REST API ini memungkinkan client (seperti Postman) untuk melakukan operasi **CRUD (Create, Read, Update, Delete)** terhadap data stok barang yang tersimpan di database MySQL.

---

## 🎯 Tujuan Proyek
- Menerapkan konsep RESTful Web Service  
- Mengimplementasikan arsitektur MVC (Model–View–Controller) pada CodeIgniter  
- Membangun layanan API yang dapat diakses oleh client eksternal  
- Melakukan pengujian API menggunakan Postman  

---

## 🛠️ Tools dan Teknologi
- PHP  
- Framework CodeIgniter 3  
- CodeIgniter REST Server  
- MySQL  
- XAMPP  
- Postman  
- Visual Studio Code  

## 📥 GET
Metode **GET** digunakan untuk mengambil data stok barang dari server. Endpoint ini dapat menampilkan seluruh data stok barang atau data tertentu berdasarkan parameter ID yang dikirimkan. GET tidak mengubah data di dalam database dan hanya berfungsi sebagai media pengambilan informasi.

## ➕ POST
Metode **POST** digunakan untuk menambahkan data stok barang baru ke dalam database. Data dikirimkan melalui request body dalam format JSON dan akan disimpan ke tabel `stock_barang`. Metode ini digunakan saat ingin memasukkan data baru ke dalam sistem.

## ✏️ PUT
Metode **PUT** digunakan untuk memperbarui data stok barang yang sudah ada di database. Proses pembaruan dilakukan berdasarkan ID barang yang dikirimkan, sehingga data lama akan digantikan dengan data baru sesuai dengan informasi yang diberikan.

## 🗑️ DELETE
Metode **DELETE** digunakan untuk menghapus data stok barang dari database berdasarkan ID tertentu. Jika ID yang dikirimkan valid, maka data akan dihapus secara permanen dari tabel `stock_barang`.


## 🧪 Software Quality Assurance
Proyek ini digunakan sebagai objek pengujian API dengan dokumentasi QA berupa:
- Test Plan
- Test Cases
- Bug Report
- Test Report


✅ Kesimpulan
REST API ini berhasil dibangun menggunakan Framework CodeIgniter dengan menerapkan konsep RESTful Web Service dan arsitektur MVC. Seluruh operasi CRUD pada data stok barang dapat diakses melalui endpoint API dan diuji menggunakan Postman. Proyek ini menunjukkan bahwa CodeIgniter mampu digunakan untuk membangun layanan API yang terstruktur, sederhana, dan mudah dikembangkan.