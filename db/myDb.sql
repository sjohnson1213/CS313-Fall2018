heroku addons:create heroku-postgresql:hobby-dev
heroku config -s
heroku pg:info
heroku pg:psql

CREATE TABLE users(
name varchar(50),
email varhchar(65)
);

CREATE TABLE transactions(
amount float,
date date,
merchant varchar(50),
note varchar(255)
);

CREATE TABLE budget(
income float,
expected_expenses float
categories varchar(25)
);
