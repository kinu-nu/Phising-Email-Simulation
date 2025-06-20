# 🎣 Phishing Email Simulation – Educational Proof of Concept

Proyek ini merupakan simulasi serangan phishing email yang dibuat untuk **tujuan edukasi**, dalam rangka memenuhi tugas video penjelasan *Keamanan Sistem Informasi* (Pertemuan 3 – Ancaman dan Kerentanan). Simulasi ini membuktikan bagaimana phishing email dapat digunakan untuk mencuri data login pengguna melalui halaman tiruan.

## 📚 Tujuan Proyek

- Menjelaskan konsep ancaman phishing dan kerentanannya
- Membuktikan cara kerja serangan phishing secara teknis di lingkungan **localhost**
- Menunjukkan mitigasi sederhana terhadap serangan tersebut


## 🚀 Cara Menjalankan

1. Pindahkan folder ini ke dalam direktori `htdocs` (jika menggunakan XAMPP).
2. Jalankan Apache dari XAMPP.
3. Akses melalui browser:
4. Klik link verifikasi → masuk ke halaman login palsu → input data → cek `log.txt`.

## 🔐 Mitigasi yang Diterapkan

- Validasi **HTTP Referer** untuk memverifikasi sumber halaman login
- Edukasi pengguna tentang tanda-tanda phishing
- Penggunaan protokol **HTTPS** untuk keamanan website resmi
- Penerapan **Two-Factor Authentication (2FA)** sebagai lapisan keamanan tambahan

## 📌 Catatan Penting

> ⚠️ **Proyek ini hanya untuk pembelajaran dan simulasi di lingkungan lokal (localhost).**  
> ❌ Dilarang digunakan untuk aktivitas ilegal, live attack, atau distribusi phishing secara nyata.  
> ✅ Simulasi ini bertujuan untuk meningkatkan kesadaran akan ancaman keamanan dan pentingnya mitigasi risiko.

---

Created by Ibnu Jaisyurrahman Faiz


