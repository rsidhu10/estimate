Scheme taken in [2-a]							:Done
Whether Scheme is Quality Affected				:Done
Select the Date of Previous Commissioning		:Done
Select the Program from the List				:Done
Previous design service level of Scheme			:Done
Previously Scheme executed  under SWAp			:Done
Resolution Received ?							:
GPWSCs Formed ?									:	
In Case of Multi Village Scheme SLC Formed ?	:


SELECT DISTINCT districts.district_name,blocks.district_id 
FROM blocks 
LEFT JOIN districts ON districts.district_id = blocks.district_id 
Where blocks.zone_id = 'Z03' 
ORDER BY districts.district_name 

SELECT DISTINCT blocks.block_name,blocks.block_id 
FROM scheme_new 
LEFT JOIN blocks on blocks.block_id = scheme_new.block_id 
Where scheme_new.subdivision_id = "SDIV120" ORDER BY block_name ASC')



SELECT districts.district_name,divisions.division_name,subdivisions.subdivision_name,blocks.block_name,scheme_new.scheme_name  
FROM estimates 
LEFT JOIN districts ON districts.district_id = estimates.district_id
LEFT JOIN divisions on divisions.division_id = estimates.division_id
LEFT JOIN subdivisions on subdivisions.subdivision_id = estimates.subdivision_id
LEFT JOIN blocks on blocks.block_id = estimates.block_id
LEFT JOIN scheme_new on scheme_new.scheme_id = estimates.scheme_id