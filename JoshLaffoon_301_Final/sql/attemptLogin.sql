SELECT *
FROM final_admins
WHERE
	username = :username AND
	password = :password
	