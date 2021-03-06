CREATE TABLE participants(
id serial PRIMARY KEY,

fn  VARCHAR (50),
ln VARCHAR (50),
sn VARCHAR (50),
phone VARCHAR (50),
email VARCHAR (50),
county VARCHAR (50),
subc   VARCHAR (50),
 ward  VARCHAR (50),
 village  VARCHAR (50),
 dob  VARCHAR (50),
 b_name  VARCHAR (50),
 b_branch  VARCHAR (50),
 b_ac_name  VARCHAR (50),
  b_ac_no  VARCHAR (50),

 created_at TIMESTAMP DEFAULT now(),
 updated_at TIMESTAMP default NULL,
 deleted_at TIMESTAMP default NULL,

 created_by integer default NULL,
 updated_by integer default NULL,
 deleted_by integer default NULL

);