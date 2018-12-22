INSERT INTO `estimates` (`id`, `timestamp`, `zone_id`, `circe_id`, `district_id`, `division_id`, 
            `subdivision_id`, `block_id`, `scheme_id`, `pre_program_id`, `pre_comm_date`, `pre_lpcd_id`, 
            `pre_swap_id`, `pre_quality_id`, `program_id`, `schemetype_id`, `resolution_id`, `committee_id`, 
            `sufficient_water`, `run_hour`, `machinery_id`, `dicharge`, `head`, `horsepower`, `machinery_cost`, 
            `control_panel_id`, `cpanel_cost`, `pump_chamber_id`, `pchamber_cost`, `ohsr_id`, `ohsr_cost`, 
            `other_component_id`, `ocomponent_cost`, `chlorinator_id`, `switch_id`, `minor_repair_id`, 
            `minor_repair_cost`, `pvc_pipe_160`, `pvc_pipe_110`, `pvc_pipe_90`, `pvc_pipe_75`, `pvc_pipe_63`, 
            `svalue_150`, `svalue_100`, `svalue_80`, `haudi_60`, `haudi_90`, `brickedge`, `ccflorring`, 
            `metalroad`, `btbill_cost`, `watermeter`, `board_id`, `board_cost`, `component4`) 
            VALUES (NULL, CURRENT_TIMESTAMP, '$zonecboID', '$circlecboID', '$districtID', '$divisioncboID', '$subdivisioncboID', '$blockcboID', '$schemecboID', '$pre_coverundercboID', '$precommdatetxtID', '$servicelevelcboID', '$swapcbocboID', '$qualitytypecboID', '$componentcboID', '$schemetypecboID', '$resolutioncboID', '$gpwscformedcboID', '$sufficientcboID', '$runhourscboID', '$machinerycboID', '$dischargetxtID', '$headtxtID', '$hpowertxtID', '$machcosttxtID', '$controlpanelcboID', '$controlpaneltxtID', '$pumpchambercboID', '$pchambertxtID', '$ohsrcboID', '$ohsrtxtID', '$othercomponentscboID', '$othercomponentstxtID', '$chlorplantcboID', '$autoswitchcboID', '$minorrepaircboID', '$minorrepairtxtID', '$p160pipetxtID', '$p110pipetxtID', '$p90pipetxtID', '$p75pipetxtID', '$p63pipetxtID', '$s150svtxtID', '$s100svtxtID', '$s80svtxtID', '$h60hauditxtID', '$h90hauditxtID', '$brcikedgetxtID', '$ccfloortxtID', '$metalroadtxtID', '$btbilltxtID', '$metertxtID', '$paintcboID', '$boardcosttxtID', '$electricbilltxtID')



INSERT INTO `esti_habs` (`id`, `zone_id`, `circle_id`, `district_id`, `division_id`, `subdivision`, `block_id`, `scheme_id`, `village_id`,
  `conn_component1`, `conn_component2`, `conn_component3`)
VALUES (NULL, '$zonecboID', '$circlecboID', '$districtID', '$divisioncboID', '$subdivisioncboID', '$blockcboID', '$schemecboID', '$habitationID', '$component1', '$component2', '$component3', CURRENT_TIMESTAMP)








`esti_habs` (
  `id`, 
  `zone_id` ,
  `circle_id`,
  `district_id`,
  `division_id`,
  `subdivision`,
  `block_id` ,
  `scheme_id`,
  `village_id`,
  `conn_component1`,
  `conn_component2`,
  `conn_component3`,
  `timestamp`             