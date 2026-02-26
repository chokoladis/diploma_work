-- fields
-- "title", "code", "link", "active", "level", "area", "parent_id"

INSERT INTO "Menu" ("title", "code", "link", "active", "level", "area")
VALUES
('Услуги', 'services', '/catalog/', true, 0, 'header'),
('Прайс-лист', 'prices', '/prices/', true, 0, 'header'),
('Отзывы', 'reviews', '/reviews/', true, 0, 'header'),
('Отследить трек-код', 'trek-codes', '/trek-codes/', true, 0, 'header'),
('О нас', 'about', '/about/', true, 0, 'header');
