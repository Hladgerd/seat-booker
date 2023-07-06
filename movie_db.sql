CREATE TABLE IF NOT EXISTS seats (
    id int(10) NOT NULL auto_increment,
    seat_nr varchar(255) collate utf8_unicode_ci NOT NULL,
    status varchar(255) collate utf8_unicode_ci NOT NULL,
    price decimal(12,5) NOT NULL,
    PRIMARY KEY  (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;