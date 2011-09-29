--
-- I usually use prefixes, so do a replace all of '[prefix]__' and substitute your prefix if used or blank.
--
CREATE TABLE `[prefix]__groups` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
);

-- 
-- Dumping data for table `groups`
-- 

INSERT INTO `[prefix]__groups` (`id`, `name`, `created`, `modified`) VALUES (1, 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `[prefix]__groups` (`id`, `name`, `created`, `modified`) VALUES (2, 'Member', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `[prefix]__users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `active` tinyint(1) unsigned NOT NULL,
  `created` datetime,
  `modified` datetime,
  PRIMARY KEY  (`id`),
  KEY `group_id` (`group_id`)
); 