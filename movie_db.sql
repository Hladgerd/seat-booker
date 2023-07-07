SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS seats (
    seatID int(10) NOT NULL auto_increment,
    seatNr int(10) NOT NULL,
    status varchar(255) collate utf8_unicode_ci,
    price int(10) NOT NULL,
    PRIMARY KEY (seatID)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;


INSERT INTO seats (seatID, seatNr, status, price)
VALUES(1, 1, 'occupied', 2500),
      (2, 2, 'occupied', 2500),
      (3, 3, 'occupied', 2500),
      (4, 4, null, 2500),
      (5, 5, null, 3500),
      (6, 6, 'occupied', 3500),
      (7, 7, 'occupied', 3500),
      (8, 8, 'occupied', 3500),
      (9, 9, 'occupied', 3500),
      (10, 10, 'occupied', 2500),
      (11, 11, 'occupied', 2500),
      (12, 12, 'occupied', 2500),
      (13, 13, 'occupied', 2500),
      (14, 14, 'occupied', 2500),
      (15, 15, 'occupied', 2500),
      (16, 16, 'occupied', 2500),
      (17, 17, 'occupied', 2500),
      (18, 18, 'occupied', 2500),
      (19, 19, 'occupied', 2500),
      (20, 20, 'occupied', 2500),
      (21, 21, 'occupied', 2500),
      (22, 22, 'occupied', 2500),
      (23, 23, 'occupied', 2500),
      (24, 24, 'occupied', 2500);


COMMIT;













