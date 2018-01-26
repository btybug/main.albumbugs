-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 07:16 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `albumbugs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_pages`
--

CREATE TABLE `admin_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `redirect_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `layout_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_type` tinyint(4) NOT NULL DEFAULT '0',
  `main_content` text COLLATE utf8_unicode_ci,
  `header` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer` tinyint(4) NOT NULL DEFAULT '0',
  `page_icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'individual',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_default` tinyint(4) NOT NULL DEFAULT '1',
  `settings` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_pages`
--

INSERT INTO `admin_pages` (`id`, `module_id`, `title`, `url`, `permission`, `redirect_to`, `slug`, `layout_id`, `content_type`, `main_content`, `header`, `footer`, `page_icon`, `child_status`, `parent_id`, `is_default`, `settings`, `created_at`, `updated_at`) VALUES
(0, 'sahak.avatar/payments', 'attributes', '/admin/payments/settings/attributes', 'admin.payments.settings.attributes', '', '5a5c576090120', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-15 15:25:20', '2018-01-15 15:25:20'),
(1, 'btybug/uploads', 'uploads', '/admin/uploads', 'admin.uploads', '', '5a25429b82346', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(2, 'btybug/uploads', 'modules', '/admin/uploads/modules', 'admin.uploads.modules', '', '5a25429b8c349', NULL, 0, NULL, NULL, 0, NULL, 'individual', 1, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(3, 'btybug/uploads', 'core-packages', '/admin/uploads/modules/core-packages', 'admin.uploads.modules.core-packages', '', '5a25429b931b1', NULL, 0, NULL, NULL, 0, NULL, 'individual', 2, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(4, 'btybug/uploads', 'update-cms', '/admin/uploads/modules/update-cms', 'admin.uploads.modules.update-cms', '', '5a25429ba18e4', NULL, 0, NULL, NULL, 0, NULL, 'individual', 2, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(5, 'btybug/uploads', 'explore', '/admin/uploads/modules/{param}/{param}/explore', 'admin.uploads.modules.{param}.{param}.explore', '', '5a25429baff9c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 2, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(6, 'btybug/uploads', 'extra-packages', '/admin/uploads/modules/extra-packages', 'admin.uploads.modules.extra-packages', '', '5a25429bb96c0', NULL, 0, NULL, NULL, 0, NULL, 'individual', 2, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(7, 'btybug/uploads', 'explore', '/admin/uploads/modules/extra-packages/{param}/{param}/explore', 'admin.uploads.modules.extra-packages.{param}.{param}.explore', '', '5a25429bc2222', NULL, 0, NULL, NULL, 0, NULL, 'individual', 6, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(8, 'btybug/uploads', 'apps', '/admin/uploads/apps', 'admin.uploads.apps', '', '5a25429bca415', NULL, 0, NULL, NULL, 0, NULL, 'individual', 1, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(9, 'btybug/uploads', 'core-apps', '/admin/uploads/apps/core-apps', 'admin.uploads.apps.core-apps', '', '5a25429bd27a8', NULL, 0, NULL, NULL, 0, NULL, 'individual', 8, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(10, 'btybug/uploads', 'explore', '/admin/uploads/apps/{param}/{param}/explore', 'admin.uploads.apps.{param}.{param}.explore', '', '5a25429bdc99f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 8, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(11, 'btybug/uploads', 'extra-apps', '/admin/uploads/apps/extra-apps', 'admin.uploads.apps.extra-apps', '', '5a25429be6c05', NULL, 0, NULL, NULL, 0, NULL, 'individual', 8, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(12, 'btybug/uploads', 'explore', '/admin/uploads/apps/extra-apps/{param}/{param}/explore', 'admin.uploads.apps.extra-apps.{param}.{param}.explore', '', '5a25429bf2ed5', NULL, 0, NULL, NULL, 0, NULL, 'individual', 11, 0, NULL, '2017-12-04 20:42:03', '2017-12-04 20:42:03'),
(13, 'btybug/uploads', 'gears', '/admin/uploads/gears', 'admin.uploads.gears', '', '5a25429c07022', NULL, 0, NULL, NULL, 0, NULL, 'individual', 1, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(14, 'btybug/uploads', 'back-end', '/admin/uploads/gears/back-end', 'admin.uploads.gears.back-end', '', '5a25429c0f1e2', NULL, 0, NULL, NULL, 0, NULL, 'individual', 13, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(15, 'btybug/uploads', 'front-end', '/admin/uploads/gears/front-end', 'admin.uploads.gears.front-end', '', '5a25429c17463', NULL, 0, NULL, NULL, 0, NULL, 'individual', 13, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(16, 'btybug/uploads', 'units-variations', '/admin/uploads/gears/units-variations/{param}', 'admin.uploads.gears.units-variations.{param}', '', '5a25429c237bf', NULL, 0, NULL, NULL, 0, NULL, 'individual', 13, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(17, 'btybug/uploads', 'live-settings', '/admin/uploads/gears/live-settings/{param}', 'admin.uploads.gears.live-settings.{param}', '', '5a25429c2b9e3', NULL, 0, NULL, NULL, 0, NULL, 'individual', 13, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(18, 'btybug/uploads', 'settings', '/admin/uploads/gears/settings/{param}', 'admin.uploads.gears.settings.{param}', '', '5a25429c33c04', NULL, 0, NULL, NULL, 0, NULL, 'individual', 13, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(19, 'btybug/uploads', '{param}', '/admin/uploads/gears/settings-iframe/{param}/{param}', 'admin.uploads.gears.settings-iframe.{param}.{param}', '', '5a25429c3be94', NULL, 0, NULL, NULL, 0, NULL, 'individual', 13, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(20, 'btybug/uploads', 'layouts', '/admin/uploads/layouts', 'admin.uploads.layouts', '', '5a25429c44081', NULL, 0, NULL, NULL, 0, NULL, 'individual', 1, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(21, 'btybug/uploads', 'back-end', '/admin/uploads/layouts/back-end', 'admin.uploads.layouts.back-end', '', '5a25429c4c3aa', NULL, 0, NULL, NULL, 0, NULL, 'individual', 20, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(22, 'btybug/uploads', 'front-end', '/admin/uploads/layouts/front-end', 'admin.uploads.layouts.front-end', '', '5a25429c5459c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 20, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(23, 'btybug/uploads', 'settings', '/admin/uploads/layouts/settings/{param}', 'admin.uploads.layouts.settings.{param}', '', '5a25429c5c8b7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 20, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(24, 'btybug/uploads', 'variations', '/admin/uploads/layouts/variations/{param}', 'admin.uploads.layouts.variations.{param}', '', '5a25429c64849', NULL, 0, NULL, NULL, 0, NULL, 'individual', 20, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(25, 'btybug/uploads', 'assets', '/admin/uploads/assets', 'admin.uploads.assets', '', '5a25429c6e069', NULL, 0, NULL, NULL, 0, NULL, 'individual', 1, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(26, 'btybug/uploads', 'js', '/admin/uploads/assets/js', 'admin.uploads.assets.js', '', '5a25429c74384', NULL, 0, NULL, NULL, 0, NULL, 'individual', 25, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(27, 'btybug/uploads', 'css', '/admin/uploads/assets/css', 'admin.uploads.assets.css', '', '5a25429c7d16c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 25, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(28, 'btybug/uploads', 'fonts', '/admin/uploads/assets/fonts', 'admin.uploads.assets.fonts', '', '5a25429c87409', NULL, 0, NULL, NULL, 0, NULL, 'individual', 25, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(29, 'btybug/uploads', 'market', '/admin/uploads/market', 'admin.uploads.market', '', '5a25429c8f5c2', NULL, 0, NULL, NULL, 0, NULL, 'individual', 1, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(30, 'btybug/uploads', 'packages', '/admin/uploads/market/packages', 'admin.uploads.market.packages', '', '5a25429c97898', NULL, 0, NULL, NULL, 0, NULL, 'individual', 29, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(31, 'btybug/uploads', 'composer', '/admin/uploads/market/composer', 'admin.uploads.market.composer', '', '5a25429c9fad8', NULL, 0, NULL, NULL, 0, NULL, 'individual', 29, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(32, 'btybug/console', 'console', '/admin/console', 'admin.console', '', '5a25429ca95f0', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(33, 'btybug/console', 'structure', '/admin/console/structure', 'admin.console.structure', '', '5a25429cb2067', NULL, 0, NULL, NULL, 0, NULL, 'individual', 32, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(34, 'btybug/console', 'pages', '/admin/console/structure/pages', 'admin.console.structure.pages', '', '5a25429cba1fb', NULL, 0, NULL, NULL, 0, NULL, 'individual', 33, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(35, 'btybug/console', 'settings', '/admin/console/structure/pages/settings/{param}', 'admin.console.structure.pages.settings.{param}', '', '5a25429cc24a5', NULL, 0, NULL, NULL, 0, NULL, 'individual', 34, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(36, 'btybug/console', 'urls', '/admin/console/structure/urls', 'admin.console.structure.urls', '', '5a25429cca6c8', NULL, 0, NULL, NULL, 0, NULL, 'individual', 33, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(37, 'btybug/console', 'classify', '/admin/console/structure/classify', 'admin.console.structure.classify', '', '5a25429cd28f7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 33, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(38, 'btybug/console', 'tables', '/admin/console/structure/tables', 'admin.console.structure.tables', '', '5a25429cdd265', NULL, 0, NULL, NULL, 0, NULL, 'individual', 33, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(39, 'btybug/console', 'settings', '/admin/console/structure/settings', 'admin.console.structure.settings', '', '5a25429ce6f2f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 33, 0, NULL, '2017-12-04 20:42:04', '2017-12-04 20:42:04'),
(40, 'btybug/console', 'menus', '/admin/console/structure/menus', 'admin.console.structure.menus', '', '5a25429d0712e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 33, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(41, 'btybug/console', '{param}', '/admin/console/structure/menus/edit/{param}/{param}', 'admin.console.structure.menus.edit.{param}.{param}', '', '5a25429d11539', NULL, 0, NULL, NULL, 0, NULL, 'individual', 40, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(42, 'btybug/console', '{param}', '/admin/console/structure/menus/view/{param}/{param}', 'admin.console.structure.menus.view.{param}.{param}', '', '5a25429d19935', NULL, 0, NULL, NULL, 0, NULL, 'individual', 40, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(43, 'btybug/console', 'settings', '/admin/console/settings', 'admin.console.settings', '', '5a25429d2e2b2', NULL, 0, NULL, NULL, 0, NULL, 'individual', 32, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(44, 'btybug/console', 'general', '/admin/console/settings/general', 'admin.console.settings.general', '', '5a25429d35f8a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 43, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(45, 'btybug/console', 'css-js', '/admin/console/settings/css-js', 'admin.console.settings.css-js', '', '5a25429d3e2d7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 43, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(46, 'btybug/console', 'general', '/admin/console/general', 'admin.console.general', '', '5a25429d46504', NULL, 0, NULL, NULL, 0, NULL, 'individual', 32, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(47, 'btybug/console', 'validations', '/admin/console/general/validations', 'admin.console.general.validations', '', '5a25429d52a04', NULL, 0, NULL, NULL, 0, NULL, 'individual', 46, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(48, 'btybug/console', 'trigger-events', '/admin/console/general/trigger-events', 'admin.console.general.trigger-events', '', '5a25429d5a9e0', NULL, 0, NULL, NULL, 0, NULL, 'individual', 46, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(49, 'btybug/user', 'users', '/admin/users', 'admin.users', '', '5a25429d64025', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(50, 'btybug/user', 'create', '/admin/users/create', 'admin.users.create', '', '5a25429d73d30', NULL, 0, NULL, NULL, 0, NULL, 'individual', 49, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(51, 'btybug/user', 'edit', '/admin/users/edit/{param}', 'admin.users.edit.{param}', '', '5a25429d7b342', NULL, 0, NULL, NULL, 0, NULL, 'individual', 49, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(52, 'btybug/user', 'show', '/admin/users/show/{param}', 'admin.users.show.{param}', '', '5a25429d8368a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 49, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(53, 'btybug/user', 'settings', '/admin/users/settings', 'admin.users.settings', '', '5a25429d8b82e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 49, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(54, 'btybug/user', 'admins', '/admin/users/admins', 'admin.users.admins', '', '5a25429d93b9f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 49, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(55, 'btybug/user', 'create', '/admin/users/admins/create', 'admin.users.admins.create', '', '5a25429d9bd6e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 54, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(56, 'btybug/user', 'edit', '/admin/users/admins/edit/{param}', 'admin.users.admins.edit.{param}', '', '5a25429da3f1a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 54, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(57, 'btybug/user', 'roles', '/admin/users/roles', 'admin.users.roles', '', '5a25429dac0db', NULL, 0, NULL, NULL, 0, NULL, 'individual', 49, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(58, 'btybug/user', 'create', '/admin/users/roles/create', 'admin.users.roles.create', '', '5a25429dba698', NULL, 0, NULL, NULL, 0, NULL, 'individual', 57, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(59, 'btybug/user', 'edit', '/admin/users/roles/edit/{param}', 'admin.users.roles.edit.{param}', '', '5a25429dc276a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 57, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(60, 'btybug/user', 'permissions', '/admin/users/roles/permissions/{param}', 'admin.users.roles.permissions.{param}', '', '5a25429dca9b2', NULL, 0, NULL, NULL, 0, NULL, 'individual', 57, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(61, 'btybug/user', 'statuses', '/admin/users/roles/statuses', 'admin.users.roles.statuses', '', '5a25429dd2bc3', NULL, 0, NULL, NULL, 0, NULL, 'individual', 57, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(62, 'btybug/user', 'create', '/admin/users/roles/statuses/create', 'admin.users.roles.statuses.create', '', '5a25429ddf0b9', NULL, 0, NULL, NULL, 0, NULL, 'individual', 61, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(63, 'btybug/user', 'edit', '/admin/users/roles/statuses/edit/{param}', 'admin.users.roles.statuses.edit.{param}', '', '5a25429df14d1', NULL, 0, NULL, NULL, 0, NULL, 'individual', 61, 0, NULL, '2017-12-04 20:42:05', '2017-12-04 20:42:05'),
(64, 'btybug/user', 'conditions', '/admin/users/roles/conditions', 'admin.users.roles.conditions', '', '5a25429e07600', NULL, 0, NULL, NULL, 0, NULL, 'individual', 57, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(65, 'btybug/frontsite', 'front-site', '/admin/front-site', 'admin.front-site', '', '5a25429e10b29', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(66, 'btybug/frontsite', 'structure', '/admin/front-site/structure', 'admin.front-site.structure', '', '5a25429e19ab2', NULL, 0, NULL, NULL, 0, NULL, 'individual', 65, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(67, 'btybug/frontsite', 'front-pages', '/admin/front-site/structure/front-pages', 'admin.front-site.structure.front-pages', '', '5a25429e21cfb', NULL, 0, NULL, NULL, 0, NULL, 'individual', 66, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(68, 'btybug/frontsite', 'settings', '/admin/front-site/structure/front-pages/settings/{param}', 'admin.front-site.structure.front-pages.settings.{param}', '', '5a25429e29f37', NULL, 0, NULL, NULL, 0, NULL, 'individual', 67, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(69, 'btybug/frontsite', 'general', '/admin/front-site/structure/front-pages/general/{param}', 'admin.front-site.structure.front-pages.general.{param}', '', '5a25429e3226c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 67, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(70, 'btybug/frontsite', '{param}', '/admin/front-site/structure/front-pages/preview/{param}/{param}', 'admin.front-site.structure.front-pages.preview.{param}.{param}', '', '5a25429e3b31c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 67, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(71, 'btybug/frontsite', 'classify', '/admin/front-site/structure/classify', 'admin.front-site.structure.classify', '', '5a25429e448af', NULL, 0, NULL, NULL, 0, NULL, 'individual', 66, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(72, 'btybug/frontsite', 'menus', '/admin/front-site/structure/menus', 'admin.front-site.structure.menus', '', '5a25429e4c8d7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 66, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(73, 'btybug/frontsite', 'edit', '/admin/front-site/structure/menus/edit/{param}', 'admin.front-site.structure.menus.edit.{param}', '', '5a25429e54b7b', NULL, 0, NULL, NULL, 0, NULL, 'individual', 72, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(74, 'btybug/frontsite', 'hooks', '/admin/front-site/structure/hooks', 'admin.front-site.structure.hooks', '', '5a25429e60e7f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 66, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(75, 'btybug/frontsite', 'edit', '/admin/front-site/structure/hooks/edit/{param}', 'admin.front-site.structure.hooks.edit.{param}', '', '5a25429e691a1', NULL, 0, NULL, NULL, 0, NULL, 'individual', 74, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(76, 'btybug/frontsite', 'filters', '/admin/front-site/structure/filters', 'admin.front-site.structure.filters', '', '5a25429e71419', NULL, 0, NULL, NULL, 0, NULL, 'individual', 66, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(77, 'btybug/frontsite', 'settings', '/admin/front-site/settings', 'admin.front-site.settings', '', '5a25429e7955e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 65, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(78, 'btybug/frontsite', 'login-registration', '/admin/front-site/settings/login-registration', 'admin.front-site.settings.login-registration', '', '5a25429e817dd', NULL, 0, NULL, NULL, 0, NULL, 'individual', 77, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(79, 'btybug/frontsite', 'notifications', '/admin/front-site/settings/notifications', 'admin.front-site.settings.notifications', '', '5a25429e8bbf4', NULL, 0, NULL, NULL, 0, NULL, 'individual', 77, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(80, 'btybug/frontsite', 'url-menger', '/admin/front-site/settings/url-menger', 'admin.front-site.settings.url-menger', '', '5a25429e93c9f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 77, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(81, 'btybug/frontsite', 'adminemails', '/admin/front-site/settings/adminemails', 'admin.front-site.settings.adminemails', '', '5a25429e9c2a3', NULL, 0, NULL, NULL, 0, NULL, 'individual', 77, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(82, 'btybug/frontsite', 'lang', '/admin/front-site/settings/lang', 'admin.front-site.settings.lang', '', '5a25429ea41bd', NULL, 0, NULL, NULL, 0, NULL, 'individual', 77, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(83, 'btybug/frontsite', 'api-settings', '/admin/front-site/settings/api-settings', 'admin.front-site.settings.api-settings', '', '5a25429eac62a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 77, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(84, 'btybug/frontsite', 'frontend', '/admin/front-site/settings/frontend', 'admin.front-site.settings.frontend', '', '5a25429eb4957', NULL, 0, NULL, NULL, 0, NULL, 'individual', 77, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(85, 'btybug/frontsite', 'event', '/admin/front-site/event', 'admin.front-site.event', '', '5a25429ec21f6', NULL, 0, NULL, NULL, 0, NULL, 'individual', 65, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(86, 'btybug/framework', 'framework', '/admin/framework', 'admin.framework', '', '5a25429ecad06', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(87, 'btybug/framework', 'css', '/admin/framework/css', 'admin.framework.css', '', '5a25429ed3d6a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 86, 0, NULL, '2017-12-04 20:42:06', '2017-12-04 20:42:06'),
(88, 'btybug.hook/blog', 'blog', '/admin/blog', 'admin.blog', '', '5a254ce2f11ad', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2017-12-04 21:25:54', '2017-12-04 21:25:54'),
(89, 'btybug.hook/blog', 'posts', '/admin/blog/posts', 'admin.blog.posts', '', '5a254ce305745', NULL, 0, NULL, NULL, 0, NULL, 'individual', 88, 0, NULL, '2017-12-04 21:25:55', '2017-12-04 21:25:55'),
(90, 'btybug.hook/blog', 'new-post', '/admin/blog/new-post', 'admin.blog.new-post', '', '5a254ce30b6f5', NULL, 0, NULL, NULL, 0, NULL, 'individual', 88, 0, NULL, '2017-12-04 21:25:55', '2017-12-04 21:25:55'),
(91, 'btybug.hook/blog', 'settings', '/admin/blog/settings', 'admin.blog.settings', '', '5a254ce314365', NULL, 0, NULL, NULL, 0, NULL, 'individual', 88, 0, NULL, '2017-12-04 21:25:55', '2017-12-04 21:25:55'),
(92, 'btybug.hook/blog', 'form-bulder', '/admin/blog/form-bulder', 'admin.blog.form-bulder', '', '5a254ce31c5f3', NULL, 0, NULL, NULL, 0, NULL, 'individual', 88, 0, NULL, '2017-12-04 21:25:55', '2017-12-04 21:25:55'),
(93, 'btybug.hook/blog', 'edit-post', '/admin/blog/edit-post', 'admin.blog.edit-post', '', '5a26db97c2f1c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 88, 0, NULL, '2017-12-06 01:47:03', '2017-12-06 01:47:03'),
(94, 'btybug.hook/blog', 'edit-post', '/admin/blog/edit-post/{param}', 'admin.blog.edit-post.{param}', '', '5a26db97cdc46', NULL, 0, NULL, NULL, 0, NULL, 'individual', 93, 0, NULL, '2017-12-06 01:47:03', '2017-12-06 01:47:03'),
(95, 'btybug/console', 'edit', '/admin/console/structure/tables/edit/{param}', 'admin.console.structure.tables.edit.{param}', '', '5a27d4c64c3b7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 38, 0, NULL, '2017-12-06 19:30:14', '2017-12-06 19:30:14'),
(96, 'btybug/console', '{param}', '/admin/console/structure/tables/edit-column/{param}/{param}', 'admin.console.structure.tables.edit-column.{param}.{param}', '', '5a27d4c65d65e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 38, 0, NULL, '2017-12-06 19:30:14', '2017-12-06 19:30:14'),
(97, 'btybug/console', 'fields', '/admin/console/structure/fields', 'admin.console.structure.fields', '', '5a27d5cbc41c2', NULL, 0, NULL, NULL, 0, NULL, 'individual', 33, 0, NULL, '2017-12-06 19:34:35', '2017-12-06 19:34:35'),
(98, 'btybug/console', 'create', '/admin/console/structure/fields/create', 'admin.console.structure.fields.create', '', '5a27d5cbcd50e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 97, 0, NULL, '2017-12-06 19:34:35', '2017-12-06 19:34:35'),
(99, 'btybug/console', 'create-new', '/admin/console/structure/fields/create-new', 'admin.console.structure.fields.create-new', '', '5a27d5cbd264d', NULL, 0, NULL, NULL, 0, NULL, 'individual', 97, 0, NULL, '2017-12-06 19:34:35', '2017-12-06 19:34:35'),
(100, 'btybug/console', 'edit', '/admin/console/structure/fields/edit/{param}', 'admin.console.structure.fields.edit.{param}', '', '5a27db3a08e28', NULL, 0, NULL, NULL, 0, NULL, 'individual', 97, 0, NULL, '2017-12-06 19:57:46', '2017-12-06 19:57:46'),
(101, 'btybug.hook/blog', 'form-list', '/admin/blog/form-list', 'admin.blog.form-list', '', '5a3225c976f36', NULL, 0, NULL, NULL, 0, NULL, 'individual', 88, 0, NULL, '2017-12-14 15:18:33', '2017-12-14 15:18:33'),
(102, 'btybug.hook/blog', 'create', '/admin/blog/form-list/create', 'admin.blog.form-list.create', '', '5a3225c989011', NULL, 0, NULL, NULL, 0, NULL, 'individual', 101, 0, NULL, '2017-12-14 15:18:33', '2017-12-14 15:18:33'),
(103, 'btybug/uploads', 'gears-new', '/admin/uploads/gears-new', 'admin.uploads.gears-new', '', '5a3380eaa6de4', NULL, 0, NULL, NULL, 0, NULL, 'individual', 1, 0, NULL, '2017-12-15 15:59:38', '2017-12-15 15:59:38'),
(104, 'btybug/uploads', 'back-end', '/admin/uploads/gears-new/back-end', 'admin.uploads.gears-new.back-end', '', '5a3380eac31ce', NULL, 0, NULL, NULL, 0, NULL, 'individual', 103, 0, NULL, '2017-12-15 15:59:38', '2017-12-15 15:59:38'),
(105, 'btybug/uploads', 'front-end', '/admin/uploads/gears-new/front-end', 'admin.uploads.gears-new.front-end', '', '5a3380eacf81b', NULL, 0, NULL, NULL, 0, NULL, 'individual', 103, 0, NULL, '2017-12-15 15:59:38', '2017-12-15 15:59:38'),
(106, 'btybug/uploads', 'units-variations', '/admin/uploads/gears-new/units-variations/{param}', 'admin.uploads.gears-new.units-variations.{param}', '', '5a3380ead758a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 103, 0, NULL, '2017-12-15 15:59:38', '2017-12-15 15:59:38'),
(107, 'btybug/uploads', 'live-settings', '/admin/uploads/gears-new/live-settings/{param}', 'admin.uploads.gears-new.live-settings.{param}', '', '5a3380eadfdae', NULL, 0, NULL, NULL, 0, NULL, 'individual', 103, 0, NULL, '2017-12-15 15:59:38', '2017-12-15 15:59:38'),
(108, 'btybug/uploads', 'settings', '/admin/uploads/gears-new/settings/{param}', 'admin.uploads.gears-new.settings.{param}', '', '5a3380eae7a3e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 103, 0, NULL, '2017-12-15 15:59:38', '2017-12-15 15:59:38'),
(109, 'btybug/uploads', '{param}', '/admin/uploads/gears-new/settings-iframe/{param}/{param}', 'admin.uploads.gears-new.settings-iframe.{param}.{param}', '', '5a3380eaf0189', NULL, 0, NULL, NULL, 0, NULL, 'individual', 103, 0, NULL, '2017-12-15 15:59:38', '2017-12-15 15:59:38'),
(110, 'btybug.hook/blog', 'settings', '/admin/blog/form-list/settings', 'admin.blog.form-list.settings', '', '5a375915096d9', NULL, 0, NULL, NULL, 0, NULL, 'individual', 101, 0, NULL, '2017-12-18 13:58:45', '2017-12-18 13:58:45'),
(111, 'btybug.hook/blog', 'settings', '/admin/blog/form-list/settings/{param}', 'admin.blog.form-list.settings.{param}', '', '5a3759151574f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 110, 0, NULL, '2017-12-18 13:58:45', '2017-12-18 13:58:45'),
(112, 'btybug.hook/blog', 'view', '/admin/blog/form-list/view', 'admin.blog.form-list.view', '', '5a37ab0783137', NULL, 0, NULL, NULL, 0, NULL, 'individual', 101, 0, NULL, '2017-12-18 19:48:23', '2017-12-18 19:48:23'),
(113, 'btybug.hook/blog', 'view', '/admin/blog/form-list/view/{param}', 'admin.blog.form-list.view.{param}', '', '5a37ab078cfa8', NULL, 0, NULL, NULL, 0, NULL, 'individual', 112, 0, NULL, '2017-12-18 19:48:23', '2017-12-18 19:48:23'),
(114, 'btybug.hook/blog', 'edit', '/admin/blog/form-list/edit', 'admin.blog.form-list.edit', '', '5a38e475bdafd', NULL, 0, NULL, NULL, 0, NULL, 'individual', 101, 0, NULL, '2017-12-19 18:05:41', '2017-12-19 18:05:41'),
(115, 'btybug.hook/blog', 'edit', '/admin/blog/form-list/edit/{param}', 'admin.blog.form-list.edit.{param}', '', '5a38e475cd269', NULL, 0, NULL, NULL, 0, NULL, 'individual', 114, 0, NULL, '2017-12-19 18:05:41', '2017-12-19 18:05:41'),
(116, 'btybug.hook/blog', 'edit-form', '/admin/blog/form-list/edit-form', 'admin.blog.form-list.edit-form', '', '5a3a2dc11de34', NULL, 0, NULL, NULL, 0, NULL, 'individual', 101, 0, NULL, '2017-12-20 17:30:41', '2017-12-20 17:30:41'),
(117, 'btybug.hook/blog', 'edit-form', '/admin/blog/form-list/edit-form/{param}', 'admin.blog.form-list.edit-form.{param}', '', '5a3a2dc12b19f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 116, 0, NULL, '2017-12-20 17:30:41', '2017-12-20 17:30:41'),
(118, 'btybug/uploads', 'create', '/admin/uploads/gears-new/settings/create/{param}', 'admin.uploads.gears-new.settings.create.{param}', '', '5a3b5790dc0b4', NULL, 0, NULL, NULL, 0, NULL, 'individual', 103, 0, NULL, '2017-12-21 14:41:20', '2017-12-21 14:41:20'),
(119, 'btybug/console', 'view', '/admin/console/structure/fields/view/{param}', 'admin.console.structure.fields.view.{param}', '', '5a3b5790e807c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 97, 0, NULL, '2017-12-21 14:41:20', '2017-12-21 14:41:20'),
(120, 'sahak.avatar/forms', 'forms', '/admin/forms', 'admin.forms', '', '5a5359914bb5b', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2018-01-08 10:44:17', '2018-01-08 10:44:17'),
(121, 'sahak.avatar/forms', 'create', '/admin/forms/create', 'admin.forms.create', '', '5a535b4d8594e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 120, 0, NULL, '2018-01-08 10:51:41', '2018-01-08 10:51:41'),
(122, 'sahak.avatar/forms', 'fields', '/admin/forms/fields', 'admin.forms.fields', '', '5a53cbe0e4fa6', NULL, 0, NULL, NULL, 0, NULL, 'individual', 120, 0, NULL, '2018-01-08 18:52:00', '2018-01-08 18:52:00'),
(123, 'sahak.avatar/forms', 'settings', '/admin/forms/settings', 'admin.forms.settings', '', '5a53cbe0ec6a9', NULL, 0, NULL, NULL, 0, NULL, 'individual', 120, 0, NULL, '2018-01-08 18:52:00', '2018-01-08 18:52:00'),
(124, 'sahak.avatar/forms', 'fields', '/admin/forms/fields/{param}', 'admin.forms.fields.{param}', '', '5a54dcd757cee', NULL, 0, NULL, NULL, 0, NULL, 'individual', 120, 0, NULL, '2018-01-09 14:16:39', '2018-01-09 14:16:39'),
(125, 'sahak.avatar/forms', 'type-settings', '/admin/forms/type-settings', 'admin.forms.type-settings', '', '5a550596be742', NULL, 0, NULL, NULL, 0, NULL, 'individual', 120, 0, NULL, '2018-01-09 17:10:30', '2018-01-09 17:10:30'),
(126, 'sahak.avatar/forms', 'type-settings', '/admin/forms/type-settings/{param}', 'admin.forms.type-settings.{param}', '', '5a550596c87a7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 120, 0, NULL, '2018-01-09 17:10:30', '2018-01-09 17:10:30'),
(127, 'btybug/uploads', 'show-columns', '/admin/uploads/modules/datatable/show-columns/{param}', 'admin.uploads.modules.datatable.show-columns.{param}', '', '5a56019d1fab0', NULL, 0, NULL, NULL, 0, NULL, 'individual', 2, 0, NULL, '2018-01-10 11:05:49', '2018-01-10 11:05:49'),
(128, 'btybug/uploads', 'settings-for-frontend', '/admin/uploads/modules/datatable/settings-for-frontend/{param}', 'admin.uploads.modules.datatable.settings-for-frontend.{param}', '', '5a56019d2c750', NULL, 0, NULL, NULL, 0, NULL, 'individual', 2, 0, NULL, '2018-01-10 11:05:49', '2018-01-10 11:05:49'),
(129, 'btybug/uploads', 'create', '/admin/uploads/gears/settings/create/{param}', 'admin.uploads.gears.settings.create.{param}', '', '5a56019d306d6', NULL, 0, NULL, NULL, 0, NULL, 'individual', 13, 0, NULL, '2018-01-10 11:05:49', '2018-01-10 11:05:49'),
(130, 'btybug/uploads', 'create', '/admin/uploads/layouts/settings/create/{param}', 'admin.uploads.layouts.settings.create.{param}', '', '5a56019d33538', NULL, 0, NULL, NULL, 0, NULL, 'individual', 20, 0, NULL, '2018-01-10 11:05:49', '2018-01-10 11:05:49'),
(131, 'sahak.avatar/membership', 'membership', '/admin/membership', 'admin.membership', '', '5a5601f1a8d89', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2018-01-10 11:07:13', '2018-01-10 11:07:13'),
(132, 'sahak.avatar/membership', 'groups', '/admin/membership/groups', 'admin.membership.groups', '', '5a5601f1b9966', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 11:07:13', '2018-01-10 11:07:13'),
(133, 'sahak.avatar/membership', 'plans', '/admin/membership/plans', 'admin.membership.plans', '', '5a5601f1bb707', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 11:07:13', '2018-01-10 11:07:13'),
(134, 'sahak.avatar/membership', 'create', '/admin/membership/plans/create', 'admin.membership.plans.create', '', '5a5601f1bd9ed', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 11:07:13', '2018-01-10 11:07:13'),
(135, 'sahak.avatar/membership', 'payments', '/admin/membership/payments', 'admin.membership.payments', '', '5a5601f1bfa75', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 11:07:13', '2018-01-10 11:07:13'),
(136, 'sahak.avatar/membership', 'edit', '/admin/membership/plans/edit/{param}', 'admin.membership.plans.edit.{param}', '', '5a5603c78f041', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 11:15:03', '2018-01-10 11:15:03'),
(137, 'sahak.avatar/membership', 'settings', '/admin/membership/settings', 'admin.membership.settings', '', '5a5616f032a2a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 12:36:48', '2018-01-10 12:36:48'),
(138, 'sahak.avatar/membership', 'membership-types', '/admin/membership/membership-types', 'admin.membership.membership-types', '', '5a561c46ba714', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 12:59:34', '2018-01-10 12:59:34'),
(139, 'sahak.avatar/membership', 'manage-membership-types', '/admin/membership/manage-membership-types', 'admin.membership.manage-membership-types', '', '5a56457a78646', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 15:55:22', '2018-01-10 15:55:22'),
(140, 'sahak.avatar/membership', 'manage-membership-types', '/admin/membership/manage-membership-types/{param}', 'admin.membership.manage-membership-types.{param}', '', '5a56457a8203a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-10 15:55:22', '2018-01-10 15:55:22'),
(141, 'sahak.avatar/membership', 'stripe', '/admin/membership/stripe', 'admin.membership.stripe', '', '5a57511589463', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-11 10:57:09', '2018-01-11 10:57:09'),
(142, 'sahak.avatar/membership', 'members', '/admin/membership/members', 'admin.membership.members', '', '5a57691bcf625', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-11 12:39:39', '2018-01-11 12:39:39'),
(143, 'sahak.avatar/membership', 'membership-status', '/admin/membership/settings/membership-status', 'admin.membership.settings.membership-status', '', '5a57a67a4bdba', NULL, 0, NULL, NULL, 0, NULL, 'individual', 137, 0, NULL, '2018-01-11 17:01:30', '2018-01-11 17:01:30'),
(144, 'sahak.avatar/membership', 'edit', '/admin/membership/members/edit/{param}', 'admin.membership.members.edit.{param}', '', '5a57b153c3ba8', NULL, 0, NULL, NULL, 0, NULL, 'individual', 142, 0, NULL, '2018-01-11 17:47:47', '2018-01-11 17:47:47'),
(145, 'sahak.avatar/membership', 'create', '/admin/membership/settings/membership-status/create', 'admin.membership.settings.membership-status.create', '', '5a57b4ad64190', NULL, 0, NULL, NULL, 0, NULL, 'individual', 143, 0, NULL, '2018-01-11 18:02:05', '2018-01-11 18:02:05'),
(146, 'sahak.avatar/membership', 'edit', '/admin/membership/settings/membership-status/edit/{param}', 'admin.membership.settings.membership-status.edit.{param}', '', '5a57b4ad76e44', NULL, 0, NULL, NULL, 0, NULL, 'individual', 143, 0, NULL, '2018-01-11 18:02:05', '2018-01-11 18:02:05'),
(147, 'sahak.avatar/payments', 'payments', '/admin/payments/payments', 'admin.payments.payments', '', '5a58ec01b5d6a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2018-01-12 16:10:25', '2018-01-12 16:10:25'),
(148, 'sahak.avatar/payments', 'shopping-cart', '/admin/payments/shopping-cart', 'admin.payments.shopping-cart', '', '5a58ec01c2104', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2018-01-12 16:10:25', '2018-01-12 16:10:25'),
(149, 'sahak.avatar/payments', 'settings', '/admin/payments/settings', 'admin.payments.settings', '', '5a58ec01c4329', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2018-01-12 16:10:25', '2018-01-12 16:10:25'),
(150, 'sahak.avatar/payments', 'payments', '/admin/payments', 'admin.payments', '', '5a5a299e92296', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2018-01-13 14:45:34', '2018-01-13 14:45:34'),
(151, 'sahak.avatar/payments', 'stripe', '/admin/payments/settings/stripe', 'admin.payments.settings.stripe', '', '5a5a35b92833c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-13 15:37:13', '2018-01-13 15:37:13'),
(152, 'sahak.avatar/payments', 'paypal', '/admin/payments/settings/paypal', 'admin.payments.settings.paypal', '', '5a5a35b93410c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-13 15:37:13', '2018-01-13 15:37:13'),
(153, 'sahak.avatar/payments', 'general', '/admin/payments/settings/general', 'admin.payments.settings.general', '', '5a5a3719a181b', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-13 15:43:05', '2018-01-13 15:43:05'),
(154, 'sahak.avatar/payments', 'payment-gateways', '/admin/payments/settings/payment-gateways', 'admin.payments.settings.payment-gateways', '', '5a5a3719abdad', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-13 15:43:05', '2018-01-13 15:43:05'),
(155, 'sahak.avatar/payments', 'checkout', '/admin/payments/settings/checkout', 'admin.payments.settings.checkout', '', '5a5a40daae491', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-13 16:24:42', '2018-01-13 16:24:42'),
(156, 'sahak.avatar/membership', 'price', '/admin/membership/plans/edit/{param}/price', 'admin.membership.plans.edit.{param}.price', '', '5a5a469778336', NULL, 0, NULL, NULL, 0, NULL, 'individual', 133, 0, NULL, '2018-01-13 16:49:11', '2018-01-13 16:49:11'),
(157, 'sahak.avatar/payments', 'shopping-card', '/admin/payments/settings/shopping-card', 'admin.payments.settings.shopping-card', '', '5a5a47a0d208c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-13 16:53:36', '2018-01-13 16:53:36'),
(158, 'sahak.avatar/payments', 'price', '/admin/payments/settings/price', 'admin.payments.settings.price', '', '5a5a530992cfc', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-13 17:42:17', '2018-01-13 17:42:17'),
(159, 'sahak.avatar/payments', 'dashboard', '/admin/payments/dashboard', 'admin.payments.dashboard', '', '5a5a58aa46fd5', NULL, 0, NULL, NULL, 0, NULL, 'individual', 150, 0, NULL, '2018-01-13 18:06:18', '2018-01-13 18:06:18'),
(160, 'sahak.avatar/payments', 'user-payments', '/admin/payments/user-payments', 'admin.payments.user-payments', '', '5a5a58aa51805', NULL, 0, NULL, NULL, 0, NULL, 'individual', 150, 0, NULL, '2018-01-13 18:06:18', '2018-01-13 18:06:18'),
(161, 'sahak.avatar/payments', 'create', '/admin/payments/settings/attributes/create', 'admin.payments.settings.attributes.create', '', '5a5c839b9a0ee', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2018-01-15 18:34:03', '2018-01-15 18:34:03'),
(162, 'sahak.avatar/payments', 'attributes', '/admin/payments/settings/attributes/{param}', 'admin.payments.settings.attributes.{param}', '', '5a5c8a5febfd6', NULL, 0, NULL, NULL, 0, NULL, 'individual', 0, 0, NULL, '2018-01-15 19:02:55', '2018-01-15 19:02:55'),
(163, 'sahak.avatar/payments', 'edit', '/admin/payments/settings/attributes/{param}/edit', 'admin.payments.settings.attributes.{param}.edit', '', '5a5c8a60015df', NULL, 0, NULL, NULL, 0, NULL, 'individual', 162, 0, NULL, '2018-01-15 19:02:56', '2018-01-15 19:02:56'),
(164, 'sahak.avatar/payments', 'delete', '/admin/payments/settings/attributes/{param}/delete', 'admin.payments.settings.attributes.{param}.delete', '', '5a5c909fbdc40', NULL, 0, NULL, NULL, 0, NULL, 'individual', 162, 0, NULL, '2018-01-15 19:29:35', '2018-01-15 19:29:35'),
(165, 'sahak.avatar/payments', 'terms', '/admin/payments/settings/attributes/{param}/terms', 'admin.payments.settings.attributes.{param}.terms', '', '5a5c980098ebe', NULL, 0, NULL, NULL, 0, NULL, 'individual', 162, 0, NULL, '2018-01-15 20:01:04', '2018-01-15 20:01:04'),
(166, 'sahak.avatar/payments', 'create', '/admin/payments/settings/attributes/{param}/terms/create', 'admin.payments.settings.attributes.{param}.terms.create', '', '5a5c9800a272c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 165, 0, NULL, '2018-01-15 20:01:04', '2018-01-15 20:01:04'),
(167, 'sahak.avatar/payments', 'terms', '/admin/payments/settings/attributes/{param}/terms/{param}', 'admin.payments.settings.attributes.{param}.terms.{param}', '', '5a5ca3716f87d', NULL, 0, NULL, NULL, 0, NULL, 'individual', 165, 0, NULL, '2018-01-15 20:49:53', '2018-01-15 20:49:53'),
(168, 'sahak.avatar/payments', 'edit', '/admin/payments/settings/attributes/{param}/terms/{param}/edit', 'admin.payments.settings.attributes.{param}.terms.{param}.edit', '', '5a5ca371786e0', NULL, 0, NULL, NULL, 0, NULL, 'individual', 167, 0, NULL, '2018-01-15 20:49:53', '2018-01-15 20:49:53'),
(169, 'sahak.avatar/payments', 'delete', '/admin/payments/settings/attributes/{param}/terms/{param}/delete', 'admin.payments.settings.attributes.{param}.terms.{param}.delete', '', '5a5ca3717f4e4', NULL, 0, NULL, NULL, 0, NULL, 'individual', 167, 0, NULL, '2018-01-15 20:49:53', '2018-01-15 20:49:53'),
(170, 'sahak.avatar/payments', 'price', '/admin/payments/settings/price/{param}', 'admin.payments.settings.price.{param}', '', '5a5db391686c3', NULL, 0, NULL, NULL, 0, NULL, 'individual', 158, 0, NULL, '2018-01-16 16:10:57', '2018-01-16 16:10:57'),
(171, 'sahak.avatar/membership', 'membership-options', '/admin/membership/settings/membership-options', 'admin.membership.settings.membership-options', '', '5a5def75bf2e0', NULL, 0, NULL, NULL, 0, NULL, 'individual', 137, 0, NULL, '2018-01-16 20:26:29', '2018-01-16 20:26:29'),
(172, 'sahak.avatar/membership', 'products-settings', '/admin/membership/products-settings', 'admin.membership.products-settings', '', '5a5def75c9312', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-16 20:26:29', '2018-01-16 20:26:29'),
(173, 'sahak.avatar/membership', 'cars', '/admin/membership/cars', 'admin.membership.cars', '', '5a5df830ad837', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-16 21:03:44', '2018-01-16 21:03:44'),
(174, 'sahak.avatar/membership', 'posts', '/admin/membership/cars/posts', 'admin.membership.cars.posts', '', '5a5df830bbd60', NULL, 0, NULL, NULL, 0, NULL, 'individual', 173, 0, NULL, '2018-01-16 21:03:44', '2018-01-16 21:03:44'),
(175, 'sahak.avatar/membership', 'new-post', '/admin/membership/cars/new-post', 'admin.membership.cars.new-post', '', '5a5df830c3f81', NULL, 0, NULL, NULL, 0, NULL, 'individual', 173, 0, NULL, '2018-01-16 21:03:44', '2018-01-16 21:03:44'),
(176, 'sahak.avatar/membership', 'settings', '/admin/membership/cars/settings', 'admin.membership.cars.settings', '', '5a5df830cc0fa', NULL, 0, NULL, NULL, 0, NULL, 'individual', 173, 0, NULL, '2018-01-16 21:03:44', '2018-01-16 21:03:44'),
(177, 'sahak.avatar/membership', 'edit-post', '/admin/membership/cars/edit-post', 'admin.membership.cars.edit-post', '', '5a5df830d43b7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 173, 0, NULL, '2018-01-16 21:03:44', '2018-01-16 21:03:44'),
(178, 'sahak.avatar/membership', 'edit-post', '/admin/membership/cars/edit-post/{param}', 'admin.membership.cars.edit-post.{param}', '', '5a5df830dc6dd', NULL, 0, NULL, NULL, 0, NULL, 'individual', 177, 0, NULL, '2018-01-16 21:03:44', '2018-01-16 21:03:44'),
(179, 'sahak.avatar/membership', 'form-list', '/admin/membership/cars/form-list', 'admin.membership.cars.form-list', '', '5a5df830e48df', NULL, 0, NULL, NULL, 0, NULL, 'individual', 173, 0, NULL, '2018-01-16 21:03:44', '2018-01-16 21:03:44'),
(180, 'sahak.avatar/membership', 'create', '/admin/membership/cars/form-list/create', 'admin.membership.cars.form-list.create', '', '5a5df830ebd7a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 179, 0, NULL, '2018-01-16 21:03:44', '2018-01-16 21:03:44'),
(181, 'sahak.avatar/membership', 'edit-form', '/admin/membership/cars/form-list/edit-form', 'admin.membership.cars.form-list.edit-form', '', '5a5df83100af3', NULL, 0, NULL, NULL, 0, NULL, 'individual', 179, 0, NULL, '2018-01-16 21:03:45', '2018-01-16 21:03:45'),
(182, 'sahak.avatar/membership', 'edit-form', '/admin/membership/cars/form-list/edit-form/{param}', 'admin.membership.cars.form-list.edit-form.{param}', '', '5a5df83109052', NULL, 0, NULL, NULL, 0, NULL, 'individual', 181, 0, NULL, '2018-01-16 21:03:45', '2018-01-16 21:03:45'),
(183, 'sahak.avatar/membership', 'settings', '/admin/membership/cars/form-list/settings', 'admin.membership.cars.form-list.settings', '', '5a5df83112372', NULL, 0, NULL, NULL, 0, NULL, 'individual', 179, 0, NULL, '2018-01-16 21:03:45', '2018-01-16 21:03:45'),
(184, 'sahak.avatar/membership', 'settings', '/admin/membership/cars/form-list/settings/{param}', 'admin.membership.cars.form-list.settings.{param}', '', '5a5df83119b87', NULL, 0, NULL, NULL, 0, NULL, 'individual', 183, 0, NULL, '2018-01-16 21:03:45', '2018-01-16 21:03:45'),
(185, 'sahak.avatar/membership', 'view', '/admin/membership/cars/form-list/view', 'admin.membership.cars.form-list.view', '', '5a5df8311fce6', NULL, 0, NULL, NULL, 0, NULL, 'individual', 179, 0, NULL, '2018-01-16 21:03:45', '2018-01-16 21:03:45'),
(186, 'sahak.avatar/membership', 'view', '/admin/membership/cars/form-list/view/{param}', 'admin.membership.cars.form-list.view.{param}', '', '5a5df83127efc', NULL, 0, NULL, NULL, 0, NULL, 'individual', 185, 0, NULL, '2018-01-16 21:03:45', '2018-01-16 21:03:45'),
(187, 'sahak.avatar/membership', 'edit', '/admin/membership/cars/form-list/edit', 'admin.membership.cars.form-list.edit', '', '5a5df8312e208', NULL, 0, NULL, NULL, 0, NULL, 'individual', 179, 0, NULL, '2018-01-16 21:03:45', '2018-01-16 21:03:45'),
(188, 'sahak.avatar/membership', 'edit', '/admin/membership/cars/form-list/edit/{param}', 'admin.membership.cars.form-list.edit.{param}', '', '5a5df83134306', NULL, 0, NULL, NULL, 0, NULL, 'individual', 187, 0, NULL, '2018-01-16 21:03:45', '2018-01-16 21:03:45'),
(189, 'sahak.avatar/membership', 'options', '/admin/membership/cars/options', 'admin.membership.cars.options', '', '5a5e0951b8fb7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 173, 0, NULL, '2018-01-16 22:16:49', '2018-01-16 22:16:49'),
(190, 'sahak.avatar/membership', 'order-button', '/admin/membership/cars/order-button', 'admin.membership.cars.order-button', '', '5a5e0951c6080', NULL, 0, NULL, NULL, 0, NULL, 'individual', 173, 0, NULL, '2018-01-16 22:16:49', '2018-01-16 22:16:49'),
(191, 'sahak.avatar/membership', 'blogs', '/admin/membership/blogs', 'admin.membership.blogs', '', '5a5f1e3b24d7d', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-17 17:58:19', '2018-01-17 17:58:19'),
(192, 'sahak.avatar/membership', 'edit', '/admin/membership/blogs/edit/{param}', 'admin.membership.blogs.edit.{param}', '', '5a5f1eb4612b3', NULL, 0, NULL, NULL, 0, NULL, 'individual', 191, 0, NULL, '2018-01-17 18:00:20', '2018-01-17 18:00:20'),
(193, 'sahak.avatar/membership', 'membership', '/admin/membership/{param}', 'admin.membership.{param}', '', '5a5f2c60e2524', NULL, 0, NULL, NULL, 0, NULL, 'individual', 131, 0, NULL, '2018-01-17 18:58:40', '2018-01-17 18:58:40'),
(194, 'sahak.avatar/membership', 'posts', '/admin/membership/{param}/posts', 'admin.membership.{param}.posts', '', '5a5f2c60f0877', NULL, 0, NULL, NULL, 0, NULL, 'individual', 193, 0, NULL, '2018-01-17 18:58:40', '2018-01-17 18:58:40'),
(195, 'sahak.avatar/membership', 'new-post', '/admin/membership/{param}/new-post', 'admin.membership.{param}.new-post', '', '5a5f2c6104819', NULL, 0, NULL, NULL, 0, NULL, 'individual', 193, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(196, 'sahak.avatar/membership', 'settings', '/admin/membership/{param}/settings', 'admin.membership.{param}.settings', '', '5a5f2c610e189', NULL, 0, NULL, NULL, 0, NULL, 'individual', 193, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(197, 'sahak.avatar/membership', 'options', '/admin/membership/{param}/options', 'admin.membership.{param}.options', '', '5a5f2c6115a38', NULL, 0, NULL, NULL, 0, NULL, 'individual', 193, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(198, 'sahak.avatar/membership', 'order-button', '/admin/membership/{param}/order-button', 'admin.membership.{param}.order-button', '', '5a5f2c6123a22', NULL, 0, NULL, NULL, 0, NULL, 'individual', 193, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(199, 'sahak.avatar/membership', 'edit-post', '/admin/membership/{param}/edit-post', 'admin.membership.{param}.edit-post', '', '5a5f2c612d01f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 193, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(200, 'sahak.avatar/membership', 'edit-post', '/admin/membership/{param}/edit-post/{param}', 'admin.membership.{param}.edit-post.{param}', '', '5a5f2c61355ca', NULL, 0, NULL, NULL, 0, NULL, 'individual', 199, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(201, 'sahak.avatar/membership', 'form-list', '/admin/membership/{param}/form-list', 'admin.membership.{param}.form-list', '', '5a5f2c6140c2f', NULL, 0, NULL, NULL, 0, NULL, 'individual', 193, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(202, 'sahak.avatar/membership', 'create', '/admin/membership/{param}/form-list/create', 'admin.membership.{param}.form-list.create', '', '5a5f2c61499a4', NULL, 0, NULL, NULL, 0, NULL, 'individual', 201, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(203, 'sahak.avatar/membership', 'edit-form', '/admin/membership/{param}/form-list/edit-form', 'admin.membership.{param}.form-list.edit-form', '', '5a5f2c6151c7d', NULL, 0, NULL, NULL, 0, NULL, 'individual', 201, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(204, 'sahak.avatar/membership', 'edit-form', '/admin/membership/{param}/form-list/edit-form/{param}', 'admin.membership.{param}.form-list.edit-form.{param}', '', '5a5f2c6159d7e', NULL, 0, NULL, NULL, 0, NULL, 'individual', 203, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(205, 'sahak.avatar/membership', 'settings', '/admin/membership/{param}/form-list/settings', 'admin.membership.{param}.form-list.settings', '', '5a5f2c6161ef3', NULL, 0, NULL, NULL, 0, NULL, 'individual', 201, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(206, 'sahak.avatar/membership', 'settings', '/admin/membership/{param}/form-list/settings/{param}', 'admin.membership.{param}.form-list.settings.{param}', '', '5a5f2c616a150', NULL, 0, NULL, NULL, 0, NULL, 'individual', 205, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(207, 'sahak.avatar/membership', 'view', '/admin/membership/{param}/form-list/view', 'admin.membership.{param}.form-list.view', '', '5a5f2c6172a41', NULL, 0, NULL, NULL, 0, NULL, 'individual', 201, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41');
INSERT INTO `admin_pages` (`id`, `module_id`, `title`, `url`, `permission`, `redirect_to`, `slug`, `layout_id`, `content_type`, `main_content`, `header`, `footer`, `page_icon`, `child_status`, `parent_id`, `is_default`, `settings`, `created_at`, `updated_at`) VALUES
(208, 'sahak.avatar/membership', 'view', '/admin/membership/{param}/form-list/view/{param}', 'admin.membership.{param}.form-list.view.{param}', '', '5a5f2c617c00a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 207, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(209, 'sahak.avatar/membership', 'edit', '/admin/membership/{param}/form-list/edit', 'admin.membership.{param}.form-list.edit', '', '5a5f2c618428a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 201, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(210, 'sahak.avatar/membership', 'edit', '/admin/membership/{param}/form-list/edit/{param}', 'admin.membership.{param}.form-list.edit.{param}', '', '5a5f2c619296a', NULL, 0, NULL, NULL, 0, NULL, 'individual', 209, 0, NULL, '2018-01-17 18:58:41', '2018-01-17 18:58:41'),
(211, 'sahak.avatar/payments', 'sopping-cart', '/admin/payments/settings/sopping-cart', 'admin.payments.settings.sopping-cart', '', '5a6031f30e051', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-18 13:34:43', '2018-01-18 13:34:43'),
(212, 'sahak.avatar/forms', 'render-assets', '/admin/forms/render-assets', 'admin.forms.render-assets', '', '5a61ec21e2b0c', NULL, 0, NULL, NULL, 0, NULL, 'individual', 120, 0, NULL, '2018-01-19 21:01:21', '2018-01-19 21:01:21'),
(213, 'sahak.avatar/payments', 'tax-services', '/admin/payments/settings/tax-services', 'admin.payments.settings.tax-services', '', '5a6984ca519a9', NULL, 0, NULL, NULL, 0, NULL, 'individual', 149, 0, NULL, '2018-01-25 15:18:34', '2018-01-25 15:18:34'),
(214, 'sahak.avatar/payments', 'create', '/admin/payments/settings/tax-services/create', 'admin.payments.settings.tax-services.create', '', '5a6984ca604e5', NULL, 0, NULL, NULL, 0, NULL, 'individual', 213, 0, NULL, '2018-01-25 15:18:34', '2018-01-25 15:18:34'),
(215, 'sahak.avatar/payments', 'tax-services', '/admin/payments/settings/tax-services/{param}', 'admin.payments.settings.tax-services.{param}', '', '5a69c3af37dd9', NULL, 0, NULL, NULL, 0, NULL, 'individual', 213, 0, NULL, '2018-01-25 19:46:55', '2018-01-25 19:46:55'),
(216, 'sahak.avatar/payments', 'edit', '/admin/payments/settings/tax-services/{param}/edit', 'admin.payments.settings.tax-services.{param}.edit', '', '5a69c3af45940', NULL, 0, NULL, NULL, 0, NULL, 'individual', 215, 0, NULL, '2018-01-25 19:46:55', '2018-01-25 19:46:55'),
(217, 'sahak.avatar/payments', 'delete', '/admin/payments/settings/tax-services/{param}/delete', 'admin.payments.settings.tax-services.{param}.delete', '', '5a69c3af4c5d7', NULL, 0, NULL, NULL, 0, NULL, 'individual', 215, 0, NULL, '2018-01-25 19:46:55', '2018-01-25 19:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `json_settings` longtext COLLATE utf8_unicode_ci NOT NULL,
  `theme_css` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `role`, `json_settings`, `theme_css`, `created_at`, `updated_at`) VALUES
(1, '1', '{\"role\":\"1\",\"admin-body-class\":\"sidebar-fluid\",\"user_avatar_parent\":\"Select Class\",\"user_avatar\":\"Select Variation\",\"user_name_parent\":\"Select Class\",\"user_name\":\"Select Variation\",\"right_menu_parent\":\"Select Class\",\"right_menu\":\"Select Variation\",\"left_menu_parent\":\"Select Class\",\"left_menu\":\"Select Variation\",\"background_parent\":\"Select Class\",\"background\":\"Select Variation\",\"sidebarCollapsible\":\"1\",\"sidebarBehaviour\":\"fluid\",\"sitename_background_parent\":\"11\",\"sitename_background\":\"11\",\"sitename_parent\":\"Select Class\",\"sitename\":\"Select Variation\",\"logo_parent\":\"Select Class\",\"logo\":\"Select Variation\",\"active-widget\":\"on\",\"optional-widget\":\"2\",\"optional-menu-1\":\"Select Menu\",\"optional-menu-2\":\"Select Menu\"}', '[data-select=\'role\']{font-family:Times New Roman; font-size:18px; color:#3e37d2; }[data-select=\'sidebarCollapsible\']{font-family:Times New Roman; font-size:18px; color:#3e37d2; }[data-select=\'sitename_background\']{border-radius:1px; border-width:1px; border-style:none; border-color:#ef0000; background-color:#00abf5; padding:1px; color:#ffffff; }[data-select=\'optional-widget\']{font-family:Times New Roman; font-size:18px; color:#3e37d2; }', NULL, NULL),
(2, '2', '{\"role\":\"2\",\"admin-body-class\":\"\",\"user_avatar_parent\":\"8\",\"user_avatar\":\"8\",\"user_name_parent\":\"1\",\"user_name\":\"1\",\"right_menu_parent\":\"11\",\"right_menu\":\"11\",\"left_menu_parent\":\"Select Class\",\"left_menu\":\"Select Variation\",\"background_parent\":\"Select Class\",\"background\":\"Select Variation\",\"sidebarCollapsible\":\"1\",\"sidebarBehaviour\":\"fixed\",\"sitename_background_parent\":\"11\",\"sitename_background\":\"11\",\"sitename_parent\":\"Select Class\",\"sitename\":\"Select Variation\",\"logo_parent\":\"Select Class\",\"logo\":\"Select Variation\",\"optional-widget\":\"Select Widget\",\"optional-menu-1\":\"Select Menu\",\"optional-menu-2\":\"Select Menu\"}', '[data-select=\'role\']{font-family:Times New Roman; font-size:18px; color:#3e37d2; }[data-select=\'user_avatar\']{border-radius:5px; border-width:3px; border-style:solid; border-color:#ef0000; background-color:#ffffff; padding:13px; color:#992c2c; }[data-select=\'user_name\']{font-family:Times New Roman; font-size:18px; color:#3e37d2; }[data-select=\'right_menu\']{border-radius:1px; border-width:1px; border-style:none; border-color:#ef0000; background-color:#00abf5; padding:1px; color:#ffffff; }[data-select=\'sidebarCollapsible\']{font-family:Times New Roman; font-size:18px; color:#3e37d2; }[data-select=\'sitename_background\']{border-radius:1px; border-width:1px; border-style:none; border-color:#ef0000; background-color:#00abf5; padding:1px; color:#ffffff; }', NULL, NULL),
(3, '3', '{\"role\":\"7\",\"admin-body-class\":\"\",\"user_avatar_parent\":\"8\",\"user_avatar\":\"8\",\"user_name_parent\":\"1\",\"user_name\":\"22\",\"right_menu_parent\":\"Select Class\",\"right_menu\":\"Select Variation\",\"left_menu_parent\":\"Select Class\",\"left_menu\":\"Select Variation\",\"background_parent\":\"Select Class\",\"background\":\"Select Variation\",\"sidebarCollapsible\":\"1\",\"sidebarBehaviour\":\"fluid\",\"sitename_background_parent\":\"Select Class\",\"sitename_background\":\"Select Variation\",\"sitename_parent\":\"Select Class\",\"sitename\":\"Select Variation\",\"logo_parent\":\"Select Class\",\"logo\":\"Select Variation\",\"active-widget\":\"on\",\"optional-widget\":\"Select Widget\",\"optional-menu-1\":\"1\",\"active-menu-2\":\"on\",\"optional-menu-2\":\"11\"}', '[data-select=\'role\']{border-radius:5px; border-width:3px; border-style:solid; border-color:#ef0000; background-color:#ffffff; padding:13px; color:#992c2c; }[data-select=\'user_avatar\']{border-radius:5px; border-width:3px; border-style:solid; border-color:#ef0000; background-color:#ffffff; padding:13px; color:#992c2c; }[data-select=\'user_name\']{font-family:Times New Roman; font-size:18px; color:#3e37d2; \r\n}[data-select=\'sidebarCollapsible\']{font-family:Times New Roman; font-size:18px; color:#3e37d2; }', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assests`
--

CREATE TABLE `assests` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `folder` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `site_link` text COLLATE utf8_unicode_ci NOT NULL,
  `snippets` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assests`
--

INSERT INTO `assests` (`id`, `group_id`, `theme_id`, `title`, `section`, `folder`, `status`, `description`, `site_link`, `snippets`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 'jQuery Ui', '', '', 1, 'jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library. Whether you\'re building highly interactive web applications or you just need to add a date picker to a form control, jQuery UI is the perfect choice.', 'https://jqueryui.com/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(2, 2, 0, 'bootboxjs - Bootstrap modals made easy.', '', '', 0, 'Bootbox.js is a small JavaScript library which allows you to create programmatic dialog boxes using Bootstrap modals, without having to worry about creating, managing or removing any of the required DOM elements or JS event handlers.', 'http://bootboxjs.com/', 'a:1:{i:0;s:1:\"e\";}', '2016-02-04 09:16:43', '2016-06-28 02:34:15'),
(3, 3, 0, 'Bootstrap Colorpicker 2.3', '', '', 1, 'Colorpicker plugin for the Twitter Bootstrap toolkit. It basically adds a color picker to a field or any other element.can be used as a component alpha picker multiple formats: hex, rgb, rgba, hsl, hsla', 'http://mjolnic.com/bootstrap-colorpicker/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(4, 3, 0, 'X-editable', '', '', 0, 'In-place editing with Twitter Bootstrap, jQuery UI or pure jQuery.', 'https://github.com/vitalets/x-editable', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(5, 0, 0, 'Bootstrap Switch', '', '', 0, 'Turn checkboxes,  and radio buttons in toggle switches', 'http://www.bootstrap-switch.org/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(6, 0, 0, 'DropzoneJS', '', '', 0, 'DropzoneJS is an open source library that provides drag�n�drop file uploads with image previews.', 'http://www.dropzonejs.com/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(7, 0, 0, 'Nestable js', '', '', 0, 'Drag & drop hierarchical list with mouse and touch compatibility (jQuery plugin)', 'https://github.com/dbushell/Nestable', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(8, 0, 0, 'bxslider - Responsive slider', '', '', 0, 'The Responsive jQuery Content Slider Why should I use this slider? Fully responsive - will adapt to any device Horizontal, vertical, and fade modes Slides can contain images, video, or HTML content Advanced touch / swipe support built-in Uses CSS transitions for slide animation (native hardware acceleration!) Full callback API and public methods Small file size, fully themed, simple to implement Browser support: Firefox, Chrome, Safari, iOS, Android, IE7+ Tons of configuration options', 'http://bxslider.com/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(9, 0, 0, 'Datepicker for Bootstrap', '', '', 0, 'Add datepicker picker to field or to any other elemen', 'http://www.eyecon.ro/bootstrap-datepicker/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(10, 0, 0, 'Magnific Popup', '', '', 0, 'Magnific Popup is a responsive lightbox & dialog script with focus on performance and providing best experience for user with any device', 'http://dimsemenov.com/plugins/magnific-popup/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(11, 0, 0, 'http://silviomoreto.github.io/bootstrap-select/', '', '', 0, 'Bootstrap-select is a jQuery plugin that utilizes Bootstrap\'s dropdown.js to style and bring additional functionality to normal select boxes.', 'http://silviomoreto.github.io/bootstrap-select/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(12, 0, 0, 'Bootstrap �Validator - From', '', '', 0, 'A simple and user-friendly form validator plugin for Bootstrap 3', 'http://1000hz.github.io/bootstrap-validator/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(13, 0, 0, 'FlexSlider', '', '', 0, 'An awesome, fully responsive jQuery slider toolkit.Simple, semantic markup Supported in all major browsers Horizontal/vertical slide and fade animations Multiple slider support, Callback API, and more Hardware accelerated touch swipe support Custom navigation options Compatible with the latest version of jQuery', 'https://www.woothemes.com/flexslider/', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(14, 0, 0, 'metisMenu', '', '', 0, 'metisMenu - A jQuery menu plugin', 'https://github.com/onokumus/metisMenu', '', '2016-02-04 09:16:43', '2016-02-04 09:16:43'),
(15, 0, 0, 'fabric', 'libs', 'fabric', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(16, 0, 0, 'canvas2image', 'libs', 'canvas2image', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(17, 0, 0, 'jquery.nestable', 'libs', 'jquery.nestable', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(18, 0, 0, 'bootstrapDatetimepicker', 'libs', 'bootstrap-datetimepicker', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(19, 0, 0, 'bootstrapTouchspin', 'libs', 'bootstrap-touchspin', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(20, 0, 0, 'fontAwesome', 'libs', 'font-awesome', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(21, 0, 0, 'bootstrapEditable', 'libs', 'bootstrap-editable', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(22, 0, 0, 'tagIt', 'libs', 'tag-it', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(23, 0, 0, 'datatable', 'libs', 'datatable', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(24, 0, 0, 'bootstrapFormBuilder3', 'libs', 'Bootstrap-Form-Builder3', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(25, 0, 0, 'bootstrapSwitch', 'libs', 'bootstrap-switch', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(26, 0, 0, 'animate', 'libs', 'animate', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(27, 0, 0, 'editor', 'libs', 'editor', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(28, 0, 0, 'jquery.jplayer', 'libs', 'jquery.jplayer', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(29, 0, 0, 'jquery.easing', 'libs', 'jquery.easing', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(30, 0, 0, 'bootstrapNotify', 'libs', 'bootstrap-notify', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(31, 0, 0, 'wizard', 'libs', 'wizard', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(32, 0, 0, 'dropzone', 'libs', 'dropzone', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(33, 0, 0, 'bootstrapSelect', 'libs', 'bootstrap-select', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(34, 0, 0, 'jqueryDotdotdot', 'libs', 'jquery-dotdotdot', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(35, 0, 0, 'select2', 'libs', 'select2', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(36, 0, 0, 'jqueryFileTree', 'libs', 'jqueryFileTree', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(37, 0, 0, 'caman', 'libs', 'caman', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(38, 0, 0, 'bootstrapValidator', 'libs', 'bootstrap-validator', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(39, 0, 0, 'lodash', 'libs', 'lodash', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(40, 0, 0, 'gridstack', 'libs', 'gridstack', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(41, 0, 0, 'clipboard', 'libs', 'clipboard', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(42, 0, 0, 'jqueryui', 'libs', 'jqueryui', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(43, 0, 0, 'prettify', 'libs', 'prettify', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(44, 0, 0, 'metisMenu', 'libs', 'metisMenu', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(45, 0, 0, 'bootstrapStarRating', 'libs', 'bootstrap-star-rating', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(46, 0, 0, 'nestedSortable', 'libs', 'nestedSortable', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(47, 0, 0, 'bootbox', 'libs', 'bootbox', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(48, 0, 0, 'data', 'libs', 'data', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(49, 0, 0, 'jquery.mCustomScrollbar', 'libs', 'jquery.mCustomScrollbar', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(50, 0, 0, 'html2canvas', 'libs', 'html2canvas', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(51, 0, 0, 'bootstrapColorpicker', 'libs', 'bootstrap-colorpicker', 0, '', '', '', '2016-06-28 02:33:48', '2016-06-28 02:33:48'),
(52, 0, 0, 'jqueryUiTouch', 'libs', 'jquery-ui-touch', 0, '', '', '', '2016-07-01 18:31:35', '2016-07-01 18:31:35'),
(53, 0, 0, 'bootstrapFileinput', 'libs', 'bootstrap-fileinput', 0, '', '', '', '2016-08-10 07:56:47', '2016-08-10 07:56:47'),
(54, 0, 0, 'fabric', 'js', 'fabric', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(55, 0, 0, 'canvas2image', 'js', 'canvas2image', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(56, 0, 0, 'jquery.nestable', 'js', 'jquery.nestable', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(57, 0, 0, 'bootstrapDatetimepicker', 'js', 'bootstrap-datetimepicker', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(58, 0, 0, 'bootstrapTouchspin', 'js', 'bootstrap-touchspin', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(59, 0, 0, 'fontAwesome', 'js', 'font-awesome', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(60, 0, 0, 'bootstrapEditable', 'js', 'bootstrap-editable', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(61, 0, 0, 'formBuilder', 'js', 'form-builder', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(62, 0, 0, 'tagIt', 'js', 'tag-it', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(63, 0, 0, 'datatable', 'js', 'datatable', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(64, 0, 0, 'bootstrapFormBuilder3', 'js', 'Bootstrap-Form-Builder3', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(65, 0, 0, 'bootstrapSwitch', 'js', 'bootstrap-switch', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(66, 0, 0, 'animate', 'js', 'animate', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(67, 0, 0, 'tinymice', 'js', 'tinymice', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(68, 0, 0, 'editor', 'js', 'editor', 0, '', '', '', '2016-11-28 05:55:26', '2016-11-28 05:55:26'),
(69, 0, 0, 'forms', 'js', 'forms', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(70, 0, 0, 'jquery.jplayer', 'js', 'jquery.jplayer', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(71, 0, 0, 'bootstrapFileinput', 'js', 'bootstrap-fileinput', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(72, 0, 0, 'jquery.easing', 'js', 'jquery.easing', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(73, 0, 0, 'bootstrapNotify', 'js', 'bootstrap-notify', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(74, 0, 0, 'wizard', 'js', 'wizard', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(75, 0, 0, 'menumaker', 'js', 'menumaker', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(76, 0, 0, 'dropzone', 'js', 'dropzone', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(77, 0, 0, 'bootstrapSelect', 'js', 'bootstrap-select', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(78, 0, 0, 'jqueryDotdotdot', 'js', 'jquery-dotdotdot', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(79, 0, 0, 'select2', 'js', 'select2', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(80, 0, 0, 'jqueryFileTree', 'js', 'jqueryFileTree', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(81, 0, 0, 'caman', 'js', 'caman', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(82, 0, 0, 'bootstrapValidator', 'js', 'bootstrap-validator', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(83, 0, 0, 'uiElements', 'js', 'UiElements', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(84, 0, 0, 'lodash', 'js', 'lodash', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(85, 0, 0, 'codeEditor', 'js', 'code_editor', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(86, 0, 0, 'gridstack', 'js', 'gridstack', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(87, 0, 0, 'clipboard', 'js', 'clipboard', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(88, 0, 0, 'jqueryui', 'js', 'jqueryui', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(89, 0, 0, 'prettify', 'js', 'prettify', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(90, 0, 0, 'metisMenu', 'js', 'metisMenu', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(91, 0, 0, 'bootstrapStarRating', 'js', 'bootstrap-star-rating', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(92, 0, 0, 'components', 'js', 'components', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(93, 0, 0, 'nestedSortable', 'js', 'nestedSortable', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(94, 0, 0, 'bootbox', 'js', 'bootbox', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(95, 0, 0, 'data', 'js', 'data', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(96, 0, 0, 'jquery.mCustomScrollbar', 'js', 'jquery.mCustomScrollbar', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(97, 0, 0, 'html2canvas', 'js', 'html2canvas', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(98, 0, 0, 'bootstrapColorpicker', 'js', 'bootstrap-colorpicker', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27'),
(99, 0, 0, 'jqueryUiTouch', 'js', 'jquery-ui-touch', 0, '', '', '', '2016-11-28 05:55:27', '2016-11-28 05:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `all_pages_main_view` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `single_pages_main_view` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_manager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `form_settings` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author_id`, `title`, `description`, `slug`, `all_pages_main_view`, `single_pages_main_view`, `url_manager`, `status`, `form_settings`, `created_at`, `updated_at`) VALUES
(19, 1, 'fugitsu', NULL, 'fugitsu', NULL, NULL, NULL, 1, NULL, '2018-01-22 13:43:30', '2018-01-23 19:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gago` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `test_column` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `author_id`, `title`, `gago`, `description`, `test_column`, `image`, `slug`, `url`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'My First Post', '', 'Niki Postingan Sing Kepisan Njeh, Perdana Ngoten', NULL, 'images/posts/5a26dd098e39d.jpg', 'My-First-Post', NULL, NULL, NULL, 'published', '2017-10-03 12:10:22', '2017-12-06 01:53:13'),
(2, 1, 'test', '', 'test', NULL, 'images/posts/5a26d9f5e9a56.jpg', 'test', NULL, NULL, NULL, 'published', '2017-12-06 01:40:05', '2017-12-06 01:40:05'),
(3, 1, 'uuu', '', 'uuuu', NULL, 'images/posts/5a26da145b969.jpg', 'uuu', NULL, NULL, NULL, 'published', '2017-12-06 01:40:36', '2017-12-06 01:49:50'),
(4, 0, 'vvvvvvvvvvvvvvvvv', '1', 'ffffffffff', NULL, NULL, '', NULL, NULL, NULL, '0', '2017-12-25 10:32:12', NULL),
(6, 0, 'test', '1', 'test', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(7, 0, 'dcdcdc', '1', 'test for post', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(9, 0, 'dfvdfvdfvf', '1', 'fdvdfvfdv', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(10, 0, 'vvvvvvvvvvvvvvvv', '3', 'fvfv', NULL, NULL, NULL, NULL, NULL, NULL, '0', '2017-12-25 10:32:12', NULL),
(11, 0, 'sdscsdc', '1', 'cccccccccc', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(12, 0, 'vdfvdfvdfv', '1', 'vdfvdfvdf', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(13, 0, 'yyyyyyyyyyyyyyy', '1', 'yyyyyyyyyyyyyyyyyy', NULL, NULL, NULL, NULL, NULL, NULL, '0', '2017-12-25 10:32:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classifiers`
--

CREATE TABLE `classifiers` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classifiers`
--

INSERT INTO `classifiers` (`id`, `title`, `description`, `icon`, `type`, `created_at`, `updated_at`) VALUES
('5a1ffc82949bd', 'cdcd', NULL, 'fa-address-book', NULL, '2017-11-30 08:41:38', '2017-11-30 08:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `classifier_items`
--

CREATE TABLE `classifier_items` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `parent_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `classifier_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classifier_items`
--

INSERT INTO `classifier_items` (`id`, `title`, `icon`, `image`, `description`, `parent_id`, `classifier_id`, `created_at`, `updated_at`) VALUES
('1512108975180', 'child test', 'fa-adn', 'http://images.panda.org/assets/images/pages/welcome/orangutan_1600x1000_279157.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', '5a1ffc82949bd', '2017-12-01 09:29:12', '2017-12-01 09:29:12'),
('1512134766666', 'new child', 'fa-address-book', 'https://pbs.twimg.com/media/BNBoAe9CUAAjC0U.jpg', 'dscsdcsdcsdcsdcsdcsdcsdc', '0', '5a1ffc82949bd', '2017-12-01 09:29:12', '2017-12-01 09:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `classify_items_pages`
--

CREATE TABLE `classify_items_pages` (
  `front_page_id` int(10) UNSIGNED NOT NULL,
  `classifier_id` varchar(100) NOT NULL,
  `classifier_item_id` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classify_items_pages`
--

INSERT INTO `classify_items_pages` (`front_page_id`, `classifier_id`, `classifier_item_id`, `created_at`, `updated_at`) VALUES
(17, '58b81ed37d935', NULL, '2017-03-02 09:32:03', '2017-03-02 09:32:03'),
(18, '58b83a9face2d', NULL, '2017-03-02 11:30:39', '2017-03-02 11:30:39'),
(19, '58b83a9face2d', '58b83ab0db57f', '2017-03-02 11:30:56', '2017-03-02 11:30:56'),
(20, '58b83a9face2d', '58b83adeaef98', '2017-03-02 11:31:42', '2017-03-02 11:31:42'),
(21, '58b83a9face2d', '58b83b1884d35', '2017-03-02 11:32:40', '2017-03-02 11:32:40'),
(22, '58b83a9face2d', '58b83b5ec7ce9', '2017-03-02 11:33:50', '2017-03-02 11:33:50'),
(23, '58b83a9face2d', '58b83ba02ebd6', '2017-03-02 11:34:56', '2017-03-02 11:34:56'),
(24, '58b83a9face2d', '58b83bb2d0693', '2017-03-02 11:35:14', '2017-03-02 11:35:14'),
(25, '58b83a9face2d', '58b83c067d808', '2017-03-02 11:36:38', '2017-03-02 11:36:38'),
(26, '58b83a9face2d', '58b83c32858f8', '2017-03-02 11:37:22', '2017-03-02 11:37:22'),
(27, '58b83a9face2d', '58b83c496d55e', '2017-03-02 11:37:45', '2017-03-02 11:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT 'custom',
  `is_default` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `data`, `active`, `type`, `is_default`, `created_at`, `updated_at`) VALUES
(3, 'custom_collections', '{\"p\":{\"$default-text-old\":{\"display_name\":\"Default text\",\"classes\":\" text-opacity  panel-default \"},\"$text-custom\":{\"display_name\":\"Text custom\",\"classes\":\" text-wide  card-default \"}},\"button\":{\"$btn-save-default\":{\"display_name\":\"save button\",\"classes\":\" text-shadow  panel-default \"}},\"span\":{\"$badge-custom\":{\"display_name\":\"Badge Custom\",\"classes\":\" text-wide  form-field \"}},\"form\":{\"$form-stacked-custom\":{\"display_name\":\"Form stacked \",\"classes\":\" text-shadow  panel-default \"}}}', 1, 'custom', 0, '2017-04-19 05:37:04', '2017-04-19 05:37:04'),
(4, '58f73dd048d2e', '{\"p\":{\"$test-text-class\":{\"display_name\":\"Test\",\"classes\":\" text-opacity  panel-default \"},\"$text-intro\":{\"display_name\":\"Text intro\",\"classes\":\" text-wide  card-default \"}},\"button\":{\"$btn-save\":{\"display_name\":\"save button\",\"classes\":\" text-shadow  panel-default \"}},\"span\":{\"$badge\":{\"display_name\":\"Badge\",\"classes\":\" text-wide  form-field \"}},\"form\":{\"$form-stacked\":{\"display_name\":\"Form stacked \",\"classes\":\" text-shadow  panel-default \"}}}', 1, 'master', 0, '2017-04-19 05:37:04', '2017-04-27 02:45:49'),
(5, 'master collection new', '{\"a\":{\"$button-a-tag-master\":{\"display_name\":\"Buttons\",\"classes\":\" text-opacity  panel-default \"},\"$link-a-tag-master\":{\"display_name\":\"Links\",\"classes\":\" text-wide  card-default \"}},\"label\":{\"$form-label-master\":{\"display_name\":\"Form Label\",\"classes\":\" text-shadow  panel-default \"}},\"span\":{\"$badge-default\":{\"display_name\":\"Badge\",\"classes\":\" text-wide  form-field \"}},\"form\":{\"$form-stacked-default\":{\"display_name\":\"Form stacked \",\"classes\":\" text-shadow  panel-default \"}}}', 1, 'master', 0, '2017-04-19 05:51:07', '2017-04-19 06:35:44'),
(7, 'master collection extra', '{\"input\":{\"text-input-new\":{\"display_name\":\"Text Input\",\"classes\":\" text-opacity  panel-default \"},\"$email-input-new\":{\"display_name\":\"Email Input\",\"classes\":\" text-wide  card-default \"}},\"ul\":{\"$dropdown-ul\":{\"display_name\":\"dropdown ul\",\"classes\":\" text-shadow  panel-default \"},\"$links-ul\":{\"display_name\":\"Links list\",\"classes\":\" text-shadow  panel-default \"}},\"textarea\":{\"$textarea-description\":{\"display_name\":\"Description\",\"classes\":\" text-opacity  panel-default \"},\"$textarea-short-desc\":{\"display_name\":\"Short Description\",\"classes\":\" text-wide  card-default \"}},\"select\":{\"$form-select-new\":{\"display_name\":\"Form select \",\"classes\":\" text-shadow  panel-default \"}}}', 1, 'master', 0, '2017-04-19 05:53:48', '2017-04-19 06:35:45'),
(8, 'master collection custom', '{\"a\":{\"$button-a-tag\":{\"display_name\":\"Buttons\",\"classes\":\" text-opacity  panel-default \"},\"$link-a-tag\":{\"display_name\":\"Links\",\"classes\":\" text-wide  card-default \"}},\"div\":{\"$container-div\":{\"display_name\":\"Container\",\"classes\":\" text-shadow  panel-default \"},\"$box-div\":{\"display_name\":\"Box\",\"classes\":\" text-shadow  panel-default \"}},\"p\":{\"$text-class\":{\"display_name\":\"Text Default\",\"classes\":\" text-opacity  panel-default \"},\"$text-main\":{\"display_name\":\"Text main\",\"classes\":\" text-wide  card-default \"}},\"select\":{\"$form-select\":{\"display_name\":\"Form select \",\"classes\":\" text-shadow  panel-default \"}}}', 1, 'master', 0, '2017-04-19 05:54:28', '2017-04-19 07:19:18'),
(9, 'master_collection_default', '{\"p\":{\"$default-text\":{\"display_name\":\"Default text\",\"classes\":\"t-color-black absolute\"},\"$text-custom\":{\"display_name\":\"Text custom\",\"classes\":\" text-wide  card-default \"}},\"button\":{\"$btn-save-default\":{\"display_name\":\"save button\",\"classes\":\" text-shadow  panel-default \"}},\"span\":{\"$badge-custom\":{\"display_name\":\"Badge Custom\",\"classes\":\" text-wide  form-field \"}},\"form\":{\"$form-stacked-custom\":{\"display_name\":\"Form stacked \",\"classes\":\" text-shadow  panel-default \"}}}', 2, 'master', 1, '2017-04-19 08:01:12', '2017-05-30 05:37:06'),
(10, 'custom_collections_vers2', '{\"a\":{\"$button-a-tag\":{\"display_name\":\"Buttons\",\"classes\":\"text-opacitypanel-default\"},\"$link-a-tag\":{\"display_name\":\"Links\",\"classes\":\"text-widecard-default\"}},\"div\":{\"$container-div\":{\"display_name\":\"Container\",\"classes\":\"text-shadowpanel-default\"},\"$box-div\":{\"display_name\":\"Box\",\"classes\":\"text-shadowpanel-default\"}},\"p\":{\"$text-class-main\":{\"display_name\":\"TextDefault\",\"classes\":\"text-opacitypanel-default\"},\"$text-main\":{\"display_name\":\"Textmain\",\"classes\":\"text-widecard-default\"}},\"select\":{\"$form-select\":{\"display_name\":\"Formselect\",\"classes\":\"text-shadowpanel-default\"}}}', 1, 'custom', 0, '2017-04-19 05:37:04', '2017-04-19 05:37:04'),
(11, 'custom_collections_vers3', '{\"a\":{\"$button-a-tag-master\":{\"display_name\":\"Buttons\",\"classes\":\"text-opacitypanel-default\"},\"$link-a-tag-master\":{\"display_name\":\"Links\",\"classes\":\"text-widecard-default\"}},\"label\":{\"$form-label-master\":{\"display_name\":\"FormLabel\",\"classes\":\"text-shadowpanel-default\"}},\"span\":{\"$badge-default\":{\"display_name\":\"Badge\",\"classes\":\"text-wideform-field\"}},\"form\":{\"$form-stacked-default\":{\"display_name\":\"Formstacked\",\"classes\":\"text-shadowpanel-default\"}}}', 1, 'custom', 0, '2017-04-19 05:37:04', '2017-04-19 05:37:04'),
(12, 'custom_collections', '{\"p\":{\"$test-text-class\":{\"display_name\":\"Test\",\"classes\":\" text-opacity  panel-default \"},\"$text-intro\":{\"display_name\":\"Text intro\",\"classes\":\" text-wide  card-default \"}},\"button\":{\"$btn-save\":{\"display_name\":\"save button\",\"classes\":\" text-shadow  panel-default \"}},\"span\":{\"$badge\":{\"display_name\":\"Badge\",\"classes\":\" text-wide  form-field \"}},\"form\":{\"$form-stacked\":{\"display_name\":\"Form stacked \",\"classes\":\" text-shadow  panel-default \"}}}', 0, 'custom', 0, '2017-04-21 07:44:59', '2017-04-21 07:44:59'),
(13, '58f9fecb23685', '{\"p\":{\"$test-text-class\":{\"display_name\":\"Test\",\"classes\":\" text-opacity  panel-default \"},\"$text-intro\":{\"display_name\":\"Text intro\",\"classes\":\" text-wide  card-default \"}},\"button\":{\"$btn-save\":{\"display_name\":\"save button\",\"classes\":\" text-shadow  panel-default \"}},\"span\":{\"$badge\":{\"display_name\":\"Badge\",\"classes\":\" text-wide  form-field \"}},\"form\":{\"$form-stacked\":{\"display_name\":\"Form stacked \",\"classes\":\" text-shadow  panel-default \"}}}', 0, 'master', 0, '2017-04-21 07:44:59', '2017-04-21 07:44:59'),
(14, '59009556c93ed', '{\"p\":{\"$test-text-class\":{\"display_name\":\"Test\",\"classes\":\" text-opacity  panel-default \"},\"$text-intro\":{\"display_name\":\"Text intro\",\"classes\":\" text-wide  card-default \"}},\"button\":{\"$btn-save\":{\"display_name\":\"save button\",\"classes\":\" text-shadow  panel-default \"}},\"span\":{\"$badge\":{\"display_name\":\"Badge\",\"classes\":\" text-wide  form-field \"}},\"form\":{\"$form-stacked\":{\"display_name\":\"Form stacked \",\"classes\":\" text-shadow  panel-default \"}}}', 0, 'master', 0, '2017-04-26 07:40:54', '2017-04-26 07:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `columns`
--

CREATE TABLE `columns` (
  `id` int(10) UNSIGNED NOT NULL,
  `db_table` varchar(50) NOT NULL,
  `table_column` varchar(50) NOT NULL,
  `settings` text NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `columns`
--

INSERT INTO `columns` (`id`, `db_table`, `table_column`, `settings`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'posts', 'test_column', '', 1, '2017-12-19 18:28:50', '2017-12-19 18:28:50'),
(2, 'posts', 'gago', '', 1, '2017-12-20 21:19:24', '2017-12-20 21:19:24'),
(3, 'posts', 'cccc', '', 1, '2018-01-18 19:36:09', '2018-01-18 19:36:09'),
(4, 'qaq_aman', 'new_title', '', 1, '2018-01-18 19:39:46', '2018-01-18 19:39:46'),
(5, 'fugitsu', 'Test', '', 1, '2018-01-23 19:03:01', '2018-01-23 19:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unapproved',
  `author_id` int(10) UNSIGNED DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guest_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments_meta`
--

CREATE TABLE `comments_meta` (
  `meta_id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_pages`
--

CREATE TABLE `core_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view_url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `system_page` tinyint(4) NOT NULL,
  `status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `visibility` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `page_type` enum('core','custom','plugin') COLLATE utf8_unicode_ci NOT NULL,
  `plugin` text COLLATE utf8_unicode_ci,
  `blog_id` int(11) DEFAULT NULL,
  `user_group` text COLLATE utf8_unicode_ci,
  `layout_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `layout_option` enum('layout-except-body','layout-except-body-extra','layout-except-body-side-bar','free-page') COLLATE utf8_unicode_ci NOT NULL,
  `data_option` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `core_pages`
--

INSERT INTO `core_pages` (`id`, `title`, `code`, `slug`, `view_url`, `system_page`, `status`, `visibility`, `parent_id`, `page_type`, `plugin`, `blog_id`, `user_group`, `layout_id`, `layout_option`, `data_option`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', NULL, '/', 1, 'published', '', NULL, 'core', NULL, 0, NULL, '546578688', 'layout-except-body', '{\"main_body\":\"57b898d60de63.57b898d66d423\"}', NULL, NULL),
(2, 'Login', 'login', NULL, '/login', 1, 'published', '', NULL, 'core', NULL, 0, NULL, NULL, 'layout-except-body', '', NULL, NULL),
(3, 'Register', 'register', NULL, '/register', 1, 'published', '', NULL, 'core', NULL, 0, NULL, NULL, 'layout-except-body', '', NULL, NULL),
(4, 'Error', 'error', NULL, '', 1, 'published', '', NULL, 'core', NULL, 0, NULL, NULL, 'layout-except-body', '', NULL, NULL),
(5, 'Term & conditions', 'terms_condition', NULL, '/terms_conditions', 1, 'published', '', NULL, 'core', NULL, 0, NULL, '546578688', 'layout-except-body', '{\"3\":13,\"main_body\":\"57bb54e83f948.57bb54e86ff38\"}', NULL, NULL),
(6, 'Privacy', 'privacy', NULL, '/pages/privacy', 1, 'published', '', NULL, 'core', NULL, 0, NULL, '546578688', 'layout-except-body', '{\"main_body\":\"57bb55595bdb4.57bb555960203\"}', NULL, NULL),
(7, 'Profile', 'profile', NULL, '/profile', 1, 'published', '', NULL, 'core', NULL, 0, NULL, '546578688', 'layout-except-body', '{\"main_body\":\"57bb556b66106.57bb556b69dd4\"}', NULL, NULL),
(8, 'About', 'about', NULL, '/about', 1, 'published', '', NULL, 'core', NULL, 0, NULL, '546578688', 'layout-except-body', '{\"main_body\":\"57bb5a7df1acc.57bb5a7e0bb7c\"}', NULL, NULL),
(9, 'abokamal', 'abokamal', NULL, 'abokamal', 0, '', 'yes', 0, 'core', NULL, NULL, NULL, '0', 'layout-except-body', NULL, '2016-12-06 00:38:17', '2016-12-06 00:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `cs_comments_profile`
--

CREATE TABLE `cs_comments_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `like_system` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allow_reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_embedding` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allow_sorting_filter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `users_options` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar_type` int(11) NOT NULL DEFAULT '0',
  `avatar_variation_id` int(11) NOT NULL DEFAULT '0',
  `comment_allowed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_comment_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `border_num` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `border_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `border_prop` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bg_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username_type` int(11) NOT NULL DEFAULT '0',
  `username_variation_id` int(11) NOT NULL DEFAULT '0',
  `date_type` int(11) NOT NULL DEFAULT '0',
  `date_variation_id` int(11) NOT NULL DEFAULT '0',
  `description_type` int(11) NOT NULL DEFAULT '0',
  `description_variation_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cs_comments_profile`
--

INSERT INTO `cs_comments_profile` (`id`, `created_by`, `profile_name`, `like_system`, `allow_reply`, `site_embedding`, `allow_sorting_filter`, `users_options`, `avatar_type`, `avatar_variation_id`, `comment_allowed`, `show_comment_date`, `border_num`, `border_unit`, `border_prop`, `bg_color`, `username_type`, `username_variation_id`, `date_type`, `date_variation_id`, `description_type`, `description_variation_id`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'default', 'enabled', 'yes', 'a:3:{i:0;s:7:\"youtube\";i:1;s:10:\"soundcloud\";i:2;s:10:\"othersites\";}', 'yes', 'both', 0, 0, 'all', 'yes', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_classes`
--

CREATE TABLE `custom_classes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `data` longtext,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_classes`
--

INSERT INTO `custom_classes` (`id`, `name`, `data`, `active`, `created_at`, `updated_at`) VALUES
(2, 'custom classes', '{\"hi\":{\"name\":\"hi\",\"item_name\":\"hi\",\"css_data\":\".hi{color:black;}\",\"section\":\"basic\",\"type\":\"color\",\"data_type\":\"css\",\"sub_type\":\"text\",\"classtype\":null},\"classname\":{\"name\":\"Testbyashok\",\"item_name\":\"classname\",\"css_data\":\".classname{line-height:13px; font-size:15px; }\",\"section\":\"global\",\"type\":null,\"data_type\":\"css\",\"sub_type\":\"text\",\"classtype\":\"normal\"}}', 1, '2017-04-19 05:37:04', '2017-04-26 02:10:00'),
(3, 'custom classes', '{\"hi\":{\"name\":\"hi\",\"item_name\":\"hi\",\"css_data\":\".hi{color:black;}\",\"section\":\"basic\",\"type\":\"color\",\"data_type\":\"css\",\"sub_type\":\"text\",\"classtype\":null},\"classname\":{\"name\":\"Testbyashok\",\"item_name\":\"classname\",\"css_data\":\".classname{line-height:13px; font-size:15px; }\",\"section\":\"global\",\"type\":null,\"data_type\":\"css\",\"sub_type\":\"text\",\"classtype\":\"normal\"}}', 1, '2017-04-21 07:44:59', '2017-04-26 02:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `demo_menus`
--

CREATE TABLE `demo_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `module` varchar(100) DEFAULT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'core',
  `place` varchar(20) NOT NULL DEFAULT 'backend',
  `json_data` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demo_menus`
--

INSERT INTO `demo_menus` (`id`, `creator_id`, `name`, `module`, `type`, `place`, `json_data`, `created_at`, `updated_at`) VALUES
(1, 1, 'Main Menu', NULL, 'core', 'backend', '[{\"id\":\"30\",\"icon\":\"\",\"title\":\"pages\",\"children\":[{\"id\":\"2\",\"icon\":\"\",\"title\":\"modules\"}]}]', '2017-02-21 11:56:16', '2017-11-20 08:15:03'),
(2, 1, 'TEST2', NULL, 'custom', 'backend', '[{\"id\":\"30\",\"icon\":\"\",\"title\":\"pages\",\"children\":[{\"id\":\"2\",\"icon\":\"\",\"title\":\"modules\"}]}]', '2017-02-21 05:47:48', '2017-11-21 02:54:17'),
(3, 1, 'for test', NULL, 'custom', 'backend', NULL, '2017-02-23 05:44:13', '2017-02-23 05:44:13'),
(5, 1, 'dcdc', NULL, 'custom', 'backend', NULL, '2017-11-13 04:55:15', '2017-11-13 04:55:15'),
(10, 1, 'Forms', NULL, 'custom', 'frontend', '[{\"id\":\"1\",\"icon\":\"fa-home\",\"title\":\"Home\",\"url\":\"/\"},{\"id\":\"100\",\"icon\":\"fa-bank\",\"title\":\"FormBuilder\",\"url\":\"/form-builder\"},{\"id\":\"101\",\"icon\":\"fa-black-tie\",\"title\":\"FieldTypes\",\"url\":\"/field-types\"}]', '2018-01-11 10:23:09', '2018-01-11 10:24:00'),
(11, 1, 'User menu', NULL, 'custom', 'frontend', '[{\"id\":\"7\",\"icon\":\"\",\"title\":\"My account\",\"url\":\"/my-account\"},{\"id\":\"8\",\"icon\":\"\",\"title\":\"My details\",\"url\":\"/my-account/my-details\"},{\"id\":\"103\",\"icon\":\"\",\"title\":\"My fields\",\"url\":\"/my-account/my-fields\"},{\"id\":\"104\",\"icon\":\"\",\"title\":\"My forms\",\"url\":\"/my-account/my-forms\"}]', '2018-01-11 10:24:09', '2018-01-11 10:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `demo_menu_items`
--

CREATE TABLE `demo_menu_items` (
  `id` varchar(100) NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `parent_id` varchar(100) DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` text,
  `icon` varchar(50) DEFAULT NULL,
  `sort` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demo_menu_items`
--

INSERT INTO `demo_menu_items` (`id`, `menu_id`, `page_id`, `parent_id`, `role_id`, `title`, `url`, `icon`, `sort`, `created_at`, `updated_at`) VALUES
('1', 1, 985, '0', 1, 'title', NULL, NULL, 1, '2017-02-21 12:00:34', NULL),
('2', 1, 986, '0', 1, 'title2', NULL, NULL, 2, '2017-02-21 12:00:34', NULL),
('3', 1, 987, '2', 1, 'title3', NULL, NULL, 3, '2017-02-21 12:00:34', NULL),
('338c948c4cdd', 6, 8, '0', 1, 'about as', '/about', NULL, 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54'),
('4', 1, 985, '0', 2, 'title4', NULL, NULL, 1, '2017-02-21 12:00:34', NULL),
('5', 1, 986, '0', 2, 'title5', NULL, NULL, 2, '2017-02-21 12:00:34', NULL),
('58aebc36a6694', 2, 66, '0', 1, 'Admin Settings', 'admin/backend/settings', NULL, 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54'),
('58aebc36ab4b0', 2, 67, '58aebc36a6694', 1, 'Admin Settings edit', 'admin/backend/settings/update/{param}', NULL, 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54'),
('58aebc36ac4bd', 2, 68, '0', 1, 'Back end Menu', 'admin/backend/menu', NULL, 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54'),
('58aebc36ad932', 2, 69, '58aebc36ac4bd', 1, 'Back end Menu variations', 'admin/backend/menu/variation/{param}', NULL, 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54'),
('58aebc36aef01', 2, 70, '58aebc36ac4bd', 1, 'Menu update variations', 'admin/backend/menu/update-variation/{param}', NULL, 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54'),
('58aebc36ascsdc', 4, 5, '0', 1, 'terms and conditions', '/terms-conditions', 'fa fa-info', 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54'),
('611ebc36ascsdc', 4, 6, '0', 1, 'privacy', '/privacy', 'fa fa-bug', 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54'),
('dscdsc151c5sd1c', 4, 1, '0', 1, 'Home', '/', 'fa fa-home', 0, '2017-02-23 03:40:54', '2017-02-23 03:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `drive_folders`
--

CREATE TABLE `drive_folders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uploader_slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drive_folders`
--

INSERT INTO `drive_folders` (`id`, `name`, `prefix`, `uploader_slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'drive', NULL, NULL, 0, '2017-07-04 12:23:18', '2017-07-04 12:23:18'),
(2, 'qaq', NULL, NULL, 1, '2017-07-04 12:27:34', '2017-07-04 12:27:34'),
(3, 'qaq', NULL, NULL, 2, '2017-07-04 12:30:51', '2017-07-05 03:36:06'),
(4, 'ec', NULL, NULL, 1, '2017-07-04 23:03:04', '2017-07-04 23:03:04'),
(5, 'mediaplus', NULL, NULL, 0, '2017-07-06 04:21:21', '2017-07-06 06:24:25'),
(6, 'qaq', NULL, NULL, 5, '2017-07-07 04:29:49', '2017-07-07 04:29:49'),
(7, 'qaq1', NULL, NULL, 6, '2017-07-07 04:30:01', '2017-07-07 04:30:01'),
(8, 'testnhg', NULL, NULL, 5, '2017-07-12 13:14:23', '2017-07-12 13:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `drive_settings`
--

CREATE TABLE `drive_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `function` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `folder_id` int(10) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'all_access',
  `uploader_data` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drive_settings`
--

INSERT INTO `drive_settings` (`id`, `function`, `slug`, `folder_id`, `action`, `uploader_data`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 'drive', 1, 'all_access', NULL, NULL, '2017-07-04 12:23:18', '2017-07-04 12:23:18'),
(3, NULL, 'qaq1', 2, 'all_access', NULL, NULL, '2017-07-04 12:27:34', '2017-07-04 12:27:34'),
(4, NULL, 'qaq1', 3, 'all_access', NULL, NULL, '2017-07-04 12:30:51', '2017-07-04 12:30:51'),
(5, NULL, 'ec1', 4, 'all_access', NULL, NULL, '2017-07-04 23:03:04', '2017-07-04 23:03:04'),
(6, NULL, 'qaq5', 6, 'all_access', NULL, NULL, '2017-07-07 04:29:49', '2017-07-07 04:29:49'),
(7, NULL, 'qaq16', 7, 'all_access', NULL, NULL, '2017-07-07 04:30:01', '2017-07-07 04:30:01'),
(8, NULL, 'testnhg5', 8, 'all_access', NULL, NULL, '2017-07-12 13:14:23', '2017-07-12 13:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `form_id` int(11) NOT NULL,
  `emails` enum('admin','user') COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom_days` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `form_id_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `when_` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `custom_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trigger_on_form` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `to_` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cc` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `bcc` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `replyto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8_unicode_ci NOT NULL,
  `notify_to` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `content_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `settings` text COLLATE utf8_unicode_ci,
  `is_public` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `group_id`, `form_id`, `emails`, `custom_days`, `name`, `form_id_type`, `from_`, `when_`, `custom_time`, `event_code`, `trigger_on_form`, `to_`, `cc`, `bcc`, `replyto`, `attachment`, `notify_to`, `priority`, `content_type`, `template_id`, `variation_id`, `subject`, `content`, `settings`, `is_public`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, 0, 'Welcome', 'user', 'info@avatarbugs.com', 'immediate', '', 'form_submited', '58vg8d7vw4nhn1', 'Signup User', '', '', 'info@avatarbugs.com', '', '', 0, 'iwysiwyg', 8, 6, 'Welcome To Our Site', '<p>[special key=id] &nbsp;[mail_receiver_email] Hi [mail_receiver_user_name]</p>\r\n<p><br />This is First&nbsp; Email</p>\r\n<p>&nbsp;</p>\r\n<p>Thanks</p>', NULL, 0, '2016-12-28 01:57:45', '2017-06-23 04:44:54'),
(2, 2, 0, NULL, 0, 'Activated', NULL, 'info@avatarbugs.com', 'immediate', '', 'account.activated', '0', 'Logged  User', '', '', '', '', '', 0, 'wysiwyg', 0, 0, 'Account Activated', NULL, NULL, 0, '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(3, 2, 0, NULL, 0, 'Forgot password', NULL, 'info@avatarbugs.com', 'immediate', '11/05/2016', 'forgot.password', '0', 'Requested Email', '', '', '', '', '', 0, 'wysiwyg', 0, 0, 'Forgot Password', '', NULL, 0, '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(4, 3, 2, NULL, 0, 'Profile Update', 'admin', 'info@avatarbugs.com', 'immediate', '', 'form.was.submit', '0', 'administrator', '', '', 'info@avatarbugs.com', '', '', 0, 'wysiwyg', 0, 0, 'Profile Update', '', NULL, 0, '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(5, 3, 2, NULL, 0, 'Profile Update', 'user', 'info@avatarbugs.com', 'immediate', '', 'form.was.submit', '0', 'Logged  User', '', '', 'info@avatarbugs.com', '', '', 0, 'wysiwyg', 0, 0, 'Profile Update', '', NULL, 0, '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(6, 2, 1, NULL, 0, 'New User Register', 'admin', 'info@avatarbugs.com', 'immediate', '', 'user.register', '0', 'administrator', '', '', 'info@avatarbugs.com', '', '', 0, 'wysiwyg', 0, 7, 'New User Register', '', NULL, 0, '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(7, 2, 1, NULL, 0, 'Activate your Account', 'user', 'info@avatarbugs.com', 'immediate', '', 'CustomFormSubmittedEvent', '0', 'Signup User', '', '', 'info@avatarbugs.com', '', '', 0, 'wysiwyg', 8, 6, 'Welcome To Our Site', '<p>Hi [mail_receiver_user_name]</p>\r\n<p><br />This is First&nbsp; Email</p>\r\n<p>&nbsp;</p>\r\n<p>Thanks</p>', NULL, 0, '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(8, 4, 0, NULL, 0, 'dcdc', NULL, 'support@avatarbugs.com', 'immediate', '', '', '0', '', '', '', 'info@avatarbugs.com', '', '', 0, 'wysiwyg', 0, 0, '', '', NULL, 1, '2016-12-28 14:05:04', '2016-12-28 14:06:45'),
(9, 1, 0, NULL, 0, 'Testing ', NULL, 'info@avatarbugs.com', 'custom_time', '', 'form_submited', '594a4369402d8', 'ededed@cdcdc.cd', '', '', 'info@avatarbugs.com', '', '', 0, 'iwysiwyg', 0, 0, 'ddddddddddddddd', '<p>dddddddddddddddddddddddddddd</p>', NULL, 0, '2017-06-23 01:03:39', '2017-06-23 01:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `email_groups`
--

CREATE TABLE `email_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('core','custom') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'custom',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_groups`
--

INSERT INTO `email_groups` (`id`, `name`, `type`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'General', 'core', 'general', '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(2, 'Login & Registration', 'core', 'login_registration', '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(3, 'Form Submit', 'core', 'form_submit', '2016-12-28 01:57:45', '2016-12-28 01:57:45'),
(4, 'ccc', 'custom', 'ccc', '2016-12-28 14:04:52', '2016-12-28 14:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `code`, `created_at`, `updated_at`) VALUES
(1, 'User Login', 'auth.login', '2016-11-27 04:19:46', '2016-11-27 04:19:46'),
(2, 'User Logout', 'auth.logout', '2016-11-27 04:19:46', '2016-11-27 04:19:46'),
(3, 'User Register', 'user.register', '2016-11-27 04:19:46', '2016-11-27 04:19:46'),
(4, 'Forgot Password', 'forgot.password', '2016-11-27 04:19:46', '2016-11-27 04:19:46'),
(5, 'Account Activate', 'account.activated', '2016-11-27 04:19:46', '2016-11-27 04:19:46'),
(6, 'Form Was Submit', 'CustomFormSubmittedEvent', '2016-11-27 04:19:46', '2016-11-27 04:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `fbp_field_types`
--

CREATE TABLE `fbp_field_types` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbp_field_types`
--

INSERT INTO `fbp_field_types` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'text', 'text', NULL, '2018-01-09 18:18:22'),
(2, 'textarea', 'textarea', NULL, '2018-01-09 18:18:22'),
(3, 'select', 'select', NULL, '2018-01-09 18:18:54'),
(4, 'multiselect', 'multiselect', NULL, '2018-01-09 18:18:54'),
(5, 'radio', 'radio', NULL, '2018-01-09 18:19:25'),
(6, 'checkbox', 'checkbox', NULL, '2018-01-09 18:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `fbp_user_fields`
--

CREATE TABLE `fbp_user_fields` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `field_type` varchar(100) NOT NULL,
  `json_data` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fbp_user_fields`
--

INSERT INTO `fbp_user_fields` (`id`, `user_id`, `field_type`, `json_data`, `created_at`, `updated_at`) VALUES
(1, 1, 'radio', '{\"field_type\":\"radio\",\"id\":\"1\",\"name\":\"roles\",\"label\":\"RRfff\",\"placeholder\":\"test\",\"icon\":null,\"tooltip_icon\":\"fa-address-card-o\",\"help\":\"select role\",\"validation_message\":null,\"data_source\":\"related\",\"data_source_table_name\":\"roles\",\"data_source_columns\":\"slug\",\"required\":\"0\"}', '2018-01-10 15:20:42', '2018-01-11 10:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `fbp_user_forms`
--

CREATE TABLE `fbp_user_forms` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `form_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_table` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `second_column` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `visibility` tinyint(1) NOT NULL DEFAULT '0',
  `available_for_users` tinyint(1) NOT NULL DEFAULT '0',
  `default_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `before_save` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placeholder` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tooltip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `help` text COLLATE utf8_unicode_ci,
  `tooltip_icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `json_data` text COLLATE utf8_unicode_ci,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_source` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `structured_by` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'core',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `extravalidation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `validation_message` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `name`, `slug`, `table_name`, `column_name`, `second_table`, `second_column`, `required`, `visibility`, `available_for_users`, `default_value`, `before_save`, `label`, `icon`, `placeholder`, `tooltip`, `help`, `tooltip_icon`, `json_data`, `unit`, `data_source`, `type`, `structured_by`, `created_by`, `status`, `extravalidation`, `validation_message`, `created_at`, `updated_at`) VALUES
(10, 'Description', '5a2fc97d1c9b9', 'posts', 'description', NULL, NULL, 0, 1, 0, NULL, NULL, 'Description', NULL, 'Enter Description', NULL, NULL, NULL, NULL, NULL, NULL, 'textarea', 'core', NULL, 0, NULL, NULL, '2017-12-12 20:20:13', '2017-12-20 22:50:36'),
(11, 'Title', '5a2fd762651ea', 'posts', 'title', NULL, NULL, 0, 1, 0, NULL, NULL, 'Title', NULL, 'Title', NULL, NULL, NULL, NULL, NULL, NULL, 'text', 'core', NULL, 0, NULL, NULL, '2017-12-12 21:19:30', '2017-12-18 19:12:35'),
(12, 'Status', '5a37a1649f982', 'posts', 'status', NULL, NULL, 0, 1, 0, NULL, NULL, 'Status', NULL, NULL, NULL, NULL, NULL, '{\"manual\":\"draft,published\"}', NULL, 'manual', 'select', 'core', NULL, 0, NULL, NULL, '2017-12-18 19:07:16', '2017-12-18 19:11:57'),
(13, 'Test Column', '5a38ea060ce9c', 'posts', 'test_column', NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'core', NULL, 0, NULL, NULL, '2017-12-19 18:29:26', '2017-12-19 18:29:26'),
(14, 'Gago', '5a3a636f87721', 'posts', 'gago', NULL, NULL, 0, 1, 0, NULL, NULL, 'Gag', NULL, 'this is gag', NULL, NULL, NULL, '{\"manual\":\"bad,qaq,deq,seroj\"}', NULL, 'manual', 'radio', 'core', NULL, 0, NULL, NULL, '2017-12-20 21:19:43', '2017-12-20 22:50:52'),
(15, 'Title', '5a657a02b7b89', 'fugitsu', 'title', NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'text', 'plugin', NULL, 0, NULL, NULL, '2018-01-22 13:43:30', '2018-01-22 13:43:30'),
(16, 'Status', '5a657a02c0d7f', 'fugitsu', 'status', NULL, NULL, 0, 1, 0, NULL, NULL, 'Status', 'fa-address-card', 'Select Status', NULL, NULL, 'fa-adn', '{\"manual\":\"draft,published\"}', NULL, 'manual', 'select', 'plugin', NULL, 0, NULL, NULL, '2018-01-22 13:43:30', '2018-01-23 17:52:34'),
(17, 'Description', '5a657a02c1165', 'fugitsu', 'description', NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'textarea', 'plugin', NULL, 0, NULL, NULL, '2018-01-22 13:43:30', '2018-01-22 13:43:30'),
(18, 'Test', '5a671665778e6', 'fugitsu', 'Test', NULL, NULL, 0, 1, 0, NULL, NULL, 'test', NULL, 'Enter test', NULL, NULL, NULL, NULL, NULL, NULL, 'text', 'core', NULL, 0, NULL, NULL, '2018-01-23 19:03:01', '2018-01-23 19:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `default_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` longtext COLLATE utf8_unicode_ci,
  `blocked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'new',
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'core',
  `form_access` tinyint(4) NOT NULL DEFAULT '0',
  `fields_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fields_json` text COLLATE utf8_unicode_ci,
  `unit_json` text COLLATE utf8_unicode_ci NOT NULL,
  `required_fields` text COLLATE utf8_unicode_ci,
  `form_layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `slug`, `default_field`, `settings`, `blocked`, `created_at`, `updated_at`, `type`, `created_by`, `form_access`, `fields_type`, `fields_json`, `unit_json`, `required_fields`, `form_layout`) VALUES
(13, 'Create fpost', 'create_post', NULL, '{\"message\":null,\"event\":null,\"redirect_Page\":\"alert\",\"is_ajax\":\"yes\"}', 0, '2017-12-18 21:41:23', '2017-12-22 19:35:17', 'new', 'plugin', 1, 'posts', NULL, '', NULL, NULL),
(14, 'Edit post', 'edit_post', NULL, NULL, 0, '2017-12-18 21:41:23', NULL, 'edit', 'plugin', 0, 'posts', NULL, '', NULL, NULL),
(15, 'new dard o', '5a3a3e7936cd9', NULL, NULL, 0, '2017-12-20 18:42:01', '2017-12-26 19:46:55', 'new', 'custom', 0, 'posts', '{\"0\":[10,11]}', '', NULL, NULL),
(18, 'Create fugitsu', 'create_fugitsu', NULL, NULL, 0, '2018-01-22 13:43:30', '2018-01-23 19:04:17', 'new', 'plugin', 0, 'fugitsu', '[15,16,17,18]', '', NULL, NULL),
(19, 'Edit fugitsu', 'edit_fugitsu', NULL, NULL, 0, '2018-01-22 13:43:30', '2018-01-24 23:31:02', 'edit', 'plugin', 0, 'fugitsu', '[15,16,17]', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forms_roles`
--

CREATE TABLE `forms_roles` (
  `form_id` int(11) UNSIGNED NOT NULL,
  `role_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms_roles`
--

INSERT INTO `forms_roles` (`form_id`, `role_id`, `created_at`, `updated_at`) VALUES
(13, 1, '2017-12-22 19:35:35', '2017-12-22 19:35:35'),
(13, 4, '2017-12-22 19:35:35', '2017-12-22 19:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `form_entries`
--

CREATE TABLE `form_entries` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `data` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_entries`
--

INSERT INTO `form_entries` (`id`, `form_id`, `user_id`, `ip`, `data`, `created_at`, `updated_at`) VALUES
(3, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";a:5:{s:5:\"email\";s:29:\"edo.terccccakyan@gmail.comccc\";s:8:\"username\";s:13:\"csdcdscdscsdc\";s:8:\"password\";s:60:\"$2y$10$okSx8NvbCmfPf1DnXBBPOu0556QXI0VGiC7u3Qa1I2qPiz67wY41.\";s:6:\"status\";s:8:\"inactive\";s:7:\"role_id\";s:1:\"6\";}}', '2017-06-22 02:52:17', '2017-06-22 02:52:17'),
(4, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";a:5:{s:5:\"email\";s:13:\"dede@ccdc.cdc\";s:8:\"username\";s:11:\"vrvrvrfvrfv\";s:8:\"password\";s:60:\"$2y$10$jYnltWeQtyh6h6Gu4wbNWOW4jBSw.lLmJIUTs7g5m3XBNOeb2ceFG\";s:6:\"status\";s:8:\"inactive\";s:7:\"role_id\";s:1:\"6\";}}', '2017-06-23 01:56:46', '2017-06-23 01:56:46'),
(5, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";a:5:{s:5:\"email\";s:13:\"dede@ccdc.cdc\";s:8:\"username\";s:11:\"vrvrvrfvrfv\";s:8:\"password\";s:60:\"$2y$10$M3KjzeOpHrPzXMJZrzMsQOdb/8mGGV5DJEWSDr.WEwikgcNpJrza.\";s:6:\"status\";s:8:\"inactive\";s:7:\"role_id\";s:1:\"6\";}}', '2017-06-23 01:57:21', '2017-06-23 01:57:21'),
(6, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";a:5:{s:5:\"email\";s:13:\"dede@ccdc.cdc\";s:8:\"username\";s:11:\"vrvrvrfvrfv\";s:8:\"password\";s:60:\"$2y$10$6ydVy39f6cxr2xV1mnhEjuOVU.1iifLiRovdnVuZDXm3AeopJU0Ly\";s:6:\"status\";s:8:\"inactive\";s:7:\"role_id\";s:1:\"6\";}}', '2017-06-23 01:57:43', '2017-06-23 01:57:43'),
(7, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";a:5:{s:5:\"email\";s:13:\"dede@ccdc.cdc\";s:8:\"username\";s:11:\"vrvrvrfvrfv\";s:8:\"password\";s:60:\"$2y$10$fLxlUyfi2LFcxFXCEZylM.viUyWc.433dqBwzKd7SYJ4SHNtBmxoe\";s:6:\"status\";s:8:\"inactive\";s:7:\"role_id\";s:1:\"6\";}}', '2017-06-23 01:58:12', '2017-06-23 01:58:12'),
(8, 12, 1, '127.0.0.1', 'a:0:{}', '2017-06-25 22:35:45', '2017-06-26 10:35:45'),
(9, 12, 1, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:39;s:5:\"email\";s:19:\"rcdccrcrc2@kcd.cdcd\";s:8:\"username\";s:9:\"rrrrrrrrr\";s:8:\"password\";s:60:\"$2y$10$844B/iAXldmxHyX.sDl6TOEGKZ2dxf1OdvpzNHvtE3L2WYmLhbw3e\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:6:\"active\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-25 23:01:42', '2017-06-26 11:01:42'),
(10, 12, 1, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:40;s:5:\"email\";s:12:\"vgvgv@jjj.cc\";s:8:\"username\";s:9:\"cdcdee223\";s:8:\"password\";s:60:\"$2y$10$Z8YGpih1Gg6xk/pOsFXoKuKhcR1Nhd5M5n.mE6/bjP2z0WMWAVLPm\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:6:\"active\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-25 23:02:14', '2017-06-26 11:02:14'),
(11, 12, 1, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:44;s:5:\"email\";s:20:\"rcrcrc2@kcd.cdcddddd\";s:8:\"username\";s:14:\"dcdcdccccccccc\";s:8:\"password\";s:60:\"$2y$10$ZJkPzP5BJ4N1FTGKuUmOROmWaooppBYiJPh1j0zcG.V8s2KwcXtKW\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:6:\"active\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-25 23:04:32', '2017-06-26 11:04:32'),
(12, 12, 1, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:45;s:5:\"email\";s:19:\"rcrcrc2@kcd.cdcdddd\";s:8:\"username\";s:9:\"dcdcdcccc\";s:8:\"password\";s:60:\"$2y$10$W1knNjM10fRVqMBpSn//2uaoEiL0KD4EtgOczyzxI7rjPmt/jarqG\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:6:\"active\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-25 23:24:51', '2017-06-26 11:24:51'),
(13, 12, 1, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:24;s:5:\"email\";s:23:\"rcrcrc2@kcd.ggggggggggg\";s:8:\"username\";s:15:\"yyyyyyyyyyyyyyy\";s:8:\"password\";s:60:\"$2y$10$6RhYIszvs4JZbwArr4oWceiq4TOcahU5a34iSt.mMsmF8R/Knu/VG\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:6:\"active\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-27 00:18:16', '2017-06-27 00:18:16'),
(14, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:46;s:5:\"email\";s:17:\"eeeeeeee@cccc.ccc\";s:8:\"username\";s:13:\"cdecdecedcedc\";s:8:\"password\";s:60:\"$2y$10$wL7IzKmeSITHrTOi9fJCCesPQK3G.6dX3QhDSFsuh7jjU0ynaMxsS\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:8:\"inactive\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-30 03:06:16', '2017-06-30 03:06:16'),
(15, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:47;s:5:\"email\";s:17:\"eeeeeeee@cccc.ccc\";s:8:\"username\";s:13:\"cdecdecedcedc\";s:8:\"password\";s:60:\"$2y$10$/R5KvuDsFLIsZmHxVwbJY.KRuJL59yZfElSx3HRfEmVuGrFcQt7fi\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:8:\"inactive\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-30 03:07:59', '2017-06-30 03:07:59'),
(16, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:48;s:5:\"email\";s:17:\"eeeeeeee@cccc.ccc\";s:8:\"username\";s:13:\"cdecdecedcedc\";s:8:\"password\";s:60:\"$2y$10$aweJZSgjW3/dz4xs.n1t/OJkspYiDBY9tIQhkFKJ8aYwZSpQHKRE2\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:8:\"inactive\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-30 03:08:44', '2017-06-30 03:08:44'),
(17, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:49;s:5:\"email\";s:17:\"eeeeeeee@cccc.ccc\";s:8:\"username\";s:13:\"cdecdecedcedc\";s:8:\"password\";s:60:\"$2y$10$m1cVrGUm6ULO0UC.BxnPZeoW/q95QKuDXzNcVLyznYonMNSoxHQcK\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:8:\"inactive\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-30 03:09:19', '2017-06-30 03:09:19'),
(18, 1, 0, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:50;s:5:\"email\";s:17:\"eeeeeeee@cccc.ccc\";s:8:\"username\";s:13:\"cdecdecedcedc\";s:8:\"password\";s:60:\"$2y$10$vFE97.FB5JO0e21Pz2cm3efGUky.d9DBogu/4qje36a5Ac9qGycsi\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:8:\"inactive\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-06-30 03:09:52', '2017-06-30 03:09:52'),
(19, 12, 1, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:24;s:5:\"email\";s:23:\"rcrcrc2@kcd.ggggggggggg\";s:8:\"username\";s:15:\"yyyyyyyyyyyyyyy\";s:8:\"password\";s:60:\"$2y$10$2hkHqLk3qbEbrYEhLyn8Peyz2/PpLx0vXiFrfMOUYSRXO3QgiMfG6\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:6:\"active\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-07-04 00:38:06', '2017-07-04 00:38:06'),
(20, 12, 1, '127.0.0.1', 'a:1:{s:5:\"users\";O:8:\"stdClass\":11:{s:2:\"id\";i:24;s:5:\"email\";s:19:\"rcrcrc2@kcd.gggggdr\";s:8:\"username\";s:15:\"yyyyyyyyyyyyyyy\";s:8:\"password\";s:60:\"$2y$10$T3FnpHfYqW3ICcoNmJ9S7uKPF7G5OuoPcwHEZL1pdyru6ZAF2cURi\";s:13:\"membership_id\";i:0;s:7:\"role_id\";i:6;s:6:\"status\";s:6:\"active\";s:5:\"token\";N;s:14:\"remember_token\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-07-04 00:38:18', '2017-07-04 00:38:18'),
(21, 13, NULL, '127.0.0.1', 'a:0:{}', '2017-12-20 22:10:28', '2017-12-20 22:10:28'),
(22, 13, NULL, '127.0.0.1', 'a:1:{s:5:\"posts\";O:8:\"stdClass\":14:{s:2:\"id\";i:6;s:9:\"author_id\";i:0;s:5:\"title\";s:4:\"test\";s:4:\"gago\";s:1:\"1\";s:11:\"description\";s:4:\"test\";s:11:\"test_column\";N;s:5:\"image\";N;s:4:\"slug\";N;s:3:\"url\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-12-20 22:24:07', '2017-12-20 22:24:07'),
(23, 13, NULL, '127.0.0.1', 'a:1:{s:5:\"posts\";O:8:\"stdClass\":14:{s:2:\"id\";i:7;s:9:\"author_id\";i:0;s:5:\"title\";s:6:\"dcdcdc\";s:4:\"gago\";s:1:\"1\";s:11:\"description\";s:13:\"test for post\";s:11:\"test_column\";N;s:5:\"image\";N;s:4:\"slug\";N;s:3:\"url\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-12-20 22:25:59', '2017-12-20 22:25:59'),
(24, 13, NULL, '127.0.0.1', 'a:1:{s:5:\"posts\";O:8:\"stdClass\":14:{s:2:\"id\";i:8;s:9:\"author_id\";i:0;s:5:\"title\";N;s:4:\"gago\";N;s:11:\"description\";N;s:11:\"test_column\";N;s:5:\"image\";N;s:4:\"slug\";N;s:3:\"url\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"0\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-12-20 22:44:45', '2017-12-20 22:44:45'),
(25, 13, NULL, '127.0.0.1', 'a:1:{s:5:\"posts\";O:8:\"stdClass\":14:{s:2:\"id\";i:9;s:9:\"author_id\";i:0;s:5:\"title\";s:10:\"dfvdfvdfvf\";s:4:\"gago\";s:1:\"1\";s:11:\"description\";s:9:\"fdvdfvfdv\";s:11:\"test_column\";N;s:5:\"image\";N;s:4:\"slug\";N;s:3:\"url\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-12-21 01:41:35', '2017-12-21 01:41:35'),
(26, 13, NULL, '127.0.0.1', 'a:1:{s:5:\"posts\";O:8:\"stdClass\":14:{s:2:\"id\";i:10;s:9:\"author_id\";i:0;s:5:\"title\";s:16:\"vvvvvvvvvvvvvvvv\";s:4:\"gago\";s:1:\"3\";s:11:\"description\";s:4:\"fvfv\";s:11:\"test_column\";N;s:5:\"image\";N;s:4:\"slug\";N;s:3:\"url\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"0\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-12-21 01:42:15', '2017-12-21 01:42:15'),
(27, 13, NULL, '127.0.0.1', 'a:1:{s:5:\"posts\";O:8:\"stdClass\":14:{s:2:\"id\";i:11;s:9:\"author_id\";i:0;s:5:\"title\";s:7:\"sdscsdc\";s:4:\"gago\";s:1:\"1\";s:11:\"description\";s:10:\"cccccccccc\";s:11:\"test_column\";N;s:5:\"image\";N;s:4:\"slug\";N;s:3:\"url\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-12-21 01:43:10', '2017-12-21 01:43:10'),
(28, 13, NULL, '127.0.0.1', 'a:1:{s:5:\"posts\";O:8:\"stdClass\":14:{s:2:\"id\";i:12;s:9:\"author_id\";i:0;s:5:\"title\";s:10:\"vdfvdfvdfv\";s:4:\"gago\";s:1:\"1\";s:11:\"description\";s:9:\"vdfvdfvdf\";s:11:\"test_column\";N;s:5:\"image\";N;s:4:\"slug\";N;s:3:\"url\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-12-21 01:44:33', '2017-12-21 01:44:33'),
(29, 13, NULL, '127.0.0.1', 'a:1:{s:5:\"posts\";O:8:\"stdClass\":14:{s:2:\"id\";i:13;s:9:\"author_id\";i:0;s:5:\"title\";s:15:\"yyyyyyyyyyyyyyy\";s:4:\"gago\";s:1:\"1\";s:11:\"description\";s:18:\"yyyyyyyyyyyyyyyyyy\";s:11:\"test_column\";N;s:5:\"image\";N;s:4:\"slug\";N;s:3:\"url\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"0\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2017-12-21 01:45:32', '2017-12-21 01:45:32'),
(30, 18, NULL, '127.0.0.1', 'a:0:{}', '2018-01-22 14:10:04', '2018-01-22 14:10:04'),
(31, 18, NULL, '127.0.0.1', 'a:0:{}', '2018-01-22 14:10:23', '2018-01-22 14:10:23'),
(32, 18, NULL, '127.0.0.1', 'a:0:{}', '2018-01-22 14:11:14', '2018-01-22 14:11:14'),
(33, 18, NULL, '127.0.0.1', 'a:0:{}', '2018-01-22 14:12:14', '2018-01-22 14:12:14'),
(34, 18, NULL, '127.0.0.1', 'a:0:{}', '2018-01-22 14:16:52', '2018-01-22 14:16:52'),
(35, 18, NULL, '127.0.0.1', 'a:1:{s:7:\"fugitsu\";O:8:\"stdClass\":12:{s:2:\"id\";i:1;s:9:\"author_id\";i:0;s:5:\"title\";s:7:\"Mesedez\";s:11:\"description\";s:4:\"test\";s:5:\"image\";N;s:4:\"slug\";s:0:\"\";s:3:\"url\";s:0:\"\";s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2018-01-23 17:53:32', '2018-01-23 17:53:32'),
(36, 18, NULL, '127.0.0.1', 'a:1:{s:7:\"fugitsu\";O:8:\"stdClass\":10:{s:2:\"id\";i:3;s:9:\"author_id\";i:0;s:5:\"title\";s:3:\"BMW\";s:11:\"description\";s:8:\"BMW DESC\";s:5:\"image\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2018-01-23 17:56:22', '2018-01-23 17:56:22'),
(37, 18, NULL, '127.0.0.1', 'a:1:{s:7:\"fugitsu\";O:8:\"stdClass\":11:{s:2:\"id\";i:4;s:9:\"author_id\";i:0;s:5:\"title\";s:11:\"new testing\";s:4:\"Test\";s:4:\"test\";s:11:\"description\";s:14:\"testing descro\";s:5:\"image\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2018-01-23 19:04:54', '2018-01-23 19:04:54'),
(38, 19, NULL, '127.0.0.1', 'a:1:{s:7:\"fugitsu\";O:8:\"stdClass\":11:{s:2:\"id\";i:5;s:9:\"author_id\";i:0;s:5:\"title\";s:12:\"Mesedez Bnez\";s:4:\"Test\";N;s:11:\"description\";s:4:\"test\";s:5:\"image\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2018-01-24 23:48:53', '2018-01-24 23:48:53'),
(39, 19, NULL, '127.0.0.1', 'a:1:{s:7:\"fugitsu\";O:8:\"stdClass\":11:{s:2:\"id\";i:6;s:9:\"author_id\";i:0;s:5:\"title\";s:11:\"Mesedez AMG\";s:4:\"Test\";N;s:11:\"description\";s:4:\"test\";s:5:\"image\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2018-01-24 23:51:10', '2018-01-24 23:51:10'),
(40, 19, NULL, '127.0.0.1', 'a:1:{s:7:\"fugitsu\";O:8:\"stdClass\":11:{s:2:\"id\";i:7;s:9:\"author_id\";i:0;s:5:\"title\";s:13:\"edited e xoxa\";s:4:\"Test\";N;s:11:\"description\";s:14:\"testing descro\";s:5:\"image\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2018-01-24 23:56:56', '2018-01-24 23:56:56'),
(41, 19, NULL, '127.0.0.1', 'a:1:{s:7:\"fugitsu\";O:8:\"stdClass\":11:{s:2:\"id\";i:8;s:9:\"author_id\";i:0;s:5:\"title\";s:19:\"new testing ddddddd\";s:4:\"Test\";N;s:11:\"description\";s:14:\"testing descro\";s:5:\"image\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2018-01-25 00:05:25', '2018-01-25 00:05:25'),
(42, 19, NULL, '127.0.0.1', 'a:1:{s:7:\"fugitsu\";O:8:\"stdClass\":11:{s:2:\"id\";i:4;s:9:\"author_id\";i:0;s:5:\"title\";s:23:\"new testinggggggggggggg\";s:4:\"Test\";s:4:\"test\";s:11:\"description\";s:14:\"testing descro\";s:5:\"image\";N;s:10:\"start_date\";N;s:8:\"end_date\";N;s:6:\"status\";s:1:\"1\";s:10:\"created_at\";N;s:10:\"updated_at\";N;}}', '2018-01-25 00:11:02', '2018-01-25 00:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `form_fields`
--

CREATE TABLE `form_fields` (
  `form_id` int(10) NOT NULL,
  `field_slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_fields`
--

INSERT INTO `form_fields` (`form_id`, `field_slug`, `created_at`, `updated_at`) VALUES
(14, '5a2fc97d1c9b9', '2017-12-18 11:13:36', '0000-00-00 00:00:00'),
(13, '5a2fc97d1c9b9', '2017-12-21 13:47:11', '2017-12-21 13:47:11'),
(13, '5a2fd762651ea', '2017-12-21 13:47:11', '2017-12-21 13:47:11'),
(13, '5a37a1649f982', '2017-12-21 13:47:11', '2017-12-21 13:47:11'),
(13, '5a3a636f87721', '2017-12-21 13:47:11', '2017-12-21 13:47:11'),
(15, '5a2fc97d1c9b9', '2017-12-26 19:46:55', '2017-12-26 19:46:55'),
(15, '5a2fd762651ea', '2017-12-26 19:46:55', '2017-12-26 19:46:55'),
(18, '5a657a02b7b89', '2018-01-23 19:04:17', '2018-01-23 19:04:17'),
(18, '5a657a02c0d7f', '2018-01-23 19:04:17', '2018-01-23 19:04:17'),
(18, '5a657a02c1165', '2018-01-23 19:04:17', '2018-01-23 19:04:17'),
(18, '5a671665778e6', '2018-01-23 19:04:17', '2018-01-23 19:04:17'),
(19, '5a657a02b7b89', '2018-01-24 23:31:02', '2018-01-24 23:31:02'),
(19, '5a657a02c0d7f', '2018-01-24 23:31:02', '2018-01-24 23:31:02'),
(19, '5a657a02c1165', '2018-01-24 23:31:02', '2018-01-24 23:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `form_settings`
--

CREATE TABLE `form_settings` (
  `id` int(10) NOT NULL,
  `form_id` varchar(255) NOT NULL,
  `default_settings` text,
  `additional_settings` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_settings`
--

INSERT INTO `form_settings` (`id`, `form_id`, `default_settings`, `additional_settings`, `created_at`, `updated_at`) VALUES
(1, '58e21be5a8bd8', NULL, '{\"units\":[\"58e3713a9b729.58e3713aea18c\",\"58e39364ed38d.58e3936517320\"]}', '2017-04-03 00:16:18', '2017-04-04 08:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `frameworks`
--

CREATE TABLE `frameworks` (
  `id` int(10) NOT NULL,
  `version` varchar(20) NOT NULL,
  `additional_data` text,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frameworks`
--

INSERT INTO `frameworks` (`id`, `version`, `additional_data`, `active`, `created_at`, `updated_at`) VALUES
(12, 'framwork21', NULL, 1, '2017-04-26 07:40:54', '2017-04-27 02:40:59'),
(14, '0.04', NULL, 1, '2017-04-27 02:40:37', '2017-04-28 05:08:27'),
(21, 'framework_0.07', NULL, 1, '2017-04-28 05:24:42', '2017-04-28 08:53:31'),
(28, 'framework_0.11', NULL, 1, '2017-04-28 07:16:00', '2017-04-28 07:19:47'),
(31, 'framework_0.03', NULL, 2, '2017-04-28 08:11:15', '2017-05-30 05:37:06'),
(34, 'framework_0.12', NULL, 1, '2017-04-28 09:01:56', '2017-05-10 08:54:14'),
(39, 'framework_0.15', NULL, 1, '2017-05-11 04:53:06', '2017-05-12 06:03:25'),
(40, 'framework_0.16', NULL, 1, '2017-05-12 06:03:10', '2017-05-26 08:18:35'),
(41, 'framework_0.17', NULL, 1, '2017-05-26 08:07:34', '2017-05-30 05:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_pages`
--

CREATE TABLE `frontend_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'draft',
  `page_access` tinyint(4) NOT NULL DEFAULT '1',
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'custom',
  `edited_by` int(10) UNSIGNED DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `page_layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_layout_settings` text COLLATE utf8_unicode_ci,
  `main_content` longtext COLLATE utf8_unicode_ci,
  `header` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `form_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `content_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'editor',
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frontend_pages`
--

INSERT INTO `frontend_pages` (`id`, `module_id`, `user_id`, `title`, `slug`, `url`, `status`, `page_access`, `type`, `edited_by`, `permission`, `parent_id`, `page_layout`, `page_layout_settings`, `main_content`, `header`, `footer`, `form_path`, `settings`, `content_type`, `template`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Home', 'home', '/', 'published', 0, 'core', 1, '', NULL, 'gv_full_screen_layout.main_gv', '{\"left_bar\":\"2345f2d9858ae.2345f2d9858au\"}', '<div> </div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<div> </div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<div class=\"row\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h2>Pinterest embed in Bootstrap</h2>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<div class=\"md-12\">\r\n\r\n<!-- START pinterest embed -->\r\n\r\n<!-- Please call pinit.js only once per page -->\r\n\r\n\r\n<!-- END pinterest embed -->\r\n\r\n\r\n<hr />\r\n\r\n<!-- Validation -->\r\n\r\n\r\n[url=http://validator.w3.org/check?uri=http://bootsnipp.com/iframe/9xQ4]<small>HTML</small><sup>5</sup>[/url]\r\n\r\n\r\n\r\n</div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<!-- /.md-12 --></div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<!-- /.row -->\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<div> </div>', '1', '1', NULL, '{\"children\":{\"enable_layout\":\"1\",\"page_layout\":null},\"children_page_layout_settings\":null}', 'template', 'gv_content_unit.dfgh8975d6fghdfg46dfg5h', '2017-02-14 20:00:00', '2018-01-11 10:36:24'),
(2, NULL, 1, 'Login', 'login', '/login-test', 'published', 1, 'core', NULL, '', NULL, '59085b9b20526.59087192b63db', NULL, '', '0', '0', NULL, NULL, 'editor', NULL, NULL, '2017-11-27 07:18:32'),
(3, NULL, 1, 'Register', 'register', '/register', 'published', 1, 'core', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'editor', NULL, NULL, NULL),
(4, NULL, 1, 'Error', 'error', '', 'published', 1, 'core', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'editor', NULL, NULL, NULL),
(6, NULL, 1, 'Profile', 'profile', '/profile', 'published', 1, 'core', NULL, '', NULL, '59085b9b20526.59087192b63db', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<table class=\"table table-bordered\">\r\n<tbody id=\"field_list\">\r\n<tr class=\"field-row\">\r\n<td>\r\n[edit-form slug=594a4369402d8 edit=user_id]\r\n\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</body>\r\n</html>', '1', '1', NULL, NULL, 'editor', NULL, NULL, '2017-06-26 03:03:52'),
(7, NULL, 1, 'My account', 'my-account', '/my-account', 'published', 2, 'core', NULL, '', NULL, 'front_layout_with_2_col.cccccccccc', '{\"left_bar\":\"2345f2d9858ae.5a4514c1f144e\"}', NULL, '1', '0', NULL, '{\"children\":{\"enable_layout\":\"0\",\"page_layout\":\"front_layout_with_2_col.cccccccccc\"},\"children_page_layout_settings\":null}', 'editor', NULL, NULL, '2018-01-11 11:29:02'),
(8, NULL, 1, 'My details', 'my-account', '/my-account/my-details', 'published', 2, 'core', NULL, '', 7, 'front_layout_with_2_col.cccccccccc', '{\"left_bar\":\"2345f2d9858ae.5a4514c1f144e\"}', 'hello', '1', '0', NULL, '{\"children\":{\"enable_layout\":\"1\",\"page_layout\":null},\"children_page_layout_settings\":null}', 'editor', NULL, NULL, '2018-01-10 23:16:14'),
(79, NULL, 1, 'Parent', '5a1425488338a', '/parent', 'published', 1, 'custom', NULL, NULL, NULL, 'front_layout_with_2_col.cccccccccc', '{\"left_bar\":null}', NULL, '1', '0', NULL, '{\"children\":{\"enable_layout\":\"0\",\"page_layout\":\"front_layout_with_2_col.cccccccccc\"},\"children_page_layout_settings\":{\"left_bar\":\"frontend_sidebar_3434343434.rrededed4\"}}', 'editor', NULL, '2017-11-21 09:08:24', '2017-11-27 06:14:06'),
(81, NULL, 1, 'test2', '5a1425b805510', '/test2', 'published', 1, 'custom', NULL, NULL, 79, NULL, '{\"left_bar\":null}', NULL, '1', '0', NULL, NULL, 'editor', NULL, '2017-11-21 09:10:16', '2017-11-27 04:43:07'),
(82, NULL, 1, 'New Page', '5a181e1038e31', '/new-page(82)', 'draft', 1, 'custom', NULL, NULL, 81, NULL, NULL, NULL, '1', '0', NULL, NULL, 'editor', NULL, '2017-11-24 09:26:40', '2017-11-24 09:30:00'),
(83, NULL, 1, 'New Page for test', '5a1bd0ebcab6c', '/new-page', 'published', 1, 'custom', NULL, NULL, 81, NULL, NULL, NULL, '1', '0', NULL, '{\"children\":{\"enable_layout\":\"1\",\"page_layout\":null},\"children_page_layout_settings\":null}', 'editor', NULL, '2017-11-27 04:46:35', '2017-11-27 07:22:50'),
(91, NULL, 1, 'cdcd', '5a1ffc82949bd', '/f/cdcd', 'published', 1, 'core', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'template', NULL, '2017-11-30 08:41:38', '2017-11-30 08:41:38'),
(95, NULL, 1, 'child test tagged', '1512108975180.tagged', '/f/cdcd/child-test', 'published', 1, 'core', NULL, NULL, 91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'template', NULL, '2017-12-01 03:20:30', '2017-12-01 03:20:30'),
(96, NULL, 1, 'classify', '5a213812d5cb6', '/classify', 'published', 1, 'custom', NULL, NULL, NULL, 'front_layout_with_2_col.cccccccccc', '{\"left_bar\":\"frontend_sidebar_3434343434.rrededed4\"}', NULL, '1', '0', NULL, '{\"children\":{\"enable_layout\":\"1\",\"page_layout\":null},\"children_page_layout_settings\":null}', 'template', 'classify.dc4d54c5d4c54', '2017-12-01 07:08:02', '2017-12-01 07:11:59'),
(97, NULL, 1, 'All post', 'all-posts', '/all-posts', 'published', 0, 'plugin', NULL, NULL, NULL, 'front_layout_with_2_col.cccccccccc', '{\"left_bar\":\"frontend_sidebar_3434343434.rrededed4\"}', 'all_post.default', '1', '0', 'blog::_partials.all_post_settings', '{\"children\":null,\"children_page_layout_settings\":null}', 'template', 'membership_plans.fugitsu', '2017-12-01 07:08:02', '2018-01-22 14:09:24'),
(98, NULL, 1, 'Single post', 'single-post', '/all-posts/{param}', 'published', 1, 'plugin', NULL, NULL, 97, 'front_layout_with_2_col.cccccccccc', '{\"left_bar\":\"frontend_sidebar_3434343434.rrededed4\"}', 'single_post.default', '1', '0', NULL, '', 'template', 'unit_for_post_from_membership.fugitsu', '2017-12-01 07:08:02', '2018-01-22 14:09:24'),
(99, NULL, 1, 'My page', '5a3ced0d72e35', '/qaq', 'published', 0, 'custom', NULL, NULL, NULL, 'front_layout_with_2_col.cccccccccc', '{\"left_bar\":\"frontend_sidebar_3434343434.rrededed4\"}', '[form id=13]', '1', '0', NULL, '{\"children\":{\"enable_layout\":\"1\",\"page_layout\":null},\"children_page_layout_settings\":null}', 'editor', NULL, '2017-12-22 19:31:25', '2017-12-22 19:33:27'),
(100, NULL, 1, 'FormBuilder', '5a3bba702ff26', '/form-builder', 'published', 2, 'plugin', NULL, NULL, NULL, '', '{}', '[form id=13]', '0', '0', NULL, '{\r\n \"file_path\": \"\\\\BtyBugHook\\\\Forms\\\\Http\\\\Controllers\\\\IndexConroller@getFormBulder\"\r\n}', 'special', NULL, '2017-12-21 15:43:12', '2017-12-22 03:17:14'),
(101, NULL, 1, 'FieldTypes', '5a3bba702ff29', '/field-types', 'published', 2, 'plugin', NULL, NULL, NULL, '', '{}', '[form id=13]', '0', '0', NULL, '{\r\n \"file_path\": \"\\\\BtyBugHook\\\\Forms\\\\Http\\\\Controllers\\\\FrontEndConroller@getFieldTypes\"\r\n}', 'special', NULL, '2017-12-21 15:43:12', '2017-12-22 03:17:14'),
(102, NULL, 1, 'FieldTypesSettings', '5a3bba702ff33', '/field-types/{param}/settings', 'published', 2, 'plugin', NULL, NULL, 101, '', '{}', '[form id=13]', '0', '0', NULL, '{\r\n \"file_path\": \"\\\\BtyBugHook\\\\Forms\\\\Http\\\\Controllers\\\\FrontEndConroller@getFieldTypesSettings\"\r\n}', 'special', NULL, '2017-12-21 18:43:12', '2017-12-22 06:17:14'),
(103, 'sahak.avatar/forms', 1, 'My fields', 'my-fields', '/my-account/my-fields', 'published', 1, 'plugin', NULL, NULL, 7, NULL, NULL, NULL, '1', '0', NULL, '{\"file_path\":\"\\\\BtyBugHook\\\\Forms\\\\Http\\\\Controllers\\\\FrontEndConroller@myFields\"}', 'special', NULL, '2018-01-10 13:21:00', '2018-01-10 13:21:00'),
(104, 'sahak.avatar/forms', 1, 'My forms', 'my-forms', '/my-account/my-forms', 'published', 1, 'plugin', NULL, NULL, 7, NULL, NULL, NULL, '1', '0', NULL, '{\"file_path\":\"\\\\BtyBugHook\\\\Forms\\\\Http\\\\Controllers\\\\FrontEndConroller@myForms\"}', 'special', NULL, '2018-01-10 13:21:00', '2018-01-10 13:21:00'),
(105, 'sahak.avatar/forms', 1, 'Field Edit', 'my-field-edit', '/my-account/my-fields/edit/{param}', 'published', 1, 'plugin', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, '{\"file_path\":\"\\\\BtyBugHook\\\\Forms\\\\Http\\\\Controllers\\\\FrontEndConroller@myFieldEdit\"}', 'special', NULL, '2018-01-10 13:13:14', '2018-01-10 13:13:14'),
(106, 'sahak.avatar/payments', 1, 'Shopping card', 'shopping-card', '/shopping-card', 'published', 1, 'plugin', NULL, NULL, NULL, 'front_layout_with_2_col.cccccccccc', NULL, NULL, '1', '0', 'payments::shopping.page_settings', NULL, 'template', 'shopping_cart.default', '2018-01-10 16:21:00', '2018-01-12 17:51:11'),
(107, 'sahak.avatar/membership', 1, 'Products Page', 'products', '/products', 'published', 1, 'plugin', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, '{\"file_path\":\"\\\\BtyBugHook\\\\Membership\\\\Http\\\\Controllers\\\\FrontPagesController@grtProducts\"}', 'special', NULL, '2018-01-10 12:13:14', '2018-01-10 12:13:14'),
(108, 'sahak.avatar/membership', 1, 'Product', 'product', '/product/{param}', 'published', 1, 'plugin', NULL, NULL, 106, NULL, NULL, NULL, '1', '0', NULL, '{\"file_path\":\"\\\\BtyBugHook\\\\Membership\\\\Http\\\\Controllers\\\\FrontPagesController@getProduct\"}', 'special', NULL, '2018-01-10 16:13:14', '2018-01-10 16:13:14'),
(114, 'sahak.avatar/membership', NULL, 'All fugitsu', 'all_fugitsu', '/fugitsu', 'published', 1, 'plugin', NULL, NULL, NULL, 'front_layout_with_2_col.cccccccccc', NULL, NULL, '1', NULL, 'mbshp::page_settings.all_posts', NULL, 'template', 'membership_plans.fugitsu', '2018-01-22 13:43:30', '2018-01-22 13:43:30'),
(115, 'sahak.avatar/membership', NULL, 'Single fugitsu', 'single_fugitsu', '/fugitsu/{param}', 'published', 1, 'plugin', NULL, NULL, 114, 'front_layout_with_2_col.cccccccccc', NULL, NULL, '1', NULL, 'mbshp::page_settings.single_post', NULL, 'template', 'unit_for_post_from_membership.fugitsu', '2018-01-22 13:43:30', '2018-01-22 13:43:30'),
(116, 'sahak.avatar/payments', 1, 'Check out', 'check_out', '/check-out', 'published', 1, 'plugin', NULL, NULL, NULL, 'front_layout_with_2_col.cccccccccc', NULL, NULL, '1', '0', 'payments::checkout.page_settings', NULL, 'template', '', '2018-01-11 04:21:00', '2018-01-13 05:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_pages_tags`
--

CREATE TABLE `frontend_pages_tags` (
  `id` varchar(100) NOT NULL,
  `frontend_page_id` int(10) UNSIGNED NOT NULL,
  `tags_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fugitsu`
--

CREATE TABLE `fugitsu` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Test` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fugitsu`
--

INSERT INTO `fugitsu` (`id`, `author_id`, `title`, `Test`, `description`, `image`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Mesedez', NULL, 'test', NULL, NULL, NULL, '1', NULL, NULL),
(3, 0, 'BMW', NULL, 'BMW DESC', NULL, NULL, NULL, '1', NULL, NULL),
(4, 0, 'new testinggggggggggggg', 'test', 'testing descro', NULL, NULL, NULL, '1', NULL, NULL),
(5, 0, 'Mesedez Bnez', NULL, 'test', NULL, NULL, NULL, '1', NULL, NULL),
(6, 0, 'Mesedez AMG', NULL, 'test', NULL, NULL, NULL, '1', NULL, NULL),
(7, 0, 'edited e xoxa', NULL, 'testing descro', NULL, NULL, NULL, '1', NULL, NULL),
(8, 0, 'new testing ddddddd', NULL, 'testing descro', NULL, NULL, NULL, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

CREATE TABLE `generalsettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_admin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `num_admin`, `created_at`, `updated_at`) VALUES
(1, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hooks`
--

CREATE TABLE `hooks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'layout',
  `help_text` text,
  `slug` varchar(100) NOT NULL,
  `data` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hooks`
--

INSERT INTO `hooks` (`id`, `name`, `tag`, `author_id`, `type`, `help_text`, `slug`, `data`, `created_at`, `updated_at`) VALUES
(1, 'Hook 1', 'frontend', 2, 'layout', 'help', 'csdcdscd5sc5sd15c', NULL, '2017-09-30 17:43:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapping`
--

CREATE TABLE `mapping` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `json_data` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mapping`
--

INSERT INTO `mapping` (`id`, `name`, `json_data`, `created_at`, `updated_at`) VALUES
(1, 'New One', '{\"data_source\":\"file\",\"file-unit\":\"584060b0906df\",\"data_source_type_val\":\"english_name\",\"data_source_type_key\":\"english_name\",\"data_source_type_default\":\"Andorra\"}', '2016-12-09 12:02:26', '2016-12-09 12:02:26'),
(2, 'second', '{\"data_source\":\"related\",\"data_source_table_name\":\"users\",\"data_source_columns\":\"username\"}', '2016-12-09 16:05:20', '2016-12-09 16:05:20'),
(3, 'membership', '{\"data_source\":\"related\",\"data_source_table_name\":\"memberships\",\"data_source_columns\":\"id\"}', '2016-12-20 11:05:35', '2016-12-20 11:05:35'),
(5, 'FILE map', '{\"data_source\":\"file\",\"file-unit\":\"584060b0906df\",\"data_source_type_val\":\"english_name\",\"data_source_type_key\":\"english_name\",\"data_source_type_default\":\"Antigua and Barbuda\"}', '2016-12-21 03:50:50', '2016-12-21 03:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `folder_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active_variation` int(11) NOT NULL,
  `ext` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alt_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `alt_text` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special` enum('all-access','no-access') COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `slug`, `special`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 'basic', NULL, 'Basic desc', NULL, '2016-12-05 06:24:22', '2016-12-05 03:23:23'),
(2, 'Pro', 'pro', NULL, 'Pro description', NULL, '2017-03-27 12:47:19', '2017-03-27 12:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `membership_permission`
--

CREATE TABLE `membership_permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `membership_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `membership_permission`
--

INSERT INTO `membership_permission` (`id`, `page_id`, `membership_id`, `created_at`, `updated_at`) VALUES
(2, 39, 1, '2017-06-12 02:48:13', '2017-06-12 02:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `membership_statuses`
--

CREATE TABLE `membership_statuses` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `icon` varchar(50) DEFAULT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'custom',
  `json_data` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership_statuses`
--

INSERT INTO `membership_statuses` (`id`, `slug`, `title`, `description`, `icon`, `type`, `json_data`, `created_at`, `updated_at`) VALUES
(1, '5a57b12305720', 'active', 'active status', 'fa-angellist', 'core', NULL, '2018-01-11 19:02:00', NULL),
(2, '5a57b4c08e5fc', 'inactive', 'inactive status desc', 'fa-bell', 'custom', NULL, '2018-01-11 18:02:24', '2018-01-11 18:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `membership_types`
--

CREATE TABLE `membership_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(4) UNSIGNED NOT NULL DEFAULT '1',
  `plan_id` int(10) UNSIGNED DEFAULT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `membership_types`
--

INSERT INTO `membership_types` (`id`, `title`, `icon`, `description`, `is_active`, `plan_id`, `is_default`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Super User', 'fa fa-cog', 'main group', 0, 3, 0, '2018-01-10 12:48:19', '2018-01-11 16:17:40', NULL),
(2, 'Pro user', 'asdfasdf', 'asdfasdfasdf', 1, 4, 0, '2018-01-10 12:51:33', '2018-01-11 16:15:53', NULL),
(3, 'Free user', 'fa fa-user', 'this user can see only free options', 1, NULL, 1, '2018-01-11 16:18:25', '2018-01-11 19:03:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_groups`
--

CREATE TABLE `member_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_special` tinyint(4) NOT NULL DEFAULT '0',
  `statuses` text COLLATE utf8_unicode_ci,
  `restrictions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_variation`
--

CREATE TABLE `menu_variation` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` int(10) UNSIGNED NOT NULL,
  `user_role` int(10) UNSIGNED NOT NULL,
  `menus_id` int(10) UNSIGNED NOT NULL,
  `is_core` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_variation`
--

INSERT INTO `menu_variation` (`id`, `title`, `class`, `user_role`, `menus_id`, `is_core`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Left Navbar Core - superadmin', 0, 1, 1, 1, 0, NULL, NULL),
(2, 'User Menu Core - superadmin', 0, 1, 2, 1, 0, NULL, NULL),
(3, 'Left Header Core - superadmin', 0, 1, 3, 1, 0, NULL, NULL),
(4, 'Right Header Core - superadmin', 0, 1, 4, 1, 0, NULL, NULL),
(5, 'Left Navbar Core - admin', 0, 2, 1, 1, 0, NULL, NULL),
(6, 'User Menu Core - admin', 0, 2, 2, 1, 0, NULL, NULL),
(7, 'Left Header Core - admin', 23, 2, 3, 1, 0, NULL, NULL),
(8, 'Right Header Core - admin', 0, 2, 4, 1, 0, NULL, NULL),
(9, 'Left Navbar Core - manager', 0, 10, 1, 1, 0, NULL, NULL),
(10, 'User Menu Core - manager', 0, 10, 2, 1, 0, NULL, NULL),
(11, 'Left Header Core - manager', 0, 10, 3, 1, 0, NULL, NULL),
(12, 'Right Header Core - manager', 0, 10, 4, 1, 0, NULL, NULL),
(13, 'Left Header Core - admin-copy', 0, 2, 3, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_02_10_145728_notification_categories', 1),
(2, '2014_08_01_210813_create_notification_groups_table', 1),
(3, '2014_08_01_211045_create_notification_category_notification_group_table', 1),
(4, '2015_01_20_084450_create_roles_table', 1),
(5, '2015_01_20_084455_users', 1),
(6, '2015_01_20_084525_create_role_user_table', 1),
(7, '2015_01_24_080208_create_permissions_table', 1),
(8, '2015_01_24_080433_create_permission_role_table', 1),
(9, '2015_05_05_212549_create_notifications_table', 1),
(10, '2015_06_06_211555_change_type_to_extra_in_notifications_table', 1),
(11, '2015_06_07_211555_alter_category_name_to_unique', 1),
(12, '2016_01_04_180640_create_layout_table', 1),
(13, '2016_01_27_184655_email_groups', 1),
(14, '2016_01_27_185016_emails', 1),
(15, '2016_03_01_065128_create_assests_table', 1),
(16, '2016_03_01_070558_create_core_pages_table', 1),
(17, '2016_03_01_072145_create_generalsettings_table', 1),
(18, '2016_03_01_072248_create_media_table', 1),
(19, '2016_03_01_072332_create_menus_table', 1),
(20, '2016_03_01_072359_create_modules_table', 1),
(21, '2016_03_01_101625_create_sdn_settings_table', 1),
(22, '2016_03_01_102012_create_sysevents_table', 1),
(23, '2016_03_01_102142_create_sysevent_template_table', 1),
(24, '2016_03_01_102213_create_tags_table', 1),
(25, '2016_03_01_102604_create_widgets_table', 1),
(26, '2016_03_03_103029_create_settings_table', 1),
(27, '2016_03_14_110040_create_themes_table', 1),
(28, '2016_03_14_110055_create_theme_pages_table', 1),
(29, '2016_03_14_110110_create_theme_setting_table', 1),
(30, '2016_04_13_155145_create_pagesettings_table', 1),
(31, '2016_04_22_085489_create_cs_comments_profile_table', 1),
(32, '2016_05_09_184800_create_sidebar_types_table', 1),
(33, '2016_05_09_184801_create_sidebars_table', 1),
(34, '2016_05_09_191524_create_sidebar_variations_table', 1),
(35, '2016_05_13_110403_users_profile_table', 1),
(36, '2016_05_25_065917_create_events_table', 1),
(37, '2016_06_06_065800_create_docs_table', 1),
(38, '2016_06_27_122433_urlmanager', 1),
(39, '2016_08_16_055900_create_notfound_table', 1),
(40, '2016_08_17_110110_create_theme_settings_table', 1),
(41, '2016_09_06_090405_create_statuses_table', 1),
(42, '2016_09_07_085416_create_members_table', 1),
(43, '2016_09_07_165026_create_restrictions_table', 1),
(44, '2016_09_26_191229_create_admin_pages_table', 1),
(45, '2016_09_30_121042_create_admin_profiles_table', 1),
(46, '2016_09_30_123039_create_menu_data_table', 1),
(47, '2016_09_30_123124_create_menu_variation_table', 1),
(48, '2016_10_11_095608_create_styles_table', 1),
(49, '2016_10_11_095622_create_style_items_table', 1),
(50, '2016_10_20_123039_create_menu_table', 1),
(51, '2016_11_09_185831_creat_taxonomy_table', 1),
(52, '2016_11_09_191131_createte_terms_table', 1),
(53, '2016_11_19_153132_create_fields_table', 1),
(54, '2016_11_27_120932_create_forms_table', 1),
(55, '2016_11_27_121108_create_form_field_table', 1),
(56, '2015_01_20_084446_create_memberships_table', 2),
(57, '2015_01_24_080434_create_membership_permission_table', 3),
(58, '2016_10_12_095607_create_profiles_table', 4),
(59, '2016_10_12_095608_create_profile_styles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `folder_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author_site` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('core','custom') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'core',
  `is_deleteable` tinyint(4) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `plugin_data` text COLLATE utf8_unicode_ci NOT NULL,
  `have_setting` tinyint(4) NOT NULL,
  `setting_contents` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `parent_id`, `title`, `slug`, `status`, `folder_name`, `version`, `author`, `author_site`, `type`, `is_deleteable`, `description`, `plugin_data`, `have_setting`, `setting_contents`, `created_at`, `updated_at`) VALUES
(1, 0, 'Packege', 'packeges', 'true', 'Packeges', '1.0', '', '', 'core', 1, 'packeges', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(2, 0, 'Users', 'users', 'true', 'Users', '1.0', '', '', 'core', 1, 'Users', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(3, 0, 'Media', 'media', 'true', 'Media', '1.0', '', '', 'core', 1, 'media', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(4, 0, 'Create', 'create', 'true', 'Create', '1.0', '', '', 'core', 1, 'create', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(5, 0, 'Settings', 'settings', 'true', 'Settings', '1.0', '', '', 'core', 1, 'settings', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(6, 0, 'Assets', 'assets', 'true', 'Assets', '1.0', '', '', 'core', 1, 'assets', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(7, 0, 'Tools', 'tools', 'true', 'Tools', '1.0', '', '', 'core', 1, 'Tools', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(8, 0, 'Extra', 'extra', 'true', 'Extra', '1.0', '', '', 'core', 1, 'Extra', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(9, 0, 'Sections', 'sections', 'true', 'Sections', '1.0', '', '', 'core', 1, 'Sections', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(10, 0, 'Cashier', 'cashier', 'true', 'Cashier', 'V 1.0', 'Edo', 'http://edo.bootydev.co.uk/', 'core', 1, 'Laravel Cashier provides an expressive, fluent interface to Stripe\'s subscription billing services.', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(11, 0, 'Cloud', 'cloud', 'false', 'Cloud', 'V 1', 'Eduard Terakyan', 'http://edo.bootydev.co.uk', 'custom', 1, 'This is Cloud Module description', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(12, 0, 'Backend', 'backend', 'true', 'Backend', 'V 1', 'core', 'http://edo.bootydev.co.uk/', 'custom', 1, 'this is Backend module description ', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(13, 3, 'Extramedia', 'extramedia', 'true', 'Media', '1.0.0', 'muz', 'muz', 'custom', 1, 'asd asd sadf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdfsadfs', 'a:2:{s:5:\"files\";a:5:{i:0;s:61:\"appdata/app/Modules/Media/AddonSidebar/ExtramediaExtender.php\";i:1;s:58:\"appdata/app/Modules/Media/ExtraRoutes/extramediaroutes.php\";i:2;s:67:\"appdata/app/Modules/Media/Http/Controllers/ExtramediaController.php\";i:3;s:69:\"appdata/app/Modules/Media/Database/Seeds/ExtramediaDatabaseSeeder.php\";i:4;s:62:\"appdata/app/Modules/Media/Resources/Views/extramedia.blade.php\";}s:5:\"links\";a:2:{i:0;s:12:\"/admin/media\";i:1;s:20:\"/admin/media/setting\";}}', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(14, 0, 'CommentsSystem', 'commentssystem', '1', 'CommentsSystem', 'v 1', 'core', 'cccccc', 'core', 1, '', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(15, 0, 'Modules', 'modules', '1', 'Modules', 'v 1', 'core', 'modules', 'core', 1, 'this is modules module description ', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(16, 0, 'Frontend', 'frontend', 'true', 'Frontend', '1', 'edo', 'edo.com', 'core', 1, '', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(17, 0, 'Membership', 'membership', 'true', 'Membership', 'v 1', 'Edo', 'http://edo.bootydev.co.uk/', 'core', 1, '', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(18, 0, 'Connector', 'connector', 'true', 'Connector', 'v 1', 'Edo', 'http://edo.bootydev.co.uk/', 'core', 1, 'Connector', '', 0, '', '2016-11-27 04:19:45', '2016-11-27 04:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `pagesettings`
--

CREATE TABLE `pagesettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `footer` tinyint(4) NOT NULL DEFAULT '0',
  `header` tinyint(4) NOT NULL DEFAULT '0',
  `body` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `layout` int(11) NOT NULL,
  `page` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pagesettings`
--

INSERT INTO `pagesettings` (`id`, `footer`, `header`, `body`, `layout`, `page`, `created_at`, `updated_at`) VALUES
(1, 0, 0, NULL, 1, 'dashboard', NULL, NULL),
(2, 0, 0, NULL, 2, 'pages', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'roles',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `parent`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Users', 'users-module', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(2, 'All Users', 'users', 1, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(3, 'Configuration', 'users.configuration', 1, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(4, 'Packeges', 'packeges-module', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(5, 'Plugins', 'plugins', 4, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(6, 'Templates', 'templates', 4, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(7, 'Media', 'media-module', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(8, 'All Media', 'media', 7, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(9, 'Settings', 'media.setting', 7, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(10, 'Create', 'create-module', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(11, 'Widgets', 'create.widgets', 10, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(12, 'Menus', 'create.menu', 10, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(13, 'Taxonomy', 'create.taxonomy', 10, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(14, 'Tags', 'create.tag', 10, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(15, 'Forms', 'create.form', 10, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(16, 'Fields', 'create.form-fields', 10, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(17, 'Settings', 'settings-module', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(18, 'Emails', 'settings.email.core', 17, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(19, 'Language', 'settings.lang', 17, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(20, 'Back End', 'settings.backgeneral', 17, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(21, 'System', 'settings.system', 17, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(22, 'Api', 'api-module', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(23, 'Get Token', 'api', 22, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(24, 'List', 'api.list', 22, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(25, 'Builder', 'builder-module', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(26, 'Mini Builder', 'builders.mini', 25, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(27, 'Form Builder', 'builders.forms', 25, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(28, 'Classes', 'builders.classes', 25, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(29, 'Extra', 'builders.extra', 25, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(30, 'Assets builders', 'builders.panel', 25, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(31, 'Page Builder', 'builders.page', 25, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(32, 'Cashier', 'cashier', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(33, 'My Sections', 'my_sections-module', 0, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(34, 'Create new section', 'sections.sections', 33, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(35, 'Add User', 'users.add-member', 2, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(36, 'Edit Users', 'users.edit-users.{params}', 2, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(37, 'View User profile', 'profile.{params}', 2, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(38, 'Delete users', 'users.deleteMember.{params}', 2, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(39, 'Admins', 'users.admins', 2, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(40, 'Edit admins', 'users.editAdmins.{params}', 2, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(41, 'Create Admin', 'users.create-admin', 2, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(42, 'New Role', 'users.role', 3, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(43, 'Edit role', 'users.edit-role', 3, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(44, 'Delete Role', 'users.role.{params}', 3, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(45, 'Access', 'users.configuration.access.{params}', 3, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(46, 'Remove Access', 'users.configuration.remove-access', 3, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45'),
(47, 'Add Access', 'users.configuration.add-access', 3, NULL, 'roles', '2016-11-27 04:19:45', '2016-11-27 04:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `page_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'back',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `page_id`, `role_id`, `page_type`, `created_at`, `updated_at`) VALUES
(2, 18, 4, 'back', '2017-09-15 06:46:52', '2017-09-15 06:46:52'),
(3, 1, 4, 'front', '2017-09-16 13:32:40', '2017-09-16 13:32:40'),
(5, 1, 2, 'front', '2017-09-21 09:01:59', '2017-09-21 09:01:59'),
(6, 1, 1, 'front', '2017-09-21 09:01:59', '2017-09-21 09:01:59'),
(9, 91, 4, 'back', '2017-09-21 15:38:48', '2017-09-21 15:38:48'),
(10, 2, 6, 'front', '2017-09-21 15:39:25', '2017-09-21 15:39:25'),
(11, 1, 6, 'front', '2017-09-21 15:48:04', '2017-09-21 15:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `plan_id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `object` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(6) UNSIGNED NOT NULL,
  `created` int(10) UNSIGNED NOT NULL,
  `currency` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `interval` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `interval_count` int(5) UNSIGNED NOT NULL,
  `livemode` tinyint(4) NOT NULL,
  `metadata` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `statement_descriptor` text COLLATE utf8_unicode_ci NOT NULL,
  `trial_period_days` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_id`, `object`, `amount`, `created`, `currency`, `interval`, `interval_count`, `livemode`, `metadata`, `name`, `statement_descriptor`, `trial_period_days`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'test-plan', 'plan', 500, 1515675684, 'usd', 'month', 1, 0, '[]', 'Test plan', 'test test', '', 1, '2018-01-11 12:01:24', '2018-01-11 12:01:24'),
(4, 'vip-plan-1', 'plan', 50000, 1515690621, 'usd', 'month', 1, 0, '[]', 'VIP PLAN1', 'VIP PLan', '', 1, '2018-01-11 16:10:22', '2018-01-11 16:10:22'),
(5, 'test-plan-0', 'plan', 4000, 1515859140, 'usd', 'month', 1, 0, '[]', 'test', 'vsdsdfgsdfg', '', 1, '2018-01-13 14:59:01', '2018-01-13 14:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gago` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `test_column` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `gago`, `description`, `test_column`, `image`, `slug`, `url`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'My First Post', '', 'Niki Postingan Sing Kepisan Njeh, Perdana Ngoten', NULL, 'images/posts/5a26dd098e39d.jpg', 'My-First-Post', NULL, NULL, NULL, 'published', '2017-10-03 12:10:22', '2017-12-06 01:53:13'),
(2, 1, 'test', '', 'test', NULL, 'images/posts/5a26d9f5e9a56.jpg', 'test', NULL, NULL, NULL, 'published', '2017-12-06 01:40:05', '2017-12-06 01:40:05'),
(3, 1, 'uuu', '', 'uuuu', NULL, 'images/posts/5a26da145b969.jpg', 'uuu', NULL, NULL, NULL, 'published', '2017-12-06 01:40:36', '2017-12-06 01:49:50'),
(4, 0, 'vvvvvvvvvvvvvvvvv', '1', 'ffffffffff', NULL, NULL, '', NULL, NULL, NULL, '0', '2017-12-25 10:32:12', NULL),
(6, 0, 'test', '1', 'test', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(7, 0, 'dcdcdc', '1', 'test for post', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(9, 0, 'dfvdfvdfvf', '1', 'fdvdfvfdv', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(10, 0, 'vvvvvvvvvvvvvvvv', '3', 'fvfv', NULL, NULL, NULL, NULL, NULL, NULL, '0', '2017-12-25 10:32:12', NULL),
(11, 0, 'sdscsdc', '1', 'cccccccccc', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(12, 0, 'vdfvdfvdfv', '1', 'vdfvdfvdf', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2017-12-25 10:32:12', NULL),
(13, 0, 'yyyyyyyyyyyyyyy', '1', 'yyyyyyyyyyyyyyyyyy', NULL, NULL, NULL, NULL, NULL, NULL, '0', '2017-12-25 10:32:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_media`
--

CREATE TABLE `posts_media` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'image',
  `mime_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_additional_data`
--

CREATE TABLE `post_additional_data` (
  `data_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `key` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_additional_data`
--

INSERT INTO `post_additional_data` (`data_id`, `post_id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 16, 'author_details', '1', '2017-03-20 08:23:54', '2017-03-20 08:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `is_default` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `user_id`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'new', 1, 1, NULL, '2017-01-26 12:43:50'),
(9, 'Jhon', 1, 0, '2017-01-26 12:44:05', '2017-01-26 12:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `profile_styles`
--

CREATE TABLE `profile_styles` (
  `profile_id` int(10) UNSIGNED NOT NULL,
  `style_item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile_styles`
--

INSERT INTO `profile_styles` (`profile_id`, `style_item_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 3, NULL, NULL),
(9, 1, NULL, NULL),
(9, 2, NULL, NULL),
(9, 3, NULL, NULL),
(9, 4, NULL, NULL),
(9, 5, NULL, NULL),
(9, 6, NULL, NULL),
(9, 11, NULL, NULL),
(9, 30, NULL, NULL),
(9, 35, NULL, NULL),
(9, 217, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pro_validator`
--

CREATE TABLE `pro_validator` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pro_validator`
--

INSERT INTO `pro_validator` (`id`, `title`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'test', 'integer|between:6,23|nullable', 'good code', '2017-05-22 06:59:28', '2017-05-22 06:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `pym_attributes`
--

CREATE TABLE `pym_attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'text',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pym_attributes`
--

INSERT INTO `pym_attributes` (`id`, `name`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Color', 'color', 'select', '2018-01-15 18:56:33', '2018-01-15 19:25:30'),
(2, 'capability', 'capability', 'checkbox', '2018-01-15 19:17:46', '2018-01-15 20:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `pym_attribute_terms`
--

CREATE TABLE `pym_attribute_terms` (
  `id` int(11) NOT NULL,
  `attribute_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pym_attribute_terms`
--

INSERT INTO `pym_attribute_terms` (`id`, `attribute_id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'black', 'black', 'acdc dcdkc', '2018-01-15 20:29:31', '2018-01-15 20:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special` enum('all-access','no-access') COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `special`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin', 'all-access', 'Site Super Admin', NULL, NULL, NULL),
(2, 'admin', 'administrator', NULL, 'Site administrator, can assign user roles', NULL, NULL, NULL),
(4, 'Staff', 'staff', NULL, 'This is Staff Role, not good role', NULL, NULL, NULL),
(5, 'sdgr', 'drth', NULL, '', NULL, '2017-06-13 00:54:33', '2017-06-13 00:54:33'),
(6, 'xxxxxxxx', 'xxxxxxxxxxx', NULL, 'xxxxxxxxxxx', NULL, '2017-06-19 02:05:52', '2017-06-19 02:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `sdn_settings`
--

CREATE TABLE `sdn_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `zip` tinyint(4) NOT NULL DEFAULT '0',
  `download` tinyint(4) NOT NULL DEFAULT '0',
  `small_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medium_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `large_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('riZckrHR55uPf1h5vW8W5zPkTYNnTFYJXzPs2DQp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSFhYWkJNSTBoMWd4QkxCVXowQnZsUWVvZlk4ckVJajRVMnc2Sjc4NyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1NzoiaHR0cDovL2FsYnVtYnVncy5idHkvYWRtaW4vcGF5bWVudHMvc2V0dGluZ3MvdGF4LXNlcnZpY2VzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly9hbGJ1bWJ1Z3MuYnR5L3B1YmxpYy14L2N1c3RvbS9qcy81YTVjNTc2MDkwMTIwLmpzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJjdXN0b20iO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1516946954);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `settingkey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `section`, `settingkey`, `val`, `created_at`, `updated_at`) VALUES
(61, 'media', 'allowed_img_ext', 'PNG,JPG,JPEG', NULL, NULL),
(62, 'media', 'img_max_size', '50000', NULL, NULL),
(63, 'media', 'allowed_vid_ext', 'mp4,FLV,OGV', NULL, NULL),
(64, 'media', 'vid_max_size', '50000', NULL, NULL),
(65, 'media', 'allowed_music_ext', 'MP3,M4A', NULL, NULL),
(66, 'media', 'music_max_size', '50000', NULL, NULL),
(67, 'media', 'allowed_doc_ext', 'ZIP,RAR,DOCX,XLSX,TXT,PDF', NULL, NULL),
(68, 'media', 'doc_max_size', '50000', NULL, NULL),
(69, 'media', 'allow_download', '1', NULL, NULL),
(70, 'media', 'thumbs', 'a:3:{i:0;a:3:{s:5:\"title\";s:11:\"Small thumb\";s:5:\"width\";s:3:\"150\";s:6:\"height\";s:3:\"150\";}i:1;a:3:{s:5:\"title\";s:11:\"Small thumb\";s:5:\"width\";s:3:\"160\";s:6:\"height\";s:3:\"160\";}i:2;a:3:{s:5:\"title\";s:5:\"large\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";}}', NULL, NULL),
(71, 'setting_system', 'login_timeout', '6000', NULL, '2017-06-19 02:06:11'),
(72, 'setting_system', 'enable_registration', '1', NULL, '2017-06-19 02:06:11'),
(73, 'setting_system', 'email_activation', '1', NULL, '2017-05-18 11:48:26'),
(74, 'setting_system', 'browser_close', '0', NULL, '2017-06-19 02:06:11'),
(75, 'setting_system', 'email_on_register', '0', NULL, '2017-05-18 11:48:26'),
(76, 'setting_system', 'default_language', 'en', NULL, '2017-01-24 12:24:26'),
(77, 'setting_system', 'timezone_id', '113', NULL, '2017-01-24 12:24:26'),
(78, 'setting_system', 'direction', 'ltr', NULL, '2017-01-24 12:24:26'),
(79, 'setting_system', 'error_display', '1', NULL, '2017-01-24 12:24:26'),
(80, 'setting_system', 'date_format', 'd, M y', NULL, '2017-01-24 12:24:26'),
(81, 'setting_system', 'time_format', '12hrs', NULL, '2017-01-24 12:24:26'),
(82, 'setting_system', 'time_format', '12hrs', NULL, NULL),
(83, 'setting_system', 'site_name', 'BootyBug', NULL, '2018-01-11 10:30:44'),
(84, 'setting_system', 'site_log', 'logo.png', NULL, NULL),
(85, 'setting_system', 'site_desc', 'Advanced CMS', NULL, '2017-05-18 11:47:25'),
(86, 'admin_emails', 'info', 'info@avatarbugs.com', NULL, NULL),
(87, 'admin_emails', 'support', 'support@avatarbugs.com', NULL, NULL),
(88, 'admin_emails', 'admin', 'admin@avatarbugs.com', NULL, NULL),
(89, 'admin_emails', 'sales', 'sales@avatarbugs.com', NULL, NULL),
(90, 'admin_emails', 'technical_staff', 'tech@avatarbugs.com', NULL, NULL),
(91, 'setting_system', 'header_tpl', '777777777GV.5a27e5bea2238', '2016-12-06 02:57:11', '2018-01-11 10:31:10'),
(92, 'setting_system', 'footer_tpl', '5445f2d9858ae.r5gtf2d9a95df', '2016-12-06 02:57:11', '2017-09-08 05:57:52'),
(93, 'setting_system', 'layout', '', '2016-12-06 02:57:11', '2017-02-15 12:37:52'),
(94, 'setting_system', 'sidebar1', 'sidebar-4_582312757fsfs7.58231275a3a89', '2016-12-06 02:57:11', '2017-01-27 10:18:32'),
(95, 'setting_system', 'sidebar2', 'sidebar-4_582312757fsfs7.58231275a3a89', '2016-12-06 02:57:11', '2017-01-27 10:18:32'),
(96, 'setting_system', 'site_logo', '22449761-0-logo-evaneos.png', '2016-12-06 02:57:11', '2018-01-11 10:30:44'),
(97, 'setting_system', 'active_profile', '', '2017-01-27 00:31:02', '2017-09-08 06:08:25'),
(98, 'setting_system', 'frontend_page_section', '6665b9b20526.5467b9b52222', '2017-02-16 15:39:31', '2017-09-08 05:59:38'),
(99, 'setting_system', 'backend_header', '58d0f2d9858ae.58d0f2d9a95df', '2017-03-21 08:49:51', '2017-03-21 14:50:17'),
(100, 'setting_system', 'backend_left_bar', '58d166ae1246f.58d166ae3d705', '2017-03-21 08:49:51', '2017-03-21 14:50:17'),
(101, 'setting_system', 'default_field_html', '591d7c9fcdfcb.591d7c9fe9e32', '2017-05-09 22:51:31', '2017-05-19 08:03:16'),
(102, 'setting_system', 'header_enabled', '1', '2017-05-12 09:28:43', '2017-05-19 08:03:16'),
(103, 'setting_system', 'footer_enabled', '0', '2017-05-12 09:28:43', '2017-09-08 06:08:25'),
(104, 'setting_system', 'enable_login', '0', '2017-05-18 11:48:26', '2017-05-18 11:48:26'),
(105, 'setting_system', 'enable_member_access', '0', '2017-05-18 11:48:26', '2017-05-18 11:48:26'),
(106, 'setting_system', 'default_frontend_role', '6', '2017-06-19 02:06:11', '2017-06-19 02:06:11'),
(107, 'setting_system', 'default_user_status', '2', '2017-06-19 02:06:11', '2017-06-19 02:06:11'),
(108, 'mail_settings', 'driver', 'smtp', '2017-06-26 05:13:10', '2017-06-26 05:13:10'),
(109, 'mail_settings', 'host', 'smtp.sendgrid.net', '2017-06-26 05:13:10', '2017-06-26 05:13:10'),
(110, 'mail_settings', 'port', '587', '2017-06-26 05:13:10', '2017-06-26 05:13:10'),
(111, 'mail_settings', 'from_address', 'edo.terakyan@gmail.com', '2017-06-26 05:13:10', '2017-06-26 05:13:10'),
(112, 'mail_settings', 'from_name', 'Edo', '2017-06-26 05:13:10', '2017-06-26 05:13:10'),
(113, 'mail_settings', 'username', 'abokamal', '2017-06-26 05:13:10', '2017-06-26 05:13:10'),
(114, 'mail_settings', 'password', 'supersahak123', '2017-06-26 05:13:10', '2017-06-26 05:13:10'),
(115, 'mail_settings', 'is_invalid', '0', '2017-06-26 05:13:10', '2017-06-26 05:13:26'),
(116, 'media', 'directory_default_max_size', '5', '2017-07-05 04:42:46', '2017-07-05 05:19:36'),
(117, 'media', 'directory_default_extension', '.*', '2017-07-05 04:42:46', '2017-07-05 05:19:36'),
(118, 'media', 'directory_default_uploader', '5947ae0ba319b', '2017-07-05 04:42:46', '2017-07-05 05:19:36'),
(119, 'folder_settings', 'directory_default_max_size', '5', '2017-07-05 05:30:35', '2017-07-05 05:30:35'),
(120, 'folder_settings', 'directory_default_extension', '.*', '2017-07-05 05:30:35', '2017-07-05 05:30:35'),
(121, 'folder_settings', 'directory_default_uploader', '5947ae0ba319b', '2017-07-05 05:30:35', '2017-07-05 05:30:35'),
(122, 'media_plus', 'ui_settings', '{\"display_item\":\"pagination\",\"per_page_item_count\":\"10\",\"allow_folder\":{\"create\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"delete\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"edit\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"copy\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"sub\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"download\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]}},\"allow_item\":{\"upload\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"delete\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"edit\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"copy\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]},\"download\":{\"enabled\":\"1\",\"roles\":[\"superadmin\"]}}}', '2017-07-12 01:30:35', '2017-07-12 13:14:57'),
(123, 'media_plus', 'sorting_settings', '{\"sorting\":{\"new\":{\"enabled\":\"1\"},\"old\":{\"enabled\":\"1\"},\"small\":{\"enabled\":\"1\"},\"big\":{\"enabled\":\"1\"}}}', '2017-07-12 01:30:47', '2017-07-13 06:19:31'),
(124, 'media_plus', 'search_bar_media', '59673713af844.5967385dc09c0', '2017-07-13 06:21:38', '2017-07-13 06:21:38'),
(125, 'backend_settings', 'backend_settings', '{\"header_unit\":\"58d0f2d9858ae.58d0f2d9a95df\",\"footer_unit\":\"backend_footer.59dc5s5cd15w\",\"footer\":\"1\",\"page_icon\":\"fa-android\",\"backend_page_section\":\"backend_two_cols.two_def_4d4d4d4d\",\"placeholders\":{\"left_bar\":\"58d166ae1246f.58d166ae3d705\"}}', '2017-08-24 14:36:04', '2017-12-05 00:51:50'),
(127, 'versions', 'frontend', '{\"js_data\":[\"14\"],\"css_version\":[\"20\"],\"font_version\":null}', '2017-08-30 08:41:28', '2017-10-26 03:29:17'),
(128, 'setting_system', 'selcteunit', 'Front sidebar pro', '2017-10-11 08:22:45', '2017-10-11 08:22:45'),
(129, 'setting_system', 'page_layout', 'front_layout_with_2_col.cccccccccc', '2017-10-11 08:22:45', '2017-10-11 08:22:45'),
(130, 'setting_system', 'page_layout_settings', '{\"sidebar_place_holder_left\":\"frontend_sidebar_3434343434.rrededed4\"}', '2017-10-11 08:22:45', '2017-10-11 08:22:45'),
(131, 'setting_system', 'placeholders', '{\"left_bar\":null}', '2017-10-11 08:52:17', '2018-01-11 10:31:10'),
(132, 'versions', 'backend', '{\"font_version\":null}', '2017-10-24 04:05:52', '2017-11-10 07:50:54'),
(133, 'studios_settings', 'studios_settings', '{\"studios\":{\"1\":\"1\"}}', '2017-10-31 09:17:04', '2017-10-31 09:30:32'),
(134, 'backend_site_settings', 'backend_site_settings', '{\"header_unit\":\"5a040d77ee9bc.5a040d785ef33\",\"footer_unit\":\"backend_footer.59dc5s5cd15w\",\"footer\":\"1\",\"backend_page_section\":\"backend_two_cols.two_def_4d4d4d4d\",\"placeholders\":{\"left_bar\":\"58d166ae1246f.58d166ae3d705\"}}', '2017-11-18 11:54:14', '2017-11-18 13:51:50'),
(135, 'btybug_blog', 'blog_settings', '{\"posts_create_form\":\"create_fugitsu\",\"posts_edit_form\":\"0\",\"url_manager\":\"created_at\"}', '2017-12-20 21:07:11', '2018-01-22 14:09:24'),
(136, 'membership', 'pricing_page', '{\"pricing\":\"membership_plans.default\",\"product\":\"products.default\"}', '2018-01-12 18:22:09', '2018-01-13 18:20:51'),
(137, 'pricing', 'qty', '{\"qty\":[{\"qty\":\"52\",\"price\":null},{\"qty\":\"44\",\"price\":null},{\"qty\":\"44\",\"price\":null}],\"qty_option\":\"select\"}', '2018-01-16 19:34:36', '2018-01-16 19:56:04'),
(138, 'product', 'fugitsu', '{\"price\":{\"is_active\":\"1\",\"options\":{\"simple_price\":\"1\",\"quantity_price\":\"1\",\"price_attributes\":\"1\",\"price_plan\":\"1\"}},\"tax_services\":{\"is_active\":\"1\",\"tab\":\"others\",\"options\":{\"insert_tax_name\":\"insert_tax_include\",\"display_tax_name\":\"display_tax_exclude\"}}}', '2018-01-22 13:43:47', '2018-01-25 18:55:17'),
(139, 'btybug_blog', 'fugitsu_settings', '{\"posts_create_form\":\"create_fugitsu\",\"posts_edit_form\":\"edit_fugitsu\",\"url_manager\":\"id\"}', '2018-01-22 21:08:05', '2018-01-24 22:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_core` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `is_core`, `created_at`, `updated_at`) VALUES
(1, 'active', 0, '2017-06-13 08:12:49', '2017-06-13 08:12:49'),
(2, 'inactive', 0, '2017-06-13 08:12:57', '2017-06-13 08:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `studio_groups`
--

CREATE TABLE `studio_groups` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `studio_packages`
--

CREATE TABLE `studio_packages` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `studio_packages`
--

INSERT INTO `studio_packages` (`id`, `group_id`, `title`, `author`, `status`, `slug`, `description`, `image`, `tag`, `created_at`, `updated_at`) VALUES
(1, 1, 'Child React', 'Mumia', 0, '59f87108053cc', 'This is Child React APP description', 'https://cdn.worldvectorlogo.com/logos/react.svg', NULL, '2017-10-31 08:48:08', '2017-10-31 08:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags_meta`
--

CREATE TABLE `tags_meta` (
  `meta_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_types`
--

CREATE TABLE `tag_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additional_data` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_services`
--

CREATE TABLE `tax_services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL DEFAULT '0',
  `amount_type` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tax_services`
--

INSERT INTO `tax_services` (`id`, `name`, `slug`, `amount`, `amount_type`, `created_at`, `updated_at`) VALUES
(2, 'cdcdcd', 'cdcdc', 22, 'services', '2018-01-25 19:51:57', '2018-01-25 19:51:57'),
(3, 'VATAL', 'cdcdcdc', 50, 'vat', '2018-01-25 19:55:36', '2018-01-25 19:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `urlmanager`
--

CREATE TABLE `urlmanager` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) DEFAULT NULL,
  `front_page_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `urlmanager`
--

INSERT INTO `urlmanager` (`id`, `page_id`, `front_page_id`, `type`, `url`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'core_page', '/', 0, '2016-11-27 04:19:46', '2016-11-27 04:19:46'),
(2, NULL, 8, 'core_page', '/my-account/my-details', 0, '2016-11-27 04:19:46', '2018-01-10 23:15:24'),
(3, NULL, 7, 'core_page', '/my-account', 0, '2016-11-27 04:19:46', '2018-01-11 10:40:38'),
(4, NULL, 5, 'core_page', '/pages/terms_conditions', 0, '2016-11-27 04:19:46', '2016-11-27 04:19:46'),
(5, NULL, 6, 'core_page', '/pages/privacy', 0, '2016-11-27 04:19:46', '2016-11-27 04:19:46'),
(6, NULL, 9, 'custom_page', '/all-classify', 0, '2016-12-06 00:38:17', '2017-03-02 02:29:21'),
(7, 87, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-24 15:39:59', '2016-12-24 15:39:59'),
(8, 88, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-24 15:40:13', '2016-12-24 15:40:13'),
(9, 89, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-24 12:41:00', '2016-12-24 12:41:00'),
(10, 90, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-24 15:41:06', '2016-12-24 15:41:06'),
(11, 86, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-25 11:29:54', '2016-12-25 11:29:54'),
(12, 87, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 11:03:47', '2016-12-26 11:03:47'),
(13, 88, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 11:04:56', '2016-12-26 11:04:56'),
(14, 89, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 11:23:03', '2016-12-26 11:23:03'),
(15, 90, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 11:24:36', '2016-12-26 11:24:36'),
(16, 91, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 11:31:41', '2016-12-26 11:31:41'),
(17, 92, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 11:37:06', '2016-12-26 11:37:06'),
(18, 93, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 11:50:16', '2016-12-26 11:50:16'),
(19, 94, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 11:51:33', '2016-12-26 11:51:33'),
(20, 95, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 12:35:19', '2016-12-26 12:35:19'),
(21, 96, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 13:35:26', '2016-12-26 13:35:26'),
(22, 97, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 13:36:42', '2016-12-26 13:36:42'),
(23, 98, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 13:44:15', '2016-12-26 13:44:15'),
(24, 99, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 13:45:20', '2016-12-26 13:45:20'),
(25, 100, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 13:46:25', '2016-12-26 13:46:25'),
(26, 101, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 13:47:05', '2016-12-26 13:47:05'),
(27, 102, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-26 13:48:25', '2016-12-26 13:48:25'),
(28, 103, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-28 05:42:08', '2016-12-28 05:42:08'),
(29, 104, NULL, 'plugin_page', '/admin/media/drive', 0, '2016-12-28 05:59:55', '2016-12-28 05:59:55'),
(30, 105, NULL, 'plugin_page', '/admin/general/emails/core', 0, '2016-12-28 13:57:45', '2016-12-28 13:57:45'),
(31, 106, NULL, 'plugin_page', '/admin/general/emails/custom', 0, '2016-12-28 13:57:45', '2016-12-28 13:57:45'),
(32, 107, NULL, 'plugin_page', '/admin/general/emails/settings', 0, '2016-12-28 13:57:45', '2016-12-28 13:57:45'),
(33, 108, NULL, 'plugin_page', '/admin/general/emails/update/{param}', 0, '2016-12-28 13:57:45', '2016-12-28 13:57:45'),
(34, 109, NULL, 'plugin_page', '/admin/modules/Frontend/assets', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(35, 110, NULL, 'plugin_page', '/admin/modules/Frontend/info', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(36, 111, NULL, 'plugin_page', '/admin/modules/Frontend/tables', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(37, 112, NULL, 'plugin_page', '/admin/modules/Frontend/permission', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(38, 113, NULL, 'plugin_page', '/admin/modules/Frontend/codes', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(39, 114, NULL, 'plugin_page', '/admin/modules/Frontend/gears', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(40, 115, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(41, 116, NULL, 'plugin_page', '/admin/modules/Frontend/buildb', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(42, 117, NULL, 'plugin_page', '/admin/modules/Frontend/build', 0, '2017-01-10 13:17:27', '2017-01-10 13:17:27'),
(43, 118, NULL, 'plugin_page', '/admin/modules/Frontend/assets', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(44, 119, NULL, 'plugin_page', '/admin/modules/Frontend/info', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(45, 120, NULL, 'plugin_page', '/admin/modules/Frontend/tables', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(46, 121, NULL, 'plugin_page', '/admin/modules/Frontend/permission', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(47, 122, NULL, 'plugin_page', '/admin/modules/Frontend/codes', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(48, 123, NULL, 'plugin_page', '/admin/modules/Frontend/gears', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(49, 124, NULL, 'plugin_page', '/admin/modules/Frontend/gears/layouts', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(50, 125, NULL, 'plugin_page', '/admin/modules/Frontend/gears/units', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(51, 126, NULL, 'plugin_page', '/admin/modules/Frontend/gears/h-f', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(52, 127, NULL, 'plugin_page', '/admin/modules/Frontend/gears/main_body', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(53, 128, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(54, 129, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb/layouts', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(55, 130, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb/units', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(56, 131, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb/h-f', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(57, 132, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb/main_body', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(58, 133, NULL, 'plugin_page', '/admin/modules/Frontend/buildb', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(59, 134, NULL, 'plugin_page', '/admin/modules/Frontend/buildb/pages', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(60, 135, NULL, 'plugin_page', '/admin/modules/Frontend/buildb/menus', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(61, 136, NULL, 'plugin_page', '/admin/modules/Frontend/buildb/classify', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(62, 137, NULL, 'plugin_page', '/admin/modules/Frontend/buildb/tags', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(63, 138, NULL, 'plugin_page', '/admin/modules/Frontend/build', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(64, 139, NULL, 'plugin_page', '/admin/modules/Frontend/build/pages', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(65, 140, NULL, 'plugin_page', '/admin/modules/Frontend/build/menus', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(66, 141, NULL, 'plugin_page', '/admin/modules/Frontend/build/classify', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(67, 142, NULL, 'plugin_page', '/admin/modules/Frontend/build/tags', 0, '2017-01-10 13:24:31', '2017-01-10 13:24:31'),
(68, 143, NULL, 'plugin_page', '/admin/modules/Frontend/assets', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(69, 144, NULL, 'plugin_page', '/admin/modules/Frontend/info', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(70, 145, NULL, 'plugin_page', '/admin/modules/Frontend/tables', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(71, 146, NULL, 'plugin_page', '/admin/modules/Frontend/permission', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(72, 147, NULL, 'plugin_page', '/admin/modules/Frontend/codes', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(73, 148, NULL, 'plugin_page', '/admin/modules/Frontend/gears', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(74, 149, NULL, 'plugin_page', '/admin/modules/Frontend/gears/layouts', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(75, 150, NULL, 'plugin_page', '/admin/modules/Frontend/gears/units', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(76, 151, NULL, 'plugin_page', '/admin/modules/Frontend/gears/h-f', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(77, 152, NULL, 'plugin_page', '/admin/modules/Frontend/gears/main_body', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(78, 153, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(79, 154, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb/layouts', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(80, 155, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb/units', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(81, 156, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb/h-f', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(82, 157, NULL, 'plugin_page', '/admin/modules/Frontend/gearsb/main_body', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(83, 158, NULL, 'plugin_page', '/admin/modules/Frontend/buildb', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(84, 159, NULL, 'plugin_page', '/admin/modules/Frontend/buildb/pages', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(85, 160, NULL, 'plugin_page', '/admin/modules/Frontend/buildb/menus', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(86, 161, NULL, 'plugin_page', '/admin/modules/Frontend/buildb/classify', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(87, 162, NULL, 'plugin_page', '/admin/modules/Frontend/buildb/tags', 0, '2017-01-10 13:29:52', '2017-01-10 13:29:52'),
(88, 163, NULL, 'plugin_page', '/admin/modules/Frontend/build', 0, '2017-01-10 13:29:53', '2017-01-10 13:29:53'),
(89, 164, NULL, 'plugin_page', '/admin/modules/Frontend/build/pages', 0, '2017-01-10 13:29:53', '2017-01-10 13:29:53'),
(90, 165, NULL, 'plugin_page', '/admin/modules/Frontend/build/menus', 0, '2017-01-10 13:29:53', '2017-01-10 13:29:53'),
(91, 166, NULL, 'plugin_page', '/admin/modules/Frontend/build/classify', 0, '2017-01-10 13:29:53', '2017-01-10 13:29:53'),
(92, 167, NULL, 'plugin_page', '/admin/modules/Frontend/build/tags', 0, '2017-01-10 13:29:53', '2017-01-10 13:29:53'),
(93, 168, NULL, 'plugin_page', '/admin/modules/General/assets', 0, '2017-01-10 13:40:13', '2017-01-10 13:40:13'),
(94, 169, NULL, 'plugin_page', '/admin/modules/General/assets', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(95, 170, NULL, 'plugin_page', '/admin/modules/General/info', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(96, 171, NULL, 'plugin_page', '/admin/modules/General/tables', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(97, 172, NULL, 'plugin_page', '/admin/modules/General/permission', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(98, 173, NULL, 'plugin_page', '/admin/modules/General/codes', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(99, 174, NULL, 'plugin_page', '/admin/modules/General/gears', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(100, 175, NULL, 'plugin_page', '/admin/modules/General/gears/layouts', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(101, 176, NULL, 'plugin_page', '/admin/modules/General/gears/units', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(102, 177, NULL, 'plugin_page', '/admin/modules/General/gears/h-f', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(103, 178, NULL, 'plugin_page', '/admin/modules/General/gears/main_body', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(104, 179, NULL, 'plugin_page', '/admin/modules/General/gearsb', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(105, 180, NULL, 'plugin_page', '/admin/modules/General/gearsb/layouts', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(106, 181, NULL, 'plugin_page', '/admin/modules/General/gearsb/units', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(107, 182, NULL, 'plugin_page', '/admin/modules/General/gearsb/h-f', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(108, 183, NULL, 'plugin_page', '/admin/modules/General/gearsb/main_body', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(109, 184, NULL, 'plugin_page', '/admin/modules/General/buildb', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(110, 185, NULL, 'plugin_page', '/admin/modules/General/buildb/pages', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(111, 186, NULL, 'plugin_page', '/admin/modules/General/buildb/menus', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(112, 187, NULL, 'plugin_page', '/admin/modules/General/buildb/classify', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(113, 188, NULL, 'plugin_page', '/admin/modules/General/buildb/tags', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(114, 189, NULL, 'plugin_page', '/admin/modules/General/build', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(115, 190, NULL, 'plugin_page', '/admin/modules/General/build/pages', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(116, 191, NULL, 'plugin_page', '/admin/modules/General/build/menus', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(117, 192, NULL, 'plugin_page', '/admin/modules/General/build/classify', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(118, 193, NULL, 'plugin_page', '/admin/modules/General/build/tags', 0, '2017-01-10 13:40:36', '2017-01-10 13:40:36'),
(119, 194, NULL, 'plugin_page', '/admin/modules/General/assets', 0, '2017-01-10 13:43:41', '2017-01-10 13:43:41'),
(120, 195, NULL, 'plugin_page', '/admin/modules/General/info', 0, '2017-01-10 13:43:41', '2017-01-10 13:43:41'),
(121, 196, NULL, 'plugin_page', '/admin/modules/General/tables', 0, '2017-01-10 13:43:41', '2017-01-10 13:43:41'),
(122, 197, NULL, 'plugin_page', '/admin/modules/General/permission', 0, '2017-01-10 13:43:41', '2017-01-10 13:43:41'),
(123, 198, NULL, 'plugin_page', '/admin/modules/General/codes', 0, '2017-01-10 13:43:41', '2017-01-10 13:43:41'),
(124, 199, NULL, 'plugin_page', '/admin/modules/General/gears', 0, '2017-01-10 13:43:41', '2017-01-10 13:43:41'),
(125, 200, NULL, 'plugin_page', '/admin/modules/General/assets', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(126, 201, NULL, 'plugin_page', '/admin/modules/General/info', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(127, 202, NULL, 'plugin_page', '/admin/modules/General/tables', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(128, 203, NULL, 'plugin_page', '/admin/modules/General/permission', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(129, 204, NULL, 'plugin_page', '/admin/modules/General/codes', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(130, 205, NULL, 'plugin_page', '/admin/modules/General/gears', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(131, 206, NULL, 'plugin_page', '/admin/modules/General/gears/layouts', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(132, 207, NULL, 'plugin_page', '/admin/modules/General/gears/units', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(133, 208, NULL, 'plugin_page', '/admin/modules/General/gears/h-f', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(134, 209, NULL, 'plugin_page', '/admin/modules/General/gears/main_body', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(135, 210, NULL, 'plugin_page', '/admin/modules/General/gearsb', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(136, 211, NULL, 'plugin_page', '/admin/modules/General/gearsb/layouts', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(137, 212, NULL, 'plugin_page', '/admin/modules/General/gearsb/units', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(138, 213, NULL, 'plugin_page', '/admin/modules/General/gearsb/h-f', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(139, 214, NULL, 'plugin_page', '/admin/modules/General/gearsb/main_body', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(140, 215, NULL, 'plugin_page', '/admin/modules/General/buildb', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(141, 216, NULL, 'plugin_page', '/admin/modules/General/buildb/pages', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(142, 217, NULL, 'plugin_page', '/admin/modules/General/buildb/menus', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(143, 218, NULL, 'plugin_page', '/admin/modules/General/buildb/classify', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(144, 219, NULL, 'plugin_page', '/admin/modules/General/buildb/tags', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(145, 220, NULL, 'plugin_page', '/admin/modules/General/build', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(146, 221, NULL, 'plugin_page', '/admin/modules/General/build/pages', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(147, 222, NULL, 'plugin_page', '/admin/modules/General/build/menus', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(148, 223, NULL, 'plugin_page', '/admin/modules/General/build/classify', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(149, 224, NULL, 'plugin_page', '/admin/modules/General/build/tags', 0, '2017-01-10 13:48:30', '2017-01-10 13:48:30'),
(150, 225, NULL, 'plugin_page', '/admin/edo/gears', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(151, 226, NULL, 'plugin_page', '/admin/edo/gears/layouts', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(152, 227, NULL, 'plugin_page', '/admin/edo/gears/units', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(153, 228, NULL, 'plugin_page', '/admin/edo/gears/h-f', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(154, 229, NULL, 'plugin_page', '/admin/edo/gears/main_body', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(155, 230, NULL, 'plugin_page', '/admin/modules/Edo/assets', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(156, 231, NULL, 'plugin_page', '/admin/modules/Edo/info', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(157, 232, NULL, 'plugin_page', '/admin/modules/Edo/tables', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(158, 233, NULL, 'plugin_page', '/admin/modules/Edo/permission', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(159, 234, NULL, 'plugin_page', '/admin/modules/Edo/codes', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(160, 235, NULL, 'plugin_page', '/admin/modules/Edo/gears', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(161, 236, NULL, 'plugin_page', '/admin/modules/Edo/gears/layouts', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(162, 237, NULL, 'plugin_page', '/admin/modules/Edo/gears/units', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(163, 238, NULL, 'plugin_page', '/admin/modules/Edo/gears/h-f', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(164, 239, NULL, 'plugin_page', '/admin/modules/Edo/gears/main_body', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(165, 240, NULL, 'plugin_page', '/admin/modules/Edo/gearsb', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(166, 241, NULL, 'plugin_page', '/admin/modules/Edo/gearsb/layouts', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(167, 242, NULL, 'plugin_page', '/admin/modules/Edo/gearsb/units', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(168, 243, NULL, 'plugin_page', '/admin/modules/Edo/gearsb/h-f', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(169, 244, NULL, 'plugin_page', '/admin/modules/Edo/gearsb/main_body', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(170, 245, NULL, 'plugin_page', '/admin/modules/Edo/buildb', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(171, 246, NULL, 'plugin_page', '/admin/modules/Edo/buildb/pages', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(172, 247, NULL, 'plugin_page', '/admin/modules/Edo/buildb/menus', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(173, 248, NULL, 'plugin_page', '/admin/modules/Edo/buildb/classify', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(174, 249, NULL, 'plugin_page', '/admin/modules/Edo/buildb/tags', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(175, 250, NULL, 'plugin_page', '/admin/modules/Edo/build', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(176, 251, NULL, 'plugin_page', '/admin/modules/Edo/build/pages', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(177, 252, NULL, 'plugin_page', '/admin/modules/Edo/build/menus', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(178, 253, NULL, 'plugin_page', '/admin/modules/Edo/build/classify', 0, '2017-01-11 22:53:04', '2017-01-11 22:53:04'),
(179, 254, NULL, 'plugin_page', '/admin/modules/Edo/build/tags', 0, '2017-01-11 22:53:05', '2017-01-11 22:53:05'),
(180, 255, NULL, 'plugin_page', '/admin/modules/config/General/assets', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(181, 256, NULL, 'plugin_page', '/admin/modules/config/General/info', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(182, 257, NULL, 'plugin_page', '/admin/modules/config/General/tables', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(183, 258, NULL, 'plugin_page', '/admin/modules/config/General/permission', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(184, 259, NULL, 'plugin_page', '/admin/modules/config/General/codes', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(185, 260, NULL, 'plugin_page', '/admin/modules/config/General/gears', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(186, 261, NULL, 'plugin_page', '/admin/modules/config/General/gears/layouts', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(187, 262, NULL, 'plugin_page', '/admin/modules/config/General/gears/units', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(188, 263, NULL, 'plugin_page', '/admin/modules/config/General/gears/h-f', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(189, 264, NULL, 'plugin_page', '/admin/modules/config/General/gears/main_body', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(190, 265, NULL, 'plugin_page', '/admin/modules/config/General/gearsb', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(191, 266, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/layouts', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(192, 267, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/units', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(193, 268, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/h-f', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(194, 269, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/main_body', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(195, 270, NULL, 'plugin_page', '/admin/modules/config/General/buildb', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(196, 271, NULL, 'plugin_page', '/admin/modules/config/General/buildb/pages', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(197, 272, NULL, 'plugin_page', '/admin/modules/config/General/buildb/menus', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(198, 273, NULL, 'plugin_page', '/admin/modules/config/General/buildb/classify', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(199, 274, NULL, 'plugin_page', '/admin/modules/config/General/buildb/tags', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(200, 275, NULL, 'plugin_page', '/admin/modules/config/General/build', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(201, 276, NULL, 'plugin_page', '/admin/modules/config/General/build/pages', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(202, 277, NULL, 'plugin_page', '/admin/modules/config/General/build/menus', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(203, 278, NULL, 'plugin_page', '/admin/modules/config/General/build/classify', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(204, 279, NULL, 'plugin_page', '/admin/modules/config/General/build/tags', 0, '2017-01-12 15:32:42', '2017-01-12 15:32:42'),
(205, 280, NULL, 'plugin_page', '/admin/modules/config/Backend/assets', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(206, 281, NULL, 'plugin_page', '/admin/modules/config/Backend/info', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(207, 282, NULL, 'plugin_page', '/admin/modules/config/Backend/tables', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(208, 283, NULL, 'plugin_page', '/admin/modules/config/Backend/permission', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(209, 284, NULL, 'plugin_page', '/admin/modules/config/Backend/codes', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(210, 285, NULL, 'plugin_page', '/admin/modules/config/Backend/gears', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(211, 286, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/layouts', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(212, 287, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/units', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(213, 288, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/h-f', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(214, 289, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/main_body', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(215, 290, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(216, 291, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/layouts', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(217, 292, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/units', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(218, 293, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/h-f', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(219, 294, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/main_body', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(220, 295, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(221, 296, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/pages', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(222, 297, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/menus', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(223, 298, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/classify', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(224, 299, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/tags', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(225, 300, NULL, 'plugin_page', '/admin/modules/config/Backend/build', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(226, 301, NULL, 'plugin_page', '/admin/modules/config/Backend/build/pages', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(227, 302, NULL, 'plugin_page', '/admin/modules/config/Backend/build/menus', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(228, 303, NULL, 'plugin_page', '/admin/modules/config/Backend/build/classify', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(229, 304, NULL, 'plugin_page', '/admin/modules/config/Backend/build/tags', 0, '2017-01-12 15:33:08', '2017-01-12 15:33:08'),
(230, 305, NULL, 'plugin_page', '/admin/modules/config/Frontend/assets', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(231, 306, NULL, 'plugin_page', '/admin/modules/config/Frontend/info', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(232, 307, NULL, 'plugin_page', '/admin/modules/config/Frontend/tables', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(233, 308, NULL, 'plugin_page', '/admin/modules/config/Frontend/permission', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(234, 309, NULL, 'plugin_page', '/admin/modules/config/Frontend/codes', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(235, 310, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(236, 311, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/layouts', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(237, 312, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/units', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(238, 313, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/h-f', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(239, 314, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/main_body', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(240, 315, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(241, 316, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/layouts', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(242, 317, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/units', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(243, 318, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/h-f', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(244, 319, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/main_body', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(245, 320, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(246, 321, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/pages', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(247, 322, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/menus', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(248, 323, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/classify', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(249, 324, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/tags', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(250, 325, NULL, 'plugin_page', '/admin/modules/config/Frontend/build', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(251, 326, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/pages', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(252, 327, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/menus', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(253, 328, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/classify', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(254, 329, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/tags', 0, '2017-01-12 15:33:19', '2017-01-12 15:33:19'),
(255, 330, NULL, 'plugin_page', '/admin/modules/config/Edo/assets', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(256, 331, NULL, 'plugin_page', '/admin/modules/config/Edo/info', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(257, 332, NULL, 'plugin_page', '/admin/modules/config/Edo/tables', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(258, 333, NULL, 'plugin_page', '/admin/modules/config/Edo/permission', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(259, 334, NULL, 'plugin_page', '/admin/modules/config/Edo/codes', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(260, 335, NULL, 'plugin_page', '/admin/modules/config/Edo/gears', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(261, 336, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/layouts', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(262, 337, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/units', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(263, 338, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/h-f', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(264, 339, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/main_body', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(265, 340, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(266, 341, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/layouts', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(267, 342, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/units', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(268, 343, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/h-f', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(269, 344, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/main_body', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(270, 345, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(271, 346, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/pages', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(272, 347, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/menus', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(273, 348, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/classify', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(274, 349, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/tags', 0, '2017-01-12 15:33:24', '2017-01-12 15:33:24'),
(275, 350, NULL, 'plugin_page', '/admin/modules/config/Edo/build', 0, '2017-01-12 15:33:25', '2017-01-12 15:33:25'),
(276, 351, NULL, 'plugin_page', '/admin/modules/config/Edo/build/pages', 0, '2017-01-12 15:33:25', '2017-01-12 15:33:25'),
(277, 352, NULL, 'plugin_page', '/admin/modules/config/Edo/build/menus', 0, '2017-01-12 15:33:25', '2017-01-12 15:33:25'),
(278, 353, NULL, 'plugin_page', '/admin/modules/config/Edo/build/classify', 0, '2017-01-12 15:33:25', '2017-01-12 15:33:25'),
(279, 354, NULL, 'plugin_page', '/admin/modules/config/Edo/build/tags', 0, '2017-01-12 15:33:25', '2017-01-12 15:33:25'),
(280, 355, NULL, 'plugin_page', '/admin/modules/config/Media/assets', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(281, 356, NULL, 'plugin_page', '/admin/modules/config/Media/info', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(282, 357, NULL, 'plugin_page', '/admin/modules/config/Media/tables', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(283, 358, NULL, 'plugin_page', '/admin/modules/config/Media/permission', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(284, 359, NULL, 'plugin_page', '/admin/modules/config/Media/codes', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(285, 360, NULL, 'plugin_page', '/admin/modules/config/Media/gears', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(286, 361, NULL, 'plugin_page', '/admin/modules/config/Media/gears/layouts', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(287, 362, NULL, 'plugin_page', '/admin/modules/config/Media/gears/units', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(288, 363, NULL, 'plugin_page', '/admin/modules/config/Media/gears/h-f', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(289, 364, NULL, 'plugin_page', '/admin/modules/config/Media/gears/main_body', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(290, 365, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(291, 366, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb/layouts', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(292, 367, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb/units', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(293, 368, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb/h-f', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(294, 369, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb/main_body', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(295, 370, NULL, 'plugin_page', '/admin/modules/config/Media/buildb', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(296, 371, NULL, 'plugin_page', '/admin/modules/config/Media/buildb/pages', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(297, 372, NULL, 'plugin_page', '/admin/modules/config/Media/buildb/menus', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(298, 373, NULL, 'plugin_page', '/admin/modules/config/Media/buildb/classify', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(299, 374, NULL, 'plugin_page', '/admin/modules/config/Media/buildb/tags', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(300, 375, NULL, 'plugin_page', '/admin/modules/config/Media/build', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(301, 376, NULL, 'plugin_page', '/admin/modules/config/Media/build/pages', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(302, 377, NULL, 'plugin_page', '/admin/modules/config/Media/build/menus', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(303, 378, NULL, 'plugin_page', '/admin/modules/config/Media/build/classify', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(304, 379, NULL, 'plugin_page', '/admin/modules/config/Media/build/tags', 0, '2017-01-12 15:33:36', '2017-01-12 15:33:36'),
(305, 380, NULL, 'plugin_page', '/admin/modules/config/Modules/assets', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(306, 381, NULL, 'plugin_page', '/admin/modules/config/Modules/info', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(307, 382, NULL, 'plugin_page', '/admin/modules/config/Modules/tables', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(308, 383, NULL, 'plugin_page', '/admin/modules/config/Modules/permission', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(309, 384, NULL, 'plugin_page', '/admin/modules/config/Modules/codes', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(310, 385, NULL, 'plugin_page', '/admin/modules/config/Modules/gears', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(311, 386, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/layouts', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(312, 387, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/units', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(313, 388, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/h-f', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(314, 389, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/main_body', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(315, 390, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(316, 391, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/layouts', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(317, 392, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/units', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(318, 393, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/h-f', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(319, 394, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/main_body', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(320, 395, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(321, 396, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/pages', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(322, 397, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/menus', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(323, 398, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/classify', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(324, 399, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/tags', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(325, 400, NULL, 'plugin_page', '/admin/modules/config/Modules/build', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(326, 401, NULL, 'plugin_page', '/admin/modules/config/Modules/build/pages', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(327, 402, NULL, 'plugin_page', '/admin/modules/config/Modules/build/menus', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(328, 403, NULL, 'plugin_page', '/admin/modules/config/Modules/build/classify', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(329, 404, NULL, 'plugin_page', '/admin/modules/config/Modules/build/tags', 0, '2017-01-12 15:33:45', '2017-01-12 15:33:45'),
(330, 405, NULL, 'plugin_page', '/admin/modules/config/Users/assets', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(331, 406, NULL, 'plugin_page', '/admin/modules/config/Users/info', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(332, 407, NULL, 'plugin_page', '/admin/modules/config/Users/tables', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(333, 408, NULL, 'plugin_page', '/admin/modules/config/Users/permission', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(334, 409, NULL, 'plugin_page', '/admin/modules/config/Users/codes', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(335, 410, NULL, 'plugin_page', '/admin/modules/config/Users/gears', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(336, 411, NULL, 'plugin_page', '/admin/modules/config/Users/gears/layouts', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(337, 412, NULL, 'plugin_page', '/admin/modules/config/Users/gears/units', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(338, 413, NULL, 'plugin_page', '/admin/modules/config/Users/gears/h-f', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(339, 414, NULL, 'plugin_page', '/admin/modules/config/Users/gears/main_body', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(340, 415, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(341, 416, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/layouts', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(342, 417, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/units', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(343, 418, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/h-f', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(344, 419, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/main_body', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(345, 420, NULL, 'plugin_page', '/admin/modules/config/Users/buildb', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(346, 421, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/pages', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(347, 422, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/menus', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(348, 423, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/classify', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(349, 424, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/tags', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(350, 425, NULL, 'plugin_page', '/admin/modules/config/Users/build', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(351, 426, NULL, 'plugin_page', '/admin/modules/config/Users/build/pages', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(352, 427, NULL, 'plugin_page', '/admin/modules/config/Users/build/menus', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(353, 428, NULL, 'plugin_page', '/admin/modules/config/Users/build/classify', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(354, 429, NULL, 'plugin_page', '/admin/modules/config/Users/build/tags', 0, '2017-01-12 15:33:55', '2017-01-12 15:33:55'),
(355, 430, NULL, 'plugin_page', '/admin/modules/config/Backend/assets', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(356, 431, NULL, 'plugin_page', '/admin/modules/config/Backend/info', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(357, 432, NULL, 'plugin_page', '/admin/modules/config/Backend/tables', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(358, 433, NULL, 'plugin_page', '/admin/modules/config/Backend/permission', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(359, 434, NULL, 'plugin_page', '/admin/modules/config/Backend/codes', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(360, 435, NULL, 'plugin_page', '/admin/modules/config/Backend/gears', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(361, 436, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/layouts', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(362, 437, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/units', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(363, 438, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/h-f', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(364, 439, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/main_body', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(365, 440, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(366, 441, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/layouts', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(367, 442, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/units', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(368, 443, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/h-f', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(369, 444, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/main_body', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(370, 445, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(371, 446, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/pages', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(372, 447, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/menus', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(373, 448, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/classify', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(374, 449, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/tags', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(375, 450, NULL, 'plugin_page', '/admin/modules/config/Backend/build', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(376, 451, NULL, 'plugin_page', '/admin/modules/config/Backend/build/pages', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(377, 452, NULL, 'plugin_page', '/admin/modules/config/Backend/build/menus', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(378, 453, NULL, 'plugin_page', '/admin/modules/config/Backend/build/classify', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(379, 454, NULL, 'plugin_page', '/admin/modules/config/Backend/build/tags', 0, '2017-01-12 15:37:07', '2017-01-12 15:37:07'),
(380, 455, NULL, 'plugin_page', '/admin/modules/config/Edo/assets', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(381, 456, NULL, 'plugin_page', '/admin/modules/config/Edo/info', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(382, 457, NULL, 'plugin_page', '/admin/modules/config/Edo/tables', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(383, 458, NULL, 'plugin_page', '/admin/modules/config/Edo/permission', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(384, 459, NULL, 'plugin_page', '/admin/modules/config/Edo/codes', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(385, 460, NULL, 'plugin_page', '/admin/modules/config/Edo/gears', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(386, 461, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/layouts', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(387, 462, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/units', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(388, 463, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/h-f', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(389, 464, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/main_body', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(390, 465, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(391, 466, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/layouts', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(392, 467, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/units', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(393, 468, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/h-f', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(394, 469, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/main_body', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(395, 470, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(396, 471, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/pages', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(397, 472, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/menus', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(398, 473, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/classify', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(399, 474, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/tags', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(400, 475, NULL, 'plugin_page', '/admin/modules/config/Edo/build', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(401, 476, NULL, 'plugin_page', '/admin/modules/config/Edo/build/pages', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(402, 477, NULL, 'plugin_page', '/admin/modules/config/Edo/build/menus', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(403, 478, NULL, 'plugin_page', '/admin/modules/config/Edo/build/classify', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(404, 479, NULL, 'plugin_page', '/admin/modules/config/Edo/build/tags', 0, '2017-01-12 15:37:15', '2017-01-12 15:37:15'),
(405, 480, NULL, 'plugin_page', '/admin/modules/config/Frontend/assets', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(406, 481, NULL, 'plugin_page', '/admin/modules/config/Frontend/info', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(407, 482, NULL, 'plugin_page', '/admin/modules/config/Frontend/tables', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(408, 483, NULL, 'plugin_page', '/admin/modules/config/Frontend/permission', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(409, 484, NULL, 'plugin_page', '/admin/modules/config/Frontend/codes', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(410, 485, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(411, 486, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/layouts', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(412, 487, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/units', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(413, 488, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/h-f', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(414, 489, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/main_body', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(415, 490, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(416, 491, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/layouts', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(417, 492, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/units', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(418, 493, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/h-f', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(419, 494, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/main_body', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(420, 495, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24');
INSERT INTO `urlmanager` (`id`, `page_id`, `front_page_id`, `type`, `url`, `parent_id`, `created_at`, `updated_at`) VALUES
(421, 496, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/pages', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(422, 497, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/menus', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(423, 498, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/classify', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(424, 499, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/tags', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(425, 500, NULL, 'plugin_page', '/admin/modules/config/Frontend/build', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(426, 501, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/pages', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(427, 502, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/menus', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(428, 503, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/classify', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(429, 504, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/tags', 0, '2017-01-12 15:37:24', '2017-01-12 15:37:24'),
(430, 505, NULL, 'plugin_page', '/admin/modules/config/General/assets', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(431, 506, NULL, 'plugin_page', '/admin/modules/config/General/info', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(432, 507, NULL, 'plugin_page', '/admin/modules/config/General/tables', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(433, 508, NULL, 'plugin_page', '/admin/modules/config/General/permission', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(434, 509, NULL, 'plugin_page', '/admin/modules/config/General/codes', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(435, 510, NULL, 'plugin_page', '/admin/modules/config/General/gears', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(436, 511, NULL, 'plugin_page', '/admin/modules/config/General/gears/layouts', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(437, 512, NULL, 'plugin_page', '/admin/modules/config/General/gears/units', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(438, 513, NULL, 'plugin_page', '/admin/modules/config/General/gears/h-f', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(439, 514, NULL, 'plugin_page', '/admin/modules/config/General/gears/main_body', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(440, 515, NULL, 'plugin_page', '/admin/modules/config/General/gearsb', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(441, 516, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/layouts', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(442, 517, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/units', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(443, 518, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/h-f', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(444, 519, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/main_body', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(445, 520, NULL, 'plugin_page', '/admin/modules/config/General/buildb', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(446, 521, NULL, 'plugin_page', '/admin/modules/config/General/buildb/pages', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(447, 522, NULL, 'plugin_page', '/admin/modules/config/General/buildb/menus', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(448, 523, NULL, 'plugin_page', '/admin/modules/config/General/buildb/classify', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(449, 524, NULL, 'plugin_page', '/admin/modules/config/General/buildb/tags', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(450, 525, NULL, 'plugin_page', '/admin/modules/config/General/build', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(451, 526, NULL, 'plugin_page', '/admin/modules/config/General/build/pages', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(452, 527, NULL, 'plugin_page', '/admin/modules/config/General/build/menus', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(453, 528, NULL, 'plugin_page', '/admin/modules/config/General/build/classify', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(454, 529, NULL, 'plugin_page', '/admin/modules/config/General/build/tags', 0, '2017-01-12 15:37:34', '2017-01-12 15:37:34'),
(455, 530, NULL, 'plugin_page', '/admin/modules/config/Modules/assets', 0, '2017-01-12 15:38:21', '2017-01-12 15:38:21'),
(456, 531, NULL, 'plugin_page', '/admin/modules/config/Modules/info', 0, '2017-01-12 15:38:21', '2017-01-12 15:38:21'),
(457, 532, NULL, 'plugin_page', '/admin/modules/config/Modules/tables', 0, '2017-01-12 15:38:21', '2017-01-12 15:38:21'),
(458, 533, NULL, 'plugin_page', '/admin/modules/config/Modules/permission', 0, '2017-01-12 15:38:21', '2017-01-12 15:38:21'),
(459, 534, NULL, 'plugin_page', '/admin/modules/config/Modules/codes', 0, '2017-01-12 15:38:21', '2017-01-12 15:38:21'),
(460, 535, NULL, 'plugin_page', '/admin/modules/config/Modules/gears', 0, '2017-01-12 15:38:21', '2017-01-12 15:38:21'),
(461, 536, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/layouts', 0, '2017-01-12 15:38:21', '2017-01-12 15:38:21'),
(462, 537, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/units', 0, '2017-01-12 15:38:21', '2017-01-12 15:38:21'),
(463, 538, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/h-f', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(464, 539, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/main_body', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(465, 540, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(466, 541, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/layouts', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(467, 542, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/units', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(468, 543, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/h-f', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(469, 544, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/main_body', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(470, 545, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(471, 546, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/pages', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(472, 547, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/menus', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(473, 548, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/classify', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(474, 549, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/tags', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(475, 550, NULL, 'plugin_page', '/admin/modules/config/Modules/build', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(476, 551, NULL, 'plugin_page', '/admin/modules/config/Modules/build/pages', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(477, 552, NULL, 'plugin_page', '/admin/modules/config/Modules/build/menus', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(478, 553, NULL, 'plugin_page', '/admin/modules/config/Modules/build/classify', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(479, 554, NULL, 'plugin_page', '/admin/modules/config/Modules/build/tags', 0, '2017-01-12 15:38:22', '2017-01-12 15:38:22'),
(480, 555, NULL, 'plugin_page', '/admin/modules/config/Users/assets', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(481, 556, NULL, 'plugin_page', '/admin/modules/config/Users/info', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(482, 557, NULL, 'plugin_page', '/admin/modules/config/Users/tables', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(483, 558, NULL, 'plugin_page', '/admin/modules/config/Users/permission', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(484, 559, NULL, 'plugin_page', '/admin/modules/config/Users/codes', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(485, 560, NULL, 'plugin_page', '/admin/modules/config/Users/gears', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(486, 561, NULL, 'plugin_page', '/admin/modules/config/Users/gears/layouts', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(487, 562, NULL, 'plugin_page', '/admin/modules/config/Users/gears/units', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(488, 563, NULL, 'plugin_page', '/admin/modules/config/Users/gears/h-f', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(489, 564, NULL, 'plugin_page', '/admin/modules/config/Users/gears/main_body', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(490, 565, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(491, 566, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/layouts', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(492, 567, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/units', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(493, 568, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/h-f', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(494, 569, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/main_body', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(495, 570, NULL, 'plugin_page', '/admin/modules/config/Users/buildb', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(496, 571, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/pages', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(497, 572, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/menus', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(498, 573, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/classify', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(499, 574, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/tags', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(500, 575, NULL, 'plugin_page', '/admin/modules/config/Users/build', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(501, 576, NULL, 'plugin_page', '/admin/modules/config/Users/build/pages', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(502, 577, NULL, 'plugin_page', '/admin/modules/config/Users/build/menus', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(503, 578, NULL, 'plugin_page', '/admin/modules/config/Users/build/classify', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(504, 579, NULL, 'plugin_page', '/admin/modules/config/Users/build/tags', 0, '2017-01-12 15:38:33', '2017-01-12 15:38:33'),
(505, 580, NULL, 'plugin_page', '/admin/modules/config', 0, '2017-01-12 15:39:09', '2017-01-12 15:39:09'),
(506, 581, NULL, 'plugin_page', '/admin/modules/config', 0, '2017-01-12 15:51:31', '2017-01-12 15:51:31'),
(507, 582, NULL, 'plugin_page', '/admin/modules/config/Backend', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(508, 583, NULL, 'plugin_page', '/admin/modules/config/Backend/assets', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(509, 584, NULL, 'plugin_page', '/admin/modules/config/Backend/info', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(510, 585, NULL, 'plugin_page', '/admin/modules/config/Backend/tables', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(511, 586, NULL, 'plugin_page', '/admin/modules/config/Backend/permission', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(512, 587, NULL, 'plugin_page', '/admin/modules/config/Backend/codes', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(513, 588, NULL, 'plugin_page', '/admin/modules/config/Backend/gears', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(514, 589, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/layouts', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(515, 590, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/units', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(516, 591, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/h-f', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(517, 592, NULL, 'plugin_page', '/admin/modules/config/Backend/gears/main_body', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(518, 593, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(519, 594, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/layouts', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(520, 595, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/units', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(521, 596, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/h-f', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(522, 597, NULL, 'plugin_page', '/admin/modules/config/Backend/gearsb/main_body', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(523, 598, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(524, 599, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/pages', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(525, 600, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/menus', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(526, 601, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/classify', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(527, 602, NULL, 'plugin_page', '/admin/modules/config/Backend/buildb/tags', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(528, 603, NULL, 'plugin_page', '/admin/modules/config/Backend/build', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(529, 604, NULL, 'plugin_page', '/admin/modules/config/Backend/build/pages', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(530, 605, NULL, 'plugin_page', '/admin/modules/config/Backend/build/menus', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(531, 606, NULL, 'plugin_page', '/admin/modules/config/Backend/build/classify', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(532, 607, NULL, 'plugin_page', '/admin/modules/config/Backend/build/tags', 0, '2017-01-12 15:52:01', '2017-01-12 15:52:01'),
(533, 608, NULL, 'plugin_page', '/admin/modules/config/Edo', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(534, 609, NULL, 'plugin_page', '/admin/modules/config/Edo/assets', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(535, 610, NULL, 'plugin_page', '/admin/modules/config/Edo/info', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(536, 611, NULL, 'plugin_page', '/admin/modules/config/Edo/tables', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(537, 612, NULL, 'plugin_page', '/admin/modules/config/Edo/permission', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(538, 613, NULL, 'plugin_page', '/admin/modules/config/Edo/codes', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(539, 614, NULL, 'plugin_page', '/admin/modules/config/Edo/gears', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(540, 615, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/layouts', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(541, 616, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/units', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(542, 617, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/h-f', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(543, 618, NULL, 'plugin_page', '/admin/modules/config/Edo/gears/main_body', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(544, 619, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(545, 620, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/layouts', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(546, 621, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/units', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(547, 622, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/h-f', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(548, 623, NULL, 'plugin_page', '/admin/modules/config/Edo/gearsb/main_body', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(549, 624, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(550, 625, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/pages', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(551, 626, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/menus', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(552, 627, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/classify', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(553, 628, NULL, 'plugin_page', '/admin/modules/config/Edo/buildb/tags', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(554, 629, NULL, 'plugin_page', '/admin/modules/config/Edo/build', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(555, 630, NULL, 'plugin_page', '/admin/modules/config/Edo/build/pages', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(556, 631, NULL, 'plugin_page', '/admin/modules/config/Edo/build/menus', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(557, 632, NULL, 'plugin_page', '/admin/modules/config/Edo/build/classify', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(558, 633, NULL, 'plugin_page', '/admin/modules/config/Edo/build/tags', 0, '2017-01-12 15:52:07', '2017-01-12 15:52:07'),
(559, 634, NULL, 'plugin_page', '/admin/modules/config/Frontend', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(560, 635, NULL, 'plugin_page', '/admin/modules/config/Frontend/assets', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(561, 636, NULL, 'plugin_page', '/admin/modules/config/Frontend/info', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(562, 637, NULL, 'plugin_page', '/admin/modules/config/Frontend/tables', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(563, 638, NULL, 'plugin_page', '/admin/modules/config/Frontend/permission', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(564, 639, NULL, 'plugin_page', '/admin/modules/config/Frontend/codes', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(565, 640, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(566, 641, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/layouts', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(567, 642, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/units', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(568, 643, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/h-f', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(569, 644, NULL, 'plugin_page', '/admin/modules/config/Frontend/gears/main_body', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(570, 645, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(571, 646, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/layouts', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(572, 647, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/units', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(573, 648, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/h-f', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(574, 649, NULL, 'plugin_page', '/admin/modules/config/Frontend/gearsb/main_body', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(575, 650, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(576, 651, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/pages', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(577, 652, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/menus', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(578, 653, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/classify', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(579, 654, NULL, 'plugin_page', '/admin/modules/config/Frontend/buildb/tags', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(580, 655, NULL, 'plugin_page', '/admin/modules/config/Frontend/build', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(581, 656, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/pages', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(582, 657, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/menus', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(583, 658, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/classify', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(584, 659, NULL, 'plugin_page', '/admin/modules/config/Frontend/build/tags', 0, '2017-01-12 15:52:15', '2017-01-12 15:52:15'),
(585, 660, NULL, 'plugin_page', '/admin/modules/config/General', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(586, 661, NULL, 'plugin_page', '/admin/modules/config/General/assets', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(587, 662, NULL, 'plugin_page', '/admin/modules/config/General/info', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(588, 663, NULL, 'plugin_page', '/admin/modules/config/General/tables', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(589, 664, NULL, 'plugin_page', '/admin/modules/config/General/permission', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(590, 665, NULL, 'plugin_page', '/admin/modules/config/General/codes', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(591, 666, NULL, 'plugin_page', '/admin/modules/config/General/gears', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(592, 667, NULL, 'plugin_page', '/admin/modules/config/General/gears/layouts', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(593, 668, NULL, 'plugin_page', '/admin/modules/config/General/gears/units', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(594, 669, NULL, 'plugin_page', '/admin/modules/config/General/gears/h-f', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(595, 670, NULL, 'plugin_page', '/admin/modules/config/General/gears/main_body', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(596, 671, NULL, 'plugin_page', '/admin/modules/config/General/gearsb', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(597, 672, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/layouts', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(598, 673, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/units', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(599, 674, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/h-f', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(600, 675, NULL, 'plugin_page', '/admin/modules/config/General/gearsb/main_body', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(601, 676, NULL, 'plugin_page', '/admin/modules/config/General/buildb', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(602, 677, NULL, 'plugin_page', '/admin/modules/config/General/buildb/pages', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(603, 678, NULL, 'plugin_page', '/admin/modules/config/General/buildb/menus', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(604, 679, NULL, 'plugin_page', '/admin/modules/config/General/buildb/classify', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(605, 680, NULL, 'plugin_page', '/admin/modules/config/General/buildb/tags', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(606, 681, NULL, 'plugin_page', '/admin/modules/config/General/build', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(607, 682, NULL, 'plugin_page', '/admin/modules/config/General/build/pages', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(608, 683, NULL, 'plugin_page', '/admin/modules/config/General/build/menus', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(609, 684, NULL, 'plugin_page', '/admin/modules/config/General/build/classify', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(610, 685, NULL, 'plugin_page', '/admin/modules/config/General/build/tags', 0, '2017-01-12 15:52:23', '2017-01-12 15:52:23'),
(611, 686, NULL, 'plugin_page', '/admin/modules/config/Media', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(612, 687, NULL, 'plugin_page', '/admin/modules/config/Media/assets', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(613, 688, NULL, 'plugin_page', '/admin/modules/config/Media/info', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(614, 689, NULL, 'plugin_page', '/admin/modules/config/Media/tables', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(615, 690, NULL, 'plugin_page', '/admin/modules/config/Media/permission', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(616, 691, NULL, 'plugin_page', '/admin/modules/config/Media/codes', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(617, 692, NULL, 'plugin_page', '/admin/modules/config/Media/gears', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(618, 693, NULL, 'plugin_page', '/admin/modules/config/Media/gears/layouts', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(619, 694, NULL, 'plugin_page', '/admin/modules/config/Media/gears/units', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(620, 695, NULL, 'plugin_page', '/admin/modules/config/Media/gears/h-f', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(621, 696, NULL, 'plugin_page', '/admin/modules/config/Media/gears/main_body', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(622, 697, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(623, 698, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb/layouts', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(624, 699, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb/units', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(625, 700, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb/h-f', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(626, 701, NULL, 'plugin_page', '/admin/modules/config/Media/gearsb/main_body', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(627, 702, NULL, 'plugin_page', '/admin/modules/config/Media/buildb', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(628, 703, NULL, 'plugin_page', '/admin/modules/config/Media/buildb/pages', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(629, 704, NULL, 'plugin_page', '/admin/modules/config/Media/buildb/menus', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(630, 705, NULL, 'plugin_page', '/admin/modules/config/Media/buildb/classify', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(631, 706, NULL, 'plugin_page', '/admin/modules/config/Media/buildb/tags', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(632, 707, NULL, 'plugin_page', '/admin/modules/config/Media/build', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(633, 708, NULL, 'plugin_page', '/admin/modules/config/Media/build/pages', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(634, 709, NULL, 'plugin_page', '/admin/modules/config/Media/build/menus', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(635, 710, NULL, 'plugin_page', '/admin/modules/config/Media/build/classify', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(636, 711, NULL, 'plugin_page', '/admin/modules/config/Media/build/tags', 0, '2017-01-12 15:52:35', '2017-01-12 15:52:35'),
(637, 712, NULL, 'plugin_page', '/admin/modules/config/Modules', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(638, 713, NULL, 'plugin_page', '/admin/modules/config/Modules/assets', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(639, 714, NULL, 'plugin_page', '/admin/modules/config/Modules/info', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(640, 715, NULL, 'plugin_page', '/admin/modules/config/Modules/tables', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(641, 716, NULL, 'plugin_page', '/admin/modules/config/Modules/permission', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(642, 717, NULL, 'plugin_page', '/admin/modules/config/Modules/codes', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(643, 718, NULL, 'plugin_page', '/admin/modules/config/Modules/gears', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(644, 719, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/layouts', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(645, 720, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/units', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(646, 721, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/h-f', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(647, 722, NULL, 'plugin_page', '/admin/modules/config/Modules/gears/main_body', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(648, 723, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(649, 724, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/layouts', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(650, 725, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/units', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(651, 726, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/h-f', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(652, 727, NULL, 'plugin_page', '/admin/modules/config/Modules/gearsb/main_body', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(653, 728, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(654, 729, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/pages', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(655, 730, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/menus', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(656, 731, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/classify', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(657, 732, NULL, 'plugin_page', '/admin/modules/config/Modules/buildb/tags', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(658, 733, NULL, 'plugin_page', '/admin/modules/config/Modules/build', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(659, 734, NULL, 'plugin_page', '/admin/modules/config/Modules/build/pages', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(660, 735, NULL, 'plugin_page', '/admin/modules/config/Modules/build/menus', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(661, 736, NULL, 'plugin_page', '/admin/modules/config/Modules/build/classify', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(662, 737, NULL, 'plugin_page', '/admin/modules/config/Modules/build/tags', 0, '2017-01-12 15:52:42', '2017-01-12 15:52:42'),
(663, 738, NULL, 'plugin_page', '/admin/modules/config/Users', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(664, 739, NULL, 'plugin_page', '/admin/modules/config/Users/assets', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(665, 740, NULL, 'plugin_page', '/admin/modules/config/Users/info', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(666, 741, NULL, 'plugin_page', '/admin/modules/config/Users/tables', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(667, 742, NULL, 'plugin_page', '/admin/modules/config/Users/permission', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(668, 743, NULL, 'plugin_page', '/admin/modules/config/Users/codes', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(669, 744, NULL, 'plugin_page', '/admin/modules/config/Users/gears', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(670, 745, NULL, 'plugin_page', '/admin/modules/config/Users/gears/layouts', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(671, 746, NULL, 'plugin_page', '/admin/modules/config/Users/gears/units', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(672, 747, NULL, 'plugin_page', '/admin/modules/config/Users/gears/h-f', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(673, 748, NULL, 'plugin_page', '/admin/modules/config/Users/gears/main_body', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(674, 749, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(675, 750, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/layouts', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(676, 751, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/units', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(677, 752, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/h-f', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(678, 753, NULL, 'plugin_page', '/admin/modules/config/Users/gearsb/main_body', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(679, 754, NULL, 'plugin_page', '/admin/modules/config/Users/buildb', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(680, 755, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/pages', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(681, 756, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/menus', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(682, 757, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/classify', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(683, 758, NULL, 'plugin_page', '/admin/modules/config/Users/buildb/tags', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(684, 759, NULL, 'plugin_page', '/admin/modules/config/Users/build', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(685, 760, NULL, 'plugin_page', '/admin/modules/config/Users/build/pages', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(686, 761, NULL, 'plugin_page', '/admin/modules/config/Users/build/menus', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(687, 762, NULL, 'plugin_page', '/admin/modules/config/Users/build/classify', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(688, 763, NULL, 'plugin_page', '/admin/modules/config/Users/build/tags', 0, '2017-01-12 15:52:50', '2017-01-12 15:52:50'),
(689, 791, NULL, 'plugin_page', '/admin/sahak', 0, '2017-01-19 12:24:19', '2017-01-19 12:24:19'),
(690, NULL, 15, 'custom', '/test', 0, '2017-02-16 11:11:50', '2017-02-16 11:12:11'),
(691, NULL, 16, 'custom', '/edo-test', 0, '2017-02-21 13:35:48', '2017-03-09 13:32:32'),
(692, NULL, 9, 'classify', '/all-classify', 0, NULL, NULL),
(693, NULL, 10, 'tags', '/all-tags', 0, NULL, NULL),
(694, NULL, 17, 'custom', '/all-classify/abokamal', 0, '2017-03-02 09:32:03', '2017-03-02 09:32:03'),
(695, NULL, 17, 'classify', '/all-classify/abokamal', 0, '2017-03-02 09:32:03', '2017-03-02 09:32:03'),
(697, NULL, 18, 'classify', '/all-classify/armenia-universities', 0, '2017-03-02 11:30:39', '2017-03-02 11:30:39'),
(701, NULL, 20, 'classify', '/all-classify/armenia-universities/seua', 0, '2017-03-02 11:31:42', '2017-03-02 11:31:42'),
(703, NULL, 21, 'classify', '/all-classify/armenia-universities/asue', 0, '2017-03-02 11:32:40', '2017-03-02 11:32:40'),
(705, NULL, 22, 'classify', '/all-classify/armenia-universities/ysu/informatics-and-applied-mathematics', 0, '2017-03-02 11:33:50', '2017-03-02 11:33:50'),
(707, NULL, 23, 'classify', '/all-classify/armenia-universities/ysu/faculty-of-physics', 0, '2017-03-02 11:34:56', '2017-03-02 11:34:56'),
(709, NULL, 24, 'classify', '/all-classify/armenia-universities/ysu/faculty-of-law', 0, '2017-03-02 11:35:14', '2017-03-02 11:35:14'),
(711, NULL, 25, 'classify', '/all-classify/armenia-universities/ysu/informatics-and-applied-mathematics/chair-of-discrete-mathematics-and-theoretical-informatics', 0, '2017-03-02 11:36:38', '2017-03-02 11:36:38'),
(713, NULL, 26, 'classify', '/all-classify/armenia-universities/ysu/informatics-and-applied-mathematics/chair-of-numerical-analysis-and-mathematical-modelling', 0, '2017-03-02 11:37:22', '2017-03-02 11:37:22'),
(715, NULL, 27, 'classify', '/all-classify/armenia-universities/ysu/informatics-and-applied-mathematics/chair-of-programming-and-information-technologies', 0, '2017-03-02 11:37:45', '2017-03-02 11:37:45'),
(716, NULL, 28, 'all', '/cars', 0, '2017-03-06 18:32:26', '2017-03-13 09:16:15'),
(717, NULL, 33, 'all_posts', 'abokamal', 0, '2017-03-09 13:30:57', '2017-03-09 13:30:57'),
(718, NULL, 34, 'single_post', '/abokamal/{param}', 0, '2017-03-09 13:30:57', '2017-03-10 08:55:53'),
(719, NULL, 35, 'all_posts', '/edo', 0, '2017-03-09 13:31:03', '2017-03-09 15:30:44'),
(720, NULL, 36, 'single_post', 'edo/{param}', 0, '2017-03-09 13:31:03', '2017-03-09 13:31:03'),
(721, NULL, 37, 'plugin', 'ara', 0, '2017-03-10 10:36:39', '2017-03-10 10:36:39'),
(722, NULL, 38, 'plugin', 'ara/{param}', 0, '2017-03-10 10:36:39', '2017-03-10 10:36:39'),
(723, NULL, 39, 'plugin', '/auto', 0, '2017-03-13 09:21:07', '2017-03-13 09:23:19'),
(724, NULL, 40, 'plugin', 'auto/{param}', 0, '2017-03-13 09:21:07', '2017-03-13 09:21:07'),
(725, NULL, 41, 'plugin', 'expo', 0, '2017-03-15 13:46:05', '2017-03-15 13:46:05'),
(726, NULL, 42, 'plugin', 'expo/{param}', 0, '2017-03-15 13:46:05', '2017-03-15 13:46:05'),
(727, NULL, 43, 'plugin', 'bike', 0, '2017-03-22 13:14:00', '2017-03-22 13:14:00'),
(728, NULL, 44, 'plugin', 'bike/{param}', 0, '2017-03-22 13:14:00', '2017-03-22 13:14:00'),
(729, NULL, 45, 'plugin', 'render', 0, '2017-03-24 08:04:13', '2017-03-24 08:04:13'),
(730, NULL, 46, 'plugin', 'render/{param}', 0, '2017-03-24 08:04:13', '2017-03-24 08:04:13'),
(751, NULL, 67, 'core', '/my-account', 0, '2017-06-22 09:56:58', '2017-06-22 09:56:58'),
(755, NULL, 72, 'plugin', '/all-posts', 0, '2017-10-04 03:29:18', '2017-10-04 03:29:18'),
(756, NULL, 73, 'plugin', '/all-posts/{param}', 0, '2017-10-04 03:29:58', '2017-10-04 03:29:58'),
(757, NULL, 74, 'custom', '/new-page(74)', 0, '2017-10-11 08:57:11', '2017-10-11 08:57:11'),
(758, NULL, 75, 'custom', '/testing-page', 0, '2017-10-17 13:51:52', '2017-10-17 13:52:51'),
(759, NULL, 76, 'plugin', '/studiosstudios', 0, '2017-10-31 13:27:59', '2017-10-31 13:27:59'),
(760, NULL, 77, 'plugin', '/studioscss-studios', 0, '2017-10-31 13:29:51', '2017-10-31 13:29:51'),
(761, NULL, 78, 'plugin', '/my-special-page', 0, '2017-11-01 06:26:32', '2017-11-01 06:26:32'),
(762, NULL, 79, 'custom', '/parent', 0, '2017-11-21 09:08:24', '2017-11-27 04:42:33'),
(764, NULL, 81, 'custom', '/test2', 0, '2017-11-21 09:10:16', '2017-11-27 04:43:07'),
(765, NULL, 82, 'custom', '/new-page(82)', 0, '2017-11-24 09:26:40', '2017-11-24 09:26:40'),
(766, NULL, 83, 'custom', '/new-page', 0, '2017-11-27 04:46:35', '2017-11-27 04:46:54'),
(767, NULL, 2, 'core', '/login-test', 0, '2017-11-27 07:18:06', '2017-11-27 07:18:06'),
(768, NULL, 84, 'core', '/f/p-x-y', 0, '2017-11-30 05:36:19', '2017-11-30 05:36:19'),
(769, NULL, 85, 'core', '/f/x-e-t', 0, '2017-11-30 06:06:30', '2017-11-30 06:06:30'),
(770, NULL, 86, 'core', '/f/p-x-y/yuppi', 0, '2017-11-30 06:10:17', '2017-11-30 06:10:17'),
(771, NULL, 87, 'core', '/f/p-x-y/sex', 0, '2017-11-30 06:11:14', '2017-11-30 06:11:14'),
(772, NULL, 88, 'core', '/f/p-x-y/sex/yuppi', 0, '2017-11-30 06:11:14', '2017-11-30 06:11:14'),
(773, NULL, 89, 'core', '/f/p-x-y/sex/yuppi', 0, '2017-11-30 06:14:40', '2017-11-30 06:25:57'),
(774, NULL, 90, 'core', '/f/p-x-y/sex', 0, '2017-11-30 06:14:40', '2017-11-30 06:25:57'),
(775, NULL, 91, 'core', '/f/cdcd', 0, '2017-11-30 08:41:38', '2017-11-30 08:41:38'),
(779, NULL, 95, 'core', '/f/cdcd/child-test', 0, '2017-12-01 03:20:30', '2017-12-01 03:20:30'),
(780, NULL, 96, 'custom', '/classify', 0, '2017-12-01 07:08:02', '2017-12-01 07:08:28'),
(781, NULL, 97, 'plugin', '/all-posts', 0, '2017-12-06 00:55:56', '2017-12-06 00:55:56'),
(782, NULL, 99, 'custom', '/qaq', 0, '2017-12-22 19:31:25', '2017-12-22 19:31:47'),
(783, NULL, 98, 'plugin', '/all-posts/{param}', 0, '2017-12-25 19:15:50', '2017-12-25 19:15:50'),
(784, NULL, 103, 'plugin', '/my-account/my-fields', 0, '2018-01-10 13:21:00', '2018-01-10 13:21:00'),
(785, NULL, 104, 'plugin', '/my-account/my-forms', 0, '2018-01-10 13:21:00', '2018-01-10 13:21:00'),
(786, NULL, 106, 'plugin', '/shopping-card', 0, '2018-01-12 17:51:07', '2018-01-12 17:51:07'),
(791, NULL, 114, 'plugin', '/fugitsu', 0, '2018-01-22 13:43:30', '2018-01-22 13:43:30'),
(792, NULL, 115, 'plugin', '/fugitsu/{param}', 0, '2018-01-22 13:43:30', '2018-01-22 13:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `membership_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `role_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `token` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `membership_id`, `role_id`, `status`, `token`, `remember_token`, `created_at`, `updated_at`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`) VALUES
(1, 'avatarbugs@gmail.com', 'abokamal', '$2y$10$Zo9sy1L.9NaPDpLuJulLNOfLnIWyu22WiVgCpFhXPFxh7.oKw9aYG', 0, 1, 'active', NULL, 'O2XslST4gyHd6dvL7UNOssDUxVHr5UsPRlrkgckLU12jl4CCzctjND436m31', NULL, '2017-06-30 06:56:01', NULL, NULL, NULL, NULL),
(3, 'avataryyybugs@gmail.com', 'edokamal', '$2y$10$iqYxVgcq.DwaYZBZ/W7v0.5tvQWtrcYcMgm0x9YkfMPhsWwXDq6X.', 3, 0, '5a57b12305720', NULL, 'ktdUcZbDAEUOW0SmbWVhQU7qd6AfZ81D5NaSNiLS3xChcVbK8RZI5PfwwEjA', NULL, '2018-01-11 18:49:04', NULL, NULL, NULL, NULL),
(4, 'brisa57@kuphal.com', 'kuphal.aylin', '$2y$10$a4KFfStNZpxDfivqD17jS.Cvaw06flEPyuDODVOr9uOwyO6w2d9Z2', 1, 0, 'active', NULL, NULL, '2017-02-27 08:42:38', '2017-02-27 08:42:38', NULL, NULL, NULL, NULL),
(5, 'rempel.claude@hotmail.com', 'jermain40', '$2y$10$UyJz4GTyzc3HD6lxmzzNLOphRMvcobb6uqfgUUjizDP4y/DlsQCr.', 1, 0, 'active', NULL, NULL, '2017-02-27 08:42:38', '2017-02-27 08:42:38', NULL, NULL, NULL, NULL),
(6, 'schuster.garrick@gmail.com', 'arch.marks', '$2y$10$7XfC1ZgeLMv9C6qfQ2ZP3.JwDu0Ehcs3D6GN8CXeO.IBj0x3vkR4K', 2, 0, 'active', NULL, NULL, '2017-02-27 08:42:38', '2017-02-27 08:42:38', NULL, NULL, NULL, NULL),
(7, 'pnolan@rippin.com', 'heloise40', '$2y$10$E.7OvK/HCrPAnItjo6/jgefP5yRIo31YRJ0QVWaE7H3zIXYxmg1dq', 1, 0, 'active', NULL, NULL, '2017-02-27 08:42:38', '2017-02-27 08:42:38', NULL, NULL, NULL, NULL),
(8, 'richmond55@gmail.com', 'hsmitham', '$2y$10$1QL8ZTLweuAfV74itIuy1ebj1bFsapV8J2PcMYJkoAHLkW0hXK5rO', 1, 0, 'active', NULL, NULL, '2017-02-27 08:42:38', '2017-02-27 08:42:38', NULL, NULL, NULL, NULL),
(9, 'edo.terakyan@gmail.com', 'sahakner', '$2y$10$HHosvokr1o/ksKsZCbFZX.2.bv/bjCsZyrtIprQ9u8hbUJgRiVb5i', 1, 0, 'active', '', NULL, '2017-03-30 08:34:17', '2017-03-30 08:34:25', NULL, NULL, NULL, NULL),
(18, 'simon@ss.cs', 'simon', '$2y$10$WrzD.Z8oTbK.fkxugkornOHmOdF7gL1ClPtjuOJL90waYQKDNsEjm', 0, 0, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'huyuy@jcjdcj.cc', 'huyuy', '$2y$10$cZOW1RI9hOsheMgwixhjS.raffdWE3Lf/A87zzsaQ6ZN5UCAwsGYW', 0, 0, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'cdcd@cdccdc,cd', 'ccccccccccc', '$2y$10$PQLvUp/OUi9fHan1wWY79ORdK98h3qs0gjiWjn62aasW6cW1xaXLi', 0, 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'rcrcrc2@kcd.gggggdr', 'yyyyyyyyyyyyyyy', '$2y$10$T3FnpHfYqW3ICcoNmJ9S7uKPF7G5OuoPcwHEZL1pdyru6ZAF2cURi', 0, 6, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'od@od.od', 'od', '$2y$10$3LZE1JLdQNXPTAPpqWIqK.jY15pgWrwMthO5nGGmBsRgmWovFsl9.', 0, 6, 'inactive', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'funtik@cc.dd', 'ffffff', '$2y$10$e2m7F2NYmm5dwULeTGh1/OQUaIB13rPDUb4hYJV6qP9BmEYmH0ZaO', 0, 6, 'inactive', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'edo.terccccakyan@gmail.comccc', 'csdcdscdscsdc', '$2y$10$okSx8NvbCmfPf1DnXBBPOu0556QXI0VGiC7u3Qa1I2qPiz67wY41.', 0, 6, 'inactive', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'dede@ccdc.cdc', 'vrvrvrfvrfv', '$2y$10$fLxlUyfi2LFcxFXCEZylM.viUyWc.433dqBwzKd7SYJ4SHNtBmxoe', 0, 6, 'inactive', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'wedewew@cdc.dc', 'ecedcedcedc', '$2y$10$WSkytWG4s9N3dlc8FWHOMe9nYQ2yPQiiZWwoMZ0MHo13QF/6ehyYW', 0, 6, 'inactive', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'wedewew@cdc.dc34', '433443434', '$2y$10$szZYZTVdIzR243NPIZfJT.lvJqDSWrQzMKP8x7wuau/QZrpDmWkOO', 0, 6, 'inactive', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'dcdcdc', NULL, '', 0, 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'dcdcdc@cdcd.cd', NULL, '', 0, 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'rcdccrcrc2@kcd.cdcd', 'rrrrrrrrr', '$2y$10$844B/iAXldmxHyX.sDl6TOEGKZ2dxf1OdvpzNHvtE3L2WYmLhbw3e', 0, 6, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'vgvgv@jjj.cc', 'cdcdee223', '$2y$10$Z8YGpih1Gg6xk/pOsFXoKuKhcR1Nhd5M5n.mE6/bjP2z0WMWAVLPm', 0, 6, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'rcrcrc2@kcd.cdccdcdc', 'dcdcdcdscdscds', '$2y$10$Mw7IgaZu02o6AVOYvhs/3u8YUVEzzmvDNF7CNBn91V2bU27mqNa/W', 0, 6, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'rcrcrc2@kcd.cdcddddd', 'dcdcdccccccccc', '$2y$10$ZJkPzP5BJ4N1FTGKuUmOROmWaooppBYiJPh1j0zcG.V8s2KwcXtKW', 0, 6, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'eeeeeeee@cccc.ccc', 'cdecdecedcedc', '$2y$10$vFE97.FB5JO0e21Pz2cm3efGUky.d9DBogu/4qje36a5Ac9qGycsi', 0, 6, 'inactive', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_meta`
--

CREATE TABLE `users_meta` (
  `data_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `key` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_meta`
--

INSERT INTO `users_meta` (`data_id`, `user_id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 8, 'first_name', 'dcdc', '2017-04-04 08:21:57', '2017-04-04 08:21:57'),
(2, 8, 'last_name', 'dcdc', '2017-04-04 08:21:57', '2017-04-04 08:21:57'),
(3, 8, 'address', 'dcdc', '2017-04-04 08:21:57', '2017-04-04 08:21:57'),
(4, 8, 'city', '', '2017-04-04 08:21:57', '2017-04-04 08:21:57'),
(5, 8, 'state', '', '2017-04-04 08:21:57', '2017-04-04 08:21:57'),
(6, 8, 'age', '78', '2017-04-04 08:21:57', '2017-04-04 08:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE `users_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_first` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_second` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_data` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id`, `user_id`, `first_name`, `last_name`, `avatar`, `cover`, `phone`, `gender`, `city`, `country`, `address_first`, `address_second`, `meta_data`, `created_at`, `updated_at`) VALUES
(2, 3, 'Edo', 'T.', NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL),
(3, 4, 'Shaylee', 'Luettgen', 'http://lorempixel.com/500/500/people/?22202', 'http://lorempixel.com/500/500/?71895', NULL, '', '', '', '', NULL, 'a:3:{s:3:\"job\";s:34:\"Aircraft Cargo Handling Supervisor\";s:3:\"age\";i:50;s:6:\"gender\";s:6:\"female\";}', '2017-02-27 08:42:38', '2017-02-27 08:42:38'),
(4, 5, 'Ardith', 'Franecki', 'http://lorempixel.com/500/500/people/?92104', 'http://lorempixel.com/500/500/?28549', NULL, '', '', '', '', NULL, 'a:3:{s:3:\"job\";s:15:\"Camera Operator\";s:3:\"age\";i:77;s:6:\"gender\";s:6:\"female\";}', '2017-02-27 08:42:38', '2017-02-27 08:42:38'),
(5, 6, 'Brandy', 'Collier', 'http://lorempixel.com/500/500/people/?38107', 'http://lorempixel.com/500/500/?28606', NULL, '', '', '', '', NULL, 'a:3:{s:3:\"job\";s:11:\"Silversmith\";s:3:\"age\";i:66;s:6:\"gender\";s:6:\"others\";}', '2017-02-27 08:42:38', '2017-02-27 08:42:38'),
(6, 7, 'Amiya', 'Zulauf', 'http://lorempixel.com/500/500/people/?80129', 'http://lorempixel.com/500/500/?29249', NULL, '', '', '', '', NULL, 'a:3:{s:3:\"job\";s:9:\"Architect\";s:3:\"age\";i:98;s:6:\"gender\";s:6:\"female\";}', '2017-02-27 08:42:38', '2017-02-27 08:42:38'),
(7, 8, 'Spencer', 'Schimmel', 'http://lorempixel.com/500/500/people/?43693', 'http://lorempixel.com/500/500/?84076', NULL, '', '', '', '', NULL, 'a:3:{s:3:\"job\";s:6:\"Rigger\";s:3:\"age\";i:46;s:6:\"gender\";s:6:\"female\";}', '2017-02-27 08:42:38', '2017-02-27 08:42:38'),
(10, 1, NULL, NULL, NULL, NULL, '111114', '', '', '', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_membership`
--

CREATE TABLE `user_membership` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `membership_type_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_membership`
--

INSERT INTO `user_membership` (`id`, `user_id`, `membership_type_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 1, '2018-01-11 20:18:39', '2018-01-11 19:34:27'),
(2, 4, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(3, 5, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(4, 6, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(5, 7, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(6, 8, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(7, 9, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(8, 18, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(9, 21, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(10, 23, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(11, 36, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00'),
(12, 37, 3, 1, '2018-01-11 20:18:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_plan`
--

CREATE TABLE `user_plan` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `exp_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `versions`
--

CREATE TABLE `versions` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `version` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `env` tinyint(4) NOT NULL DEFAULT '0',
  `file_name` varchar(255) NOT NULL,
  `content` longtext,
  `is_generated` tinyint(4) NOT NULL DEFAULT '0',
  `is_generated_front` tinyint(4) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `versions`
--

INSERT INTO `versions` (`id`, `author_id`, `version`, `name`, `type`, `env`, `file_name`, `content`, `is_generated`, `is_generated_front`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'v1', 'affix', 'js', 0, '59afe1c98ae34.js', 'bd7e9a589e94dda9a260c0688d115770', 0, 0, 0, '2017-09-06 07:53:45', '2017-10-23 08:15:41'),
(4, 1, 'v2', 'affix', 'js', 0, '59afeedd2cfc4.js', '4479888d9e61eaff693b92470d3f2fd4', 1, 1, 0, '2017-09-06 08:49:33', '2017-10-23 08:15:41'),
(5, 1, 'v3', 'affix', 'js', 0, '59affc005494a.js', '4b3e3555cdc07de105320b1eb3c79dfb', 0, 0, 0, '2017-09-06 09:45:36', '2017-10-23 08:15:41'),
(10, 1, 'v1', 'bootstrap', 'js', 0, '59b8ca2cd941a.js', 'e897b025c6d1c68b0c8d873fcf6ba9e6', 1, 1, 1, '2017-09-13 02:03:24', '2017-11-09 06:17:35'),
(11, 1, 'v1', 'bootstrapmin', 'js', 0, '59ba28d49de3c.js', '2f802e2c5bb7f0044e2a515479a2432f', 0, 1, 1, '2017-09-14 02:59:32', '2017-10-23 07:11:58'),
(13, 1, 'v2', 'dddddddddd', 'css', 0, '59e9cf89a4af7.css', '20ee577be92c277bd9848ced1e1212d8', 0, 0, 0, '2017-10-20 06:27:21', '2017-10-20 06:27:21'),
(14, 1, 'v1', 'TreeJS', 'js', 1, 'https://ajax.googleapis.com/ajax/libs/threejs/r77/three.min.js', NULL, 0, 0, 1, '2017-10-23 05:45:03', '2017-10-23 08:33:51'),
(15, 1, 'lastversion', 'affix', 'js', 0, '59eddd36acbbe.js', '83931dc038dfb548e9f0ffb9630eae09', 0, 0, 1, '2017-10-23 08:14:46', '2017-10-23 08:15:41'),
(17, 1, '1', 'Animated', 'css', 1, 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.css', NULL, 0, 0, 1, '2017-10-23 14:42:02', '2017-10-23 15:01:12'),
(18, 1, 'v2', 'backend_jquery', 'jquery', 0, '59f06c491ca79.js', '5c957411ec4a5d11699f38d5470defc1', 0, 0, 1, '2017-10-25 06:49:45', '2017-10-25 06:49:45'),
(19, 1, '321', 'backend_jquery', 'jquery', 0, '59f06df01d665.js', '3a27e4f7994d2081e21ecd7de2c85b44', 1, 0, 1, '2017-10-25 06:56:48', '2017-10-25 06:56:48'),
(20, 1, 'v1', 'bootstrap default', 'css', 0, '59f18ea921520.css', '20ee577be92c277bd9848ced1e1212d8', 0, 0, 0, '2017-10-26 03:28:41', '2017-10-26 03:28:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_pages`
--
ALTER TABLE `admin_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_pages_slug_unique` (`slug`);

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assests`
--
ALTER TABLE `assests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_author_id_foreign` (`author_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `classifiers`
--
ALTER TABLE `classifiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classifier_items`
--
ALTER TABLE `classifier_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terms_taxonomy_id_foreign` (`classifier_id`);

--
-- Indexes for table `classify_items_pages`
--
ALTER TABLE `classify_items_pages`
  ADD KEY `core_page_id` (`front_page_id`),
  ADD KEY `classifier_item_id` (`classifier_item_id`),
  ADD KEY `classifier_id` (`classifier_id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `columns`
--
ALTER TABLE `columns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`),
  ADD KEY `comments_author_id_foreign` (`author_id`);

--
-- Indexes for table `comments_meta`
--
ALTER TABLE `comments_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comments_meta_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `core_pages`
--
ALTER TABLE `core_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_comments_profile`
--
ALTER TABLE `cs_comments_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_classes`
--
ALTER TABLE `custom_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo_menus`
--
ALTER TABLE `demo_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo_menu_items`
--
ALTER TABLE `demo_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `page_id` (`page_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `drive_folders`
--
ALTER TABLE `drive_folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drive_folders_name` (`name`);

--
-- Indexes for table `drive_settings`
--
ALTER TABLE `drive_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drive_settings_folder_id_foreign` (`folder_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emails_group_id_foreign` (`group_id`);

--
-- Indexes for table `email_groups`
--
ALTER TABLE `email_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fbp_field_types`
--
ALTER TABLE `fbp_field_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `fbp_user_fields`
--
ALTER TABLE `fbp_user_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fbp_user_forms`
--
ALTER TABLE `fbp_user_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table` (`slug`);

--
-- Indexes for table `form_entries`
--
ALTER TABLE `form_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_settings`
--
ALTER TABLE `form_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `form_id` (`form_id`);

--
-- Indexes for table `frameworks`
--
ALTER TABLE `frameworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_pages`
--
ALTER TABLE `frontend_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_pages_tags`
--
ALTER TABLE `frontend_pages_tags`
  ADD KEY `frontend_page_id` (`frontend_page_id`),
  ADD KEY `tags_id` (`tags_id`);

--
-- Indexes for table `fugitsu`
--
ALTER TABLE `fugitsu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsettings`
--
ALTER TABLE `generalsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hooks`
--
ALTER TABLE `hooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapping`
--
ALTER TABLE `mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `memberships_name_unique` (`name`),
  ADD UNIQUE KEY `memberships_slug_unique` (`slug`);

--
-- Indexes for table `membership_permission`
--
ALTER TABLE `membership_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `membership_permission_permission_id_index` (`page_id`),
  ADD KEY `membership_permission_memberships_id_index` (`membership_id`);

--
-- Indexes for table `membership_statuses`
--
ALTER TABLE `membership_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `membership_types`
--
ALTER TABLE `membership_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_groups`
--
ALTER TABLE `member_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_groups_slug_unique` (`slug`);

--
-- Indexes for table `menu_variation`
--
ALTER TABLE `menu_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesettings`
--
ALTER TABLE `pagesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`),
  ADD KEY `permissions_parent_index` (`parent`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`page_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `posts_media`
--
ALTER TABLE `posts_media`
  ADD KEY `posts_medias_post_id_foreign` (`post_id`);

--
-- Indexes for table `post_additional_data`
--
ALTER TABLE `post_additional_data`
  ADD PRIMARY KEY (`data_id`),
  ADD KEY `post_additional_data_post_id_foreign` (`post_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_styles`
--
ALTER TABLE `profile_styles`
  ADD PRIMARY KEY (`profile_id`,`style_item_id`),
  ADD KEY `profile_styles_style_item_id_foreign` (`style_item_id`);

--
-- Indexes for table `pro_validator`
--
ALTER TABLE `pro_validator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pym_attributes`
--
ALTER TABLE `pym_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pym_attribute_terms`
--
ALTER TABLE `pym_attribute_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `sdn_settings`
--
ALTER TABLE `sdn_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio_groups`
--
ALTER TABLE `studio_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio_packages`
--
ALTER TABLE `studio_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_type_id_foreign` (`type_id`);

--
-- Indexes for table `tags_meta`
--
ALTER TABLE `tags_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `tags_meta_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tag_types`
--
ALTER TABLE `tag_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_services`
--
ALTER TABLE `tax_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urlmanager`
--
ALTER TABLE `urlmanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `users_meta`
--
ALTER TABLE `users_meta`
  ADD PRIMARY KEY (`data_id`),
  ADD KEY `users_meta_user_id_foreign` (`user_id`);

--
-- Indexes for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_profile_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_membership`
--
ALTER TABLE `user_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_plan`
--
ALTER TABLE `user_plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_plan_ibfk_1` (`user_id`),
  ADD KEY `plan_id` (`plan_id`);

--
-- Indexes for table `versions`
--
ALTER TABLE `versions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_pages`
--
ALTER TABLE `admin_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assests`
--
ALTER TABLE `assests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `columns`
--
ALTER TABLE `columns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments_meta`
--
ALTER TABLE `comments_meta`
  MODIFY `meta_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_pages`
--
ALTER TABLE `core_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cs_comments_profile`
--
ALTER TABLE `cs_comments_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom_classes`
--
ALTER TABLE `custom_classes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `demo_menus`
--
ALTER TABLE `demo_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `drive_folders`
--
ALTER TABLE `drive_folders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `drive_settings`
--
ALTER TABLE `drive_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `email_groups`
--
ALTER TABLE `email_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fbp_field_types`
--
ALTER TABLE `fbp_field_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fbp_user_fields`
--
ALTER TABLE `fbp_user_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fbp_user_forms`
--
ALTER TABLE `fbp_user_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `form_entries`
--
ALTER TABLE `form_entries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `form_settings`
--
ALTER TABLE `form_settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frameworks`
--
ALTER TABLE `frameworks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `frontend_pages`
--
ALTER TABLE `frontend_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `fugitsu`
--
ALTER TABLE `fugitsu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `generalsettings`
--
ALTER TABLE `generalsettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hooks`
--
ALTER TABLE `hooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mapping`
--
ALTER TABLE `mapping`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_permission`
--
ALTER TABLE `membership_permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_statuses`
--
ALTER TABLE `membership_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_types`
--
ALTER TABLE `membership_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member_groups`
--
ALTER TABLE `member_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_variation`
--
ALTER TABLE `menu_variation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pagesettings`
--
ALTER TABLE `pagesettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post_additional_data`
--
ALTER TABLE `post_additional_data`
  MODIFY `data_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pro_validator`
--
ALTER TABLE `pro_validator`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pym_attributes`
--
ALTER TABLE `pym_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pym_attribute_terms`
--
ALTER TABLE `pym_attribute_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sdn_settings`
--
ALTER TABLE `sdn_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studio_groups`
--
ALTER TABLE `studio_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studio_packages`
--
ALTER TABLE `studio_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags_meta`
--
ALTER TABLE `tags_meta`
  MODIFY `meta_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag_types`
--
ALTER TABLE `tag_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_services`
--
ALTER TABLE `tax_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `urlmanager`
--
ALTER TABLE `urlmanager`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=793;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users_meta`
--
ALTER TABLE `users_meta`
  MODIFY `data_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_profile`
--
ALTER TABLE `users_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_membership`
--
ALTER TABLE `user_membership`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_plan`
--
ALTER TABLE `user_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `versions`
--
ALTER TABLE `versions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `classifier_items`
--
ALTER TABLE `classifier_items`
  ADD CONSTRAINT `classify_id_foregin` FOREIGN KEY (`classifier_id`) REFERENCES `classifiers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `columns`
--
ALTER TABLE `columns`
  ADD CONSTRAINT `columns_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
