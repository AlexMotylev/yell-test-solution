-- Дамп структуры для таблица test.author
-- Таблица для авторов книг
CREATE TABLE IF NOT EXISTS `author` (
  `author_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица test.book
-- Таблимца для книг
CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица test.book_author
-- Таблица для связи многие-ко-многим между книгами и авторами
CREATE TABLE IF NOT EXISTS `book_author` (
  `book_id` int(11) unsigned NOT NULL,
  `author_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`book_id`,`author_id`),
  KEY `FK_book_author_author` (`author_id`),
  CONSTRAINT `FK_book_author_author` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_book_author_book` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.
