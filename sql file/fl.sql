-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 31 2020 г., 17:56
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fl`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 'Snoop Dogg', '998665256', '2020-07-31 08:54:57', '2020-07-31 08:54:57'),
(2, 'Yokubjonov Mukhammad-Umar', '998998861035', '2020-07-31 08:55:07', '2020-07-31 08:55:07');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` int UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `image`) VALUES
(1, 'gallery/pic1.jpg'),
(2, 'gallery/pic2.jpg'),
(3, 'gallery/pic3.jpg'),
(4, 'gallery/pic4.jpg'),
(5, 'gallery/pic5.jpg'),
(6, 'gallery/pic6.jpg'),
(7, 'gallery/pic7.jpg'),
(8, 'gallery/pic8.jpg'),
(9, 'gallery/pic9.jpg'),
(10, 'gallery/pic10.jpg'),
(11, 'gallery/pic11.jpg'),
(12, 'gallery/pic12.jpg'),
(13, 'gallery/pic13.jpg'),
(14, 'gallery/pic14.jpg'),
(15, 'gallery/pic15.jpg'),
(16, 'gallery/pic16.jpg'),
(17, 'gallery/pic17.jpg'),
(18, 'gallery/pic18.jpg'),
(19, 'gallery/pic19.jpg'),
(20, 'gallery/pic20.jpg'),
(21, 'gallery/pic21.jpg'),
(22, 'gallery/pic22.jpg'),
(23, 'gallery/pic23.jpg'),
(24, 'gallery/pic24.jpg'),
(25, 'gallery/pic25.jpg'),
(26, 'gallery/pic26.jpg'),
(27, 'gallery/pic27.jpg'),
(28, 'gallery/pic28.jpg'),
(29, 'gallery/pic29.jpg'),
(30, 'gallery/pic30.jpg'),
(31, 'gallery/pic31.jpg'),
(32, 'gallery/pic32.jpg'),
(33, 'gallery/pic33.jpg'),
(34, 'gallery/pic34.jpg'),
(35, 'gallery/pic35.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_30_084412_news', 1),
(5, '2020_07_31_093556_galleries', 1),
(6, '2020_07_31_101202_contacts', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `information`) VALUES
(1, 'MTTDA BOLALAR TAʹMINOTI UCHUN TO‘LOVLARNI QAYTA HISOBLASH TO‘G‘RISIDA', 'O‘zbekiston Respublikasi Maktabgacha ta’lim vazirligi sizlarga shuni ma’lum qiladiki, bolalarning MTTda bo‘lgan davri uchun to‘langan to‘lovlarning qayta hisoblanishi 2016 yil 23 avgustdagi №2821 sonli “Maktabgacha ta’lim tashkilotlari va maktab-internatlarda bolalarning ta’minoti uchun to‘lovni amalga oshirish tartibi to‘g‘risidagi Nizom”ga asosan quyidagicha amalga oshiriladi:\n                    — MTTda bolaning ta’minoti uchun olingan to‘lovlar uni ovqatlantirishga yo‘naltiriladi (Nizomning 2-bandi);\n                    — agar bola 3 kundan ko‘p muddat mobaynida MTTga bormagan bo‘lsa, bu davr uchun amalga oshirilgan to‘lov bolalarning MTTda bo‘lishi bo‘yicha kelgusi to‘lovlarni amalga oshirishda inobatga olinadi (Nizomning 13-bandi);'),
(2, 'ERTAK TERAPIYASI BOLADAGI MUAMMOLARNI BARTARAF ETISH USULI SIFATIDA.', 'Ertak terapiyasi nima? Ertak terapiyasi bola idroki uchun murakkab narsalarni unga yengil shaklda etkazish,u bilan ertak yordamida ishonchli aloqa o‘rnatish , unga yaqin kishiga aylanish usullaridan biridir.\n\n                Farzandlar ota-onalaridan nima yaxshi va nima yomonligini sorab organsa, oilada ota-onaning bola bilan muloqoti yolga qoyilgan bo`lsa, bu nafaqat bolalarning ahloqiy qadriyatlarini shakllantiradi, balki bolaning ota-onasiga bo`lgan ishonchini ham oshiradi.'),
(3, 'AUTIZM NIMA ?', 'Bugungi kunda 67 milliondan ortiq autizmli bolalar yashamoqda, 160 nafar bolalardan biri autizm spektri bilan kasallangan.Autizm sindromli bola har xil rivojlanadi va aloqa muammolari, g`ayrioddiy xatti-harakatlari, cheklangan qiziqishlari bilan ajralib turadi. Albert Eynshteyn, Motsart, Charlz Darvin, Isaak Nyutonda ham Autizm belgilari kuzatilgan. Ota-onalar qanday belgi va alomatlarni kuzatishi mumkin? Erta tashxis qo`yish, samarali terapiya va keng qamrovli tibbiy va psixologik reabilitatsiya yordamida bolalar o`zlarining jamiyatdagi imkoniyatlarini amalga oshira oladi. Ota-onalar va mutaxassislarni 20 iyul, dushanba (rus tilida) va 22 iyul chorshanba (o`zbek tilida) soat 18: 05da \"Olaviy\" telekanalida yosh bolalardagi autizmning holatiga bag`ishlangan \"Salomatlik alifbosi\" ko`rsatuvida tomosha qilishga taklif qilamiz.');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','redac','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$uumT.3zexFglwZ6qGATt9.o4HdU9SQ582mFdFvyLxZ2y0CgXfYhHm', '2020-07-31 08:11:06', '2020-07-31 08:11:06'),
(2, 'king', 'redac', 'king@gmail.com', NULL, '$2y$10$BvEc8Pa2TSLSfBfhPcvQAugFxD.KsxF/PK5wMjBf2vX07FLA3TcTm', '2020-07-31 08:11:06', '2020-07-31 08:11:06'),
(3, 'omar', 'user', 'omar@gmail.com', NULL, '$2y$10$hYTzC9oz/RuprSswI4LKMOQEdEmC/2BGuiEtEkp03tDL5kiRQ4B4S', '2020-07-31 08:11:06', '2020-07-31 08:11:06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
