SELECT districts.district_name as district ,divisions.division_name as division ,subdivisions.subdivision_name as subdivision,blocks.block_name as block,
							scheme_new.scheme_name as scheme,oldcomponents.prog_name as preprogram,estimates.pre_comm_date as predate,estimates.pre_lpcd_id as prelpcd,
							estimates.pre_swap_id as swap,estimates.pre_quality_id as quality,estimates.resolution_id as resolution,estimates.committee_id as committee,
							estimates.sufficient_water as sufficient, estimates.run_hour,estimates.machinery_id as machinery, 
							estimates.head as mhead, estimates.dicharge as discharge, 
							estimates.horsepower as hpower,estimates.control_panel_id as cpanel, 
							estimates.cpanel_cost as panelcost, estimates.pump_chamber_id as pchamber, 
							estimates.ohsr_id as rep_ohsr, estimates.other_component_id as ocomponent, 
							estimates.chlorinator_id as chlorinator, estimates.switch_id as switch, 
							estimates.minor_repair_id as mrepair, estimates.pvc_pipe_160 as p160, estimates.pvc_pipe_110 as p110, 
							estimates.pvc_pipe_90 as p90, estimates.pvc_pipe_75 as p75, estimates.pvc_pipe_63 as p63, 
							estimates.svalue_150 as s150, estimates.svalue_100 as s100, estimates.svalue_80 as s80, 
							estimates.haudi_60 as h60, estimates.haudi_90 as h90, estimates.brickedge as bedge, 
							estimates.ccflorring as cfloor, estimates.metalroad as mroad, 
							estimates.watermeter as meter, estimates.board_id as board, 
							estimates.machinery_cost as costmachine, estimates.pchamber_cost as chambercost, 
							estimates.ohsr_cost as ohsrcost, estimates.ocomponent_cost as workscost, 
							estimates.minor_repair_cost as minorcost, estimates.btbill_cost as btcost, 
							estimates.board_cost as bcost, estimates.component4 as comt4, 
							esti_habs.conn_component1 as comt1, esti_habs.conn_component2 as comt2,
							esti_habs.conn_component3 as comt3, villages_c.gen_pop as gpopulation, 
							villages_c.sc_pop as scpopulation, villages_c.gen_hh as ghholds, 
							villages_c.sc_hh as schholds, villages_c.pconection as pconn 

							FROM estimates  
							LEFT JOIN districts ON districts.district_id = estimates.district_id
							LEFT JOIN divisions on divisions.division_id = estimates.division_id
							LEFT JOIN subdivisions on subdivisions.subdivision_id = estimates.subdivision_id
							LEFT JOIN blocks on blocks.block_id = estimates.block_id
							LEFT JOIN scheme_new on scheme_new.scheme_id = estimates.scheme_id
							LEFT JOIN oldcomponents on oldcomponents.prog_id = estimates.pre_program_id
							LEFT JOIN esti_habs on esti_habs.scheme_id = estimates.scheme_id
							LEFT JOIN villages_c on villages_c.scheme_id = estimates.scheme_id