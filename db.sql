CREATE TABLE `tbuser` (
  `user_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `tbuser` (`user_name`, `first_name`, `last_name`,  `email`, `password`) VALUES
('drew', 'Drew', 'Moll',  'andrew@moll.com', '$2y$10$PZejg2r7jBB7fa7kVpMGBugsmomAilQm23oyV7.wHjVi.85V1f32u'),
('thom', 'Thom', 'Moll',  'thom@moll.com', '$2y$10$PZejg2r7jBB7fa7kVpMGBugsmomAilQm23oyV7.wHjVi.85V1f32u');
