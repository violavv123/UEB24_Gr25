INSERT INTO cities (name) VALUES
('Peja'), ('Prishtina'), ('Prizreni'), ('Gjakova'),
('Ferizaj'), ('Gjilani'), ('Podujeva'), ('Mitrovica'), ('Vushtrri');

INSERT INTO titles (name) VALUES
('Agjent'),
('Menaxhere për suksesin e klientëve'),
('Agjente kryesore'),
('CEO'),
('Specialiste e marketingut'),
('Konsulent'),
('Administrator'),
('Asistent shitjesh');

INSERT INTO passwords (hashed_password, salt, iterations) VALUES
('7dd96ac9ca772277ddcbec178857fb37', 'qnqFna', 100),
('1a8a06f3d8499508e703c5e786d71087', 'jFRAZv', 100),
('81fdf60328bc65b88ca8304adfee0728', 'RfevId', 100),
('5195d8e3108df3364d652671b5b6eedb', 'pBhKPK', 100),
('fccd8231ad0736a511f79f2f5c2eca0d', '5XJnRq', 100),
('b3d636e974e3950f7213c7d1abfe0964', 'm6TYWf', 100),
('9bd69d4517af6b4427874a791442ba63', '7XqLpT', 100),
('3f493cb6b3615150f4576e5cf9e7045c', 'ZqLp6X', 100),
('a68fa9f73245b629ff820457c27bbb3b', 'WTY6Rq', 100),
('32420015a720296d8cb26c524d5c52cb', 'q9ZTYm', 100),
('753cba4fcfa2dcc77f42f15d13de611a', 'pRq6XZ', 100),
('f57bd5185719a7b23bfd9c0c315b162c', 'RZXT6m', 100),
('8dbcabfd612d2fe27c6becad3215f3b1', 'T7Ym6X', 100),
('95f61fdf9e8fbfbd550b9f93b83c94c6', 'R9qXTm', 100),
('2fec7c47eb4731bfe6144ca34f2f900c', 'ZXT6Lp', 100),
('8fba416d79cf1308ccc2c50618619284', 'f7LpTY', 100),
('a519892f820f3d7f638ddfae48ea254c', 'ZLm6Wp', 100),
('4b0f5c0449ae8f8f0acbc576c19b893e', 'W9LpXT', 100),
('1985b1afa712b68170ee75e45f55d7b7', 'TY9Wq6', 100),
('c7a86fda94d5754b4f734f2f11fd8b88', 'Yq7RpR', 100),
('41f7daa03e458bebac16359ef1d66a00', 'RXT6m7', 100),
('497b05a24c4cf519a1471bfeddc0d09a', 'cSQH2X', 100),
('18df576ff9a31b54353ee1ba10c619e4', '6SnZIp', 100),
('c3e16be39869da2a161d958791c8e87b', 'pChowC', 100),
('95ef4d98c93c43e450575618f5e01f5b', 'fAnlWf', 100);

INSERT INTO offices (city_id, address, phone) VALUES
(2, 'Rruga Rexhep Bislimi, Prishtina', '+383 38 200 111'),
(1, 'Rruga Isa Boletini, Peja', '+383 39 200 222'),
(8, 'Rruga Luan Haradinaj, Mitrovica', '+383 28 300 333'),
(3, 'Rruga Adem Jashari, Prizreni', '+383 29 400 444'),
(4, 'Rruga 1 Tetori, Gjakova', '+383 39 500 555');

INSERT INTO users (username, email, role, password_id) VALUES
('aris123', 'aris@example.com', 'seller', 1),
('linda_realty', 'linda@example.com', 'seller', 2),
('john_doe', 'john@example.com', 'seller', 3),
('nora_estates', 'nora@example.com', 'seller', 4),
('agent_mike', 'mike@example.com', 'seller', 5),
('uranit_v', 'sarah@example.com', 'agent', 6),
('david_ag', 'david@example.com', 'buyer', 7),
('emily_vr', 'emily@example.com', 'buyer', 8),
('tom_buyer', 'tom@example.com', 'buyer', 9),
('riga_z', 'julia@example.com', 'agent', 10),
('yllka_f', 'alex@example.com', 'agent', 11),
('maria_buyer', 'maria@example.com', 'buyer', 12),
('viola_r', 'peter@example.com', 'agent', 13),
('rudina_b', 'lisa@example.com', 'agent', 14),
('chris_buyer', 'chris@example.com', 'buyer', 15),
('nina_buyer', 'nina@example.com', 'buyer', 16),
('mark_a', 'mark@example.com', 'buyer', 17),
('olivia_op', 'olivia@example.com', 'buyer', 18),
('jack_buyer', 'jack@example.com', 'buyer', 19),
('emma_a', 'emma@example.com', 'buyer', 20),
('noah_se', 'noah@example.com', 'buyer', 21),
('ava_buyer', 'ava@example.com', 'buyer', 22),
('liam_t', 'liam@example.com', 'buyer', 23),
('mia_s', 'mia@example.com', 'buyer', 24),
('ethan_buyer', 'ethan@example.com', 'buyer', 25);


INSERT INTO buyers (user_id, preferred_city_id, budget, property_type) VALUES
(7, 2, 150000.00, 'apartment'),
(8, 1, 200000.00, 'house'),
(9, 3, 120000.00, 'apartment'),
(12, 4, 180000.00, 'house'),
(15, 2, 160000.00, 'apartment'),
(16, 1, 140000.00, 'house'),
(17, 3, 170000.00, 'apartment'),
(18, 4, 130000.00, 'house'),
(19, 2, 110000.00, 'apartment'),
(20, 1, 155000.00, 'house'),
(21, 3, 145000.00, 'apartment'),
(22, 4, 190000.00, 'house'),
(23, 2, 125000.00, 'apartment'),
(24, 1, 135000.00, 'house'),
(25, 3, 165000.00, 'apartment');

INSERT INTO services (name) VALUES
('Shitja e pasurive'),
('Qiradhënia e pasurive'),
('Konsulencë imobiliare'),
('Menaxhimi i marrëdhënieve me klientët'),
('Sigurimi i shërbimit të shkëlqyer për klientët'),
('Konsulencë për klientët'),
('Konsulencë për shitjen e pasurive të luksit'),
('Përgatitja e dokumentacionit të shitjes'),
('Negociata me blerësit'),
('Strategji për zhvillimin e biznesit'),
('Marrëdhënie me partnerë dhe investitorë'),
('Menaxhimi i ekipit'),
('Fushata marketingu për pasuri'),
('Përgatitja e materialeve promocionale'),
('Analiza e tregut dhe pozicionimi');


INSERT INTO agents (name, user_id, office_id, license_no, phone, title_id) VALUES
('Uranit Vuçitërna',6 , 1, 'LIC-UV123', '+383 44 111 222', 1),
('Riga Zubaku',10, 1, 'LIC-RZ456', '+383 44 333 444', 2),
('Yllka Fejzullahu',11, 3, 'LIC-YF789', '+383 44 555 666', 3),
('Viola Resyli',13, 1, 'LIC-VR012', '+383 44 777 888', 4),
('Rudina Bulliqi',14, 5, 'LIC-RB345', '+383 44 999 000', 5);


INSERT INTO agent_service (agent_id, service_id) VALUES
(1, 1), (1, 2), (1, 3),
(2, 4), (2, 5), (2, 6),
(3, 7), (3, 8), (3, 9),
(4, 10), (4, 11), (4, 12),
(5, 13), (5, 14), (5, 15);

INSERT INTO sellers (user_id, company_name, contant_number, verified) VALUES
(1, 'Elite Estates', '+38344111222', TRUE),
(2, 'Prishtina Property Group', '+38349123456', TRUE),
(3, 'Kosova Realty', '+38345111222', TRUE),
(4, 'Sunset Homes', '+38349110000', TRUE),
(5, 'DreamHouse Agency', '+38344333000', TRUE);

INSERT INTO properties (title, description, price, address, city_id, property_type, available, rented) VALUES
('Modern House in Prizren', '5 Beds', 450000, 'Rruga Halim Orana', 3, 'house', TRUE, FALSE),
('Luxury Apartment in Prishtina', '6 Beds', 750000, 'Rruga Deshmoret e Kombit', 2, 'apartment', TRUE, FALSE),
('Charming House in Gjilan', '3 Beds', 600000, 'Rruga Hyzri Talla', 6, 'house', TRUE, FALSE),
('House in Prishtina', '4 Beds', 600, 'Rruga B', 2, 'house', TRUE, TRUE),
('Apartment in Prishtina', '2 Beds', 350, 'Rruga C', 2, 'apartment', TRUE, TRUE),
('Charming House in Peja', '5 Beds', 450000, 'Rruga Nene Tereza', 1, 'house', TRUE, FALSE),
('Cozy Apartment in Peja', '3 Beds', 500, 'Rruga Fehmi Agani', 1, 'apartment', TRUE, TRUE),
('Beautiful House in Mitrovica', '4 Beds', 350000, 'Rruga Agim Devolli', 8, 'house', TRUE, FALSE),
('Charming Apartment in Mitrovica', '2 Beds', 300, 'Rruga Kodra e Trimave', 8, 'apartment', TRUE, TRUE),
('House in the Heart of Prishtina', '5 Beds', 550000, 'Rruga Pavaresia', 2, 'house', TRUE, FALSE),
('Apartment in Prishtina', '1 Bed', 250, 'Rruga Marigona', 2, 'apartment', TRUE, TRUE),
('House in Ferizaj', '6 Beds', 700000, 'Rruga Te mjeret', 5, 'house', TRUE, FALSE),
('Apartment in Ferizaj', '3 Beds', 250000, 'Rruga Ismail Qemali', 5, 'apartment', TRUE, FALSE),
('Pretty House in Gjakova', '2 Beds', 650, 'Rruga Trimat', 4, 'house', TRUE, TRUE),
('Cozy Apartament in Gjakova', '3 Beds', 700, 'Rruga Kosova', 4, 'apartment', TRUE, TRUE),
('Pretty House in Vushtrri', '4 Beds', 350000, 'Rruga Shqiperia', 9, 'house', TRUE, FALSE),
('Apartment in Vushtrri', '2 Beds', 250, 'Rruga Bajram Curri', 9, 'apartment', TRUE, TRUE),
('Big House in Peja', '4 Beds', 400000, 'Rruga Kleopatra', 1, 'house', TRUE, FALSE),
('Pretty Apartment in Peja', '3 Beds', 800, 'Rruga Rexhep Qosja', 1, 'apartment', TRUE, TRUE),
('House in Prishtina', '4 Beds', 900, 'Rruga C', 2, 'house', TRUE, TRUE),
('Apartment in Prishtina', '2 Beds', 100000, 'Rruga Ismail Kadare', 2, 'apartment', TRUE, FALSE);

INSERT INTO apartments (property_id, floor, area, bedrooms, bathrooms, has_elevator) VALUES
(2, 2, 300, 3, 4, TRUE),
(5, 3, 70, 1, 1, TRUE),
(7, 1, 110, 2, 2, TRUE),
(9, 4, 80, 2, 1, FALSE),
(11, 6, 50, 1, 1, TRUE),
(13, 3, 120, 2, 2, FALSE),
(15, 1, 100, 2, 2, TRUE),
(17, 5, 90, 2, 1, FALSE),
(19, 4, 250, 3, 2, FALSE),
(21, 2, 85, 2, 1, FALSE);

INSERT INTO houses (property_id, area, bedrooms, bathrooms, has_garage, num_floors, available) VALUES
(1, 240, 4, 3, TRUE, 2, TRUE),
(3, 120, 3, 2, TRUE, 2, TRUE),
(4, 200, 3, 2, FALSE, 1, TRUE),
(6, 300, 4, 4, TRUE, 3, TRUE),
(8, 150, 3, 2, FALSE, 2, TRUE),
(10, 300, 4, 4, FALSE, 3, TRUE),
(12, 350, 3, 5, TRUE, 3, TRUE),
(14, 80, 1, 1, FALSE, 1, TRUE),
(16, 220, 3, 3, TRUE, 2, TRUE),
(18, 180, 2, 2, FALSE, 2, TRUE),
(20, 250, 3, 3, TRUE, 3, TRUE);
