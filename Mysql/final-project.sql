-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 12:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbail_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `author_name`, `author_img`, `date`, `details`, `thumbail`, `thumbail_url`, `tag`, `created_at`, `updated_at`) VALUES
(11, 13, 'Lorem Ipsum is simply dummy text of the printing', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'Thumbail-63a9325e7c065.jpg', 'images/Blogs-Thumbail/Thumbail-63a9325e7c065.jpg', '[{\"value\":\"bangladesh\"},{\"value\":\"Travel\"}]', '2022-12-25 23:34:22', '2022-12-25 23:34:22'),
(12, 13, 'It is a long established fact that a reader will be distracted', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Thumbail-63a932ed14ea7.jpg', 'images/Blogs-Thumbail/Thumbail-63a932ed14ea7.jpg', '[{\"value\":\"usa\"},{\"value\":\"Travel\"}]', '2022-12-25 23:36:45', '2022-12-25 23:36:45'),
(18, 13, 'There are many variations of passages of Lorem Ipsum available', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t&nbsp;slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'Thumbail-63a9364735077.jpg', 'images/Blogs-Thumbail/Thumbail-63a9364735077.jpg', '[{\"value\":\"pakistan\"}]', '2022-12-25 23:51:03', '2022-12-25 23:51:03'),
(19, 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Thumbail-63a936e28a53f.jpg', 'images/Blogs-Thumbail/Thumbail-63a936e28a53f.jpg', '[{\"value\":\"beauty\"}]', '2022-12-25 23:53:38', '2022-12-25 23:53:38'),
(20, 14, 'Why do we use it?', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Thumbail-63a9374dce2a7.jpg', 'images/Blogs-Thumbail/Thumbail-63a9374dce2a7.jpg', '[{\"value\":\"beauty\"}]', '2022-12-25 23:55:25', '2022-12-25 23:55:25'),
(21, 14, 'Where can I get some?', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'Thumbail-63a93789e251a.jpg', 'images/Blogs-Thumbail/Thumbail-63a93789e251a.jpg', '[{\"value\":\"beauty\"}]', '2022-12-25 23:56:25', '2022-12-25 23:56:47'),
(22, 15, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', 'Thumbail-63a938460ef9a.jpg', 'images/Blogs-Thumbail/Thumbail-63a938460ef9a.jpg', '[{\"value\":\"lifestyle\"},{\"value\":\"healty life\"}]', '2022-12-25 23:59:34', '2022-12-25 23:59:34'),
(23, 15, '1914 translation by H. Rackham', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 'Thumbail-63a9395ddcfdd.jpg', 'images/Blogs-Thumbail/Thumbail-63a9395ddcfdd.jpg', '[{\"value\":\"lifestyle\"}]', '2022-12-26 00:04:13', '2022-12-26 00:04:13'),
(24, 15, 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', 'Thumbail-63a9399fbe6e3.jpg', 'images/Blogs-Thumbail/Thumbail-63a9399fbe6e3.jpg', '[{\"value\":\"lifestyle\"}]', '2022-12-26 00:05:19', '2022-12-26 00:05:19'),
(25, 16, '1914 translation by H. Rackham', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', 'Thumbail-63a93a09b9243.jpg', 'images/Blogs-Thumbail/Thumbail-63a93a09b9243.jpg', '[{\"value\":\"fashion\"}]', '2022-12-26 00:07:05', '2022-12-26 00:07:05'),
(26, 17, '1914 translation by H. Rackham', 'zabir', 'images/profile/63a184dc5dcf5.jpg', NULL, '<p>\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p><p><br></p>', 'Thumbail-63a93a535bfd3.jpg', 'images/Blogs-Thumbail/Thumbail-63a93a535bfd3.jpg', '[{\"value\":\"features\"}]', '2022-12-26 00:08:19', '2022-12-26 00:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_side` int(11) DEFAULT NULL,
  `right_side` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `left_side`, `right_side`, `created_at`, `updated_at`) VALUES
(13, 'Travel', 0, 2, '2022-12-22 00:45:21', '2022-12-22 08:26:55'),
(14, 'Beauty', 0, 2, '2022-12-22 00:45:36', '2022-12-22 08:09:42'),
(15, 'Lifestyle', 1, 0, '2022-12-22 00:45:59', '2022-12-22 08:13:14'),
(16, 'Fashion', 1, NULL, '2022-12-22 08:26:14', '2022-12-22 08:26:14'),
(17, 'Features', NULL, 2, '2022-12-22 08:26:36', '2022-12-22 08:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_12_19_054824_create_permission_tables', 1),
(11, '2022_12_21_092125_create_socials_table', 2),
(14, '2022_12_22_054152_create_categories_table', 3),
(15, '2022_12_24_051231_create_blogs_table', 4),
(16, '2022_12_24_051952_create_multi_images_table', 4),
(17, '2022_12_29_091040_create_subscribes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `multi_Image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multi_Image_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `blog_id`, `multi_Image`, `multi_Image_url`, `created_at`, `updated_at`) VALUES
(30, 11, 'Gallery-63a9325e8b79a.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9325e8b79a.jpg', '2022-12-25 23:34:22', '2022-12-25 23:34:22'),
(31, 11, 'Gallery-63a9325e8e0fe.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9325e8e0fe.jpg', '2022-12-25 23:34:22', '2022-12-25 23:34:22'),
(32, 11, 'Gallery-63a9325e8f961.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9325e8f961.jpg', '2022-12-25 23:34:22', '2022-12-25 23:34:22'),
(33, 12, 'Gallery-63a932ed19128.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a932ed19128.jpg', '2022-12-25 23:36:45', '2022-12-25 23:36:45'),
(34, 12, 'Gallery-63a932ed1afbf.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a932ed1afbf.jpg', '2022-12-25 23:36:45', '2022-12-25 23:36:45'),
(35, 12, 'Gallery-63a932ed1cf65.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a932ed1cf65.jpg', '2022-12-25 23:36:45', '2022-12-25 23:36:45'),
(45, 18, 'Gallery-63a936473a1c5.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a936473a1c5.jpg', '2022-12-25 23:51:03', '2022-12-25 23:51:03'),
(46, 19, 'Gallery-63a936e29062f.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a936e29062f.jpg', '2022-12-25 23:53:38', '2022-12-25 23:53:38'),
(47, 19, 'Gallery-63a936e2920bb.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a936e2920bb.jpg', '2022-12-25 23:53:38', '2022-12-25 23:53:38'),
(48, 20, 'Gallery-63a9374dd45fd.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9374dd45fd.jpg', '2022-12-25 23:55:25', '2022-12-25 23:55:25'),
(49, 20, 'Gallery-63a9374dd77a1.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9374dd77a1.jpg', '2022-12-25 23:55:25', '2022-12-25 23:55:25'),
(50, 21, 'Gallery-63a93789e7933.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a93789e7933.jpg', '2022-12-25 23:56:25', '2022-12-25 23:56:25'),
(51, 21, 'Gallery-63a93789e9504.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a93789e9504.jpg', '2022-12-25 23:56:25', '2022-12-25 23:56:25'),
(52, 22, 'Gallery-63a9384610643.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9384610643.jpg', '2022-12-25 23:59:34', '2022-12-25 23:59:34'),
(53, 23, 'Gallery-63a9395dde883.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9395dde883.jpg', '2022-12-26 00:04:13', '2022-12-26 00:04:13'),
(54, 23, 'Gallery-63a9395de5cf8.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9395de5cf8.jpg', '2022-12-26 00:04:13', '2022-12-26 00:04:13'),
(55, 24, 'Gallery-63a9399fc3eee.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9399fc3eee.jpg', '2022-12-26 00:05:19', '2022-12-26 00:05:19'),
(56, 24, 'Gallery-63a9399fca12d.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a9399fca12d.jpg', '2022-12-26 00:05:19', '2022-12-26 00:05:19'),
(57, 24, 'Gallery-63a9399fcd005.bin', 'images/Blogs-Thumbail/Gallery/Gallery-63a9399fcd005.bin', '2022-12-26 00:05:19', '2022-12-26 00:05:19'),
(58, 25, 'Gallery-63a93a09bf4f9.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a93a09bf4f9.jpg', '2022-12-26 00:07:05', '2022-12-26 00:07:05'),
(59, 25, 'Gallery-63a93a09c2577.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a93a09c2577.jpg', '2022-12-26 00:07:05', '2022-12-26 00:07:05'),
(60, 26, 'Gallery-63a93a53630c9.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a93a53630c9.jpg', '2022-12-26 00:08:19', '2022-12-26 00:08:19'),
(61, 26, 'Gallery-63a93a5368e6e.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a93a5368e6e.jpg', '2022-12-26 00:08:19', '2022-12-26 00:08:19'),
(62, 26, 'Gallery-63a93a536b12c.jpg', 'images/Blogs-Thumbail/Gallery/Gallery-63a93a536b12c.jpg', '2022-12-26 00:08:19', '2022-12-26 00:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-12-20 03:10:56', '2022-12-20 03:10:56'),
(2, 'manager', 'web', '2022-12-20 03:10:56', '2022-12-20 03:10:56'),
(3, 'user', 'web', '2022-12-20 03:10:56', '2022-12-20 03:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `instagram`, `tiktok`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://twitter.com/', 'https://instagram.com/', 'https://tiktok.com/', NULL, '2022-12-21 03:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(2, 'zabiremu', 'zabiremu@gmail.com', '2022-12-29 03:16:46', '2022-12-29 03:16:46'),
(3, 'rakib', 'rakib@gmail.com', '2022-12-29 03:26:43', '2022-12-29 03:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zabir', 'admin@admin.com', 'images/profile/63a184dc5dcf5.jpg', NULL, '$2y$10$pA7BsYQYmQc9cIcFWorXOeTQkow4jFIESyRMaHpbWtctKQ.3R3esK', NULL, '2022-12-20 03:10:56', '2022-12-21 00:39:18'),
(2, 'user', 'user@user.com', NULL, NULL, '$2y$10$7ewO0bQZw3jO0rGPOsggTeznFNZJUP60kdZbV0PFStlViI9gPQQX6', NULL, '2022-12-20 03:10:57', '2022-12-20 03:10:57'),
(3, 'manager', 'manager@manager.com', NULL, NULL, '$2y$10$H7d6Db0ujm8njNSdcoSUwObXYE1UOXxbUkVoGIRGolyZd6PcA2L5K', NULL, '2022-12-20 03:10:57', '2022-12-20 03:10:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `multi_images_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD CONSTRAINT `multi_images_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
