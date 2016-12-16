CREATE TABLE providers(
id serial PRIMARY KEY,

name VARCHAR (50),
contract_no VARCHAR (50),
service  VARCHAR (50),
course  VARCHAR (50),
capacity  integer DEFAULT 0,

p_name  VARCHAR (50),
p_address VARCHAR (50),
p_location VARCHAR (50),
phone VARCHAR (50),
email VARCHAR (50),
county VARCHAR (50),
subc   VARCHAR (50),
ward  VARCHAR (50),
village  VARCHAR (50),

 
 created_at TIMESTAMP DEFAULT now(),
 updated_at TIMESTAMP default NULL,
 deleted_at TIMESTAMP default NULL,

 created_by integer default NULL,
 updated_by integer default NULL,
 deleted_by integer default NULL

);