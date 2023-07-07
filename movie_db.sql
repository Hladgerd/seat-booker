SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS seats (
    seatID int(10) NOT NULL auto_increment,
    PRIMARY KEY (seatID)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE bookings (
    bookingID int(10) NOT NULL auto_increment,
    seatID int(10) NOT NULL,
    status varchar(255) collate utf8_unicode_ci NOT NULL,
    timestamp datetime DEFAULT current_timestamp(),
    price int(10) NOT NULL,
    PRIMARY KEY (bookingID),
    FOREIGN KEY (seatID) REFERENCES seats(seatID)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

INSERT INTO bookings (seatID, status, timestamp, price)
VALUES(1, 'elkelt', '2020-12-14 12:20:31', 2500),
      (2, 'elkelt', '2020-12-14 12:20:31', 2500),
      (3, 'elkelt', '2020-12-14 12:20:31', 2500),
      (4, 'elkelt', '2020-12-14 12:20:31', 2500),
      (5, 'szabad', NULL, 3500),
      (6, 'szabad', NULL, 3500);


COMMIT;













