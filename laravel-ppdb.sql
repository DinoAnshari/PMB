-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2025 pada 15.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `achievement_tracks`
--

CREATE TABLE `achievement_tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skl_ijazah` varchar(255) NOT NULL,
  `kartu_keluarga` varchar(255) NOT NULL,
  `rapot_kelas6_semester1` varchar(255) NOT NULL,
  `nilai_b_indo_kelas6_semester1` double NOT NULL,
  `nilai_matematika_kelas6_semester1` double NOT NULL,
  `nilai_ipa_kelas6_semester1` double NOT NULL,
  `nilai_b_inggris_kelas6_semester1` double NOT NULL,
  `nilai_pai_kelas6_semester1` double NOT NULL,
  `rata_rata_kelas6_semester1` double NOT NULL,
  `rapot_kelas6_semester2` varchar(255) NOT NULL,
  `nilai_b_indo_kelas6_semester2` double NOT NULL,
  `nilai_matematika_kelas6_semester2` double NOT NULL,
  `nilai_ipa_kelas6_semester2` double NOT NULL,
  `nilai_b_inggris_kelas6_semester2` double NOT NULL,
  `nilai_pai_kelas6_semester2` double NOT NULL,
  `rata_rata_kelas6_semester2` double NOT NULL,
  `rata_rata_keseluruhan` double NOT NULL,
  `sertifikat_akademik_kabkota_1` varchar(255) DEFAULT NULL,
  `nilai_akademik_kabkota_1` double DEFAULT NULL,
  `sertifikat_akademik_kabkota_2` varchar(255) DEFAULT NULL,
  `nilai_akademik_kabkota_2` double DEFAULT NULL,
  `sertifikat_akademik_provinsi_1` varchar(255) DEFAULT NULL,
  `nilai_akademik_provinsi_1` double DEFAULT NULL,
  `sertifikat_akademik_nasional_1` varchar(255) DEFAULT NULL,
  `nilai_akademik_nasional_1` double DEFAULT NULL,
  `sertifikat_akademik_internasional_1` varchar(255) DEFAULT NULL,
  `nilai_akademik_internasional_1` double DEFAULT NULL,
  `sertifikat_non_akademik_kabkota_1` varchar(255) DEFAULT NULL,
  `nilai_non_akademik_kabkota_1` double DEFAULT NULL,
  `sertifikat_non_akademik_kabkota_2` varchar(255) DEFAULT NULL,
  `nilai_non_akademik_kabkota_2` double DEFAULT NULL,
  `sertifikat_non_akademik_provinsi_1` varchar(255) DEFAULT NULL,
  `nilai_non_akademik_provinsi_1` double DEFAULT NULL,
  `sertifikat_non_akademik_nasional_1` varchar(255) DEFAULT NULL,
  `nilai_non_akademik_nasional_1` double DEFAULT NULL,
  `sertifikat_non_akademik_internasional_1` varchar(255) DEFAULT NULL,
  `nilai_non_akademik_internasional_1` double DEFAULT NULL,
  `total_nilai_sertifikat` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `achievement_tracks`
--

INSERT INTO `achievement_tracks` (`id`, `user_id`, `skl_ijazah`, `kartu_keluarga`, `rapot_kelas6_semester1`, `nilai_b_indo_kelas6_semester1`, `nilai_matematika_kelas6_semester1`, `nilai_ipa_kelas6_semester1`, `nilai_b_inggris_kelas6_semester1`, `nilai_pai_kelas6_semester1`, `rata_rata_kelas6_semester1`, `rapot_kelas6_semester2`, `nilai_b_indo_kelas6_semester2`, `nilai_matematika_kelas6_semester2`, `nilai_ipa_kelas6_semester2`, `nilai_b_inggris_kelas6_semester2`, `nilai_pai_kelas6_semester2`, `rata_rata_kelas6_semester2`, `rata_rata_keseluruhan`, `sertifikat_akademik_kabkota_1`, `nilai_akademik_kabkota_1`, `sertifikat_akademik_kabkota_2`, `nilai_akademik_kabkota_2`, `sertifikat_akademik_provinsi_1`, `nilai_akademik_provinsi_1`, `sertifikat_akademik_nasional_1`, `nilai_akademik_nasional_1`, `sertifikat_akademik_internasional_1`, `nilai_akademik_internasional_1`, `sertifikat_non_akademik_kabkota_1`, `nilai_non_akademik_kabkota_1`, `sertifikat_non_akademik_kabkota_2`, `nilai_non_akademik_kabkota_2`, `sertifikat_non_akademik_provinsi_1`, `nilai_non_akademik_provinsi_1`, `sertifikat_non_akademik_nasional_1`, `nilai_non_akademik_nasional_1`, `sertifikat_non_akademik_internasional_1`, `nilai_non_akademik_internasional_1`, `total_nilai_sertifikat`, `created_at`, `updated_at`) VALUES
(1, 7, 'a', 'a', 'a', 1, 1, 1, 1, 1, 1, 'a', 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 16, 'uploads/prestasi/G1c9Rqzvk0i4Of7UFeqFLUQvrv2CyuOm5gPLrXsU.png', 'uploads/prestasi/uhqZv9fNa7SZSoen52Mt9WZhIykrAaa3puQNbREF.png', 'uploads/prestasi/XdwpQxwExq2yVJ06vn2ug48SeteoufBe5IvovPjL.png', 1, 5, 1, 1, 1, 1.8, 'uploads/prestasi/7tAnhLI1dSoOqZ3BjyO84LX7qlaNRAagdhdZTJVC.png', 3, 1, 1, 1, 1, 1.4, 1.6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2025-07-05 23:56:33', '2025-07-06 00:08:04'),
(3, 16, 'uploads/prestasi/3ocClgxqWAJNk3yhIFXAhsNJ9Sj0dfAjY7oWhNvw.png', 'uploads/prestasi/0BbI1vStSCQ9cJ7oT28cPidmuCVhnAnHHVfDDv4P.png', 'uploads/prestasi/yepH1mqo0j6K9TGSafF3PcMcG0ZgMXQ9c4xqX2ya.png', 1, 1, 1, 1, 1, 1, 'uploads/prestasi/3YCqJNdJBs7mBxE5RrcJ4NPU13LLz9fnKfcIJElV.png', 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2025-07-05 23:57:13', '2025-07-05 23:57:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admission_tracks`
--

CREATE TABLE `admission_tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admission_tracks`
--

INSERT INTO `admission_tracks` (`id`, `nama`, `tanggal_mulai`, `tanggal_selesai`, `created_at`, `updated_at`) VALUES
(2, 'prestasi', '2025-07-15', '2025-07-16', '2025-07-05 12:01:21', '2025-07-14 04:01:25'),
(3, 'afirmasi', '2025-07-04', '2025-07-31', '2025-07-06 00:50:55', '2025-07-06 00:50:55'),
(4, 'domisili', '2025-07-02', '2025-07-31', '2025-07-06 00:51:10', '2025-07-06 00:51:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `affirmation_tracks`
--

CREATE TABLE `affirmation_tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skl_ijazah` varchar(255) DEFAULT NULL,
  `kartu_keluarga` varchar(255) DEFAULT NULL,
  `dokumen_pendukung` varchar(255) DEFAULT NULL,
  `rapot_kelas6_semester1` varchar(255) NOT NULL,
  `nilai_b_indo_kelas6_semester1` double NOT NULL,
  `nilai_matematika_kelas6_semester1` double NOT NULL,
  `nilai_ipa_kelas6_semester1` double NOT NULL,
  `nilai_b_inggris_kelas6_semester1` double NOT NULL,
  `nilai_pai_kelas6_semester1` double NOT NULL,
  `rata_rata_kelas6_semester1` double NOT NULL,
  `rapot_kelas6_semester2` varchar(255) NOT NULL,
  `nilai_b_indo_kelas6_semester2` double NOT NULL,
  `nilai_matematika_kelas6_semester2` double NOT NULL,
  `nilai_ipa_kelas6_semester2` double NOT NULL,
  `nilai_b_inggris_kelas6_semester2` double NOT NULL,
  `nilai_pai_kelas6_semester2` double NOT NULL,
  `rata_rata_kelas6_semester2` double NOT NULL,
  `rata_rata_keseluruhan` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `affirmation_tracks`
--

INSERT INTO `affirmation_tracks` (`id`, `user_id`, `skl_ijazah`, `kartu_keluarga`, `dokumen_pendukung`, `rapot_kelas6_semester1`, `nilai_b_indo_kelas6_semester1`, `nilai_matematika_kelas6_semester1`, `nilai_ipa_kelas6_semester1`, `nilai_b_inggris_kelas6_semester1`, `nilai_pai_kelas6_semester1`, `rata_rata_kelas6_semester1`, `rapot_kelas6_semester2`, `nilai_b_indo_kelas6_semester2`, `nilai_matematika_kelas6_semester2`, `nilai_ipa_kelas6_semester2`, `nilai_b_inggris_kelas6_semester2`, `nilai_pai_kelas6_semester2`, `rata_rata_kelas6_semester2`, `rata_rata_keseluruhan`, `created_at`, `updated_at`) VALUES
(1, 7, 'aa', 'a', 'a', 'a', 1, 1, 1, 1, 1, 1, 'a', 1, 1, 1, 1, 1, 1, 1, NULL, NULL),
(4, 16, 'uploads/afirmasi/xbRQB0K36kWs9fZKG4BFJi7lY4n4pmlv22NXsdtq.png', 'uploads/afirmasi/3OmJUaQAMOgqZDZfM4TnIzsOBzdtQLmfa1UcCh9A.png', 'uploads/afirmasi/z108dgSuEWfiH7v8tZ20QR9SrPS1BGLS9N1f0BWF.png', 'uploads/afirmasi/TBR1mpHGB7FZmAnoMOz8HnbH6XVeAeUcipVHiZAx.png', 1, 1, 1, 1, 1, 1, 'uploads/afirmasi/Rfe15dvmq76uTFxCsFkBFsD5fAvsPP8oXeCQkfQt.png', 4, 2, 2, 2, 2, 2.4, 1.7, '2025-07-07 07:47:40', '2025-07-07 07:51:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `document_statuses`
--

CREATE TABLE `document_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_type` varchar(255) NOT NULL,
  `pendaftaran_id` bigint(20) UNSIGNED NOT NULL,
  `jalur` enum('Prestasi','Afirmasi','Domisili') NOT NULL,
  `status` enum('Lulus Berkas','Tidak Lulus Berkas') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `document_statuses`
--

INSERT INTO `document_statuses` (`id`, `pendaftaran_type`, `pendaftaran_id`, `jalur`, `status`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\AffirmationTrack', 1, 'Afirmasi', 'Lulus Berkas', NULL, '2025-07-14 03:55:46'),
(2, 'App\\Models\\AchievementTrack', 1, 'Prestasi', 'Lulus Berkas', '2025-07-04 06:18:01', '2025-07-04 06:18:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domicile_tracks`
--

CREATE TABLE `domicile_tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skl_ijazah` varchar(255) NOT NULL,
  `kartu_keluarga` varchar(255) NOT NULL,
  `dokumen_pendukung` varchar(255) NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `jarak_km` decimal(8,2) NOT NULL,
  `rapot_kelas6_semester1` varchar(255) NOT NULL,
  `nilai_b_indo_kelas6_semester1` double NOT NULL,
  `nilai_matematika_kelas6_semester1` double NOT NULL,
  `nilai_ipa_kelas6_semester1` double NOT NULL,
  `nilai_b_inggris_kelas6_semester1` double NOT NULL,
  `nilai_pai_kelas6_semester1` double NOT NULL,
  `rata_rata_kelas6_semester1` double NOT NULL,
  `rapot_kelas6_semester2` varchar(255) NOT NULL,
  `nilai_b_indo_kelas6_semester2` double NOT NULL,
  `nilai_matematika_kelas6_semester2` double NOT NULL,
  `nilai_ipa_kelas6_semester2` double NOT NULL,
  `nilai_b_inggris_kelas6_semester2` double NOT NULL,
  `nilai_pai_kelas6_semester2` double NOT NULL,
  `rata_rata_kelas6_semester2` double NOT NULL,
  `rata_rata_keseluruhan` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `domicile_tracks`
--

INSERT INTO `domicile_tracks` (`id`, `user_id`, `skl_ijazah`, `kartu_keluarga`, `dokumen_pendukung`, `latitude`, `longitude`, `jarak_km`, `rapot_kelas6_semester1`, `nilai_b_indo_kelas6_semester1`, `nilai_matematika_kelas6_semester1`, `nilai_ipa_kelas6_semester1`, `nilai_b_inggris_kelas6_semester1`, `nilai_pai_kelas6_semester1`, `rata_rata_kelas6_semester1`, `rapot_kelas6_semester2`, `nilai_b_indo_kelas6_semester2`, `nilai_matematika_kelas6_semester2`, `nilai_ipa_kelas6_semester2`, `nilai_b_inggris_kelas6_semester2`, `nilai_pai_kelas6_semester2`, `rata_rata_kelas6_semester2`, `rata_rata_keseluruhan`, `created_at`, `updated_at`) VALUES
(2, 16, 'uploads/domisili/PIhh4aKevTMRReTvsfhzx10UFyAPztYHgAL0MoPL.png', 'uploads/domisili/1LtYANz27ctsVfer8eX9NLbrCnhpEI6uLr4YxuG5.png', 'uploads/domisili/T1pU2WkspjBfSkYiy7Dy45D8s06ietwuEPP5S5wX.png', -6.9126261, 110.6592785, 12287.30, 'uploads/domisili/hwgmdc1jzvqJN2iRiCyLxeKC1io4hn9rDhrFMO6V.png', 1, 1, 1, 1, 1, 1, 'uploads/domisili/gpXWEa8oprCkIRV2Sv5AScDC0YK60xhek7pp3VZN.png', 1, 1, 1, 5, 1, 1.8, 1.4, '2025-07-08 05:41:06', '2025-07-08 05:53:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `faqs`
--

INSERT INTO `faqs` (`id`, `pertanyaan`, `jawaban`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'Kapan waktu pendaftaran PPDB dibuka????', 'Pendaftaran PPDB SMPN Maju Jaya dibuka mulai tanggal 10 Juni hingga 30 Juni 2025. Silakan cek menu informasi atau pengumuman di halaman utama secara berkala.', 1, '2025-07-09 07:55:13', '2025-07-14 03:47:11'),
(4, 'Apa saja jalur yang tersedia dalam PPDB tahun ini?', 'Terdapat beberapa jalur yang dapat diikuti, yaitu Jalur Afirmasi, Jalur Prestasi, Jalur Domisili.', 1, '2025-07-09 07:55:32', '2025-07-09 07:55:32'),
(5, 'Apakah bisa memilih lebih dari satu jalur pendaftaran?', 'Tidak. Setiap siswa hanya diperbolehkan memilih satu jalur pendaftaran. Pastikan memilih jalur yang paling sesuai dengan kondisi dan berkas yang dimiliki.', 1, '2025-07-09 07:55:47', '2025-07-09 07:55:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guardians`
--

CREATE TABLE `guardians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `pekerjaan_wali` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `message_statuses`
--

CREATE TABLE `message_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jalur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jalur_type` varchar(255) DEFAULT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `sekolah` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `response` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `message_statuses`
--

INSERT INTO `message_statuses` (`id`, `user_id`, `jalur_id`, `jalur_type`, `nama_siswa`, `no_hp`, `sekolah`, `status`, `response`, `created_at`, `updated_at`) VALUES
(11, 7, 1, 'afirmasi', 'Siswa Test', '081515815175', 'SMPN 1 Maju Jayaa', 'sent', '{\"detail\":\"success! message in queue\",\"id\":[\"106450186\"],\"process\":\"pending\",\"quota\":{\"081515815179\":{\"details\":\"deduced from total quota\",\"quota\":990,\"remaining\":989,\"used\":1}},\"requestid\":27397427,\"status\":true,\"target\":[\"6281515815175\"]}', '2025-07-03 05:57:13', '2025-07-03 05:57:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_13_032520_create_permission_tables', 2),
(5, '2025_06_13_040027_create_students_table', 3),
(6, '2025_06_13_062932_create_parent_students_table', 3),
(7, '2025_06_13_063856_create_guardians_table', 3),
(8, '2025_06_13_070225_create_achievement_tracks_table', 4),
(9, '2025_06_13_075015_create_affirmation_tracks_table', 5),
(10, '2025_06_13_081051_create_domicile_tracks_table', 6),
(11, '2025_06_13_084457_create_registration_statuses_table', 6),
(12, '2025_06_13_085609_create_document_statuses_table', 7),
(13, '2025_06_13_132331_create_message_statuses_table', 8),
(14, '2025_06_14_125026_create_admission_tracks_table', 9),
(15, '2025_06_14_130143_create_schools_table', 10),
(16, '2025_06_14_130601_create_schools_table', 11),
(17, '2025_06_14_131053_create_timelines_table', 12),
(18, '2025_06_15_025045_create_faqs_table', 13),
(19, '2025_06_15_144426_create_sliders_table', 13),
(20, '2025_06_15_144858_create_settings_table', 13),
(21, '2025_06_30_122638_create_videos_table', 14),
(22, '2025_07_02_140002_create_personal_access_tokens_table', 15),
(23, '2025_07_02_151002_add_jalur_fields_to_message_statuses_table', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 6),
(6, 'App\\Models\\User', 7),
(6, 'App\\Models\\User', 14),
(6, 'App\\Models\\User', 15),
(6, 'App\\Models\\User', 16),
(8, 'App\\Models\\User', 2),
(9, 'App\\Models\\User', 10),
(10, 'App\\Models\\User', 11),
(11, 'App\\Models\\User', 12),
(12, 'App\\Models\\User', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parent_students`
--

CREATE TABLE `parent_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `parent_students`
--

INSERT INTO `parent_students` (`id`, `student_id`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 1, 'a', 'a', 'a', 'a', 'a', '081515815175', NULL, NULL),
(2, 2, 'test', 'test', 'test', 'test', 'teste', '081515815174', '2025-07-05 11:25:57', '2025-07-05 11:25:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registration_statuses`
--

CREATE TABLE `registration_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_type` varchar(255) NOT NULL,
  `pendaftaran_id` bigint(20) UNSIGNED NOT NULL,
  `jalur` enum('Prestasi','Afirmasi','Domisili') NOT NULL,
  `status` enum('Lulus','Tidak Lulus') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `registration_statuses`
--

INSERT INTO `registration_statuses` (`id`, `pendaftaran_type`, `pendaftaran_id`, `jalur`, `status`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\AffirmationTrack', 1, 'Afirmasi', 'Lulus', '2025-07-03 05:57:01', '2025-07-03 05:57:01'),
(3, 'App\\Models\\AchievementTrack', 1, 'Prestasi', 'Tidak Lulus', '2025-07-14 03:53:52', '2025-07-14 03:54:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'web', '2025-06-26 20:45:05', '2025-06-26 20:45:05'),
(2, 'admin SMPN 1 Maju Jaya', 'web', '2025-06-26 20:45:05', '2025-06-26 20:45:05'),
(3, 'pemeriksa prestasi SMPN 1 Maju Jaya', 'web', '2025-06-26 20:45:05', '2025-06-26 20:45:05'),
(4, 'pemeriksa afirmasi SMPN 1 Maju Jaya', 'web', '2025-06-26 20:45:05', '2025-06-26 20:45:05'),
(5, 'pemeriksa domisili SMPN 1 Maju Jaya', 'web', '2025-06-26 20:45:05', '2025-06-26 20:45:05'),
(6, 'siswa', 'web', '2025-06-26 21:16:58', '2025-06-26 21:16:58'),
(7, 'admin domisili SMPN 1 Maju Jayaa', 'web', '2025-06-28 04:36:48', '2025-06-28 04:36:48'),
(8, 'admin prestasi SMPN 1 Maju Jayaa', 'web', '2025-06-28 04:38:33', '2025-06-28 04:38:33'),
(9, 'admin afirmasi SMPN 1 Maju Jayaa', 'web', '2025-06-28 22:33:55', '2025-06-28 22:33:55'),
(10, 'pemeriksa afirmasi SMPN 1 Maju Jayaa', 'web', '2025-06-28 22:34:19', '2025-06-28 22:34:19'),
(11, 'pemeriksa prestasi SMPN 1 Maju Jayaa', 'web', '2025-07-04 06:15:50', '2025-07-04 06:15:50'),
(12, 'pemeriksa domisili SMPN 1 Maju Jayaa', 'web', '2025-07-04 06:16:11', '2025-07-04 06:16:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` text DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `schools`
--

INSERT INTO `schools` (`id`, `nama_sekolah`, `alamat_sekolah`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(2, 'SMPN 1 Maju Jayaa', 'Jl. Maju Jaya', -6.9126300, 110.6592776, '2025-06-28 03:14:08', '2025-06-28 03:14:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2vSMr0gYKzpNFq5yxOxZutbx2gDnm64vhhysGTrR', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYnRIajZxZU1jVjBIN1I4QnR4U2w2cncweVJpVEdEWEVESVJSREpGZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvYWRtaW4tY2hhcnQtZGF0YSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1752653262);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_footer` varchar(255) DEFAULT NULL,
  `judul_footer` text DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `gambar_header` varchar(255) DEFAULT NULL,
  `gambar_login` varchar(255) DEFAULT NULL,
  `gambar_register` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `gambar_footer`, `judul_footer`, `alamat`, `email`, `hp`, `copyright`, `gambar_header`, `gambar_login`, `gambar_register`, `created_at`, `updated_at`) VALUES
(4, 'setting/eMWbduMB5d8eCZIPlDB7mtoK2SnBwGtT9bnWyDEO.png', 'Belajar Web PPDB', 'demak\r\njawa tengah', 'admin@ppdb.com', '081515815176', '© 2025 SMPN Maju Jaya', 'setting/CYrOO67zJiTR2VIJ6vHxXVHa0uJN7Hfs7vlWUVrP.png', 'setting/GiIXJcLVkuzpurr23AqnXARInFBL2He37lN9qdMk.png', 'setting/mhhe4RhPEldivlCB8xkBzrm9i0UVTeGZXMXJJdXu.png', '2025-06-30 05:15:34', '2025-06-30 05:15:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `gambar`, `judul`, `subtitle`, `deskripsi`, `nomor`, `created_at`, `updated_at`) VALUES
(3, '35tuDSBRSInKejWyrlyagl7bvg2zufFDq5xJq1o9.png', 'Judul Slider 1 Edit', 'Ini adalah slider nomor 1', 'Silakan mendaftar', '1', '2025-07-11 09:49:11', '2025-07-14 03:47:29'),
(4, 'yEb6eADttPo514wb2rtowKn8ojG54bHJrih2zafg.png', 'Judul Slider 2', 'Ini adalah slider nomor 2', 'Ini adalah slider nomor 2', '2', '2025-07-11 09:51:48', '2025-07-11 09:51:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `no_kk` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `alamat_asal_sekolah` text DEFAULT NULL,
  `pas_foto` varchar(255) DEFAULT NULL,
  `tinggal_dengan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nisn`, `nik`, `no_kk`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `user_id`, `agama`, `alamat`, `kecamatan`, `kelurahan`, `asal_sekolah`, `alamat_asal_sekolah`, `pas_foto`, `tinggal_dengan`, `created_at`, `updated_at`) VALUES
(1, '138913813813', '138913813813', '138913813813', 'Laki-laki', '2025-07-03', 'a', 7, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', NULL, NULL),
(2, '18371371831', '18371371831', '18371371831', 'Perempuan', '2025-07-06', 'test', 16, 'Islam', 'Alamat resmi', 'Resmi', 'test', 'test', 'test', 'siswa/dep2Ak8SQJ8CbLaxIiueYdxEHivTgnc0FGQLOb8Z.png', 'Orang Tua', '2025-07-05 11:25:57', '2025-07-05 11:26:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timelines`
--

CREATE TABLE `timelines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `timelines`
--

INSERT INTO `timelines` (`id`, `tanggal`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, '23 April - 23 Mei', 'Pendaftaran', 'Pendaftaran sudah dibuka', '2025-07-14 03:48:03', '2025-07-14 03:48:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sekolah_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `sekolah_id`) VALUES
(1, 'Super Admin', 'superadmin@example.com', NULL, '$2y$12$sVolcOKgk23db.//Rf3drO7nrDpX4a93s6r2RSa.STFyLZnjWb43i', NULL, '2025-06-26 20:54:09', '2025-06-26 20:54:09', NULL),
(2, 'Admin - SMPN 1 Maju Jaya', 'admin.1@example.com', NULL, '$2y$12$umu4JooV9xVsLY0Uy5itTOhH/.MU2Hnr6XN512sCgxQA4tGOXrKMq', NULL, '2025-06-26 20:54:10', '2025-07-03 06:53:38', 2),
(6, 'Siswa 1', 'siswa@mail.com', NULL, '$2y$12$K2brnAn1xsORCe8O5xhzrOiIx96Sn0rYOmBha7gyzBgR8wLTGW5hm', NULL, '2025-06-27 04:34:01', '2025-06-27 04:34:01', 1),
(7, 'Siswa Test', 'siswa@gmail.com', NULL, '$2y$12$5giPPRi60LA4uAp8aAFIrOqumKnqbB4pFBDHHlag1lTRuPEWm0VLO', NULL, '2025-06-27 04:35:09', '2025-06-27 04:35:09', 2),
(10, 'admin 2', 'admin2@mail.com', NULL, '$2y$12$bs/hVxx6L0WwMHzU7YCAHOqDU3sDHTyi7YWKAOUmPlU0hMAT/9ZLm', NULL, '2025-06-28 22:33:55', '2025-06-28 22:33:55', 2),
(11, 'pemeriksaafirmasi', 'pemeriksaafirmasi@mail.com', NULL, '$2y$12$W3n/QGyfyOup6FVXHxTpfeUdLDHEydQ0QCwD6vCZXgDuU6QwJVr1a', NULL, '2025-07-04 05:27:33', '2025-07-04 05:27:33', 2),
(12, 'pemeriksaprestasi', 'pemeriksaprestasi@mail.com', NULL, '$2y$12$2OMCLDKPn5Mp46Mbfd6.3.XKXsaLRz6aO9tO2FA0ISdtwhFyqniBq', NULL, '2025-07-04 06:15:50', '2025-07-04 06:15:50', 2),
(13, 'pemeriksadomisili', 'pemeriksadomisili@mail.com', NULL, '$2y$12$XYhLKeU75DodKSa.JGofIuzQJqa93Knzxs0Be/yxQMAHvrTE.pfdG', NULL, '2025-07-04 06:16:11', '2025-07-04 06:16:11', 2),
(14, 'Siswa Uji Coba', 'siswaujicoba@mail.com', NULL, '$2y$12$1xTXtd7H.G9/iFelKkXAue1QFX.lqr7vQG4tvJB5coJDVyNG4sEha', NULL, '2025-07-05 10:33:03', '2025-07-05 10:33:03', 2),
(15, 'siswa test', 'tessiswa@mail.com', NULL, '$2y$12$bti6qIGIXnFsn3sUuRCTt.s9MYEZ0oFA6rE2yALjaPMtnjrscE8ca', NULL, '2025-07-05 10:34:18', '2025-07-05 10:34:18', 2),
(16, 'Fatimah', 'fatimah@mail.com', NULL, '$2y$12$LO1RlRPC/fcg5obq.YIxP.qsfCIweg0.xwHH337B2ozx7b.NJL8wK', NULL, '2025-07-05 10:45:13', '2025-07-14 03:50:36', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `title`, `deskripsi`, `image`, `video_url`, `created_at`, `updated_at`) VALUES
(2, 'Cara Mendaftar', 'Berikut adalah cuplikan video yang memaparkan cara dan alur pendaftaran didalam PPDB Online SMPN Maju Jaya', 'sTPBGkJ4Evj8EB27TxkdtUY4w6qqpJ05lwOHaT3S.png', 'https://www.youtube.com/watch?v=toN4yP9QF8A', '2025-07-11 10:09:26', '2025-07-11 10:09:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `achievement_tracks`
--
ALTER TABLE `achievement_tracks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achievement_tracks_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `admission_tracks`
--
ALTER TABLE `admission_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `affirmation_tracks`
--
ALTER TABLE `affirmation_tracks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affirmation_tracks_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `document_statuses`
--
ALTER TABLE `document_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_statuses_pendaftaran_type_pendaftaran_id_index` (`pendaftaran_type`,`pendaftaran_id`);

--
-- Indeks untuk tabel `domicile_tracks`
--
ALTER TABLE `domicile_tracks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domicile_tracks_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guardians_student_id_foreign` (`student_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message_statuses`
--
ALTER TABLE `message_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_statuses_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `parent_students`
--
ALTER TABLE `parent_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_students_student_id_foreign` (`student_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `registration_statuses`
--
ALTER TABLE `registration_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registration_statuses_pendaftaran_type_pendaftaran_id_index` (`pendaftaran_type`,`pendaftaran_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_nisn_unique` (`nisn`),
  ADD UNIQUE KEY `students_nik_unique` (`nik`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `timelines`
--
ALTER TABLE `timelines`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `achievement_tracks`
--
ALTER TABLE `achievement_tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `admission_tracks`
--
ALTER TABLE `admission_tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `affirmation_tracks`
--
ALTER TABLE `affirmation_tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `document_statuses`
--
ALTER TABLE `document_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `domicile_tracks`
--
ALTER TABLE `domicile_tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `message_statuses`
--
ALTER TABLE `message_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `parent_students`
--
ALTER TABLE `parent_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `registration_statuses`
--
ALTER TABLE `registration_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `timelines`
--
ALTER TABLE `timelines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `achievement_tracks`
--
ALTER TABLE `achievement_tracks`
  ADD CONSTRAINT `achievement_tracks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `affirmation_tracks`
--
ALTER TABLE `affirmation_tracks`
  ADD CONSTRAINT `affirmation_tracks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `domicile_tracks`
--
ALTER TABLE `domicile_tracks`
  ADD CONSTRAINT `domicile_tracks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guardians`
--
ALTER TABLE `guardians`
  ADD CONSTRAINT `guardians_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `message_statuses`
--
ALTER TABLE `message_statuses`
  ADD CONSTRAINT `message_statuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `parent_students`
--
ALTER TABLE `parent_students`
  ADD CONSTRAINT `parent_students_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
