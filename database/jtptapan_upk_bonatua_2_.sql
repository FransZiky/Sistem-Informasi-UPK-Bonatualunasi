-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Jun 2021 pada 20.59
-- Versi server: 5.7.34-log
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jtptapan_upk_bonatua(2)`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(600) NOT NULL,
  `role` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$RN4hbAFINhYyxjUryJ4V1uQ/5s.Kujs45P0HEa61pOMTfwr8zW116', 'admin'),
(2, 'admin', '$2y$10$iN5/xoaIO1HZckUCT6fMae/WFD51ikr5.3t3jpxOgcoFm3F1pKeem', 'admin'),
(3, 'pegawai', '$2y$10$6YjiJmqL7BbO9sDSBy1IFevqhSI76DECSuvL.N6s5NRh8MGR.464C', 'pegawai'),
(4, 'pegawai', '$2y$10$Daeb2y5zQNeoFPejB90Phuvuw/U/RLeNaaaGQkHjui/QeDjZQFPuO', 'pegawai'),
(11, 'mano', '$2y$10$kPkd1YlTX.MXvxAaJp97d.tjyS6RAGiP/hxKj5uigEXUTf03Eilru', 'pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_kredit`
--

CREATE TABLE `bukti_kredit` (
  `no` int(20) NOT NULL,
  `no_kredit` int(255) NOT NULL,
  `tanggal_pencairan` date NOT NULL,
  `tanggal_pelunasan` date NOT NULL,
  `jumlah_kredit` decimal(50,0) NOT NULL,
  `jumlah_bunga` decimal(50,0) NOT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_kwitansi`
--

CREATE TABLE `bukti_kwitansi` (
  `no` int(20) NOT NULL,
  `no_kwitansi` int(20) NOT NULL,
  `tanggal_pencairan` date NOT NULL,
  `tanggal_pelunasan` date NOT NULL,
  `jumlah_kwitansi` decimal(50,0) NOT NULL,
  `jumlah_bunga` decimal(50,0) NOT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_nasabah`
--

CREATE TABLE `data_nasabah` (
  `id` int(225) NOT NULL,
  `nomorkwitansi` varchar(255) NOT NULL,
  `nomorkredit` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jenis_peminjaman` varchar(225) NOT NULL,
  `jumlah_peminjaman` varchar(255) NOT NULL,
  `tanggal_peminjaman` varchar(255) NOT NULL,
  `tanggal_pencairan` varchar(255) NOT NULL,
  `tanggal_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_nasabah`
--

INSERT INTO `data_nasabah` (`id`, `nomorkwitansi`, `nomorkredit`, `nama`, `alamat`, `jenis_kelamin`, `jenis_peminjaman`, `jumlah_peminjaman`, `tanggal_peminjaman`, `tanggal_pencairan`, `tanggal_pembayaran`) VALUES
(9, '998', '998', 'Andini', 'Medan', 'Wanita', 'Individu', 'Rp.3.200.000', '2021-06-08', '2021-06-08', '2021-06-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(255) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(225) NOT NULL,
  `foto` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nama`, `alamat`, `no_telepon`, `foto`, `jenis_kelamin`) VALUES
(42, 'Manogunawan', 'Medan', '081378824925', '56120038.jpg', 'Pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pnpm`
--

CREATE TABLE `data_pnpm` (
  `no_telepon` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(255) NOT NULL,
  `judul_galeri` varchar(255) NOT NULL,
  `subjudul_galeri` varchar(255) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_akhir`
--

CREATE TABLE `laporan_akhir` (
  `id` int(225) NOT NULL,
  `periode` date NOT NULL,
  `pemasukan` varchar(255) NOT NULL,
  `pengeluaran` varchar(255) NOT NULL,
  `saldo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_akhir`
--

INSERT INTO `laporan_akhir` (`id`, `periode`, `pemasukan`, `pengeluaran`, `saldo`) VALUES
(11, '2021-06-30', 'Rp.3.000.000', 'Rp.1.500.000', 'Rp.2.000.000'),
(12, '2021-06-01', 'Rp.2.200.000', 'Rp1.000.000', 'Rp.1.200.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` int(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(9, '169179536.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`) VALUES
(1, 'banta', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_kerja`
--

CREATE TABLE `pendaftaran_kerja` (
  `no_pendaftar` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `ijzah` varchar(225) NOT NULL,
  `surat_keterangan` varchar(225) NOT NULL,
  `foto_formal` varchar(225) NOT NULL,
  `surat_lamaran` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran_kerja`
--

INSERT INTO `pendaftaran_kerja` (`no_pendaftar`, `nama_lengkap`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `ijzah`, `surat_keterangan`, `foto_formal`, `surat_lamaran`) VALUES
(13, 'Norbert Simanungkalit', 'Balige', 'Pria', '2021-06-16', '892686541.JPG', '323852540.jpeg', '443878269.JPG', '562562728.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_peminjaman`
--

CREATE TABLE `pengajuan_peminjaman` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jumlahpengajuanpeminjaman` varchar(255) NOT NULL,
  `foto_ktp` varchar(225) NOT NULL,
  `foto_keterangan` varchar(225) NOT NULL,
  `jenis_peminjaman` varchar(20) NOT NULL,
  `proposal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_peminjaman`
--

INSERT INTO `pengajuan_peminjaman` (`id`, `nama`, `alamat`, `email`, `jenis_kelamin`, `tanggal_lahir`, `jumlahpengajuanpeminjaman`, `foto_ktp`, `foto_keterangan`, `jenis_peminjaman`, `proposal`) VALUES
(11, 'Manogunawan Gultom', 'Medan', 'manogunawan27@gmail.com', 'Pria', '2021-06-23', 'Rp.3.000.000', '930412498.jpg', '601481328.jpeg', 'Kelompok', '729879458.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `nama_pembuat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `tanggal`, `isi`, `nama_pembuat`) VALUES
(1, 'Lowongan Kerja', '2021-06-07', '<p>Lowongan pekerjaan pada UPK Kecamatan telah dibuka mulai dari tanggal 22 Maret 2021 sampai 28 Maret 2021.\r\n                    Lowongan pekerjaan yang dibutuhkan yaitu sebagai Pegawai.</p> \r\n                    <p>Syarat untuk dapat mengikuti lowongan pekerjaan ini adalah:</p><p>\r\n                    </p><ol>\r\n                    <li>Minimal Lulus SMA</li>\r\n                    <li>Memiliki wawasan dalam menggunakan komputer</li>\r\n                    <li>Berdomisili di Kecamatan Bonatua Lunasi</li>\r\n                    <li>Memiliki surat keterangan desa di scan</li>\r\n                    <li>Memiliki foto formal dengan latar belakang merah</li>\r\n                    <li>Memiliki surat lamaran dalam bentuk scan</li>\r\n                    </ol>\r\n                    <p>Diharapkan dapat mengikuti syarat tersebut dan mengisi formulir pada <a href=\"/lowongan_kerja\">Lowongan Pekerjaan</a>.\r\n                    Pengumuman yang lolos akan diumumkan pada tanggal 05 May 2021. Sekian dan Terima kasih.</p>', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkingan`
--

CREATE TABLE `perangkingan` (
  `id_kelompok` int(20) NOT NULL,
  `nama_kelompok` varchar(255) NOT NULL,
  `indikator` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanda_tangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `konfirmasi_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'medi', 'admin', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bukti_kredit`
--
ALTER TABLE `bukti_kredit`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `bukti_kwitansi`
--
ALTER TABLE `bukti_kwitansi`
  ADD PRIMARY KEY (`no_kwitansi`);

--
-- Indeks untuk tabel `data_nasabah`
--
ALTER TABLE `data_nasabah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pnpm`
--
ALTER TABLE `data_pnpm`
  ADD PRIMARY KEY (`no_telepon`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_akhir`
--
ALTER TABLE `laporan_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pendaftaran_kerja`
--
ALTER TABLE `pendaftaran_kerja`
  ADD PRIMARY KEY (`no_pendaftar`);

--
-- Indeks untuk tabel `pengajuan_peminjaman`
--
ALTER TABLE `pengajuan_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `perangkingan`
--
ALTER TABLE `perangkingan`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indeks untuk tabel `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_nasabah`
--
ALTER TABLE `data_nasabah`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `laporan_akhir`
--
ALTER TABLE `laporan_akhir`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_kerja`
--
ALTER TABLE `pendaftaran_kerja`
  MODIFY `no_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_peminjaman`
--
ALTER TABLE `pengajuan_peminjaman`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
