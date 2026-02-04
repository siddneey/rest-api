# Bug Report – REST API Stok Barang

## Bug ID
BUG-01

## Summary
DELETE tanpa parameter ID menyebabkan error server.

## Environment
- OS: Windows
- Tool: Postman
- API: REST API Stok Barang

## Steps to Reproduce
1. Kirim request DELETE ke /api/stokbarang tanpa id_barang

## Actual Result
Server mengembalikan status code 500.

## Expected Result
Server mengembalikan status code 400 dengan pesan validasi.

## Severity
Medium