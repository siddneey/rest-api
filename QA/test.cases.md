# Test Cases – REST API Stok Barang

## TC-GET-01
**Scenario:** Get all stock data  
**Method:** GET  
**Endpoint:** /api/stokbarang  
**Expected Result:** Status code 200 dan data stok ditampilkan

## TC-GET-02
**Scenario:** Get stock data by ID  
**Method:** GET  
**Endpoint:** /api/stokbarang?id=1  
**Expected Result:** Status code 200 dan data sesuai ID

## TC-POST-01
**Scenario:** Create new stock data  
**Method:** POST  
**Endpoint:** /api/stokbarang  
**Expected Result:** Status code 201 dan data berhasil ditambahkan

## TC-PUT-01
**Scenario:** Update stock data  
**Method:** PUT  
**Endpoint:** /api/stokbarang  
**Expected Result:** Status code 200 dan data berhasil diperbarui

## TC-DELETE-01
**Scenario:** Delete stock data  
**Method:** DELETE  
**Endpoint:** /api/stokbarang?id_barang=1  
**Expected Result:** Status code 200 dan data berhasil dihapus