/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filterTest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_boolean` tinyint(1) NOT NULL,
  `dec_value` decimal(11,0) NOT NULL,
  `float_value` float NOT NULL,
  `tiny_integer` tinyint(4) NOT NULL,
  `small_integer` smallint(3) NOT NULL,
  `integer_field` int(11) NOT NULL,
  `test_uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_alpha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_alpha_dash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_alpha_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_ipv4` varchar(63) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_ipv6` varchar(63) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_json` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;