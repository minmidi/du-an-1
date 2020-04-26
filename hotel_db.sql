/*
 Navicat Premium Data Transfer

 Source Server         : Project
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : hotel_db

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 26/04/2020 14:32:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for abouts
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of abouts
-- ----------------------------
INSERT INTO `abouts` VALUES (1, 'Hola Việt Nam', 'Hola VietNam là một trang web blog giới thiệu về nền du lịch, nét đẹp văn hóa và vẻ đẹp của con người dải đất hình chữ S thân yêu. Chúng tôi hoạt động trên phương diện chia sẻ lại những trải nghiệm thực tế nhất đến với du khách cũng như cung cấp những thông tin hữu ích về hành trình và địa điểm của chuyến đi. Du khách có thể dựa vào đó để có thể lựa chọn cho mình một địa điểm đến phù hợp với bản thân và gia đình. Chúng tôi muốn mang đến cho các bạn những trải nghiệm tuyệt vời nhất.', 'gallery578.jpg', 'Cồng ty TNHH Một thành viên Hola Việt Nam được thành lập theo giấy phép số 892/GP-BTTTT ngày 12-3-2010 của Bộ Thông tin và Truyển thông, Quyết địn số 318 QĐ/TCDLVN ngày 29-4-2019 của Tổng Cục du lịch Việt Nam. Công ty Halo là tổ chức hoạt động trên lĩnh vực du lịch, nghệ thuật, văn hóa, đất nước và con người cũng như cung cấp những thông về du lịch hữu ích để giúp du khách có góc nhìn toàn cảnh và có thêm sự lựa chọn cho mỗi chuyến đi. Chúng tôi luôn đề cao sự quan trọng của du lịch đến nước nhà vì điều đó chung tôi luôn mong muốn có thể đóng góp 1 phần công sức vào công cuộc đổi mới ngành du lịch Việt Nam.  Với chức năng, nhiệm vụ đó, công ty Halo của chúng tôi đã và đang giới thiệu đến du khách những mảng sau: Khám phá du lịch Việt Nam thông qua những điểm đến hấp dẫn cũng như những lễ hội truyền thống của Việt Nam, giới thiệu cho du khách về những di sản tại Việt Nam, giới thiệu về nền ẩm thực của Việt Nam, những bài viết mang tính tham khảo dành cho du khách.\r\nLà một công ty du lịch trẻ, nhưng Hola Việt Nam đã nhanh chóng tham gia vào thị trường du lịch, Với hàng nghìn bài viết trải nghiệm về du lịch về đất nước và con người Việt Nam. Công ty Hola Việt Nam đã đầu tư vào chất lượng của những bài viết, nâng cao sự phong phú cho các mảng khác nhau (Blog giới thiệu, mẹo du lịch, Ẩm thực Việt Nam,..). Ngoài hoạt động chuyên môn chính, Công ty Hola của chúng tôi đã phối hợp với một số đơn vị tổ chức khác để đem đến cho du khách một quy trình du lịch khép kín và chất lượng như:Hợp tác với các khu du lịch để du khách có thể đặt phòng tại nơi mình muốn đến với giá cả hợp lý nhất.\r\nHợp tác với các hãng hàng không với nhiều ưu đãi nhất dành cho khách hàng, hợp tác với các công ty lữ hành để giúp quý khách có thể có nhiều sự lựa chọn.\r\nKhông chỉ vậy chúng tôi còn tổ chức một số hoạt động ý nghĩa và được đánh giá cao như: Chương trình tài năng trẻ Việt Nam, cuộc thi ảnh môi trường năm 2019, cuộc thi hành động và bảo vệ môi trường 2019', '0000-00-00 00:00:00', '2020-04-25 20:50:34');

-- ----------------------------
-- Table structure for bookings
-- ----------------------------
DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Việt Nam',
  `arrival_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `aldult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `room_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `bookings_room_type_id_foreign`(`room_type_id`) USING BTREE,
  CONSTRAINT `bookings_room_type_id_foreign` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bookings
-- ----------------------------
INSERT INTO `bookings` VALUES (3, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-05-04', '2020-05-07', 2, 3, 'phòng đôi', 12, '2020-04-25 15:02:06', '2020-04-25 15:02:06');
INSERT INTO `bookings` VALUES (4, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2011-05-01', 2, 3, 'sdfsdfsdfsdfsd', 12, '2020-04-25 15:16:35', '2020-04-25 15:16:35');
INSERT INTO `bookings` VALUES (5, 'Minmin', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-01-01', 1, 3, NULL, 12, '2020-04-25 15:41:39', '2020-04-25 15:41:39');
INSERT INTO `bookings` VALUES (6, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-01-01', 0, 0, 'hôm nay là ngày gì', 12, '2020-04-25 19:44:38', '2020-04-25 19:44:38');
INSERT INTO `bookings` VALUES (7, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-01-01', 6, 0, 'tôi đi cùng gia đình', 12, '2020-04-25 20:42:26', '2020-04-25 20:42:26');
INSERT INTO `bookings` VALUES (8, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-01-01', 0, 0, NULL, 11, '2020-04-26 02:23:38', '2020-04-26 02:23:38');
INSERT INTO `bookings` VALUES (9, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0968411721', 'Việt Nam', '2020-01-01', '2020-01-01', 1, 5, NULL, 11, '2020-04-26 02:36:51', '2020-04-26 02:36:51');
INSERT INTO `bookings` VALUES (10, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-02-01', 2, 6, 'test', 12, '2020-04-26 06:14:50', '2020-04-26 06:14:50');
INSERT INTO `bookings` VALUES (11, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Hoa kỳ', '2020-05-01', '2020-08-01', 1, 4, 'đến vào giờ sáng', 12, '2020-04-26 06:25:05', '2020-04-26 06:25:05');
INSERT INTO `bookings` VALUES (12, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Hoa kỳ', '2020-05-01', '2020-08-01', 1, 4, 'đến vào giờ sáng', 12, '2020-04-26 06:26:57', '2020-04-26 06:26:57');
INSERT INTO `bookings` VALUES (13, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Hoa kỳ', '2020-05-01', '2020-08-01', 1, 4, 'đến vào giờ sáng', 12, '2020-04-26 06:27:06', '2020-04-26 06:27:06');
INSERT INTO `bookings` VALUES (14, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Hoa kỳ', '2020-05-01', '2020-08-01', 1, 4, 'đến vào giờ sáng', 12, '2020-04-26 06:27:41', '2020-04-26 06:27:41');
INSERT INTO `bookings` VALUES (15, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Hoa kỳ', '2020-05-01', '2020-08-01', 1, 4, 'đến vào giờ sáng', 12, '2020-04-26 06:28:12', '2020-04-26 06:28:12');
INSERT INTO `bookings` VALUES (16, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Hoa kỳ', '2020-05-01', '2020-08-01', 1, 4, 'đến vào giờ sáng', 12, '2020-04-26 06:28:28', '2020-04-26 06:28:28');
INSERT INTO `bookings` VALUES (17, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Hoa kỳ', '2020-05-01', '2020-08-01', 1, 4, 'đến vào giờ sáng', 12, '2020-04-26 06:28:46', '2020-04-26 06:28:46');
INSERT INTO `bookings` VALUES (18, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Hoa kỳ', '2020-05-01', '2020-08-01', 1, 4, 'đến vào giờ sáng', 12, '2020-04-26 06:28:52', '2020-04-26 06:28:52');
INSERT INTO `bookings` VALUES (19, 'test', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-01-01', 5, 5, 'sdfd', 13, '2020-04-26 06:30:39', '2020-04-26 06:30:39');
INSERT INTO `bookings` VALUES (20, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-01-01', 0, 0, NULL, 11, '2020-04-26 06:31:42', '2020-04-26 06:31:42');
INSERT INTO `bookings` VALUES (21, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-01-01', 4, 4, '5', 11, '2020-04-26 06:34:22', '2020-04-26 06:34:22');
INSERT INTO `bookings` VALUES (22, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', '0378593254', 'Việt Nam', '2020-01-01', '2020-01-01', 4, 4, '5', 11, '2020-04-26 06:34:25', '2020-04-26 06:34:25');

-- ----------------------------
-- Table structure for client_contacts
-- ----------------------------
DROP TABLE IF EXISTS `client_contacts`;
CREATE TABLE `client_contacts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `messenger` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of client_contacts
-- ----------------------------
INSERT INTO `client_contacts` VALUES (3, 'Lê Trường Giang', 'giangltph09245@fpt.edu.vn', 'tôi muốn biết tại làm sao để có thể đi được', '2020-04-25 20:43:05', '2020-04-25 20:43:05');
INSERT INTO `client_contacts` VALUES (4, 'Lê Trường Giang', 'minmidi25599@gmail.com', 'Tôi muốn đến cùng nhà tôi', '2020-04-26 02:35:06', '2020-04-26 02:35:06');
INSERT INTO `client_contacts` VALUES (5, 'giangltph09245', 'admin@gmail.com', 'tets', '2020-04-26 02:48:06', '2020-04-26 02:48:06');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `galleries_room_type_id_foreign`(`room_type_id`) USING BTREE,
  CONSTRAINT `galleries_room_type_id_foreign` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galleries
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (3, '2020_04_15_062621_create_web_settings_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_04_15_065215_create_user_admins_table', 1);
INSERT INTO `migrations` VALUES (5, '2020_04_15_072327_create_user_customers_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_04_15_072752_create_abouts_table', 1);
INSERT INTO `migrations` VALUES (7, '2020_04_15_072957_create_client_contacts_table', 1);
INSERT INTO `migrations` VALUES (8, '2020_04_15_073117_create_sliders_table', 1);
INSERT INTO `migrations` VALUES (9, '2020_04_15_073839_create_posts_table', 1);
INSERT INTO `migrations` VALUES (10, '2020_04_15_074235_create_services_table', 1);
INSERT INTO `migrations` VALUES (11, '2020_04_15_075023_create_room_types_table', 1);
INSERT INTO `migrations` VALUES (12, '2020_04_15_075214_create_room_services_table', 1);
INSERT INTO `migrations` VALUES (13, '2020_04_15_075559_create_galleries_table', 1);
INSERT INTO `migrations` VALUES (14, '2020_04_15_075721_create_bookings_table', 1);
INSERT INTO `migrations` VALUES (15, '2014_10_12_100000_create_password_resets_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (22, 'Live your myth in Greece', 'live-your-myth-in-greece', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...\r\n\r\nZril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit Mauris non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.\r\nMutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', 'full-slider-225.jpg', 1, '2020-04-19 06:19:41', '2020-04-25 04:41:00');
INSERT INTO `posts` VALUES (25, 'Live your myth in Greece 2', 'live-your-myth-in-greece-2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat 2.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Zril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit Mauris non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. Mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum 2.', 'full-slider-342.jpg', 1, '2020-04-25 04:46:56', '2020-04-25 04:46:56');
INSERT INTO `posts` VALUES (26, 'Live your myth in Greece 3', 'live-your-myth-in-greece-3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat 3.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Zril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit Mauris non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. Mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum 3.', 'full-slider-141.jpg', 1, '2020-04-25 04:48:18', '2020-04-25 04:48:18');
INSERT INTO `posts` VALUES (27, 'Live your myth in Greece 4', 'live-your-myth-in-greece-4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat 4.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Zril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit Mauris non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. Mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum 4.', 'full-slider-164.jpg', 1, '2020-04-25 04:49:46', '2020-04-25 04:49:46');
INSERT INTO `posts` VALUES (28, 'Live your myth in Greece 5', 'live-your-myth-in-greece-5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat 5.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Zril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit Mauris non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. Mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum 5.', 'video_fullscreen44.jpg', 1, '2020-04-25 04:50:21', '2020-04-25 04:50:21');
INSERT INTO `posts` VALUES (29, 'Live your myth in Greece 6', 'live-your-myth-in-greece-6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat 6.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Zril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit Mauris non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. Mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum 6.', 'slider-157.jpg', 0, '2020-04-25 04:51:28', '2020-04-25 04:51:42');
INSERT INTO `posts` VALUES (30, 'tiêu đề fgdggdfg', 'tieu-de-fgdggdfg', 'mô tả ngắn 1', 'dfgdfg', 'gallery78.jpg', 1, '2020-04-25 20:51:08', '2020-04-25 20:51:26');

-- ----------------------------
-- Table structure for room_services
-- ----------------------------
DROP TABLE IF EXISTS `room_services`;
CREATE TABLE `room_services`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `room_services_room_type_id_foreign`(`room_type_id`) USING BTREE,
  CONSTRAINT `room_services_room_type_id_foreign` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of room_services
-- ----------------------------
INSERT INTO `room_services` VALUES (24, 'Wifi', 'dịch vụ mạng', 'dịch vụ mạng', 11, '2020-04-25 18:09:21', '2020-04-25 18:09:21');
INSERT INTO `room_services` VALUES (25, 'Nước nóng', 'Nước tắm', 'Nước tắm', 11, '2020-04-25 18:09:41', '2020-04-25 18:09:41');

-- ----------------------------
-- Table structure for room_types
-- ----------------------------
DROP TABLE IF EXISTS `room_types`;
CREATE TABLE `room_types`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float(10, 2) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of room_types
-- ----------------------------
INSERT INTO `room_types` VALUES (11, 'Phòng đơn', 'phong-don', 'single-room288.jpg', 20.00, 'Phòng được thiết kế tinh tế sang trọng nội thất đầy đủ tiện nghi hiện đại, cửa sổ kính rộng thoáng bao quát toàn cảnh thành phố mang đến cho bạn một không gian thanh bình và dễ chịu sẽ là sự lựa chọn cho những doanh nhân và khách du lịch. Không chỉ vậy chúng tôi còn chú trọng tới chất lượng và dijhc vụ. Với phương châm phục vụ khách hàng một cách tốt nhất và để khách hàng có một kỳ nghỉ thật vui vẻ chúng tôi tin rằng có thể đáp ứng được những yêu cầu của quý khách hàng.', '2020-04-24 15:46:24', '2020-04-25 02:12:41', 'Phòng được thiết kế tinh tế sang trọng nội thất đầy đủ tiện nghi hiện đại, cửa sổ kính rộng thoáng bao quát toàn cảnh thành phố mang đến cho bạn một không gian thanh bình và dễ chịu sẽ là sự lựa chọn cho những doanh nhân và khách du lịch.');
INSERT INTO `room_types` VALUES (12, 'Phòng đôi', 'phong-doi', 'double-room12.jpg', 35.00, 'Phòng được thiết kế tinh tế sang trọng nội thất đầy đủ tiện nghi hiện đại, cửa sổ kính rộng thoáng bao quát toàn cảnh thành phố mang đến cho bạn một không gian thanh bình và dễ chịu sẽ là sự lựa chọn cho những doanh nhân và khách du lịch. Không chỉ vậy chúng tôi còn chú trọng tới chất lượng và dijhc vụ. Với phương châm phục vụ khách hàng một cách tốt nhất và để khách hàng có một kỳ nghỉ thật vui vẻ chúng tôi tin rằng có thể đáp ứng được những yêu cầu của quý khách hàng.', '2020-04-24 15:47:16', '2020-04-24 15:47:16', 'Phòng được thiết kế tinh tế sang trọng nội thất đầy đủ tiện nghi hiện đại, cửa sổ kính rộng thoáng bao quát toàn cảnh thành phố mang đến cho bạn một không gian thanh bình và dễ chịu sẽ là sự lựa chọn cho những doanh nhân và khách du lịch.');
INSERT INTO `room_types` VALUES (13, 'Thương gia', 'phong-thuong-gia', 'deluxe-room69.jpg', 56.00, 'Phòng được thiết kế tinh tế sang trọng nội thất đầy đủ tiện nghi hiện đại, cửa sổ kính rộng thoáng bao quát toàn cảnh thành phố mang đến cho bạn một không gian thanh bình và dễ chịu sẽ là sự lựa chọn cho những doanh nhân và khách du lịch. Không chỉ vậy chúng tôi còn chú trọng tới chất lượng và dijhc vụ. Với phương châm phục vụ khách hàng một cách tốt nhất và để khách hàng có một kỳ nghỉ thật vui vẻ chúng tôi tin rằng có thể đáp ứng được những yêu cầu của quý khách hàng.', '2020-04-24 15:48:50', '2020-04-24 15:50:12', 'Phòng được thiết kế tinh tế sang trọng nội thất đầy đủ tiện nghi hiện đại, cửa sổ kính rộng thoáng bao quát toàn cảnh thành phố mang đến cho bạn một không gian thanh bình và dễ chịu sẽ là sự lựa chọn cho những doanh nhân và khách du lịch. Không chỉ vậy chúng tôi còn chú trọng tới chất lượng và dijhc vụ. Với phương châm phục vụ khách hàng một cách tốt nhất và để khách hàng có một kỳ nghỉ thật vui vẻ chúng tôi tin rằng có thể đáp ứng được những yêu cầu của quý khách hàng.');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'nhà hàng', 'Artboard 1425.png', 'Nhà hàng chúng tôi hân hạnh được phục vụ quý khách hàng với những món ăn ngon và chất lượng nhất', 1, NULL, '2020-04-24 13:48:12');
INSERT INTO `services` VALUES (3, 'Spa - Beauty & Health', 'Artboard 1330.png', 'Nhà hàng chúng tôi có chuỗi spa và dịch vụ chăm sóc sức khỏe tốt nhất và hiện đại nhất', 1, '2020-04-24 09:32:47', '2020-04-24 13:52:19');
INSERT INTO `services` VALUES (4, 'Phòng họp', 'Artboard 1560.png', 'Không lo khi có những sự kiện hội họp, chúng tôi có những phòng họp đạt chất lượng 5 sao', 1, '2020-04-24 09:44:48', '2020-04-24 14:01:01');
INSERT INTO `services` VALUES (5, 'Bể bơi ngời trời', 'Artboard 1291.png', 'Chúng tôi có những bể bơi ngoài trời đạt chất lượng chuẩn quốc tết', 1, '2020-04-24 14:14:09', '2020-04-24 14:15:07');

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES (4, 'hero73.jpg', 1, '2020-04-19 07:22:42', '2020-04-25 03:09:39');
INSERT INTO `sliders` VALUES (5, 'slider-28.jpg', 1, '2020-04-20 06:48:47', '2020-04-25 03:09:54');
INSERT INTO `sliders` VALUES (6, 'slider-354.jpg', 1, '2020-04-21 13:23:01', '2020-04-25 03:10:15');
INSERT INTO `sliders` VALUES (9, 'hero85.jpg', 1, '2020-04-25 20:52:08', '2020-04-25 20:52:08');

-- ----------------------------
-- Table structure for user_admins
-- ----------------------------
DROP TABLE IF EXISTS `user_admins`;
CREATE TABLE `user_admins`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `user_admins_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_admins
-- ----------------------------
INSERT INTO `user_admins` VALUES (4, 'euPCB5uqrgHdvPCUxp0MVmdUtvQDevK9y1DHXLVnjTvQUBsFoffxDaE6nwOx', 'giangltph09245@fpt.edu.vn', 'minmidi', '$2y$10$YDRGf1Hhjfxos16jt.JysOgTuiXzWtX41VeG/46lhHTEwOhznP9B2', '0968411721', '2020-04-17 15:58:42', '2020-04-26 02:34:05');
INSERT INTO `user_admins` VALUES (5, 'qkoFPSJxpLUTWA6XBUdOzvLc5OQVUVzwQrJwk3clep32VfXE3uLpNFX2v2Tj', 'admin@gmail.com', 'admin', '$2y$10$Q4B7Xr/GzrFp83pjJVsWr.HLyfU6KXS8h.amKxL349J2bzwazbbAi', '0378593254', '2020-04-19 04:10:33', '2020-04-19 04:29:58');
INSERT INTO `user_admins` VALUES (7, NULL, 'thienth3@fe.edu.vn', 'GV CNTT', '$2y$10$I6uzN1en2/I0VmdZT4dh9OypjIJyySXB2dNt0S.bXjlokfHKZg.ym', '0969749493', '2020-04-26 07:28:24', '2020-04-26 07:28:24');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- Table structure for web_settings
-- ----------------------------
DROP TABLE IF EXISTS `web_settings`;
CREATE TABLE `web_settings`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotline` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `youtube_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `facebook_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `intro_video_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of web_settings
-- ----------------------------
INSERT INTO `web_settings` VALUES (1, 'Halo Việt Nam', 'Artboard 1-914.png', '0968411721', 'halovietnam@gmail.com', '0378593254', '172, Phạm Văn Đồng, Nha Trang, Khánh Hòa', 'http://google.com/map', 'http://youtube.com.vn', 'http://facebok.com', 'http://youtube.com', 'Hola Travel là một Website du lịch. Chúng tôi mang một xứ mệnh giới thiệu đất nước và con người Việt Nam đến với bạn bè quốc tế.', NULL, '2020-04-24 09:14:11');

SET FOREIGN_KEY_CHECKS = 1;
