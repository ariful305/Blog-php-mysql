-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2023 at 09:30 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_post` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `created_at`, `total_post`) VALUES
(1, 'Front-end-development', '2022-08-17 04:08:45', 1),
(2, 'Backend development', '2022-08-17 04:08:45', 0),
(3, 'Laravel', '2022-08-17 04:25:07', 1),
(4, 'Wordpress', '2022-08-17 04:25:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int NOT NULL,
  `posts_title` varchar(255) NOT NULL,
  `posts_content` text NOT NULL,
  `posts_image` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `posts_title`, `posts_content`, `posts_image`, `category_name`, `tag_name`, `author`, `created_at`) VALUES
(61, 'quod nihil animi', 'Quis aut ratione velit temporibus eius aperiam. Maiores ut aut voluptatem officiis consequatur commodi dolor voluptas. Atque quis ducimus ut quas praesentium. Et libero provident qui et. Esse ex exercitationem aut sit est nobis. Est voluptatem non non consequuntur. Velit illo molestiae ipsam et ratione repudiandae. Veritatis et et est rerum. Modi autem et et commodi fugiat quaerat quam tenetur magni. Veniam sit officia quasi quo totam ad minus illum.', 'uploads\\about-us.jpg', 'Backend development', 'blogger', 'admin', '2022-08-18 13:05:06'),
(62, 'quia ipsam sunt', 'Maxime rerum autem et. Quo omnis velit ut occaecati occaecati sed. Sint placeat aut. Amet facere qui et iusto quia. Quia possimus dolorem iusto laudantium iure facere. Qui vel dolores cumque est voluptatibus eum excepturi mollitia ex. Et placeat consequuntur eveniet. Beatae ut laborum aut suscipit ipsa magnam. Corrupti corrupti alias eos tenetur perferendis voluptatem accusamus et. Optio cum culpa illo voluptatibus nulla voluptates molestias. Nam non neque voluptatum exercitationem sint vel error. Id quia nihil aliquam molestias maxime nihil. Eos sed et vitae dignissimos.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'css', 'demo', '2022-08-18 18:22:54'),
(63, 'ut sed corporis', 'Dignissimos blanditiis repellendus in voluptas omnis tenetur. Ipsam a debitis inventore inventore perspiciatis sed. Quo vel occaecati. Omnis repellat sed. In dolore earum sunt deleniti autem cum id. Tempora non velit ipsa. Nihil dolor quia. Aut nam expedita natus autem consequatur aut molestiae quia repellat. Laborum dolorum saepe. Sequi ut qui. Assumenda quia tenetur. Dolores optio consequatur tempora ut aut quasi porro laudantium blanditiis.', 'uploads\\about-us.jpg', 'Laravel', 'html', 'admin', '2022-08-18 03:24:11'),
(64, 'enim asperiores quos', 'Eius est expedita et eius dignissimos harum iste impedit ea. Ullam pariatur est minus animi nobis quasi accusamus possimus. Eos qui suscipit iusto quaerat nihil totam sed. Laboriosam dolores dolores nihil debitis iure ducimus commodi et ullam. Reprehenderit officiis itaque dolore quia aut hic et. Iusto inventore qui nihil voluptates minima. Dolorem saepe provident aut nesciunt error rem occaecati doloremque est. Expedita atque natus autem praesentium et distinctio odio saepe. Inventore soluta et sint exercitationem omnis enim. Culpa dolor mollitia error enim. Incidunt deserunt velit magnam non ut omnis est quas.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'js', 'demo', '2022-08-18 18:47:43'),
(65, 'eum iusto porro', 'Nihil dolorem sit velit. Quis non tempora tempore qui est ducimus exercitationem. Cum aut doloribus dolorum. Quod quos at ipsum a. Velit et quibusdam sit doloribus qui. Magnam saepe id nihil quia fugit explicabo. Libero voluptatem praesentium dolorem neque et enim a et animi. Voluptates rem est voluptatum vel non. Deleniti quod repudiandae ratione ea. Iste quia quae eveniet quaerat ipsam dolorum eum doloremque et. Sint sit ad. Non nostrum odit ad et et corrupti id est.', 'uploads\\about-us.jpg', 'Backend development', 'laravel', 'admin', '2022-08-18 08:50:01'),
(66, 'voluptas quasi quis', 'Harum ut et aliquam in ea nihil voluptas voluptatibus. Totam voluptatem sit voluptatem. Eum iure illum. Et itaque quibusdam eligendi cum adipisci eaque pariatur consequatur quia. Harum sint et et aspernatur magnam neque. Blanditiis nam vel assumenda ipsa optio ad. Delectus eligendi doloremque accusantium voluptas ea saepe quia. Molestias libero aspernatur possimus quaerat ab assumenda. Dolorem accusantium nesciunt at saepe suscipit aut corporis culpa dolore. Dignissimos facilis explicabo sunt veniam non quis aliquid blanditiis. Neque blanditiis laudantium deserunt in. Aspernatur natus praesentium eos sunt fugit magni. Doloribus voluptatem qui.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'mongodb', 'demo', '2022-08-19 01:33:23'),
(67, 'eum et quod', 'Ex et veritatis saepe. Quibusdam esse perferendis provident ut eos aut veritatis. Aspernatur iste minus. Optio consectetur eos vitae harum natus. Quia necessitatibus tenetur dignissimos similique qui rerum eum enim. Iure sit reiciendis facere eaque cumque aspernatur quos dolores. Soluta vel aspernatur sapiente quo dolores. Placeat itaque voluptatem sunt saepe reprehenderit nihil tempora. Eveniet blanditiis occaecati ut aliquam provident eveniet dolorem repellat esse. Maxime repellendus quo. Est facere adipisci nobis sed deserunt provident. Rem ipsum veritatis dolores aliquid. Id enim pariatur.', 'uploads\\about-us.jpg', 'Laravel', 'mysql', 'admin', '2022-08-18 04:13:47'),
(68, 'quia sed delectus', 'Quos facilis dolores aut quibusdam magni reprehenderit itaque ipsam. Recusandae deserunt consequuntur aspernatur. Laborum et consectetur distinctio. Quis qui sed sit porro nihil. Ea cum est. Quaerat ut doloremque tempora praesentium. Non dolore dolor. At cum eum amet quia nobis minus harum rerum. Dolore beatae ut sint minima sunt possimus. Consequatur consequatur eaque numquam pariatur. Quia aut velit corrupti qui unde est laboriosam. Iure dolorum qui.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'node js', 'demo', '2022-08-18 16:02:06'),
(69, 'unde esse animi', 'Quam ullam neque deleniti. Provident aut sunt. Odio veniam sequi qui qui omnis velit quos. Perspiciatis accusantium ut. Illo explicabo porro nam soluta natus sequi. Dignissimos autem sint earum omnis quod cum voluptatum. Qui eum est. Dolore est neque reprehenderit animi ut dolorum officia sapiente. Molestiae eos aut quia. Ipsum dolorum et sunt est. A optio enim.', 'uploads\\about-us.jpg', 'Backend development', 'reat', 'admin', '2022-08-18 05:18:24'),
(70, 'voluptate ut sunt', 'Soluta est accusantium molestiae. Laudantium quae deleniti et. Doloribus ratione id autem dolore quia. Autem quam molestiae. Rerum eum fugiat qui optio. Dicta tenetur maiores aliquid qui. Et doloribus similique iste id voluptatem id qui est. Adipisci eum atque qui voluptatem. Omnis reprehenderit rem rerum natus ullam deleniti dolorem similique eum. Eum qui eius. Et soluta fuga unde et voluptas soluta inventore rerum nemo. Et velit hic ipsum optio modi non corporis. Asperiores labore dolorem.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'vue', 'demo', '2022-08-19 00:21:43'),
(71, 'ad architecto in', 'Id molestiae impedit perferendis vitae necessitatibus ut dolor et pariatur. Id ratione neque. Quia vel neque. Dolore et voluptatibus dicta nobis atque. Itaque sit aut est voluptatem vel ut quidem praesentium. Laudantium et assumenda distinctio illum dolor. Et eveniet eos eum ipsa ut autem dolores et voluptatem. Rerum tenetur illo nihil et. Quis harum minima. Culpa ullam magnam molestiae quia quaerat modi possimus rem.', 'uploads\\about-us.jpg', 'Laravel', 'wordpress', 'admin', '2022-08-19 02:23:37'),
(72, 'temporibus et accusamus', 'Quisquam tenetur tempore ipsum molestiae vero asperiores. Omnis mollitia maxime magnam. Vitae dolor nulla illum aspernatur accusamus perspiciatis facere possimus. Itaque ea incidunt asperiores aperiam illo magnam ut maiores. Repellat est rerum repudiandae qui possimus. Vero aut tempora reiciendis. Rerum assumenda voluptatem repudiandae vitae a aut omnis consequatur. Saepe dolorem quia rerum sapiente. Quaerat quasi et illo accusamus assumenda. Voluptates sapiente officiis perferendis repudiandae eum qui temporibus itaque occaecati. Ea illum quam eum unde ut molestiae aut.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'blogger', 'demo', '2022-08-19 01:08:03'),
(73, 'assumenda qui accusantium', 'Ut eaque et aut dolor officiis alias tempora vel. Officia deleniti qui aut. Eius libero voluptas reprehenderit quos illum eum dolor inventore. Non delectus sunt reprehenderit deleniti ut voluptatem est. Sit blanditiis ut magni. Consequatur voluptas consequatur ipsa non saepe. Eligendi ut facilis autem cumque sequi quia. Vero maxime necessitatibus dolores delectus error dignissimos quae. Excepturi ex veritatis. Molestias ut consequatur et aut et. Quo impedit omnis sunt eius enim iure.', 'uploads\\about-us.jpg', 'Backend development', 'css', 'admin', '2022-08-18 07:46:56'),
(74, 'voluptatem officia eos', 'Earum dolorem necessitatibus est at laboriosam laboriosam aut rerum iste. Nemo nam voluptatem nostrum cum est qui dolores. Ullam dolore ex nostrum ut dolore. Inventore molestias doloremque. Eos accusamus quis nihil vel reprehenderit at est. Molestiae maxime beatae dolor. Voluptatum tempora enim perspiciatis et ut quo ut. Consequatur facere omnis consequatur enim culpa distinctio aut. Voluptas aut commodi vel ab vel itaque. Accusantium quis recusandae deleniti suscipit. Maxime sed nostrum. Suscipit qui consectetur enim porro quos repellat minima quibusdam eum.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'html', 'demo', '2022-08-18 23:27:13'),
(75, 'vitae veritatis harum', 'Porro minima soluta officia voluptas dolores voluptate molestias ut molestiae. Ratione veritatis iure ut aut voluptatum. Omnis aperiam tenetur. Voluptatem aut est. Et unde et error animi quia. Officia iure fugiat aut ipsam adipisci ullam quibusdam. Itaque architecto consequatur laborum dolores enim quae repellendus eos cum. Nobis totam est voluptatem error nihil temporibus quo voluptatem ducimus. Est et minima voluptate commodi corrupti tenetur. Delectus est voluptates. Rerum voluptates dolores sit.', 'uploads\\about-us.jpg', 'Laravel', 'js', 'admin', '2022-08-18 11:56:16'),
(76, 'dolorem corporis nostrum', 'In ut accusamus nisi eaque natus et consequatur. Iusto ut ipsum unde consequuntur dignissimos quidem voluptatibus ut. Vel consequuntur quidem. Quia dignissimos sit minus. Molestiae non enim autem vitae iure. Ut non dolor eum earum. Ut ratione eos vel et cum. Consequatur quidem velit quidem ut. Sed aperiam placeat sed deserunt magnam quisquam. Ut necessitatibus sed similique. Nobis pariatur ullam nihil quia nisi qui sapiente. Placeat quibusdam eligendi a sit necessitatibus fugit aliquam velit id. Dolorem sequi dolor voluptatem inventore libero dolorum aut minima nobis.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'laravel', 'demo', '2022-08-18 21:50:09'),
(77, 'et et veritatis', 'Et deleniti qui modi et consequatur qui. Assumenda quia quia. Et eaque minus. Dignissimos officiis ipsam dolore id consequuntur eius. Quis eligendi numquam aspernatur molestias minus et harum. Quasi est consequatur et in quis ipsam. Eligendi et et. Et quo maxime amet nesciunt. Sunt itaque hic aliquid voluptate aut soluta. Quibusdam ut aut eum culpa repellat. Numquam beatae rerum. Voluptates earum et nulla et odio. Ut tenetur quia ab aperiam.', 'uploads\\about-us.jpg', 'Backend development', 'mongodb', 'admin', '2022-08-18 12:00:36'),
(78, 'sed possimus accusamus', 'Vitae rerum facere distinctio voluptate voluptate est et vel. Reiciendis sed adipisci ratione voluptatum. Explicabo rem sunt necessitatibus omnis sequi ut dignissimos expedita. Voluptas et dicta. Est atque alias adipisci molestias quis culpa et accusantium. Accusantium sint rerum est repellat voluptas voluptas velit quisquam. Dolore eum debitis. Consectetur excepturi tempora rerum dicta mollitia aspernatur dolores. Sed officiis illum molestias. Est reprehenderit quisquam debitis.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'mysql', 'demo', '2022-08-19 01:10:10'),
(79, 'quis odit rerum', 'Omnis praesentium vitae eos fugiat voluptatem illo eligendi. Dolorem incidunt dolores. Veritatis et ut suscipit enim. Porro quod sed quas id aut dolore deserunt. Qui sint perspiciatis sit aut. Velit pariatur dolore repudiandae. Amet similique ex. Veniam voluptatem facilis minima et maxime quaerat repellendus tempora. Corrupti repellendus dolorum omnis doloribus ea eligendi sed. Ipsam facilis sequi blanditiis dolorem id consequatur quia. Dolor blanditiis qui odit atque at excepturi eaque quis.', 'uploads\\about-us.jpg', 'Laravel', 'node js', 'admin', '2022-08-19 00:32:52'),
(80, 'possimus enim eveniet', 'Est rerum cumque. Quod reiciendis quo eius. Esse dolorem eum magni nam hic. Est voluptatem est aut cum. Architecto voluptate eius. Tenetur totam in quis nisi nihil provident excepturi. Voluptatem cumque dicta ex. Corrupti quia aut. Cumque et eum in veritatis culpa vel optio. Alias sed et eius non nihil delectus hic tempora. Quo alias distinctio fugit nisi est. Numquam sunt in nulla voluptatem voluptatem.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'reat', 'demo', '2022-08-18 15:35:17'),
(81, 'velit a nisi', 'Quo consequatur et voluptas sit architecto quaerat eos. Ut facere doloribus cum laudantium. Velit in quidem at unde doloribus laboriosam. Corrupti ea voluptas nisi voluptates ab quas explicabo odio sint. Accusamus cumque aut id sed nobis veniam porro. Ut ea atque ducimus dolorem maiores. Neque vel tenetur. Dolorem aut vel ipsam est non ut. Omnis sit ut deleniti molestias excepturi adipisci voluptas praesentium impedit. Qui ex veritatis repellat ullam illum maxime nihil id.', 'uploads\\about-us.jpg', 'Backend development', 'vue', 'admin', '2022-08-18 21:27:45'),
(82, 'tenetur eum repellat', 'Reprehenderit molestiae facere. Magni excepturi incidunt voluptatem aperiam autem architecto assumenda. Modi quia commodi delectus consequuntur aliquid voluptatem reiciendis. Exercitationem blanditiis deserunt laborum. Nulla sint libero est id. Voluptate ut nobis eligendi. Dolor quis optio incidunt alias harum commodi et. Sint et occaecati earum est pariatur incidunt voluptates dicta. Consectetur pariatur vero necessitatibus nisi sint dicta consectetur. Ipsa omnis expedita iste dolorem aut sunt. Et commodi voluptatem. Minima fuga qui consequatur dolorum quia repudiandae repellat ut porro. Iure qui perspiciatis nostrum.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'wordpress', 'demo', '2022-08-18 06:23:09'),
(83, 'asperiores est qui', 'Odio fugit dignissimos aut molestias voluptatem dolorum tempora et laborum. Ipsam ut fuga et ut rem ratione quis. Eveniet commodi architecto. Occaecati ut atque est voluptatum animi sed et. Ex quia est non libero aut similique. Delectus eius qui dignissimos quo qui soluta rerum illo. Vel est est minima veniam incidunt ducimus reprehenderit. Commodi qui sit beatae sunt amet accusantium provident omnis ducimus. Quia voluptas qui ullam sunt magnam animi tempore qui. Aperiam omnis unde aut pariatur est ut unde.', 'uploads\\about-us.jpg', 'Laravel', 'blogger', 'admin', '2022-08-19 00:02:04'),
(84, 'nostrum earum magnam', 'Ut modi minus eum voluptates id. Qui esse est asperiores aut facilis. Quae aut exercitationem. Sapiente nostrum ut explicabo deleniti nihil dolores. Velit est eum adipisci iste necessitatibus qui sed minima quis. Excepturi voluptate quasi. Eum sint laboriosam enim eos reiciendis. Quo nisi non ducimus enim quae est cupiditate. Amet tempore omnis dolor quidem beatae eum quasi ut deleniti. Sint molestias quo consequuntur ut incidunt qui veritatis nihil. Omnis et et id libero iste delectus in laborum. Iure vitae et laborum omnis assumenda incidunt necessitatibus.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'css', 'demo', '2022-08-18 15:15:19'),
(85, 'recusandae unde odio', 'Dolores praesentium voluptatem. Eius ipsam vero voluptas et ipsa nihil minima harum. Dignissimos unde fuga nesciunt alias tenetur reprehenderit minus. Molestias ab eum id consequatur corrupti odio. Enim sit dolores voluptates non id consectetur. Et accusantium pariatur. Quam mollitia odit enim voluptas est. Voluptas quo eaque. Ratione beatae at at voluptatem dolorem. Quis voluptate aliquid cumque dolorum. Provident pariatur et. Iste tenetur doloremque molestiae eligendi nihil.', 'uploads\\about-us.jpg', 'Backend development', 'html', 'admin', '2022-08-18 07:37:35'),
(86, 'incidunt non illo', 'Porro neque fugiat modi deserunt quo iste. In ipsam vel alias. Possimus sit assumenda a asperiores consequatur ab ea. Officiis ratione similique. Sequi vel quos ut porro incidunt nam et eum. Dicta doloremque vel. Hic aut ut inventore natus porro. Laboriosam exercitationem inventore nam libero sed modi. Vero aut consequatur. Voluptatem itaque aut repellendus ad in placeat nihil eveniet. Quibusdam qui est quaerat deleniti. Ut nihil esse est quo quia molestiae ut ducimus. Vel iste autem dicta dolor ut voluptate.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'js', 'demo', '2022-08-19 02:40:16'),
(87, 'aut aut error', 'Dicta repellat dicta ab molestiae rerum in aspernatur. Molestiae qui exercitationem recusandae. Veritatis provident vero quisquam dolor pariatur ea sapiente odit. Blanditiis occaecati reprehenderit eveniet laudantium natus. Nam ullam libero in molestiae vitae molestiae deserunt itaque rerum. Commodi repellendus animi consequatur aliquam aut qui atque. Est dicta qui. Voluptatem suscipit corrupti distinctio repellat. Laudantium et ea in magni sequi animi veniam vero. Quidem possimus nulla sed tempore consequatur quaerat non. Alias aut dolor omnis labore. Maxime rerum commodi ipsam.', 'uploads\\about-us.jpg', 'Laravel', 'laravel', 'admin', '2022-08-19 02:40:45'),
(88, 'ut magni minima', 'Sed eligendi omnis autem. Quibusdam sunt ut odit iusto placeat fugiat nisi. Ea nihil quae. In tempora molestiae. Facere molestias aliquid reiciendis dicta sequi est. Vel et est blanditiis atque est culpa eum eum. Occaecati fugit optio ex dicta rerum ut pariatur. Sit asperiores recusandae ipsa earum dolorem assumenda corporis sit ad. Est deleniti quisquam. Aliquam soluta officiis occaecati ex consequatur id assumenda modi. Nesciunt ipsum sit soluta ipsum eos et voluptatum non.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'mongodb', 'demo', '2022-08-18 06:07:23'),
(89, 'sint non consectetur', 'Iste non suscipit iure hic laborum numquam quia unde. Non consectetur fugit in omnis magni nemo quis quo cupiditate. Rerum accusamus impedit officia ad debitis omnis. Consequuntur sunt a vitae ipsa earum soluta suscipit. Sit ut velit omnis. Adipisci non itaque unde iure quo cupiditate. Ad ad omnis at ab repellendus cumque voluptas similique id. Sapiente in tenetur consequatur. Laboriosam aliquam corrupti officiis sequi culpa architecto sit non. Itaque debitis soluta illum asperiores consequatur sit excepturi quis alias.', 'uploads\\about-us.jpg', 'Backend development', 'mysql', 'admin', '2022-08-19 02:17:03'),
(90, 'ea eaque aut', 'Esse impedit fugiat amet facere rem aliquam quidem. Id consequatur architecto est delectus est voluptates qui. Mollitia nobis officiis dolorem nemo voluptatum quia deserunt laboriosam. Dolore delectus qui voluptas ad. Impedit et rerum quia qui est culpa saepe voluptas. Dolorum corrupti ex. Praesentium recusandae odio. Consequatur voluptatum facilis omnis molestiae adipisci sit. Voluptate aut aut iure exercitationem aliquam tempore quisquam ut sint. Illo nobis velit accusamus nihil eum sint. Officia blanditiis veritatis unde inventore excepturi cum neque eius. Eos praesentium exercitationem qui consequatur ex deleniti quia quo. Magni blanditiis dolore rerum dolorem distinctio harum.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'node js', 'demo', '2022-08-18 14:58:05'),
(91, 'et non dolor', 'Suscipit omnis magni facere. Animi commodi quod maiores a sed ad aspernatur aspernatur. Voluptatum quod magni veritatis praesentium hic exercitationem voluptatum eligendi. Est ex et ratione tenetur molestiae ducimus. Qui atque distinctio mollitia velit. Natus nobis velit in est aperiam voluptate ad id voluptate. Maxime officia corrupti et. Deserunt aut omnis. Nihil laborum reprehenderit inventore nulla nam hic aperiam qui assumenda. Fuga voluptatem fuga.', 'uploads\\about-us.jpg', 'Laravel', 'reat', 'admin', '2022-08-18 23:06:55'),
(92, 'earum ea architecto', 'Nihil ratione incidunt rerum ipsa quos. Voluptas assumenda deserunt distinctio dignissimos fugiat suscipit voluptas assumenda quia. Dolorem et id iure. Amet rem quisquam non mollitia omnis. Saepe aut et hic sapiente sapiente vitae. Quisquam ut perferendis natus optio molestias ipsa laboriosam deserunt earum. Ut voluptatum suscipit voluptatem debitis maiores. Delectus aliquam cupiditate vero ad nostrum laborum architecto. Non aut officia aut est officia rerum. Molestiae eligendi in possimus veniam aut veritatis.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'vue', 'demo', '2022-08-18 09:11:35'),
(93, 'est aut sunt', 'Officia debitis ducimus suscipit quis asperiores beatae cumque. Repellat omnis quis facilis deleniti ut. Quo voluptas ipsam ut quod nesciunt ipsa impedit sit. Aut omnis quae minima quod ipsum incidunt optio facilis. Ipsum nostrum omnis reiciendis dicta voluptatem et architecto iusto similique. Molestias sint ut id ut et dolore magnam minima eligendi. Architecto veniam beatae quis magnam pariatur. Adipisci sit atque rerum sint nesciunt nesciunt ut et repellendus. Quam qui quaerat quae. Et tempore sit saepe laudantium deleniti ab nulla ipsum ullam.', 'uploads\\about-us.jpg', 'Backend development', 'wordpress', 'admin', '2022-08-18 23:30:28'),
(94, 'tempora nihil quas', 'Provident quas unde dolorem. Veniam recusandae quaerat sint. Omnis aperiam delectus et. Hic enim nostrum aspernatur corporis ut temporibus excepturi repellat. Sit labore nostrum impedit suscipit minus eum eligendi. Earum ex et reprehenderit expedita eum repellat id. Voluptas velit qui. Aliquid voluptatibus quas minima ratione sequi est sed amet. Deserunt aut quisquam reprehenderit sunt exercitationem fugiat sint incidunt. Consequatur dolor inventore iusto. A voluptatem maiores exercitationem dolor aliquam rerum itaque et sed. Ab ipsa optio nihil corrupti et occaecati est. Aliquid possimus quibusdam.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'blogger', 'demo', '2022-08-18 11:24:42'),
(95, 'perspiciatis optio dolorem', 'Quo rerum atque corporis in consectetur illum molestiae. Quae incidunt et fugiat. Architecto saepe dolores autem quasi sint ea rerum. Fugit et laborum quibusdam sed ipsum rerum. Reprehenderit recusandae vel. Qui non sit eligendi sapiente facilis quas. Fugiat perferendis consequatur beatae asperiores. Nulla et commodi officiis commodi magnam accusantium et reiciendis aut. Sed ratione aliquam ut est eius quo. Tempore officiis molestias maxime et voluptates neque et explicabo iusto. Aperiam dolore porro nemo. Placeat consectetur sint sed suscipit. Magnam qui nisi voluptatum voluptate maiores id reprehenderit id.', 'uploads\\about-us.jpg', 'Laravel', 'css', 'admin', '2022-08-18 20:53:45'),
(96, 'magnam placeat doloribus', 'Quis culpa explicabo molestiae. Vel eaque doloribus voluptas sed qui sunt quos rerum. Nisi nemo labore porro dolor quo ab aut vitae provident. Suscipit sed necessitatibus dolore consequatur excepturi qui maiores error. Odit ut dignissimos soluta eum distinctio necessitatibus laboriosam quia. Ipsum omnis consequuntur sit et et nobis commodi vitae nulla. Non explicabo enim cumque saepe. Tenetur in animi non aut repellendus dolores voluptas. Qui aut a. Nulla et sequi et hic esse fuga non corrupti. Praesentium exercitationem ratione culpa qui corrupti velit voluptas suscipit recusandae. Optio fugiat ducimus placeat deleniti minus molestias aut qui modi. Qui ut veritatis impedit sit.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'html', 'demo', '2022-08-18 22:18:41'),
(97, 'soluta quod debitis', 'Aut sit consequatur nihil qui. Excepturi iste et necessitatibus architecto molestias sint mollitia. Quaerat voluptas sunt sint doloremque minus iusto. Quaerat enim praesentium numquam modi aut quam necessitatibus. Illum doloribus sequi ea quia. Laborum architecto quia eaque enim aut. Est exercitationem non repellendus. Et accusamus nemo neque id quis ipsa. Ad quibusdam quis et necessitatibus ut porro. Quam modi voluptatem ut quia vel assumenda modi quis id. Ex distinctio expedita voluptas dolores consectetur deleniti optio voluptatum.', 'uploads\\about-us.jpg', 'Backend development', 'js', 'admin', '2022-08-18 21:45:09'),
(98, 'consequatur distinctio ducimus', 'Natus error velit doloribus ut eveniet. Quos minima quod. Qui ut aut numquam hic. Officiis qui sed eius aliquam dicta et sed. Vel et alias aut est nam. Eos ex dignissimos quidem nobis ratione consequatur. Eum ut tenetur labore praesentium voluptatem repellat debitis dolores. Sapiente natus sapiente qui consequuntur. Libero repudiandae ducimus reprehenderit et odit ipsa reiciendis autem. Sed velit et consequuntur molestiae deserunt magnam cupiditate et ullam. Asperiores tempore ut exercitationem nesciunt ipsam.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'laravel', 'demo', '2022-08-18 21:13:36'),
(99, 'mollitia eum aspernatur', 'Vero voluptates cumque explicabo iste aut eligendi. Eum voluptatem omnis ut nulla est. Voluptatem modi minima nulla ipsam eaque non possimus dolorem. Fugiat accusamus quia voluptas soluta tempora id itaque veritatis. Aut enim perferendis optio. Id odio tempora itaque ad. Maxime ut reprehenderit quis suscipit suscipit occaecati sed. Ducimus facilis possimus. Dolorem dolorum eius et. Autem cupiditate cupiditate sed.', 'uploads\\about-us.jpg', 'Laravel', 'mongodb', 'admin', '2022-08-18 04:27:07'),
(100, 'nobis exercitationem labore', 'Nostrum facere eos. Dolor est voluptatum. Aliquid quia quia et dolorem velit est soluta autem. Et aliquam nihil. Sunt quas est voluptatem. Ratione quod nihil ab sint esse ducimus maiores eligendi sit. Labore et dolore neque officiis ad alias. Perspiciatis ipsum error et. Harum non voluptates sit voluptatem vitae. Dignissimos non non optio dolorum aliquam.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'mysql', 'demo', '2022-08-18 23:08:35'),
(101, 'sit asperiores et', 'Quia veritatis maxime qui animi aspernatur nulla delectus. Sapiente aperiam eius laboriosam nesciunt. Incidunt et cumque sed. Voluptatem quae alias aperiam vitae id eius et sed. Ea ut ad rerum quia numquam doloribus. Est illum corrupti aut temporibus vitae commodi in soluta. Natus et voluptatem sequi quod cumque sed molestiae et vero. Id corrupti autem facilis occaecati. Dolores deleniti temporibus sint vero necessitatibus est ut occaecati esse. Odit qui et. Non recusandae perspiciatis fugit aspernatur earum dolor architecto illo.', 'uploads\\about-us.jpg', 'Backend development', 'node js', 'admin', '2022-08-18 12:03:16'),
(102, 'omnis iure iure', 'Totam est quidem ut aperiam aperiam. Veritatis quis a repudiandae. Soluta eveniet quis et possimus ut. Quae earum reprehenderit similique porro corporis exercitationem odit magnam ratione. Vitae deleniti excepturi iste aliquid enim enim minima omnis aut. Enim voluptatem nostrum molestiae veniam est. Rerum aliquam maxime. Autem aut voluptas. Maiores iste a et earum nemo. Dolores quibusdam accusamus quos aut quis alias.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'reat', 'demo', '2022-08-18 11:57:40'),
(103, 'aut aspernatur sint', 'Voluptatem quia eos vel nihil culpa. Quis aut consequatur dolorum est est. Voluptatem optio explicabo cupiditate et. Nesciunt numquam est dolores id similique praesentium et quos vel. Assumenda temporibus unde sunt iusto enim. Enim sunt possimus est quos. Animi et recusandae illo ut illo. Fugiat odit ea velit a odit itaque eveniet. Amet aut sequi perspiciatis enim. Assumenda rerum sed provident aspernatur laborum et ea libero a. Maxime occaecati iste rerum dolores autem rerum autem assumenda. Facere quia velit est vel sunt reprehenderit laboriosam voluptatem. Molestiae minima sapiente deserunt tenetur.', 'uploads\\about-us.jpg', 'Laravel', 'vue', 'admin', '2022-08-18 08:41:21'),
(104, 'voluptatem sunt repellendus', 'Ut nihil unde qui blanditiis. Harum molestiae quae iusto debitis tempore ab illum. Quia aut quaerat assumenda earum molestias necessitatibus aliquam aut. Eius consequatur ratione velit architecto adipisci provident aperiam non. Veniam illo hic aspernatur temporibus nihil aliquid labore. Dolores rem itaque. Qui beatae eos adipisci quia excepturi expedita natus asperiores. Ad itaque animi nesciunt ipsam. Eos magnam omnis non laboriosam ex nemo autem. Reiciendis eveniet libero voluptatem at qui dolore praesentium.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'wordpress', 'demo', '2022-08-18 15:39:48'),
(105, 'est quos non', 'Id molestiae ab. Necessitatibus incidunt ea sed cupiditate esse tenetur ipsa. Ducimus facilis eum laudantium accusamus. Dicta quia dicta et sequi. Ipsam qui in nesciunt cupiditate rerum. Quidem quia molestiae aut repellendus optio. Suscipit rerum sit suscipit quia fugiat eaque. Corrupti rem et eum ipsa. Sint perspiciatis cumque voluptate nesciunt ipsam exercitationem non. Id esse laborum est vel facilis laborum.', 'uploads\\about-us.jpg', 'Backend development', 'blogger', 'admin', '2022-08-18 10:00:50'),
(106, 'nihil qui incidunt', 'Eaque vero qui voluptas omnis excepturi. Iusto iste qui optio. Aut voluptas qui et voluptatem delectus suscipit. Veniam quo dignissimos est. Eum sit error. Commodi consectetur itaque. Animi iste voluptas dolor quas dolor possimus in ducimus. Harum aspernatur incidunt magnam quisquam fugiat. Rerum eius dignissimos. Perspiciatis numquam non fuga officiis qui sint omnis. Ipsum omnis autem deserunt possimus possimus atque ipsa.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'css', 'demo', '2022-08-18 23:13:38'),
(107, 'earum eum ab', 'Accusantium officiis officia optio aut et deserunt. Minus labore praesentium necessitatibus enim numquam officiis voluptate corporis occaecati. Possimus in laboriosam id pariatur. Alias ullam dolor et. Et asperiores sapiente odit et. Omnis ullam quos in saepe commodi et fuga dolores. Rerum quis consectetur ad. Sed perferendis porro mollitia. Sed eius cumque. Et est corrupti laboriosam excepturi a.', 'uploads\\about-us.jpg', 'Laravel', 'html', 'admin', '2022-08-18 08:22:57'),
(108, 'minus doloremque harum', 'Nesciunt animi illum. Voluptatem tempora numquam distinctio quas sapiente tenetur nemo non voluptas. Dolores quos laborum qui eum adipisci. Temporibus officia fuga nihil dolorem et error impedit. Tempore dicta rem tempore rerum quod rem velit. Rerum nihil qui ut facere voluptatibus voluptatibus iste sed. Molestias aliquid laboriosam eos accusamus. Accusamus est voluptas. Nemo consequatur corrupti voluptates. Praesentium voluptas omnis ut rerum eum repellat. Occaecati iste in deleniti voluptates.', 'uploads\\blog-post-03.jpg', 'Wordpress', 'js', 'demo', '2022-08-19 00:18:12'),
(109, 'repellat harum delectus', 'Delectus ea iure ea. Architecto id fugiat eius sit et itaque iure enim enim. Vitae est ut itaque qui assumenda quasi. Et eos voluptates ea esse itaque voluptates. In et rerum doloremque mollitia rerum saepe nesciunt et est. Alias tenetur dolor similique dolorum at id pariatur. Eaque doloribus qui et reprehenderit nostrum excepturi. Vero veniam deleniti eligendi. Recusandae labore rerum odio molestiae dolorum possimus suscipit velit porro. Autem ipsa possimus aut eos maxime. Consequatur ex deserunt maiores.', 'uploads\\about-us.jpg', 'Backend development', 'laravel', 'admin', '2022-08-18 14:23:46'),
(110, 'cum accusamus omnis', 'Qui quae sequi ex delectus possimus. Dicta est tenetur ut. Voluptatem porro officiis. Autem nobis officia voluptatem aperiam fuga aut tenetur velit voluptatum. Quasi expedita sit. Accusantium deserunt ut. Corporis modi libero fuga tempore occaecati aut consequatur odio. Quas modi incidunt inventore et voluptatem tempora maiores voluptates. Delectus sit vitae aut ullam. Recusandae autem voluptas omnis quidem necessitatibus quia. Consectetur voluptatem et nulla repudiandae alias voluptatem.', 'uploads\\blog-post-03.jpg', 'Front-end-development', 'mongodb', 'demo', '2022-08-19 01:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`) VALUES
(4, 'js', '2022-08-15 16:01:44'),
(5, 'mysql', '2022-08-15 12:04:16'),
(7, 'html', '2022-08-15 12:28:17'),
(8, 'css', '2022-08-15 21:24:08'),
(9, 'wordpress', '2022-08-15 20:54:22'),
(10, 'blogger', '2022-08-17 03:59:24'),
(11, 'laravel', '2022-08-16 12:05:28'),
(12, 'node js', '2022-08-16 11:36:47'),
(13, 'reat', '2022-08-16 06:23:09'),
(14, 'vue', '2022-08-15 23:55:09'),
(17, 'mongodb', '2022-08-16 03:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin@example.com', '25f9e794323b453885f5181f1b624d0b', 0, '2022-08-16 08:12:57'),
(24, 'demo', 'demo', 'demo@example.com', 'fe01ce2a7fbac8fafaed7c982a04e229', 1, '2022-08-16 13:24:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
