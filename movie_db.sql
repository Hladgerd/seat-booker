SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS seats (
    seatID int(10) NOT NULL auto_increment,
    status varchar(255) collate utf8_unicode_ci,
    price int(10) NOT NULL,
    PRIMARY KEY (seatID)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

INSERT INTO seats (seatID, status, price)
VALUES(1, 'occupied', 2500),
      (2, 'occupied', 2500),
      (3, 'occupied', 2500),
      (4, "", 3000),
      (5, "", 3000),
      (6, 'occupied', 2500),
      (7, 'occupied', 2500),
      (8, 'occupied', 2500),
      (9, 'occupied', 2500),
      (10, 'occupied', 2500),
      (11, 'occupied', 2500),
      (12, 'occupied', 2500),
      (13, 'occupied', 2500),
      (14, 'occupied', 2500),
      (15, 'occupied', 2500),
      (16, 'occupied', 2500),
      (17, 'occupied', 2500),
      (18, 'occupied', 2500),
      (19, 'occupied', 2500),
      (20, 'occupied', 2500),
      (21, 'occupied', 2500),
      (22, 'occupied', 2500),
      (23, 'occupied', 2500),
      (24, 'occupied', 2500);

COMMIT;













