# Pintu Web — UI Slicing

Proyek ini merupakan implementasi slicing antarmuka halaman utama dari aplikasi **Pintu**, sebuah platform jual beli aset kripto asal Indonesia. Proyek dikerjakan sebagai latihan pengembangan frontend dengan fokus pada layouting, komponen UI, dan responsivitas.

![Demo](src/assets/demo.png)

---

## Deskripsi Proyek

Proyek ini mereplikasi tampilan landing page pintu.id secara visual, mulai dari navigasi, hero section, hingga bagian-bagian konten di bawahnya. Seluruh komponen dibangun menggunakan React dengan styling yang ditulis secara manual tanpa bergantung pada UI library besar.

---

## Teknologi yang Digunakan

| Teknologi | Keterangan |
|---|---|
| **React 18** | Library utama untuk membangun struktur komponen |
| **Vite** | Build tool dan development server |
| **Bootstrap 5** | Digunakan terbatas untuk sistem grid dan utility class |
| **CSS Custom** | Styling utama ditulis manual di `public/css/style.css` |

---

## Fitur

- Navbar responsif dengan dropdown pilihan bahasa dan menu mobile
- Hero section dengan gambar perangkat yang rata bawah
- Trust bar berisi logo lembaga regulasi (Kominfo, Kemendag, dll.)
- Feature cards dengan efek hover
- Ticker harga kripto dengan animasi scroll otomatis
- Daftar 5 aset kripto teratas dalam tampilan kartu scroll horizontal
- Section highlight fitur aplikasi Pintu
- Kalkulator simulasi investasi dengan range slider interaktif

---

## Instalasi dan Menjalankan Proyek

Pastikan **Node.js** telah terpasang, kemudian jalankan perintah berikut:

```bash
# Install dependensi
npm install

# Jalankan development server
npm run dev
```

Buka `http://localhost:5173` pada browser untuk melihat hasilnya.

Untuk membuat build production:

```bash
npm run build
```

---

## Struktur Direktori

```
src/
├── assets/
│   └── demo.png          # Screenshot tampilan proyek
├── components/
│   ├── Navbar.jsx
│   ├── Hero.jsx
│   ├── SponsorBar.jsx
│   ├── FeatureCards.jsx
│   ├── Ticker.jsx
│   ├── CryptoAssets.jsx
│   ├── SatuAplikasi.jsx
│   └── Investasi.jsx
├── App.jsx
└── main.jsx

public/
├── css/
│   └── style.css         # Seluruh styling custom
└── img/                  # Aset gambar (logo, ikon, foto perangkat)
```

---

> Proyek ini dibuat semata-mata untuk keperluan pembelajaran dan latihan slicing antarmuka. Tidak memiliki afiliasi dengan Pintu.id.
