-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Гру 02 2016 р., 16:09
-- Версія сервера: 10.1.16-MariaDB
-- Версія PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mvc_group_1009`
--

-- --------------------------------------------------------

--
-- Структура таблиці `author`
--

CREATE TABLE `author` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_birth` date NOT NULL,
  `date_death` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `author`
--

INSERT INTO `author` (`id`, `first_name`, `last_name`, `date_birth`, `date_death`) VALUES
(1, 'Stephen', 'Kennedy', '1964-10-16', '2011-12-16'),
(2, 'David', 'Henderson', '1937-04-06', NULL),
(3, 'Sean', 'Gardner', '1987-05-04', NULL),
(4, 'Jesse', 'Lynch', '1971-06-26', NULL),
(5, 'Jacqueline', 'Watson', '1954-11-13', '2001-01-15'),
(6, 'Andrew', 'Gutierrez', '1972-09-30', '2013-10-13'),
(7, 'Ernest', 'Patterson', '1979-08-16', NULL),
(8, 'Peter', 'Campbell', '1969-01-16', NULL),
(9, 'Rachel', 'Dixon', '1961-05-18', '2011-11-12'),
(10, 'Andrew', 'Gomez', '1971-03-30', NULL),
(11, 'Wanda', 'Cook', '1988-05-20', '2010-01-05'),
(12, 'Lois', 'George', '1961-10-01', NULL),
(13, 'Michael', 'Harrison', '1956-01-29', '2007-04-26'),
(14, 'Kathryn', 'George', '1949-10-01', NULL),
(15, 'Roy', 'Williamson', '1969-07-24', '1986-03-07'),
(16, 'Brenda', 'Russell', '1969-01-23', NULL),
(17, 'Jessica', 'Stephens', '1938-04-02', NULL),
(18, 'Martha', 'Morrison', '1969-09-06', '1995-04-02'),
(19, 'Charles', 'Burns', '1986-01-28', '1991-12-25'),
(20, 'Walter', 'George', '1949-03-26', '1996-03-14'),
(21, 'Christopher', 'Rogers', '1975-12-07', NULL),
(22, 'Roger', 'Webb', '1967-03-12', '1981-06-17'),
(23, 'Deborah', 'Shaw', '1995-01-12', '2000-08-17'),
(24, 'Joseph', 'Bowman', '1985-12-04', '1988-08-05'),
(25, 'Brandon', 'Moore', '1989-12-17', '1991-11-18'),
(26, 'Tina', 'Ryan', '1943-09-18', '1985-02-01'),
(27, 'Norma', 'Olson', '1993-01-27', NULL),
(28, 'Sara', 'Johnston', '1974-06-09', '1999-08-30'),
(29, 'Kathy', 'Roberts', '1982-12-17', '2001-11-09'),
(30, 'Cynthia', 'Spencer', '1993-10-31', '1987-10-01'),
(31, 'Randy', 'Morris', '1935-03-16', NULL),
(32, 'Christina', 'Lawson', '1954-06-26', '1991-02-13'),
(33, 'Jane', 'Turner', '1991-11-28', '2016-04-30'),
(34, 'Ruth', 'Peters', '1955-08-03', '1992-06-15'),
(35, 'Paula', 'Berry', '1973-01-13', NULL),
(36, 'Carolyn', 'Gordon', '1965-10-04', '2001-04-15'),
(37, 'Adam', 'Martinez', '1969-06-22', '2013-12-31'),
(38, 'Roy', 'Nguyen', '1981-09-30', NULL),
(39, 'Janice', 'Kelley', '1995-06-05', '1990-06-29'),
(40, 'David', 'Morales', '1958-03-29', NULL),
(41, 'Lawrence', 'Wilson', '1943-12-11', '1991-11-20'),
(42, 'Sandra', 'Thompson', '1953-05-12', NULL),
(43, 'Bruce', 'Butler', '1939-06-30', NULL),
(44, 'Lori', 'Hansen', '1990-01-26', '2010-07-12'),
(45, 'Wayne', 'Austin', '1961-01-09', '1991-01-01'),
(46, 'Jose', 'Burton', '1991-12-06', '1999-06-04'),
(47, 'Patricia', 'Lopez', '1983-01-18', '1989-01-13'),
(48, 'Judith', 'Wells', '1940-04-19', '2016-02-13'),
(49, 'Betty', 'Ferguson', '1967-04-26', '2013-12-22'),
(50, 'Patrick', 'Gordon', '1989-03-21', '1984-10-26'),
(51, 'Albert', 'Riley', '1939-08-08', '1983-03-24'),
(52, 'Arthur', 'Watkins', '1995-08-27', '1992-02-12'),
(53, 'Judy', 'Larson', '1951-01-19', '1983-07-29'),
(54, 'Patricia', 'Mason', '1993-05-09', NULL),
(55, 'Ashley', 'Adams', '1966-11-10', '1989-08-03'),
(56, 'Norma', 'Burke', '1941-08-17', NULL),
(57, 'Gloria', 'Mason', '1935-02-24', NULL),
(58, 'George', 'Arnold', '1988-04-24', '2000-08-29'),
(59, 'Diana', 'Boyd', '1959-05-20', NULL),
(60, 'Robin', 'Fisher', '1931-05-31', NULL),
(61, 'Justin', 'Wood', '1963-04-13', '1988-11-21'),
(62, 'Kelly', 'Bowman', '1976-03-09', NULL),
(63, 'Jimmy', 'Baker', '1934-11-21', NULL),
(64, 'Martin', 'Medina', '1936-07-19', NULL),
(65, 'Gloria', 'Nelson', '1952-06-19', NULL),
(66, 'Betty', 'Bishop', '1992-05-19', NULL),
(67, 'Nicole', 'Mccoy', '1945-11-30', '1987-03-14'),
(68, 'Andrew', 'Fisher', '1941-01-20', '2006-01-30'),
(69, 'Bonnie', 'Richards', '1995-02-28', NULL),
(70, 'Tina', 'Wallace', '1981-09-11', '2013-08-13'),
(71, 'Ruth', 'Grant', '1995-03-20', NULL),
(72, 'David', 'Moreno', '1978-05-06', NULL),
(73, 'Adam', 'Hicks', '1948-01-22', '2015-02-16'),
(74, 'Anne', 'Fisher', '1971-05-27', '1986-08-13'),
(75, 'Kelly', 'Bell', '1975-09-23', '2005-10-08'),
(76, 'Kelly', 'West', '1975-01-11', '1981-03-02'),
(77, 'Sarah', 'Cooper', '1960-03-03', NULL),
(78, 'Barbara', 'Porter', '1945-12-15', NULL),
(79, 'Katherine', 'Campbell', '1986-04-16', '1982-05-15'),
(80, 'Gerald', 'Wallace', '1952-08-17', NULL),
(81, 'Kimberly', 'Kelly', '1979-04-12', '2003-04-05'),
(82, 'Jimmy', 'Wright', '1947-05-26', '1986-07-12'),
(83, 'George', 'Wallace', '1956-08-29', NULL),
(84, 'Laura', 'Warren', '1987-03-10', '2005-06-12'),
(85, 'Diana', 'Fox', '1934-09-27', '1995-07-11'),
(86, 'Emily', 'Gibson', '1990-12-11', '1983-09-14'),
(87, 'Mark', 'Gonzales', '1939-10-24', '2001-05-31'),
(88, 'Bobby', 'Duncan', '1948-10-11', '1993-09-02'),
(89, 'Adam', 'Grant', '1947-07-24', '2000-01-03'),
(90, 'Sharon', 'Hernandez', '1969-06-10', NULL),
(91, 'Anna', 'Sanders', '1984-12-15', '1984-09-10'),
(92, 'Jacqueline', 'Edwards', '1991-09-14', '1987-07-27'),
(93, 'Brenda', 'Stanley', '1992-10-06', NULL),
(94, 'David', 'James', '1995-04-16', '1981-05-08'),
(95, 'Willie', 'Daniels', '1938-08-10', '2016-01-20'),
(96, 'Todd', 'Ortiz', '1969-08-26', '1992-11-02'),
(97, 'Emily', 'Alexander', '1972-01-08', NULL),
(98, 'Jennifer', 'Sullivan', '1938-02-17', '1983-11-04'),
(99, 'Steven', 'Carter', '1980-05-28', NULL),
(100, 'Frank', 'Allen', '1975-07-02', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `book`
--

CREATE TABLE `book` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `price` decimal(10,0) UNSIGNED NOT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `style_id` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `book`
--

INSERT INTO `book` (`id`, `title`, `description`, `price`, `is_active`, `style_id`) VALUES
(1, 'donec', ' id 1452369874552', '65', 1, 2),
(2, 'ante vestibulum', 'pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh', '92', 1, 1),
(4, 'etiam', '12345689', '6', 1, 3),
(5, 'dui', 'sapien a libero nam dui proin leo odio porttitor id consequat', '12198', 0, 9),
(6, 'donec', 'vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id', '6', 1, 2),
(7, 'ante vestibulum ante', 'pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh', '92641', 0, 1),
(8, 'convallis', 'vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque', '9794', 1, 3),
(9, 'etiam pretium', '', '63255', 1, 3),
(10, 'dui', 'sapien a libero nam dui proin leo odio porttitor id consequat', '12198', 0, 9),
(11, 'ut nulla sed accumsan', '222', '66132', 1, NULL),
(12, 'eget tempus', 'Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð¿Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð´Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ð¼Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰Ñ‰', '39210', 1, 6),
(14, 'donec vitae nisi', 'sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras', '94815', 1, 9),
(15, 'quam turpis', 'id turpis integer aliquet massa id lobortis convallis tortor risus dapibus', '16029', 1, 6),
(16, 'at nunc commodo', 'quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et', '25494', NULL, NULL),
(17, 'odio porttitor id', 'eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor', '75353', 0, 6),
(18, 'at', 'augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam', '63600', 1, 2),
(19, 'integer ac leo pellentesque', NULL, '77457', 0, 8),
(20, 'suspendisse', NULL, '82332', NULL, NULL),
(21, 'odio in hac habitasse', 'quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et', '21486', 1, 10),
(22, 'platea dictumst', NULL, '78747', 0, 8),
(23, 'in', NULL, '97321', 1, 4),
(24, 'orci luctus', NULL, '62046', 0, 10),
(25, 'vitae quam suspendisse potenti nullam', 'magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut', '16653', 1, 8),
(26, 'eget eleifend luctus ultricies eu', 'a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices', '19334', 0, 9),
(27, 'magna bibendum imperdiet', 'in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci', '69373', NULL, NULL),
(28, 'volutpat', 'sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit', '14084', NULL, NULL),
(29, 'curabitur', 'et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo', '67555', 0, 2),
(30, 'eget congue eget semper rutrum', 'ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in', '3443', 0, 9),
(31, 'lectus in est risus auctor', 'montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum', '93866', 1, 7),
(32, 'accumsan odio curabitur', 'turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus', '42008', 0, 3),
(33, 'maecenas tristique est', 'diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum', '23086', 1, 10),
(34, 'tortor', 'sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in', '8694', 1, 8),
(35, 'metus arcu adipiscing molestie hendrerit', 'dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi', '3127', 1, 5),
(36, 'maecenas', 'orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus', '24728', NULL, NULL),
(37, 'ut volutpat', 'erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit', '84237', 1, 9),
(38, 'dapibus dolor vel est', NULL, '30735', 1, 4),
(39, 'volutpat in congue etiam', NULL, '92733', NULL, NULL),
(40, 'fermentum justo nec', 'quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec', '58773', 1, 9),
(41, 'imperdiet nullam orci pede', 'mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus', '46783', NULL, NULL),
(42, 'ut', 'sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada', '68377', 1, 4),
(43, 'sit', NULL, '14983', 1, 10),
(44, 'mauris sit amet eros', 'urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi', '93486', NULL, NULL),
(45, 'habitasse platea dictumst morbi', 'curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat', '53139', 0, 4),
(46, 'ut nulla sed', 'suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla', '43347', 0, 9),
(47, 'augue vestibulum rutrum rutrum', 'nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse', '13514', 1, 9),
(48, 'nulla nisl nunc nisl', 'sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce', '76891', 1, 1),
(49, 'id consequat in consequat', NULL, '37117', 1, 2),
(50, 'orci luctus et ultrices posuere', 'turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede', '57367', 1, 5),
(51, 'nonummy maecenas tincidunt lacus at', 'blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus', '29790', 1, 6),
(52, 'vivamus in felis', 'nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero', '31279', 1, 10),
(53, 'vulputate luctus cum sociis', 'volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor', '51938', NULL, NULL),
(54, 'eros suspendisse', 'mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque', '80760', 0, 3),
(55, 'tortor', 'porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut', '53173', 1, 6),
(56, 'venenatis non sodales sed', 'odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing', '82131', 0, 6),
(57, 'imperdiet et', NULL, '75705', 1, 9),
(58, 'vel sem sed sagittis nam', 'curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet', '703', NULL, NULL),
(59, 'magna bibendum imperdiet', 'ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla', '70070', 0, 6),
(60, 'vestibulum ante ipsum primis in', 'ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo', '58989', NULL, NULL),
(61, 'at nulla', 'ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non quam nec dui', '33452', NULL, NULL),
(62, 'sodales sed', 'scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam', '86835', 1, 10),
(63, 'sapien non', 'non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet', '27599', NULL, NULL),
(64, 'euismod scelerisque quam turpis', NULL, '7438', 1, 2),
(65, 'ut erat curabitur gravida nisi', NULL, '12950', 0, 9),
(66, 'augue vestibulum', 'donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo', '65458', 0, 6),
(67, 'vel', 'ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed', '89738', NULL, NULL),
(68, 'mauris vulputate elementum', 'porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus', '47194', NULL, NULL),
(69, 'vestibulum', 'rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia', '63565', 0, 1),
(70, 'ornare consequat lectus', 'eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est', '2763', 0, 8),
(71, 'id ligula', 'sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh', '11002', NULL, NULL),
(72, 'integer tincidunt', 'luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum', '9280', 0, 4),
(73, 'tortor', 'quam pede lobortis ligula sit amet eleifend pede libero quis orci', '78756', 0, 7),
(74, 'in felis', 'non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi', '39106', 1, 9),
(75, 'lacinia erat', 'turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum', '67999', 0, 7),
(76, 'vestibulum ante', 'posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices', '73835', NULL, NULL),
(77, 'habitasse platea dictumst aliquam augue', 'purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis', '53870', NULL, NULL),
(78, 'id nulla ultrices aliquet', NULL, '92752', NULL, NULL),
(79, 'libero ut', 'tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum', '34121', 1, 9),
(80, 'ac nibh fusce', 'tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis', '41888', 1, 7),
(81, 'tristique fusce congue', 'fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel', '29933', 1, 5),
(82, 'hac', 'quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero', '2297', NULL, NULL),
(83, 'sodales', NULL, '73299', 1, 8),
(84, 'non interdum in ante vestibulum', 'massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas', '68748', 0, 1),
(85, 'vulputate ut ultrices vel', 'cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis', '45241', 0, 2),
(86, 'primis in faucibus orci luctus', 'turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis', '19743', 0, 1),
(87, 'convallis nulla', 'habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt', '70538', NULL, NULL),
(88, 'orci luctus et', 'rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing', '22137', 1, 8),
(89, 'ante', NULL, '89074', NULL, NULL),
(90, 'libero nam', NULL, '41321', 0, 6),
(91, 'at', NULL, '59339', 0, 10),
(92, 'non velit', 'lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non', '11660', 0, 8),
(93, 'vestibulum sed', 'etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum', '22902', 0, 2),
(94, 'amet consectetuer adipiscing', 'odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit', '63303', NULL, NULL),
(95, 'habitasse platea dictumst', 'aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit', '18981', 1, 2),
(96, 'at velit', 'velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat', '51812', 0, 9),
(97, 'sapien dignissim vestibulum vestibulum', 'semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis', '59925', NULL, NULL),
(98, 'pede lobortis', 'enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est', '50473', 1, 6),
(99, 'est et tempus', 'vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam', '94306', NULL, NULL),
(100, 'faucibus', 'eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus', '46714', 0, 8),
(101, 'nulla nisl nunc', 'nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id', '10963', 0, 2),
(102, 'duis faucibus accumsan odio curabitur', NULL, '95147', 0, 7),
(103, 'maecenas tristique est et', 'morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet', '60884', 0, 4),
(104, 'suspendisse', 'eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec', '4973', 1, 4),
(105, 'sed ante vivamus tortor', 'neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante', '80251', 0, 7),
(106, 'pellentesque quisque porta', NULL, '53484', NULL, NULL),
(107, 'duis ac nibh fusce', 'porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a', '71553', 1, 4),
(108, 'nibh fusce lacus purus aliquet', 'hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque', '47262', NULL, NULL),
(109, 'pellentesque ultrices phasellus id', 'phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis', '72561', 1, 10),
(110, 'ipsum primis in', NULL, '60861', 0, 10),
(111, 'mauris', 'habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia', '57826', NULL, NULL),
(112, 'erat', 'vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet', '35390', 0, 1),
(113, 'sed vestibulum sit amet', 'risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis', '87025', 1, 1),
(114, 'felis fusce posuere felis', 'proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien', '33716', NULL, NULL),
(115, 'vestibulum sit amet', 'justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat', '52056', 0, 2),
(116, 'nulla sed accumsan felis', 'urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo', '74686', 1, 7),
(117, 'sit amet eros suspendisse accumsan', 'amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum', '37739', 1, 3),
(118, 'nisi', 'vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat', '97980', NULL, NULL),
(119, 'nulla facilisi cras', NULL, '50476', 1, 1),
(120, 'viverra pede ac', 'phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio', '82264', 0, 10),
(121, 'ut ultrices', 'tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est', '3490', 0, 10),
(122, 'quisque id justo', NULL, '41240', 0, 6),
(123, 'pretium iaculis justo in', 'lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula', '20937', 1, 8),
(124, 'luctus et ultrices', 'metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam', '73177', NULL, NULL),
(125, 'id lobortis convallis tortor risus', 'eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu', '74575', 0, 2),
(126, 'commodo placerat', 'aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt', '24041', 0, 8),
(127, 'vivamus', 'sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel', '26700', 1, 4),
(128, 'nisi volutpat eleifend', 'ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id', '28691', 0, 8),
(129, 'in hac habitasse platea', NULL, '85015', 1, 7),
(130, 'libero convallis eget eleifend luctus', 'in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac', '97383', 1, 2),
(131, 'justo in hac habitasse platea', NULL, '71300', NULL, NULL),
(132, 'tempus vel pede morbi', 'turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit', '39962', 1, 9),
(133, 'auctor gravida sem praesent id', NULL, '44389', NULL, NULL),
(134, 'lacinia aenean sit amet', 'sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec', '83948', 1, 2),
(135, 'sapien quis libero nullam', 'morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a', '35657', 0, 5),
(136, 'vestibulum eget vulputate ut ultrices', 'phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc', '1644', NULL, NULL),
(137, 'nam tristique tortor eu', 'cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at', '95720', NULL, NULL),
(138, 'amet erat nulla tempus vivamus', NULL, '34557', 1, 7),
(139, 'vulputate justo in blandit ultrices', 'eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at', '84033', 0, 3),
(140, 'duis mattis', NULL, '14268', 1, 10),
(141, 'turpis a pede posuere', 'non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus', '80193', NULL, NULL),
(142, 'ipsum primis in faucibus orci', 'nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum', '98421', 1, 6),
(143, 'lobortis sapien sapien', 'nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc', '28022', 0, 3),
(144, 'phasellus id sapien in sapien', 'sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies', '67703', 1, 9),
(145, 'congue etiam justo etiam', 'donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit', '99326', NULL, NULL),
(146, 'nulla suscipit', 'non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis', '53011', 1, 1),
(147, 'libero convallis eget eleifend', 'vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices', '72404', 0, 10),
(148, 'nam nulla integer pede justo', 'hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat', '31086', NULL, NULL),
(149, 'lacinia', NULL, '23174', 1, 9),
(150, 'tellus in sagittis dui vel', NULL, '38774', 1, 1),
(151, 'ut ultrices vel augue', 'congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus', '72497', 0, 3),
(152, 'etiam', 'placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu', '80425', NULL, NULL),
(153, 'maecenas rhoncus aliquam lacus morbi', 'augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec', '63694', NULL, NULL),
(154, 'libero ut massa volutpat', NULL, '72970', NULL, NULL),
(155, 'odio', 'in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at', '39512', 0, 2),
(157, 'lacus at velit vivamus vel', 'vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et', '80221', 1, 2),
(158, 'curae duis faucibus accumsan', NULL, '57216', 0, 1),
(159, 'nunc nisl duis bibendum felis', 'ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod', '91752', 0, 1),
(160, 'porttitor lacus at turpis', 'magna ac consequat metus sapien ut nunc vestibulum ante ipsum', '22030', 1, 10),
(161, 'felis sed', 'elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in', '61110', 0, 4),
(162, 'at feugiat non pretium', 'quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis', '36185', 0, 4),
(163, 'porta volutpat', 'cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis', '98180', 0, 3),
(164, 'luctus nec molestie sed', 'gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia', '98095', 1, 5),
(165, 'tempus vivamus in', 'dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem', '76673', NULL, NULL),
(166, 'pellentesque quisque porta volutpat', 'viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis', '85755', 1, 1),
(167, 'eros elementum', 'sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse', '73341', NULL, NULL),
(168, 'eget eleifend luctus', 'nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse', '65425', 0, 5),
(169, 'amet', 'rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis', '4322', 0, 5),
(170, 'neque libero convallis eget', 'posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit', '70247', 0, 1),
(171, 'in congue', 'quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt', '61351', 0, 10),
(172, 'aliquam quis', 'ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum', '6503', 0, 2),
(173, 'mauris', 'morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat', '60459', NULL, NULL),
(174, 'sollicitudin', NULL, '14293', NULL, NULL),
(175, 'purus sit', 'posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien', '82935', 1, 3),
(176, 'luctus ultricies eu', 'ut erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget', '89185', 1, 5),
(177, 'in porttitor', 'feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh', '24447', 1, 10),
(178, 'est et', 'aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet', '9204', 1, 3),
(179, 'neque libero convallis', 'duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh', '82133', NULL, NULL),
(180, 'phasellus in felis', 'orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis', '81552', 0, 2),
(181, 'pellentesque at nulla suspendisse', 'et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio', '16010', 0, 3),
(182, 'leo maecenas pulvinar', 'in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac', '36450', NULL, NULL),
(183, 'tellus semper interdum mauris', 'egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum', '82564', NULL, NULL),
(184, 'libero nullam sit amet', 'duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis', '3232', 0, 8),
(185, 'vestibulum', 'quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur', '93051', 1, 1),
(186, 'dui nec', 'augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel', '65107', 1, 4),
(187, 'sit amet consectetuer adipiscing elit', 'orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id', '16553', 0, 1),
(188, 'non interdum in ante', NULL, '1437', 0, 7),
(189, 'hac habitasse', NULL, '67355', 0, 10),
(190, 'quam pede lobortis ligula sit', 'in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam', '85789', 0, 7),
(191, 'faucibus cursus urna', 'id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi', '7626', 1, 10),
(192, 'odio consequat varius integer', 'vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce', '27005', 0, 3),
(193, 'ultrices erat tortor', NULL, '45678', NULL, NULL),
(194, 'penatibus et', 'ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula', '5080', 0, 6),
(195, 'dapibus at diam nam tristique', NULL, '32731', NULL, NULL),
(196, 'nullam porttitor lacus', NULL, '32238', 1, 7),
(197, 'ut', 'eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum', '75932', 1, 2),
(198, 'neque vestibulum eget vulputate ut', 'velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla', '87080', 1, 4),
(199, 'etiam vel', 'quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac', '86110', NULL, NULL),
(200, 'ipsum praesent blandit lacinia', NULL, '13489', 0, 5),
(201, 'nibh fusce lacus purus aliquet', 'ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae', '25370', 1, 5),
(202, 'luctus et ultrices', 'blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie', '83482', 1, 6),
(203, 'erat', 'ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede', '747', NULL, NULL),
(204, 'vel enim sit amet', 'at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget', '84973', 0, 5),
(205, 'in leo maecenas', 'luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris', '53043', 0, 5),
(206, 'non mauris', 'venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in', '93944', 0, 5),
(207, 'ipsum primis in', 'turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt', '23394', NULL, NULL),
(208, 'ac diam', 'consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam', '79249', 0, 3),
(209, 'elementum in hac habitasse platea', 'magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi', '23470', 0, 4),
(210, 'praesent', 'vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum', '818', 1, 9),
(211, 'rhoncus aliquet pulvinar sed', 'convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla', '83466', NULL, NULL),
(212, 'dapibus at', NULL, '52940', NULL, NULL),
(213, 'volutpat sapien arcu sed augue', 'erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis', '12166', 1, 3),
(214, 'suscipit a feugiat et eros', NULL, '85877', 0, 5),
(215, 'id', NULL, '29184', NULL, NULL),
(216, 'a libero nam dui', 'sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi', '41223', NULL, NULL),
(217, 'duis aliquam convallis nunc', NULL, '26515', 0, 1),
(218, 'convallis eget', 'interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed', '55953', 0, 8),
(219, 'porta volutpat', 'pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum', '84483', NULL, NULL),
(220, 'eleifend pede libero quis', 'felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec', '6216', NULL, NULL),
(221, 'dictumst morbi vestibulum velit', NULL, '42887', 0, 9),
(222, 'vestibulum rutrum rutrum neque aenean', NULL, '20173', NULL, NULL),
(223, 'diam in magna', NULL, '57246', 0, 3),
(224, 'curabitur in', NULL, '32281', NULL, NULL),
(225, 'odio condimentum id luctus', NULL, '65180', 1, 1),
(226, 'sed', 'sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus', '50445', 1, 10),
(227, 'nulla mollis', NULL, '67879', 1, 4),
(228, 'laoreet ut rhoncus', 'aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi', '30170', 1, 1),
(229, 'nunc rhoncus dui vel', 'vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi', '6250', NULL, NULL),
(230, 'dolor sit amet consectetuer adipiscing', 'montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada', '86024', NULL, NULL),
(231, 'curae duis', 'porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis', '70610', NULL, NULL),
(232, 'ligula sit amet', 'lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient', '79928', 0, 2),
(233, 'sapien', 'turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget', '44681', NULL, NULL),
(234, 'interdum venenatis turpis', 'luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin', '12204', 0, 6),
(235, 'et ultrices', NULL, '29101', 1, 3),
(236, 'augue quam sollicitudin vitae', 'volutpat erat quisque erat eros viverra eget congue eget semper', '93099', 0, 4),
(237, 'porta volutpat quam pede', 'adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan', '38761', 1, 1),
(238, 'molestie hendrerit at', 'tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in', '32157', 1, 3),
(239, 'dapibus', NULL, '47035', NULL, NULL),
(240, 'iaculis', 'sed sagittis nam congue risus semper porta volutpat quam pede lobortis', '8011', NULL, NULL),
(241, 'sapien cursus vestibulum proin eu', 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus', '71855', 1, 8),
(242, 'felis', 'hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis', '97892', NULL, NULL),
(243, 'morbi odio odio elementum', 'neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus', '33805', 0, 7),
(244, 'nam dui proin leo', 'fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh', '72036', 1, 8),
(245, 'id lobortis convallis tortor', NULL, '67579', 1, 8),
(246, 'in', 'curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in', '99159', 0, 1),
(247, 'vulputate vitae nisl', 'congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend', '30571', NULL, NULL),
(248, 'nulla ac enim in tempor', NULL, '21771', 1, 5),
(249, 'mauris morbi non', 'pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id', '32071', NULL, NULL),
(250, 'morbi', NULL, '23969', NULL, NULL),
(251, 'diam', 'est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris', '13587', 1, 8),
(252, 'consequat ut nulla sed', 'donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet', '72093', 1, 5),
(253, 'cubilia curae duis faucibus accumsan', 'volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et', '20096', NULL, NULL),
(254, 'molestie hendrerit at vulputate vitae', 'justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis', '99175', NULL, NULL),
(255, 'aliquam augue quam', NULL, '90625', 0, 8),
(256, 'eleifend', 'augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat', '72108', 1, 3),
(257, 'risus auctor sed', 'nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris', '40799', 1, 3),
(258, 'in', 'donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non', '50687', 1, 2),
(259, 'eget', NULL, '48419', NULL, NULL),
(260, 'justo sit amet sapien dignissim', 'eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla', '29451', 0, 1),
(261, 'curabitur gravida nisi', 'metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae', '29484', 1, 10),
(262, 'vestibulum proin eu mi nulla', 'cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a', '58579', 0, 8),
(263, 'nulla integer pede justo', 'consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat', '51332', 0, 1),
(264, 'pretium nisl ut', 'maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla', '13434', 0, 7);
INSERT INTO `book` (`id`, `title`, `description`, `price`, `is_active`, `style_id`) VALUES
(265, 'viverra diam vitae', 'consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in', '65528', NULL, NULL),
(266, 'faucibus', 'dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo', '94924', 0, 3),
(267, 'odio curabitur convallis duis consequat', 'etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate', '72728', 1, 8),
(268, 'montes nascetur ridiculus mus', NULL, '51302', 1, 7),
(269, 'pharetra magna vestibulum', 'egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet', '82555', NULL, NULL),
(270, 'in congue etiam', 'duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue', '22989', 0, 7),
(271, 'posuere cubilia curae duis faucibus', 'varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper', '79384', 1, 6),
(272, 'integer aliquet massa', NULL, '62379', NULL, NULL),
(273, 'cubilia curae donec', 'cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam', '43227', NULL, NULL),
(274, 'lorem vitae', NULL, '4607', 1, 8),
(275, 'metus vitae ipsum', 'faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non', '76039', NULL, NULL),
(276, 'primis in', 'morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat', '3447', NULL, NULL),
(277, 'rutrum', 'enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper', '1278', 0, 8),
(278, 'sapien sapien', NULL, '23107', 1, 4),
(279, 'duis at velit eu est', 'mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut', '12214', NULL, NULL),
(280, 'pede ullamcorper augue', 'eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede', '95660', 1, 4),
(281, 'vel nisl duis', 'sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut', '86095', 1, 10),
(282, 'convallis', 'sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non', '31903', NULL, NULL),
(283, 'vivamus vestibulum sagittis', 'hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus', '12276', 0, 1),
(284, 'sem duis aliquam convallis', 'maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum', '4407', 0, 6),
(285, 'maecenas', 'nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque', '61105', 1, 6),
(286, 'nulla suscipit', NULL, '51074', 0, 4),
(287, 'blandit lacinia erat vestibulum sed', 'leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere', '12018', NULL, NULL),
(288, 'eu', NULL, '96688', NULL, NULL),
(289, 'vestibulum sagittis sapien', 'posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis', '9773', NULL, NULL),
(290, 'tempus vel pede morbi', NULL, '87677', 0, 6),
(291, 'ac nibh fusce lacus', 'in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit', '85952', 0, 2),
(292, 'in lacus curabitur', 'convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor', '1321', 1, 10),
(293, 'laoreet ut rhoncus aliquet pulvinar', NULL, '47109', 1, 4),
(294, 'in felis eu', 'mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus', '38129', 0, 9),
(295, 'volutpat in congue etiam justo', 'eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis', '65069', 0, 8),
(296, 'eget eleifend', 'nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia', '17514', 1, 3),
(297, 'nulla ultrices', NULL, '80133', 1, 10),
(298, 'posuere metus vitae ipsum aliquam', 'ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum', '20413', NULL, NULL),
(299, 'volutpat convallis', 'aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec', '55141', 1, 2),
(300, 'nulla', 'aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat', '13620', 1, 9),
(301, 'varius integer ac leo', NULL, '68717', 1, 3),
(302, 'amet erat nulla tempus', 'non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede', '81060', 0, 8),
(303, 'dolor', 'pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat', '39485', 1, 9),
(304, 'ac nulla sed vel enim', 'in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat', '52744', 1, 8),
(305, 'maecenas pulvinar lobortis est phasellus', '', '28495', 1, 2),
(307, 'qqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '5', 1, NULL),
(308, 'sertsregs', 'sregvsftufyukmh;L/''kuoi;,ujoi,;hkjkgigl,p''op[   jhghjkl;jl', '234234', 1, NULL),
(312, '7777777777777777', 'dghjdf\r\n', '0', 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `book_author`
--

CREATE TABLE `book_author` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `book_author`
--

INSERT INTO `book_author` (`book_id`, `author_id`) VALUES
(2, 60),
(4, 1),
(4, 14),
(6, 94),
(7, 59),
(8, 31),
(8, 75),
(9, 42),
(9, 51),
(9, 67),
(15, 32),
(15, 75),
(17, 8),
(17, 31),
(18, 10),
(18, 11),
(18, 27),
(18, 36),
(18, 49),
(18, 52),
(19, 8),
(20, 14),
(20, 61),
(24, 44),
(24, 69),
(24, 78),
(24, 84),
(25, 100),
(26, 48),
(26, 93),
(27, 83),
(28, 10),
(28, 44),
(28, 55),
(29, 9),
(29, 15),
(29, 57),
(29, 70),
(30, 9),
(31, 18),
(31, 19),
(32, 45),
(32, 54),
(32, 97),
(34, 1),
(35, 33),
(35, 45),
(35, 87),
(35, 100),
(36, 26),
(36, 34),
(36, 38),
(36, 52),
(37, 54),
(37, 84),
(37, 85),
(37, 91),
(37, 92),
(38, 24),
(40, 19),
(42, 84),
(44, 20),
(45, 55),
(46, 3),
(46, 7),
(47, 43),
(47, 61),
(48, 21),
(48, 73),
(49, 10),
(49, 42),
(49, 62),
(49, 90),
(51, 7),
(51, 8),
(51, 14),
(52, 6),
(52, 49),
(54, 60),
(54, 66),
(56, 42),
(57, 55),
(57, 62),
(58, 14),
(59, 9),
(59, 17),
(59, 57),
(60, 16),
(60, 83),
(63, 14),
(63, 35),
(64, 91),
(65, 25),
(65, 57),
(65, 62),
(65, 64),
(66, 29),
(66, 56),
(67, 15),
(67, 43),
(68, 12),
(69, 44),
(70, 72),
(73, 11),
(75, 88),
(76, 23),
(77, 5),
(77, 98),
(78, 3),
(78, 81),
(79, 46),
(80, 24),
(80, 55),
(81, 36),
(81, 68),
(82, 40),
(83, 10),
(83, 14),
(83, 49),
(83, 56),
(84, 15),
(87, 11),
(87, 20),
(87, 92),
(87, 100),
(88, 27),
(88, 39),
(88, 61),
(88, 64),
(88, 84),
(89, 40),
(89, 53),
(89, 57),
(90, 11),
(91, 92),
(92, 14),
(94, 49),
(95, 17),
(95, 91),
(96, 10),
(96, 29),
(96, 33),
(96, 92),
(97, 89),
(98, 53),
(99, 32),
(100, 59),
(101, 31),
(101, 99),
(103, 57),
(103, 95),
(104, 38),
(105, 39),
(106, 44),
(107, 12),
(107, 18),
(109, 6),
(111, 9),
(111, 77),
(112, 69),
(114, 14),
(114, 77),
(115, 98),
(116, 99),
(118, 42),
(118, 68),
(120, 42),
(121, 51),
(121, 72),
(122, 62),
(122, 70),
(122, 73),
(122, 92),
(124, 76),
(125, 57),
(126, 14),
(126, 47),
(127, 56),
(127, 64),
(127, 66),
(128, 21),
(129, 28),
(129, 68),
(130, 22),
(130, 26),
(130, 42),
(132, 81),
(132, 90),
(133, 16),
(133, 56),
(134, 17),
(136, 97),
(137, 5),
(137, 44),
(141, 31),
(142, 76),
(142, 77),
(143, 42),
(144, 62),
(147, 13),
(148, 2),
(149, 33),
(151, 57),
(151, 97),
(152, 55),
(152, 100),
(153, 57),
(154, 26),
(154, 100),
(160, 12),
(160, 59),
(162, 94),
(163, 16),
(164, 55),
(164, 76),
(168, 4),
(168, 14),
(168, 63),
(170, 4),
(171, 75),
(171, 84),
(172, 23),
(173, 20),
(175, 32),
(176, 36),
(179, 67),
(179, 84),
(181, 13),
(181, 26),
(182, 88),
(185, 5),
(185, 50),
(185, 60),
(187, 58),
(189, 61),
(190, 37),
(191, 12),
(191, 38),
(193, 12),
(193, 24),
(193, 52),
(193, 60),
(194, 37),
(195, 15),
(195, 78),
(197, 19),
(197, 50),
(197, 79),
(198, 50),
(200, 9),
(200, 33),
(200, 34),
(200, 51),
(201, 24),
(201, 67),
(204, 18),
(205, 59),
(206, 62),
(207, 21),
(207, 27),
(207, 28),
(209, 31),
(210, 61),
(212, 44),
(212, 70),
(213, 20),
(214, 17),
(215, 32),
(215, 65),
(216, 76),
(218, 11),
(218, 37),
(219, 30),
(222, 77),
(222, 80),
(223, 88),
(224, 43),
(224, 65),
(225, 76),
(227, 64),
(228, 70),
(229, 37),
(229, 100),
(230, 60),
(231, 22),
(232, 22),
(233, 5),
(233, 96),
(235, 71),
(236, 4),
(236, 68),
(236, 84),
(237, 81),
(238, 47),
(238, 64),
(241, 71),
(242, 7),
(242, 98),
(243, 92),
(245, 22),
(245, 50),
(246, 24),
(246, 69),
(246, 82),
(247, 71),
(248, 55),
(249, 20),
(249, 97),
(250, 12),
(250, 27),
(251, 53),
(251, 87),
(251, 92),
(252, 52),
(252, 93),
(253, 70),
(255, 1),
(257, 8),
(257, 12),
(257, 47),
(257, 68),
(259, 24),
(259, 35),
(259, 58),
(260, 85),
(260, 86),
(261, 11),
(261, 80),
(262, 63),
(263, 53),
(263, 56),
(265, 14),
(265, 18),
(265, 38),
(265, 87),
(266, 11),
(268, 60),
(268, 67),
(269, 11),
(269, 58),
(269, 78),
(270, 71),
(271, 13),
(273, 38),
(274, 84),
(275, 9),
(275, 10),
(275, 61),
(278, 11),
(278, 34),
(279, 91),
(280, 47),
(281, 99),
(284, 1),
(285, 44),
(287, 56),
(288, 73),
(290, 6),
(290, 61),
(290, 86),
(292, 23),
(294, 10),
(294, 17),
(294, 61),
(296, 4),
(296, 10),
(296, 95),
(297, 13),
(297, 99),
(298, 17),
(298, 78),
(299, 31),
(299, 40),
(300, 61);

-- --------------------------------------------------------

--
-- Структура таблиці `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment_text` text NOT NULL,
  `rating` int(10) NOT NULL,
  `checkbox_state` varchar(2) NOT NULL,
  `time_stamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `comment`
--

INSERT INTO `comment` (`id`, `username`, `email`, `comment_text`, `rating`, `checkbox_state`, `time_stamp`) VALUES
(6, 'v700a', 'v700a@ukr.net', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', -2, '', 'Fri, 02 Dec 16 15:38:17 +0100'),
(7, 'v700a', 'v700a@ukr.net', 'eeeeeeeeeeeee22222222222222222222', 3, 'on', 'Fri, 02 Dec 16 15:42:52 +0100');

-- --------------------------------------------------------

--
-- Структура таблиці `style`
--

CREATE TABLE `style` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `parent_id` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `style`
--

INSERT INTO `style` (`id`, `name`, `parent_id`) VALUES
(1, 'Rhoncus', NULL),
(2, 'Thriller', NULL),
(3, 'Platea', NULL),
(4, 'Inno', NULL),
(5, 'Vehicula', NULL),
(6, 'Maecenas', NULL),
(7, 'Nisl', NULL),
(8, 'Est', NULL),
(9, 'Novel', NULL),
(10, 'Morbi', NULL),
(11, 'Other', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `email` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES
(6, 'Victor', 'fda9b0eabe78a32d3a222a3dcc08960a', 'c42ff7e432fef9010a32d7b9c78fb428'),
(8, 'Victor33', 'c4ab9dbf1855889902bc21a442368488', '20384d13c0154b1f8f9f091f15b0817c'),
(9, 'Victor44', 'c2d0c3f967feeebffe0fcc4b0de2bd1a', 'af8c5615cb49c537ee9de114d30aa8e2'),
(10, 'Ira', 'fda9b0eabe78a32d3a222a3dcc08960a', '0ec11c8b50d7e577356449d6346ac8b0'),
(13, 'klo', 'fda9b0eabe78a32d3a222a3dcc08960a', 'e5b379d1eb74da46f59c065d129940dc'),
(14, 'www', 'fda9b0eabe78a32d3a222a3dcc08960a', '621088d1a086077fbb63a807810b5239'),
(15, 'www2', 'fda9b0eabe78a32d3a222a3dcc08960a', '89660e7902e152247418206c1a8317cb'),
(16, 'j9', 'fda9b0eabe78a32d3a222a3dcc08960a', 'a2afd88af95965924edf89841b75148a'),
(17, 'e', 'fda9b0eabe78a32d3a222a3dcc08960a', '9ace137f6d6c00c5db5377de5890f3d8'),
(18, 'iq', 'fda9b0eabe78a32d3a222a3dcc08960a', '3280f8f5fe93d8343a45c48257f290e1');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `style_id` (`style_id`);

--
-- Індекси таблиці `book_author`
--
ALTER TABLE `book_author`
  ADD PRIMARY KEY (`book_id`,`author_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Індекси таблиці `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT для таблиці `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;
--
-- AUTO_INCREMENT для таблиці `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблиці `style`
--
ALTER TABLE `style`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`style_id`) REFERENCES `style` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_author_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `style`
--
ALTER TABLE `style`
  ADD CONSTRAINT `style_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `style` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
