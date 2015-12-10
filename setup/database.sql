--
-- MySQL 5.0.96
-- Thu, 10 Dec 2015 17:32:29 +0000
--

CREATE TABLE `rackdata` (
   `entryid` int(11) not null auto_increment,
   `unitsize` tinyint(4) not null default '1',
   `unitname` varchar(60),
   `unitip` varchar(40),
   `rackid` tinyint(4) not null,
   PRIMARY KEY (`entryid`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE `racks` (
   `rackid` tinyint(4) not null auto_increment,
   `rackname` varchar(60) default 'MyRack',
   `racksize` varchar(2) default '20',
   PRIMARY KEY (`rackid`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;