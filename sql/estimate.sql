CREATE TABLE `pbdwss`.`estimates` ( 
	`id` INT(10) NOT NULL AUTO_INCREMENT , 
	`timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	`zone_id` VARCHAR(3) NOT NULL ,
	`circe_id` VARCHAR(3) NOT NULL ,
	`district_id` VARCHAR(3) NOT NULL ,
	`division_id` VARCHAR(5) NOT NULL ,
	`subdivision_id` VARCHAR(7) NOT NULL ,
	`block_id` VARCHAR(6) NOT NULL ,
	`scheme_id` INT(5) NOT NULL ,
	`pre_program_id` VARCHAR(4) NOT NULL ,
	`pre_comm_date` DATE NOT NULL , 
	`pre_lpcd_id` INT(2) NOT NULL ,
	`pre_swap_id` INT(1) NOT NULL ,
	`pre_quality_id` INT(2) NOT NULL ,
	`program_id` VARCHAR(4) NOT NULL ,
	`schemetype_id` VARCHAR(1) NOT NULL ,
	`resolution_id` VARCHAR(1) NOT NULL ,
	`committee_id` VARCHAR(1) NOT NULL ,
	`sufficient_water` VARCHAR(3) NOT NULL ,
	`run_hour` INT(2) NOT NULL ,
	`machinery_id` INT(1) NOT NULL ,
	`dicharge` INT(5) NOT NULL ,
	`head` INT(3) NOT NULL ,
	`horsepower` INT(3) NOT NULL ,
	`machinery_cost` FLOAT(10,2) NOT NULL DEFAULT '0.00' ,
	`control_panel_id` INT(1) NOT NULL ,
	`cpanel_cost` FLOAT(8,2) NOT NULL DEFAULT '0.00' ,
	`pump_chamber_id` INT(1) NOT NULL ,
	`pchamber_cost` FLOAT(8,2) NOT NULL DEFAULT '0.00' ,
	`ohsr_id` INT(1) NOT NULL ,
	`ohsr_cost` FLOAT(8,2) NOT NULL DEFAULT '0.00' ,
	`other_component_id` INT(1) NOT NULL ,
	`ocomponent_cost` FLOAT(8,2) NOT NULL DEFAULT '0.00' ,
	`chlorinator_id` INT(1) NOT NULL ,
	`switch_id` INT(1) NOT NULL ,
	`minor_repair_id` INT(1) NOT NULL ,
	`minor_repair_cost` FLOAT(8,2) NOT NULL DEFAULT '0.00' ,
	`pvc_pipe_160` INT(5) NOT NULL DEFAULT '0' ,
	`pvc_pipe_110` INT(5) NOT NULL DEFAULT '0' ,
	`pvc_pipe_90` INT(5) NOT NULL DEFAULT '0' ,
	`pvc_pipe_75` INT(5) NOT NULL DEFAULT '0' ,
	`pvc_pipe_63` INT(5) NOT NULL DEFAULT '0' ,
	`svalue_150` INT(3) NOT NULL DEFAULT '0' ,
	`svalue_100` INT(3) NOT NULL DEFAULT '0' ,
	`svalue_80` INT(3) NOT NULL DEFAULT '0' ,
	`haudi_60` INT(3) NOT NULL DEFAULT '0' ,
	`haudi_90` INT(3) NOT NULL DEFAULT '0' ,
	`brickedge` INT(5) NOT NULL DEFAULT '0' ,
	`ccflorring` INT(5) NOT NULL DEFAULT '0' ,
	`metalroad` INT(5) NOT NULL DEFAULT '0' ,
	`btbill_cost` FLOAT(8,2) NOT NULL DEFAULT '0.00' ,
	`watermeter` INT(4) NOT NULL DEFAULT '0' ,
	`board_id` VARCHAR(5) NOT NULL ,
	`board_cost` FLOAT(6,2) NOT NULL DEFAULT '0.00' ,
	`component4` FLOAT(8,2) NOT NULL DEFAULT '0.00' ,
	PRIMARY KEY (`id`)) ENGINE = InnoDB; 







	`scheme` VARCHAR(10) NOT NULL , 
	`amount` FLOAT(10,2) NOT NULL DEFAULT '0.00' , 
	`pen` INT(10) NOT NULL DEFAULT '0' ,

CREATE TABLE `dwsspb`.`testesti` ( 
	`numb` INT NOT NULL DEFAULT '0' , 
	`date` DATE NOT NULL , 
	`timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	`name` VARCHAR(20) NOT NULL , 
	`shortnumber` TINYINT(2) NOT NULL DEFAULT '0.00' , 
	`Amount` FLOAT(10,2) NOT NULL , 
	`mycodes` SMALLINT(7) NOT NULL 





	) ENGINE = InnoDB; 


CREATE TABLE `dwsspb`.`testesti` ( 
	`numb` INT NOT NULL DEFAULT '0' , 
	`date` DATE NOT NULL , 
	`timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	`name` VARCHAR(20) NOT NULL , 
	`shortnumber` TINYINT(2) NOT NULL DEFAULT '0.00' , 
	`Amount` FLOAT(10,2) NOT NULL , `mycodes` 
	SMALLINT(7) NOT NULL , 
	`id` INT(7) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`(10))



	) ENGINE = InnoDB; 

	`numb` INT NOT NULL DEFAULT '0' , 
CREATE TABLE `dwsspb`.`testesti` ( 
	`id` INT(7) NOT NULL, 
	`numb` INT NOT NULL DEFAULT '0' , 
	`date` DATE NOT NULL , `timestamp` 
	TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	`name` VARCHAR(20) NOT NULL , 
	`shortnumber` TINYINT(2) NOT NULL , 
	`Amount` FLOAT(10,2) NOT NULL DEFAULT '0.00' , 
	`pump` VARCHAR(9) NULL , 
	PRIMARY KEY (`id`(7))) ENGINE = InnoDB; 