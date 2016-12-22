CREATE TABLE sms(
id serial PRIMARY KEY,

_id integer DEFAULT NULL,
body text,
person integer DEFAULT NULL,
read  boolean DEFAULT true,
seen  boolean DEFAULT true,
 date_received integer default NULL,
 date_sent integer default NULL,
thread_id integer DEFAULT 0,

status  VARCHAR (50),
address VARCHAR (50),
type VARCHAR (50),


 
 created_at TIMESTAMP DEFAULT now(),
 updated_at TIMESTAMP default NULL,
 deleted_at TIMESTAMP default NULL,

 created_by integer default NULL,
 updated_by integer default NULL,
 deleted_by integer default NULL


);