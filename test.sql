insert into "participants" 
	("fn", "ln", "sn", "phone", "email", "county", "subc", "ward", "village", "dob", "b_name", "b_branch", "b_ac_name", "b_ac_no", 
		"created_by", "updated_by", "deleted_by", "updated_at", "created_at") 
	values
	 (Bonfix, Ngetich, Ngetich, 0704455150, bonfixn@gmail.com, Bomet, Makimeny, Kong'asis, Makimeny, 12/12/1999, Equity, Nairobi, Fixer, 000000000000000002,
	  , , , 2016-12-15 16:32:58, 2016-12-15 16:32:58) returning "id")