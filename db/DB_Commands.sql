CREATE TABLE budget_user(
id SERIAL PRIMARY KEY,
username varchar(255) NOT NULL UNIQUE,
password varchar(255) NOT NULL,
name varchar(50) NOT NULL,
email varchar(65) NOT NULL UNIQUE
);

CREATE TABLE transactions(
id SERIAL references budget_user(id),
amount float NOT NULL,
date date,
category varchar(30) references categories(category),
merchant varchar(50),
note varchar(255)
);

CREATE TABLE budget(
id SERIAL references budget_user(id),
income float,
expected_expenses float, 
category varchar(30) references categories(category)
);

CREATE TABLE categories(
id SERIAL,
category varchar(30) NOT NULL primary key
);

INSERT INTO budget_user (username, password, name, email) VALUES ('jdeere78', 'password78', 'John Deer', 'j_deere@hotmail.com');
INSERT INTO budget_user (username, password, name, email) VALUES ('krazyscience123', 'drowssap', 'Jane Doe', 'compscience456@gmail.com');
INSERT INTO categories (category) VALUES ('House');
INSERT INTO categories (category) VALUES ('Eating Out');
INSERT INTO transactions (amount, date, category, merchant, note) VALUES ('78.43', '10/23/18', 'House', 'Walmart', 'Household Items');
INSERT INTO transactions (amount, date, category, merchant, note) VALUES ('8.21', '10/25/18', 'Eating Out', 'Sonic', 'Comfort Food');
INSERT INTO budget (income, expected_expenses, category) VALUES ('3900.43', '100', 'House');
INSERT INTO budget (income, expected_expenses, category) VALUES ('1503.91', '30', 'Eating Out');
