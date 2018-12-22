CREATE TABLE `villages_c` (
  `Id` int(11) NOT NULL,
  `vcode_mis` varchar(5) CHARACTER SET latin1 NOT NULL,
  `zone_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `circle_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `district_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `division_id` varchar(5) CHARACTER SET latin1 NOT NULL,
  `subdivisionid` varchar(7),
  `block_id` varchar(6) CHARACTER SET latin1 NOT NULL,
  `sdcode` varchar(6),
  `scheme_id` bigint(6),
  `sch_code_mis` varchar(9),
  `village_name` varchar(30),
  `gen_pop` int(5) NOT NULL,
  `sc_pop` int(5) NOT NULL,
  `gen_hh` int(4) NOT NULL,
  `sc_hh` int(4) NOT NULL,
  `pconection` int(5) NOT NULL,
  `ro_installed` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `doc` date NOT NULL,
  `slevel` int(4) NOT NULL,
  `hab_type` tinyint(1) NOT NULL,
  `water_supplyby` tinyint(1) NOT NULL DEFAULT '0',
  `village_ownby` tinyint(1) NOT NULL DEFAULT '0',
  `transfer_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `villages_c` (`Id`, `vcode_mis`, `zone_id`, `circle_id`, `district_id`, `division_id`, `subdivisionid`, `block_id`, `sdcode`, `scheme_id`, `sch_code_mis`, `village_name`, `gen_pop`, `sc_pop`, `gen_hh`, `sc_hh`, `pconection`, `ro_installed`, `status`, `doc`, `slevel`, `hab_type`, `timestamp`) 
VALUES ('30001', '10654', 'Z03', 'C08', 'D16', 'DIV54', 'SDIV101', 'D16B01', 'DIV54SD01', '10001', 'CA9016', 'Ablu', '7880', '4153', '216', '77', '291', '0', '2', '1900-01-01', '70', '0', CURRENT_TIMESTAMP);
