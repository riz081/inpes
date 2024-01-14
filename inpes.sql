-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 04:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inpes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `number`, `country_id`, `request_id`, `service_id`, `status_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ramadhani Rasyid', 'ramad0523@gmail.com', '123456789', 1, 1, 2, 1, 'tes', '2023-11-02 14:28:08', '2023-11-02 14:28:08'),
(2, 'Ramadhani Rasyid', 'ramad0523@gmail.com', '123456789', 1, 1, 2, 2, 'tes2', '2023-11-02 14:33:24', '2023-11-02 14:33:24'),
(3, 'Ramadhani Rasyid', 'asd@gmail.com', '123456789', 6, 2, 2, 3, '222', '2023-11-02 14:38:15', '2023-11-02 14:38:15'),
(4, 'Uji dhani', 'test@gmail.com', '123456789', 5, 2, 2, 4, 'asdasd', '2023-11-02 14:38:30', '2023-11-02 14:38:30'),
(5, 'Uji dhani', 'test@gmail.com', '123456789', 17, 1, 2, 1, 'test malam', '2023-11-03 07:16:24', '2023-11-03 07:16:24'),
(6, 'Ramadhani Rasyid', 'admin@gmail.com', '123456789', 81, 2, 2, 1, 'test malam', '2023-11-03 07:16:46', '2023-11-03 07:16:46'),
(7, 'Ramadhani Rasyid', 'ramad0523@gmail.com', '123456789', 18, 1, 2, 1, 'test', '2023-11-03 22:18:29', '2023-11-03 22:18:29'),
(8, 'Ramadhani Rasyid', 'ramad0523@gmail.com', '123456789', 17, 2, 2, 1, 'asdasdsad', '2023-11-03 23:34:32', '2023-11-03 23:34:32'),
(9, 'Jasper Schamberger', 'zmcclure@yahoo.com', '+18706135989', 69, 2, 4, 3, 'Iste ratione atque cupiditate modi eum.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(10, 'Margret Gerlach', 'jailyn.lang@gmail.com', '+12404321876', 17, 2, 3, 3, 'Perspiciatis doloremque accusantium sed explicabo voluptatum.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(11, 'Tom Bogisich', 'timmothy.wehner@boyle.org', '+18324303919', 111, 2, 4, 4, 'Inventore et architecto error perspiciatis.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(12, 'Dr. Ray Kshlerin', 'luz79@turcotte.com', '+17696295294', 16, 1, 4, 4, 'Laudantium eum quia est est.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(13, 'Sibyl Waters', 'cole.shaun@kshlerin.biz', '+13529352937', 35, 2, 4, 2, 'Iste vitae neque cupiditate eveniet autem consequatur.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(14, 'Quinten Parisian', 'huel.margot@pagac.com', '+17028831813', 76, 2, 1, 2, 'Dolor qui voluptas cum.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(15, 'Prof. Jackson Rutherford', 'pouros.amelia@gmail.com', '+18483342449', 8, 1, 3, 3, 'Est nobis nemo delectus.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(16, 'Nat Kassulke', 'carmine41@ryan.com', '+16624015494', 95, 2, 2, 2, 'Totam maxime aut ab.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(17, 'Logan Wiza', 'rbrown@gmail.com', '+19165231882', 60, 1, 2, 3, 'Commodi quo in a facilis voluptas cumque expedita.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(18, 'Dr. Emilia Bahringer I', 'geo32@gmail.com', '+16673014705', 77, 2, 3, 4, 'Nostrum atque vero fugit sed qui ab.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(19, 'Mrs. Maxie Stiedemann', 'leilani.stracke@gmail.com', '+14349778072', 13, 1, 4, 4, 'Harum asperiores commodi animi fugiat quae ut.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(20, 'Kaela Heller', 'cleo24@christiansen.com', '+19528127222', 76, 1, 3, 4, 'Ut non praesentium quidem qui dolorum et et.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(21, 'Monica Koepp DDS', 'viva95@hotmail.com', '+16788856295', 101, 1, 1, 2, 'A a aspernatur vel debitis saepe.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(22, 'Vernon Franecki', 'juston12@hotmail.com', '+18142582431', 112, 2, 3, 4, 'Eum non qui provident.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(23, 'Kenny Schimmel', 'von.richard@hotmail.com', '+12816026914', 20, 1, 3, 1, 'Velit inventore dolorem nesciunt.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(24, 'Amos Metz II', 'skylar25@gmail.com', '+19496711361', 7, 1, 3, 4, 'Qui fugiat est vero et et.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(25, 'Maria Tillman', 'rollin70@goodwin.com', '+16147702204', 121, 2, 3, 1, 'Doloribus impedit sapiente voluptas voluptate.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(26, 'Tate Ankunding', 'arlene03@gmail.com', '+13018528762', 37, 2, 4, 3, 'Et reiciendis non non eos.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(27, 'Mr. Keenan Nitzsche DVM', 'urban89@gmail.com', '+15204187027', 48, 1, 1, 3, 'Accusantium aut tenetur optio repellat et id quia iusto.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(28, 'Prof. Zack Wunsch I', 'nikki.fisher@von.com', '+18067299912', 9, 2, 4, 2, 'Maxime perferendis doloremque facilis sunt ea officiis quae saepe.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(29, 'Annabell Crona', 'clyde99@gmail.com', '+17698825455', 2, 1, 2, 3, 'Non laudantium quasi quidem numquam neque.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(30, 'Alicia Schulist', 'kennedi.bahringer@wisoky.com', '+15742503647', 32, 2, 4, 2, 'Sit quaerat dolorem ut et ut consequuntur.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(31, 'Mrs. Mona Ferry', 'shayne91@gmail.com', '+18784633227', 39, 2, 2, 1, 'Ipsa non laudantium facilis itaque nam sapiente.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(32, 'Mrs. Thalia Corwin PhD', 'maida91@yahoo.com', '+12287700617', 40, 2, 4, 4, 'Labore nemo eaque eum quasi perspiciatis.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(33, 'Mr. Dillon Conroy Jr.', 'monahan.bill@leffler.com', '+17179406668', 57, 2, 2, 4, 'Omnis officiis a saepe labore.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(34, 'Mark Abshire', 'wilkinson.verla@reynolds.biz', '+19376196228', 57, 1, 1, 2, 'Nisi ut quas est distinctio dolor asperiores laudantium cumque.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(35, 'Alexander Mitchell', 'geovany.zboncak@hotmail.com', '+13478874479', 117, 2, 4, 4, 'Et fuga nobis quia.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(36, 'Aletha Schulist PhD', 'kaya.aufderhar@hotmail.com', '+19162600220', 52, 1, 4, 3, 'Autem sequi molestiae saepe est.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(37, 'Adolphus Block', 'clyde.treutel@gmail.com', '+14057924830', 55, 2, 2, 2, 'Qui optio aperiam quos illum natus et est.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(38, 'Easton Bauch', 'volkman.vaughn@kuphal.com', '+17262065459', 5, 2, 3, 1, 'Est tenetur magnam voluptatem cumque fugiat sequi voluptatum.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(39, 'Mr. Blake Hyatt', 'njohnson@waters.biz', '+14132974739', 16, 1, 3, 1, 'Sit quidem id sapiente quis maiores qui.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(40, 'Shanon Gulgowski', 'ejast@gmail.com', '+15858173989', 96, 2, 3, 3, 'Molestiae ut explicabo nostrum aut numquam.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(41, 'Nils Marvin', 'mante.kraig@schaefer.com', '+18207032358', 121, 1, 1, 4, 'Quam officiis corrupti voluptatem a quia sint.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(42, 'Mark Morissette', 'bnicolas@gmail.com', '+13529692579', 84, 1, 3, 2, 'Consequatur aliquid nihil reprehenderit aspernatur numquam quo.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(43, 'Jerrold Conn', 'nelda74@hotmail.com', '+15078886757', 64, 1, 4, 4, 'Accusantium esse hic est voluptatem ex et voluptate.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(44, 'Guiseppe Smith', 'jordon.christiansen@weber.com', '+18567573629', 110, 2, 1, 2, 'Alias ex architecto et possimus recusandae dolorem et.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(45, 'Hermina Wyman', 'ocorkery@yahoo.com', '+16828360168', 123, 1, 2, 3, 'Repellendus consequatur et rerum.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(46, 'Roderick Smith', 'vlockman@yahoo.com', '+13514016904', 41, 1, 4, 1, 'Ipsa voluptate occaecati est corporis.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(47, 'Mrs. Nettie Block II', 'hettinger.cicero@williamson.info', '+16037877381', 91, 2, 1, 1, 'Consequatur molestiae assumenda doloremque doloremque voluptatum.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(48, 'Vickie Muller', 'jayden.mclaughlin@huel.com', '+15745549918', 122, 1, 3, 4, 'Vitae fuga possimus iste sunt nemo laborum.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(49, 'Elaina Renner III', 'eduardo16@batz.biz', '+14809622813', 67, 2, 2, 4, 'Molestiae necessitatibus nisi suscipit soluta officiis eum.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(50, 'Prof. Henderson Hamill DVM', 'ernest.howell@yahoo.com', '+18283884022', 98, 2, 3, 1, 'Qui facere et delectus sit autem culpa.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(51, 'Rocio Stamm', 'ijast@yahoo.com', '+13465505518', 80, 1, 3, 3, 'Deserunt sed qui est ipsam.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(52, 'Aurelio Boehm', 'kattie75@champlin.com', '+17479050495', 55, 1, 2, 1, 'Incidunt qui omnis molestiae accusantium sunt dicta.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(53, 'Mattie Russel', 'emelia.padberg@gmail.com', '+15203699648', 41, 2, 4, 3, 'Molestiae rerum fugit quia ut dicta.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(54, 'Erwin Friesen', 'xschinner@gmail.com', '+19805779918', 9, 2, 1, 1, 'Repellat cum vel est quasi ipsum sed.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(55, 'Demetris Hickle V', 'bogisich.rosalia@yahoo.com', '+18323436091', 64, 2, 1, 4, 'Qui repudiandae ad et vero inventore dicta quia eos.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(56, 'Dr. Roy Bruen DVM', 'bernardo.gutmann@hotmail.com', '+15138063233', 65, 2, 2, 3, 'Ut occaecati commodi repudiandae eligendi minus sit excepturi.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(57, 'Dr. Luciano Skiles', 'dbotsford@gmail.com', '+18055019647', 128, 2, 3, 4, 'Ullam qui aut magnam veritatis.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(58, 'Destiney Heller', 'cmann@kutch.com', '+14586226785', 53, 2, 4, 2, 'Ut ea facilis sint aliquam.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(59, 'Ms. Sallie Kovacek IV', 'river.mccullough@zemlak.com', '+12622377167', 108, 2, 2, 2, 'Voluptate qui aperiam nobis est eveniet molestiae ea autem.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(60, 'Mr. Dayton Stanton', 'ibernhard@gmail.com', '+14178606716', 14, 2, 3, 1, 'Molestiae cupiditate ad consequuntur quidem.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(61, 'Prof. Trisha Stanton', 'leannon.leda@hand.org', '+19288852707', 114, 2, 3, 2, 'Ullam magnam ab cum tempora velit.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(62, 'Jewell Heathcote', 'lia86@hotmail.com', '+18726247005', 96, 2, 2, 4, 'Et et reiciendis qui maiores reprehenderit.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(63, 'Ms. Carole Becker', 'ivy48@gmail.com', '+16692262294', 51, 1, 1, 2, 'Alias cumque tempore incidunt architecto tempora.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(64, 'Geoffrey West Jr.', 'priscilla.jaskolski@klocko.com', '+12703997969', 109, 1, 3, 2, 'Quasi sunt iusto inventore aperiam maiores.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(65, 'Mr. Korey Ward V', 'wdurgan@hotmail.com', '+19164037506', 113, 2, 4, 4, 'Rem repellat iusto aliquid aut expedita eius distinctio.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(66, 'Donato Wunsch', 'marvin.harley@parisian.info', '+13212217273', 118, 1, 4, 1, 'Eos ipsam neque cum et ut maiores voluptas.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(67, 'Shania Jones', 'lgislason@gmail.com', '+16304263239', 76, 1, 3, 1, 'Commodi natus ea optio aut.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(68, 'Heather Leuschke DVM', 'rodrick.jacobson@labadie.com', '+18082362858', 43, 2, 3, 4, 'Facere odit quia quas quia voluptatum quo.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(69, 'Colleen Gorczany', 'althea.cassin@gmail.com', '+14103912655', 10, 2, 4, 3, 'Necessitatibus id cumque est repudiandae voluptatum rerum nisi.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(70, 'Ms. Savanah Kshlerin', 'kozey.abigayle@hotmail.com', '+13255131569', 61, 1, 3, 1, 'Atque at ea ex id.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(71, 'Gunner Herzog', 'nico.konopelski@ebert.net', '+12812500917', 2, 2, 4, 2, 'Sapiente porro dolorem nemo occaecati distinctio veniam ut.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(72, 'Cullen Wolff', 'phyllis14@mueller.biz', '+12536742632', 80, 2, 2, 3, 'Inventore ut sed omnis non harum non beatae.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(73, 'Bryana Jast Sr.', 'brown.magdalen@gmail.com', '+13376042512', 51, 1, 3, 1, 'Iusto nihil sit qui ipsum sit nulla aut.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(74, 'Cesar Corwin', 'tatyana.keeling@yahoo.com', '+18086012105', 32, 1, 2, 4, 'Dolor ut rerum officiis sit sapiente nesciunt.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(75, 'Valentin Strosin', 'xemmerich@auer.com', '+18327520691', 93, 1, 2, 1, 'Earum quod veritatis delectus sed.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(76, 'Dr. Maxine Cummerata', 'rebeka60@abbott.biz', '+19498743052', 63, 2, 3, 3, 'Magnam aut inventore voluptates at fugiat.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(77, 'Miss Deborah Langworth', 'letha12@wunsch.com', '+17134086295', 108, 2, 1, 2, 'Corrupti earum maxime rerum corrupti.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(78, 'Lenna Johnston', 'pearline05@hotmail.com', '+18507425331', 51, 1, 4, 4, 'Consequatur cumque amet id.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(79, 'Wilber Denesik', 'jakayla.gerlach@miller.com', '+15752591369', 95, 1, 3, 4, 'Esse et sed praesentium soluta.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(80, 'Tracy Konopelski', 'rempel.leonor@hirthe.com', '+13475170117', 60, 1, 1, 1, 'Eos praesentium alias vero voluptatem ducimus.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(81, 'Miss Marlene Wiza I', 'lawrence.hills@veum.com', '+19288453168', 112, 2, 4, 3, 'Necessitatibus reiciendis aperiam quia non dolores tenetur maxime.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(82, 'Mr. Jarret Moore DVM', 'nathanial28@lueilwitz.info', '+15753742896', 67, 2, 3, 4, 'Animi odit ipsa tempore voluptatem qui non blanditiis.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(83, 'Mr. Domenico Anderson II', 'lockman.mack@hintz.com', '+16029684078', 38, 1, 4, 1, 'Rem ex deleniti et aut nisi dolor facilis.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(84, 'Ellen Vandervort', 'nkuhlman@hotmail.com', '+19892417463', 123, 1, 4, 4, 'Natus nulla id quo.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(85, 'Emelia Hermiston', 'bergstrom.pink@hotmail.com', '+19707759110', 62, 1, 4, 2, 'Est magni vel quo minima repellat aut distinctio modi.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(86, 'Kenny Nikolaus', 'madie42@wiza.com', '+12393038444', 115, 2, 1, 2, 'Nostrum ea doloribus facilis inventore unde ut autem mollitia.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(87, 'Chelsie Stehr', 'fleta97@ryan.com', '+19186862121', 18, 2, 4, 4, 'Dolor magni deserunt officia tempora iure voluptas.', '2023-11-06 04:36:54', '2023-11-06 04:36:54'),
(88, 'Dr. Ida Kuhn', 'luz95@hotmail.com', '+19515138033', 113, 1, 4, 4, 'Nesciunt nulla vero vitae quidem eos et.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(89, 'Vernon Schuppe', 'raleigh.muller@zieme.info', '+16162459742', 28, 2, 2, 4, 'Consequuntur et modi quis autem.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(90, 'Prof. Oda Turner', 'streich.ricardo@lebsack.com', '+14086239039', 128, 2, 2, 1, 'Velit quidem placeat nesciunt autem.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(91, 'Rosario Friesen', 'walter.april@lynch.org', '+15594004254', 56, 1, 2, 3, 'Eos suscipit cum eos mollitia dolorem ea.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(92, 'Maxime Altenwerth', 'cdibbert@pfeffer.org', '+17327749099', 15, 1, 4, 2, 'Qui est id qui beatae totam.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(93, 'Malachi Hermiston', 'ally01@tremblay.net', '+13315137974', 94, 1, 2, 4, 'Sunt cumque sapiente harum enim.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(94, 'Brett Cruickshank', 'schmidt.hayley@hotmail.com', '+18726854597', 99, 1, 3, 1, 'Quibusdam est at repudiandae omnis.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(95, 'Preston Mosciski PhD', 'wosinski@klocko.com', '+16233140982', 22, 1, 4, 1, 'Laborum quidem laboriosam libero itaque.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(96, 'Marlen Koepp', 'kimberly66@block.com', '+18729593444', 112, 2, 3, 1, 'Reprehenderit cupiditate quos eum repellat hic deleniti sit.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(97, 'Garth Zboncak', 'rwhite@tromp.com', '+17547970041', 62, 2, 3, 3, 'Voluptates doloribus deleniti natus ad.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(98, 'Lexie Roberts', 'kianna86@ratke.biz', '+14588870982', 85, 1, 3, 4, 'Officiis quasi dolores aut repudiandae in voluptates.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(99, 'Prof. Haylie Rogahn Jr.', 'mae.osinski@jenkins.com', '+18126751403', 70, 2, 1, 3, 'Non iusto explicabo harum officiis.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(100, 'Camden O\'Conner V', 'marina.jakubowski@gmail.com', '+15017012720', 55, 2, 2, 4, 'Cumque incidunt vel eos magnam velit.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(101, 'Jessie Walter', 'wilma36@bauch.com', '+13608366022', 17, 1, 2, 2, 'Culpa molestiae vitae odit voluptatum totam soluta.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(102, 'Norbert Hessel', 'yasmin.ondricka@hotmail.com', '+13522697881', 51, 2, 3, 1, 'Dicta aspernatur harum saepe quod suscipit.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(103, 'Prof. Kory McClure DDS', 'darwin.bergstrom@crist.info', '+15675151921', 2, 2, 1, 3, 'Dolores fuga exercitationem nostrum molestiae aut sunt.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(104, 'Miss Oleta Grimes', 'demarco42@breitenberg.com', '+19102172632', 114, 1, 2, 2, 'Voluptatibus eius voluptatum ut labore rerum.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(105, 'Mrs. Krystel Predovic III', 'liliana06@keeling.com', '+17315755973', 6, 1, 3, 4, 'Dignissimos et id consequatur aliquid.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(106, 'Montana Gutmann DVM', 'lizzie.cummings@hotmail.com', '+17262768272', 115, 2, 4, 1, 'Voluptas eveniet fugiat neque sit aliquid magnam.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(107, 'Ollie Shanahan', 'patsy.parisian@yahoo.com', '+12104083907', 69, 1, 1, 3, 'Rerum illum nisi atque ullam incidunt.', '2023-11-06 04:36:55', '2023-11-06 04:36:55'),
(108, 'Stephania Spencer', 'gschulist@gerhold.org', '+17702127846', 124, 2, 4, 4, 'Occaecati est doloremque rerum quam velit laboriosam eos enim.', '2023-11-06 04:36:55', '2023-11-06 04:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(2, 'Åland Islands', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(3, 'Albania', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(4, 'Algeria', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(5, 'American Samoa', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(6, 'Andorra', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(7, 'Angola', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(8, 'Anguilla', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(9, 'Antarctica', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(10, 'Antigua and Barbuda', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(11, 'Argentina', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(12, 'Armenia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(13, 'Aruba', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(14, 'Australia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(15, 'Austria', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(16, 'Azerbaijan', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(17, 'Bahamas', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(18, 'Bahrain', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(19, 'Bangladesh', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(20, 'Barbados', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(21, 'Belarus', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(22, 'Belgium', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(23, 'Belize', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(24, 'Benin', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(25, 'Bermuda', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(26, 'Bhutan', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(27, 'Bolivia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(28, 'Bosnia and Herzegovina', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(29, 'Botswana', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(30, 'Bouvet Island', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(31, 'Brazil', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(32, 'British Indian Ocean Territory', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(33, 'Brunei Darussalam', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(34, 'Bulgaria', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(35, 'Burkina Faso', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(36, 'Burundi', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(37, 'Cambodia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(38, 'Cameroon', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(39, 'Canada', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(40, 'Cape Verde', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(41, 'Cayman Islands', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(42, 'Central African Republic', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(43, 'Chad', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(44, 'Chile', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(45, 'China', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(46, 'Christmas Island', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(47, 'Cocos (Keeling) Islands', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(48, 'Colombia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(49, 'Comoros', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(50, 'Congo', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(51, 'Congo, The Democratic Republic of The', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(52, 'Cook Islands', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(53, 'Costa Rica', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(54, 'Cote D\'ivoire', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(55, 'Croatia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(56, 'Cuba', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(57, 'Cyprus', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(58, 'Czech Republic', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(59, 'Denmark', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(60, 'Djibouti', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(61, 'Dominica', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(62, 'Dominican Republic', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(63, 'Ecuador', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(64, 'Egypt', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(65, 'El Salvador', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(66, 'Equatorial Guinea', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(67, 'Eritrea', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(68, 'Estonia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(69, 'Ethiopia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(70, 'Falkland Islands (Malvinas)', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(71, 'Faroe Islands', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(72, 'Fiji', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(73, 'Finland', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(74, 'France', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(75, 'French Guiana', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(76, 'French Polynesia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(77, 'French Southern Territories', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(78, 'Gabon', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(79, 'Gambia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(80, 'Georgia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(81, 'Germany', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(82, 'Ghana', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(83, 'Gibraltar', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(84, 'Greece', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(85, 'Greenland', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(86, 'Grenada', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(87, 'Guadeloupe', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(88, 'Guam', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(89, 'Guatemala', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(90, 'Guernsey', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(91, 'Guinea', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(92, 'Guinea-bissau', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(93, 'Guyana', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(94, 'Haiti', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(95, 'Heard Island and Mcdonald Islands', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(96, 'Holy See (Vatican City State)', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(97, 'Honduras', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(98, 'Hong Kong', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(99, 'Hungary', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(100, 'Iceland', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(101, 'India', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(102, 'Indonesia', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(103, 'Iran, Islamic Republic of', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(104, 'Iraq', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(105, 'Ireland', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(106, 'Isle of Man', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(107, 'Israel', '2023-11-02 03:40:13', '2023-11-02 03:40:13'),
(108, 'Italy', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(109, 'Jamaica', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(110, 'Japan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(111, 'Jersey', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(112, 'Jordan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(113, 'Kazakhstan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(114, 'Kenya', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(115, 'Kiribati', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(116, 'Korea, Democratic People\'s Republic of', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(117, 'Korea, Republic of', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(118, 'Kuwait', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(119, 'Kyrgyzstan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(120, 'Lao People\'s Democratic Republic', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(121, 'Latvia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(122, 'Lebanon', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(123, 'Lesotho', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(124, 'Liberia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(125, 'Libyan Arab Jamahiriya', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(126, 'Liechtenstein', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(127, 'Lithuania', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(128, 'Luxembourg', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(129, 'Macao', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(130, 'Macedonia, The Former Yugoslav Republic of', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(131, 'Madagascar', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(132, 'Malawi', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(133, 'Malaysia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(134, 'Maldives', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(135, 'Mali', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(136, 'Malta', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(137, 'Marshall Islands', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(138, 'Martinique', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(139, 'Mauritania', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(140, 'Mauritius', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(141, 'Mayotte', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(142, 'Mexico', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(143, 'Micronesia, Federated States of', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(144, 'Moldova, Republic of', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(145, 'Monaco', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(146, 'Mongolia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(147, 'Montenegro', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(148, 'Montserrat', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(149, 'Morocco', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(150, 'Mozambique', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(151, 'Myanmar', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(152, 'Namibia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(153, 'Nauru', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(154, 'Nepal', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(155, 'Netherlands', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(156, 'Netherlands Antilles', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(157, 'New Caledonia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(158, 'New Zealand', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(159, 'Nicaragua', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(160, 'Niger', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(161, 'Nigeria', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(162, 'Niue', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(163, 'Norfolk Island', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(164, 'Northern Mariana Islands', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(165, 'Norway', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(166, 'Oman', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(167, 'Pakistan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(168, 'Palau', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(169, 'Palestinian Territory, Occupied', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(170, 'Panama', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(171, 'Papua New Guinea', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(172, 'Paraguay', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(173, 'Peru', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(174, 'Philippines', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(175, 'Pitcairn', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(176, 'Poland', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(177, 'Portugal', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(178, 'Puerto Rico', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(179, 'Qatar', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(180, 'Reunion', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(181, 'Romania', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(182, 'Russian Federation', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(183, 'Rwanda', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(184, 'Saint Helena', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(185, 'Saint Kitts and Nevis', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(186, 'Saint Lucia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(187, 'Saint Pierre and Miquelon', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(188, 'Saint Vincent and The Grenadines', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(189, 'Samoa', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(190, 'San Marino', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(191, 'Sao Tome and Principe', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(192, 'Saudi Arabia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(193, 'Senegal', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(194, 'Serbia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(195, 'Seychelles', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(196, 'Sierra Leone', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(197, 'Singapore', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(198, 'Slovakia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(199, 'Slovenia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(200, 'Solomon Islands', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(201, 'Somalia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(202, 'South Africa', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(203, 'South Georgia and The South Sandwich Islands', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(204, 'Spain', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(205, 'Sri Lanka', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(206, 'Sudan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(207, 'Suriname', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(208, 'Svalbard and Jan Mayen', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(209, 'Swaziland', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(210, 'Sweden', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(211, 'Switzerland', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(212, 'Syrian Arab Republic', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(213, 'Taiwan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(214, 'Tajikistan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(215, 'Tanzania, United Republic of', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(216, 'Thailand', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(217, 'Timor-leste', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(218, 'Togo', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(219, 'Tokelau', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(220, 'Tonga', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(221, 'Trinidad and Tobago', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(222, 'Tunisia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(223, 'Turkey', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(224, 'Turkmenistan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(225, 'Turks and Caicos Islands', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(226, 'Tuvalu', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(227, 'Uganda', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(228, 'Ukraine', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(229, 'United Arab Emirates', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(230, 'United Kingdom', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(231, 'United States', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(232, 'United States Minor Outlying Islands', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(233, 'Uruguay', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(234, 'Uzbekistan', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(235, 'Vanuatu', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(236, 'Venezuela', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(237, 'Viet Nam', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(238, 'Virgin Islands, British', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(239, 'Virgin Islands, U.S.', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(240, 'Wallis and Futuna', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(241, 'Western Sahara', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(242, 'Yemen', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(243, 'Zambia', '2023-11-02 03:40:14', '2023-11-02 03:40:14'),
(244, 'Zimbabwe', '2023-11-02 03:40:14', '2023-11-02 03:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_01_070618_create_countries_table', 1),
(6, '2023_11_01_070842_create_services_table', 1),
(7, '2023_11_01_071017_create_request_table', 1),
(8, '2023_11_02_065940_create_bookings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `request`, `created_at`, `updated_at`) VALUES
(1, 'Individu', '2023-11-02 03:40:27', '2023-11-02 03:40:27'),
(2, 'Perusahaan', '2023-11-02 03:40:27', '2023-11-02 03:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `created_at`, `updated_at`) VALUES
(1, 'Konsultasi Hukum', '2023-11-02 03:40:38', '2023-11-02 03:40:38'),
(2, 'Pengurusan Visa', '2023-11-02 03:40:38', '2023-11-02 03:40:38'),
(3, 'Ekspor', '2023-11-02 03:40:38', '2023-11-02 03:40:38'),
(4, 'Katering', '2023-11-02 03:40:38', '2023-11-02 03:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`) VALUES
(1, 'Pengajuan'),
(2, 'Proses'),
(3, 'Selesai'),
(4, 'Batal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `status` (`status_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
