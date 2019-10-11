CREATE TABLE `product` (
  `id` int,
  `name` varchar(255),
  `description` varchar(255),
  `ingredients` varchar(255),
  `category_id` <type>,
  `media_id` <type>
);

CREATE TABLE `order` (
  `id` int,
  `customer_id` <type>,
  `delivery_address_line1` varchar(255),
  `delivery_address_line2` varchar(255),
  `delivery_postal_code` varchar(255),
  `delivery_city` varchar(255),
  `delivery_country` varchar(255),
  `status_id` <type>,
  `order_date` <type>
);

CREATE TABLE `order_line` (
  `id` int,
  `order_id` <type>,
  `product_id` <type>,
  `quantity` <type>,
  `unit_price` <type>,
  `vat_percentage_id` <type>,
  `line_total` <type>,
  `status_id` <type>
);

CREATE TABLE `customer` (
  `id` int,
  `customer_type_id` <type>,
  `email` <type>,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `address_line1` varchar(255),
  `address_line2` varchar(255),
  `postal_code` varchar(255),
  `city` varchar(255),
  `country` varchar(255),
  `phone_number` <type>,
  `organization_name` varchar(255),
  `vat_number` varchar(255)
);

CREATE TABLE `category` (
  `id` int,
  `name` varchar(255)
);

CREATE TABLE `media` (
  `id` int,
  `media1` <type>,
  `media2` <type>,
  `media3` <type>,
  `media4` <type>
);

CREATE TABLE `vat_percentage` (
  `id` int,
  `percentage` int
);

CREATE TABLE `status_order_line` (
  `id` int,
  `name` varchar(255)
);

CREATE TABLE `costomer_type` (
  `id` int,
  `name` varchar(255)
);

CREATE TABLE `status_order` (
  `id` int,
  `name` varchar(255)
);

