
--SELECT a.'name', a.'email',a.'location' FROM customers a


SELECT a.name, a.email, a.location FROM customers a;


SELECT c.name, c.email, c.location, o.order_date, o.total_amount
FROM customers c
INNER JOIN order o ON c.id = o.customer_id;




SELECT cat.name FROM categories cat;

SELECT cat.name, por.name, por.description, por.price
FROM  categories cat
INNER JOIN products por ON cat.id = por.category_id;


SELECT * FROM order_item;


SELECT cat.name, por.name, por.description, por.price
FROM  categories cat
INNER JOIN products por ON cat.id = por.category_id;


--SELECT   ord.order_date, ord.total_amount,
--FROM  order_item oit
--INNER JOIN order ord ON ord.id = oit.order_id;


SELECT o.order_date, c.name AS customer_name, p.name AS product_name, oi.quantity, oi.unit_price
FROM `order_item` oi
INNER JOIN `order` o ON oi.order_id = o.id
INNER JOIN `customers` c ON o.customer_id = c.id
INNER JOIN `products` p ON oi.product_id = p.id;











