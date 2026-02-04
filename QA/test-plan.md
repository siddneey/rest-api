# Test Plan – REST API Stok Barang

## 1. Tujuan
Dokumen ini menjelaskan rencana pengujian REST API Stok Barang untuk memastikan seluruh endpoint berjalan sesuai kebutuhan fungsional.

## 2. Ruang Lingkup
Pengujian meliputi endpoint:
- GET /api/stokbarang
- POST /api/stokbarang
- PUT /api/stokbarang
- DELETE /api/stokbarang

## 3. Jenis Pengujian
- Functional Testing
- Positive & Negative Testing
- Validation Testing
- Error Handling Testing

## 4. Tools
- Postman
- MySQL
- XAMPP

## 5. Kriteria Keberhasilan
- Endpoint mengembalikan status code yang sesuai
- Data berhasil diproses sesuai request
- Tidak terjadi error server (500)