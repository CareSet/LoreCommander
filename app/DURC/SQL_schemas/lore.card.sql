/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scryfall_id` varchar(255) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `oracle_id` varchar(255) NOT NULL,
  `rulings_uri` varchar(255) NOT NULL,
  `scryfall_web_uri` varchar(255) NOT NULL,
  `scryfall_api_uri` varchar(255) NOT NULL,
  `layout` varchar(50) NOT NULL,
  `rarity` varchar(50) NOT NULL,
  `released_at` varchar(50) DEFAULT NULL,
  `set_name` varchar(255) NOT NULL,
  `set_type` varchar(255) NOT NULL,
  `mtgset_id` int(11) NOT NULL,
  `collector_number` varchar(20) NOT NULL DEFAULT '',
  `sortable_collector_number` decimal(15,3) DEFAULT NULL,
  `variation_of_scryfall_id` varchar(255) DEFAULT 'NULL',
  `edhrec_rank` int(11) DEFAULT 0,
  `is_promo` tinyint(1) NOT NULL,
  `is_reserved` tinyint(1) DEFAULT NULL,
  `is_story_spotlight` tinyint(1) NOT NULL DEFAULT 0,
  `is_reprint` int(11) NOT NULL DEFAULT 0,
  `is_variation` tinyint(1) NOT NULL DEFAULT 0,
  `is_game_paper` tinyint(1) NOT NULL DEFAULT 0,
  `is_game_mtgo` tinyint(1) NOT NULL DEFAULT 0,
  `is_game_arena` tinyint(1) NOT NULL DEFAULT 0,
  `legal_oldschool` tinyint(1) NOT NULL DEFAULT 0,
  `legal_duel` tinyint(1) NOT NULL DEFAULT 0,
  `legal_commander` tinyint(1) NOT NULL DEFAULT 0,
  `legal_brawl` tinyint(1) NOT NULL DEFAULT 0,
  `legal_penny` tinyint(1) NOT NULL DEFAULT 0,
  `legal_vintage` tinyint(1) NOT NULL DEFAULT 0,
  `legal_pauper` tinyint(1) NOT NULL DEFAULT 0,
  `legal_legacy` tinyint(1) NOT NULL DEFAULT 0,
  `legal_modern` tinyint(1) NOT NULL DEFAULT 0,
  `legal_frontier` tinyint(1) NOT NULL DEFAULT 0,
  `legal_future` tinyint(1) NOT NULL DEFAULT 0,
  `legal_standard` tinyint(1) NOT NULL DEFAULT 0,
  `legal_historic` tinyint(1) NOT NULL DEFAULT 0,
  `legal_pioneer` tinyint(1) NOT NULL DEFAULT 0,
  `legal_gladiator` tinyint(1) NOT NULL DEFAULT 0,
  `legal_premodern` tinyint(1) NOT NULL DEFAULT 0,
  `binder_group_number` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `scryfall_id` (`scryfall_id`,`mtgset_id`),
  KEY `set_name` (`set_name`),
  KEY `is_story_spotlight` (`is_story_spotlight`),
  KEY `is_game_paper` (`is_game_paper`),
  KEY `is_game_mtgo` (`is_game_mtgo`),
  KEY `is_game_arena` (`is_game_arena`),
  KEY `legal_commander` (`legal_commander`),
  KEY `legal_penny` (`legal_penny`),
  KEY `legal_modern` (`legal_modern`),
  KEY `legal_standard` (`legal_standard`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
