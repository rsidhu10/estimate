SELECT s.scheme_name,v.village_name,eh.conn_component1 FROM 
scheme_new s JOIN estimates e
on s.scheme_id = e.scheme_id
JOIN esti_habs eh on
e.scheme_id = eh.scheme_id
JOIN villages_c v on
eh.village_id =  v.village_id


WHERE 1

SELECT DISTINCT s.scheme_name,
	SUBSTRING(
	(
		SELECT ',' + v.village_name AS [text()]
		FROM dbo.villages_c v 
		WHERE v.scheme_id = s.scheme_id
		ORDER BY v.village_name
		FOR XML PATH ('')
		), 2, 1000) [villages_c]
	FROM dbo.scheme_new s




SELECT DISTINCT ST2.SubjectID, 
    SUBSTRING(
        (
            SELECT ','+ST1.StudentName  AS [text()]
            FROM dbo.Students ST1
            WHERE ST1.SubjectID = ST2.SubjectID
            ORDER BY ST1.SubjectID
            FOR XML PATH ('')
        ), 2, 1000) [Students]
FROM dbo.Students ST2


SELECT Main.id,
Left(Main.STUDENTS,Len(Main.STUDENTS)-1) As "STUDENTS"
FROM
( SELECT DISTINCT ST2.id,
	( SELECT ST1.Name+"," AS[text()]
		FROM dbo.STUDENTS ST1?

		WHERE ST1.id = ST2.id
		ORDER BY ST1.id
		For XML PATH('')
		)[STUDENTS]
FROM dbo.STUDENTS ST2
)[Main]

Select village_name,gen_pop FROM villages_c
ORDER BY villages_c
Declare @villages as Nvarchar(max) = ''
Select @villages = @villages + village_name
FROM villages_c
Where scheme_id = '10001'




SELECT districts.district_name,scheme_new.scheme_name  FROM scheme_new
LEFT JOIN districts ON districts.district_id = scheme_new.district_id
JOIN divisions on divisions.division_id = scheme_new.division_id
JOIN subdivisions on subdivisions.subdivision_id = scheme_new.subdivision_id
JOIN estimates on scheme_new.scheme_id = estimates.scheme_id

JOIN villages_c on estimates.scheme_id = villages_c.scheme_id

SELECT districts.district_name,scheme_new.scheme_name,divisions.division_name,
blocks.block_name,sum(gen_pop),sum(gen_hh) 
FROM esti_habs
JOIN villages_c on esti_habs.village_id = villages_c.village_id
JOIN estimates on esti_habs.scheme_id = estimates.scheme_id
JOIN scheme_new on esti_habs.scheme_id = scheme_new.scheme_id
JOIN districts on scheme_new.district_id = districts.district_id
JOIN divisions on scheme_new.division_id = divisions.division_id
JOIN subdivisions on scheme_new.subdivision_id = subdivisions.subdivision_id
JOIN blocks on scheme_new.block_id = blocks.block_id
JOIN oldcomponents on estimates.pre_program_id = oldcomponents.prog_id
group by scheme_name.scheme_id

JOIN blocks on blocks.block_id = estimates.block_id
							JOIN scheme_new on estimates.scheme_id = scheme_new.scheme_id 
							JOIN oldcomponents on estimates.pre_program_id = oldcomponents.prog_id 


							
							JOIN blocks on blocks.block_id = estimates.block_id