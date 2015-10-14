SELECT t1.`type`, t1.`value`
FROM `data` t1
JOIN (
	SELECT t.`type`, MAX(t.`date`) max_date
	FROM `data` t
	GROUP BY t.`type`
) t2 ON t1.`type`=t2.`type` AND t1.`date`=t2.max_date