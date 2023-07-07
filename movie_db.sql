SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS seats (
    seatID int(10) NOT NULL auto_increment,
    status varchar(255) collate utf8_unicode_ci NOT NULL,
    price int(10) NOT NULL,
    PRIMARY KEY (seatID)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;


INSERT INTO seats (seatID, status, price)
VALUES(1, 'elkelt', 2500),
      (2, 'elkelt', 2500),
      (3, 'elkelt', 2500),
      (4, 'elkelt', 2500),
      (5, 'szabad', 3500),
      (6, 'szabad', 3500);


COMMIT;













