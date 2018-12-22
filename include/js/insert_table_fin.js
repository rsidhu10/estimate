$(document).ready(function(){
    
	
	var schemeID ="*";
    $.ajax({
        url:"basic_rpt.php",
        method:"POST",
        data:{id:schemeID},
        dataType:"JSON",
        success:function(data){
            //$("#re").css("visibility","hidden");
           // document.getElementById("loader").style.visibility = "visible";
        var table = document.createElement("table");
			table.setAttribute("id", "report_table");
			table.setAttribute("class", "table table-condensed table-bordered");
			var header = table.createTHead();
            var row = header.insertRow(0);    
			row.setAttribute("class", "myrow");	
            var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
			var cell8 = row.insertCell(7);
			var cell9 = row.insertCell(8);
			var cell10 = row.insertCell(9);
			var cell11 = row.insertCell(10);
			var cell12 = row.insertCell(11);
			var cell13 = row.insertCell(12);
			var cell14 = row.insertCell(13);
			var cell15 = row.insertCell(14);
			var cell16 = row.insertCell(15);
			var cell17 = row.insertCell(16);
			var cell18 = row.insertCell(17);
			var cell19 = row.insertCell(18);
			var cell20 = row.insertCell(19);
			var cell21 = row.insertCell(20);
			var cell22 = row.insertCell(21);
			var cell23 = row.insertCell(22);
			var cell24 = row.insertCell(23);
			var cell25 = row.insertCell(24);
			var cell26 = row.insertCell(25);
			var cell27 = row.insertCell(26);
			
						
			
			
			cell1.setAttribute("rowspan", 2);
			cell2.setAttribute("rowspan", 2);
			cell3.setAttribute("rowspan", 2);
			cell4.setAttribute("rowspan", 2);
			cell5.setAttribute("rowspan", 2);
			cell6.setAttribute("rowspan", 2);
			cell7.setAttribute("colspan", 3);
			cell8.setAttribute("rowspan", 2);
			cell9.setAttribute("rowspan", 2);
			cell10.setAttribute("rowspan", 2);
			cell11.setAttribute("rowspan", 2);
			cell12.setAttribute("rowspan", 2);
			cell13.setAttribute("rowspan", 2);
			cell14.setAttribute("colspan", 5);
			cell15.setAttribute("colspan", 3);
			cell16.setAttribute("colspan", 2);
			cell17.setAttribute("colspan", 2);
			cell18.setAttribute("rowspan", 2);
			cell19.setAttribute("rowspan", 2);
			cell20.setAttribute("rowspan", 2);
			cell21.setAttribute("rowspan", 2);
			cell22.setAttribute("rowspan", 2);
			cell23.setAttribute("rowspan", 2);
			cell24.setAttribute("rowspan", 2);	
			cell25.setAttribute("rowspan", 2);	
			cell26.setAttribute("rowspan", 2);	
			cell27.setAttribute("rowspan", 2);	
			
			
			
			
			
			cell1.innerHTML = "<b>Sr.</b>";
            cell2.innerHTML = "<b>Division</b>";
            cell3.innerHTML = "<b>Sub Division</b>";
            cell4.innerHTML = "<b>Scheme</b>";
            cell5.innerHTML = "<b>Cost of Repair/ Replacement of Machinery</b>";
            cell6.innerHTML = "<b>Cost of Repair/ Replacement of Control Panel</b>";
            cell7.innerHTML = "<b>Cost of Repair of existing structures</b>";
            cell8.innerHTML = "<b>Cost of Chlorination Plant required</b>";
			cell9.innerHTML = "<b>Cost of Minor Repair & replacement of pipe associated with repair</b>";
			cell10.innerHTML = "<b>Cost automated Water Controller</b>";
			cell11.innerHTML = "<b>Cost of imporovement of Existing Connections</b>";
			cell12.innerHTML = "<b>Component -1 Total</b>";
			cell13.innerHTML = "<b>Cost of Connections on existing line (Compo-2)</b>";
			cell14.innerHTML = "<b>Cost of Pipe Line (In mtrs.)</b>";
			cell15.innerHTML = "<b>Cost of Sluice Valve</b>";
			cell16.innerHTML = "<b>Cost of Haudi</b>";
			cell17.innerHTML = "<b>Cost of Dismantling and restoration of Road cut (Per Meter)</b>";
			cell18.innerHTML = "<b>Cost of Dismantling of Metalled Road</b>";
			cell19.innerHTML = "<b>Approximate Cost of likely BT Bill for resoration of metalled road</b>";
			cell20.innerHTML = "<b>Cost of additional new Water Connection on new pipe line</b>";
			cell21.innerHTML = "<b>Cost of Water Meters</b>";
			cell22.innerHTML = "<b>Cost of Sign Board</b>";
			cell23.innerHTML = "<b>Cost of Component 3</b>";
			cell24.innerHTML = "<b>Total Cost (Comp1 + Comp2 + Comp3)</b>";
			cell25.innerHTML = "<b>Contingencies Charges @1%</b>";
			cell26.innerHTML = "<b>Cost of Component 4</b>";
			cell27.innerHTML = "<b>Grand Total</b>";
	
		
// Create an empty <tr> element and add it to the 1st position of the table:
			var row1 = table.insertRow(1);
			row1.setAttribute("class", "myrow");	
            var cell21 = row1.insertCell(0);
			var cell22 = row1.insertCell(1);
            var cell23 = row1.insertCell(2);
            var cell24 = row1.insertCell(3);
            var cell25 = row1.insertCell(4);
			var cell26 = row1.insertCell(5);
			var cell27 = row1.insertCell(6);
			var cell28 = row1.insertCell(7);
			var cell29 = row1.insertCell(8);
			var cell30 = row1.insertCell(9);
			var cell31 = row1.insertCell(10);
			var cell32 = row1.insertCell(11);
			var cell33 = row1.insertCell(12);
			var cell34 = row1.insertCell(13);
			var cell35 = row1.insertCell(14);
			
			
            cell21.innerHTML = "<b>Pump Chamber</b>";
			cell22.innerHTML = "<b>OHSR</b>";
			cell23.innerHTML = "<b>Water Works</b>";
			cell24.innerHTML = "<b>160mm</b>";
			cell25.innerHTML = "<b>110mm</b>";
			cell26.innerHTML = "<b>90mm</b>";
			cell27.innerHTML = "<b>75mm</b>";
			cell28.innerHTML = "<b>63mm</b>";
			cell29.innerHTML = "<b>150mm</b>";
			cell30.innerHTML = "<b>100mm</b>";
			cell31.innerHTML = "<b>80mm</b>";
			cell32.innerHTML = "<b>0.60 X 0.60 Mtr</b>";
			cell33.innerHTML = "<b>0.90 X 0.90 Mtr</b>";
			cell34.innerHTML = "<b>Brick on edge</b>";
			cell35.innerHTML = "<b>CC Flooring</b>";


            for (var i = 0; i < data.length; i++) {
                tr = table.insertRow(-1);
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = i+1 ;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].division;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].subdivision;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].scheme;
                tabCell = tr.insertCell(-1);
                tabCell.setAttribute("align",'center');
                tabCell.innerHTML = data[i].costmachine;
                tabCell = tr.insertCell(-1);
                tabCell.setAttribute("align",'center');
                tabCell.innerHTML = data[i].panelcost;
                tabCell = tr.insertCell(-1);
                tabCell.setAttribute("align",'center');
                tabCell.innerHTML = data[i].chambercost;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var mpro = data[i].commdate.concat(data[i].preprog);
                tabCell.innerHTML = data[i].ohsrcost; 
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
                tabCell.innerHTML = data[i].workscost;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var cplant = data[i].chlorinator*17000;
				tabCell.innerHTML = parseFloat(cplant).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
                tabCell.innerHTML = data[i].minorcost;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var cswitch = data[i].switch*7000.00;
                tabCell.innerHTML = parseFloat(cswitch).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				if(data[i].comt1>0){
					var cost_improve = parseInt(data[i].comt1)*200;
				}else {
					var cost_improve = 0;
				}
                tabCell.innerHTML = parseFloat(cost_improve).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var total_compt1 = parseFloat(data[i].panelcost) + parseFloat(data[i].costmachine) + parseFloat(data[i].chambercost) + parseFloat(data[i].ohsrcost) + parseFloat(data[i].workscost) + parseFloat(data[i].minorcost) + parseFloat(data[i].comt1)*200 + parseFloat(data[i].switch*7000) + parseFloat(data[i].chlorinator*17000);
                tabCell.innerHTML = parseFloat(total_compt1).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				if(data[i].comt2 >0){
                	var total_compt2 = parseFloat((data[i].comt2)*1200).toFixed(2);
                }else{
                	var total_compt2 =0;
                }
                tabCell.innerHTML = parseFloat(total_compt2).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var pipe160 = parseFloat(data[i].p160)*613;
                tabCell.innerHTML = parseFloat(pipe160).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var pipe110 = parseFloat(data[i].p110)*314;
                tabCell.innerHTML = parseFloat(pipe110).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var pipe90 = parseFloat(data[i].p90)*221;
                tabCell.innerHTML = parseFloat(pipe90).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
                var pipe75 = parseFloat(data[i].p75)*170;
                tabCell.innerHTML = parseFloat(pipe75).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
                var pipe63 = parseFloat(data[i].p63)*127;
                tabCell.innerHTML = parseFloat(pipe63).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var sv150 = parseFloat(data[i].s150)*8475;
                tabCell.innerHTML =  parseFloat(sv150).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
                var sv100 = parseFloat(data[i].s100)*5700;
                tabCell.innerHTML =  parseFloat(sv100).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
                var sv80 = parseFloat(data[i].s80)*4178.5;
                tabCell.innerHTML =  parseFloat(sv80).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var haudi60 = parseFloat(data[i].h60)*4480;
                tabCell.innerHTML =  parseFloat(haudi60).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
                var haudi90 = parseFloat(data[i].h90)*6229;
                tabCell.innerHTML =  parseFloat(haudi90).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var bedgecost = parseFloat(data[i].bedge)*25;
                tabCell.innerHTML = parseFloat(bedgecost).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var cfloorcost = parseFloat(data[i].cfloor)*314;
                tabCell.innerHTML =  parseFloat(cfloorcost).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var mroadcost = parseFloat(data[i].mroad)*90;
                tabCell.innerHTML = parseFloat(mroadcost).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
                tabCell.innerHTML = data[i].btcost;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var cost_new = parseInt(data[i].comt3)*1200;
                tabCell.innerHTML = parseFloat(cost_new).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var metercost = parseFloat(data[i].meter)*1800;
				tabCell.innerHTML = parseFloat(metercost).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = data[i].bcost;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var total_compt3 = parseFloat(pipe160) + parseFloat(pipe110) + parseFloat(pipe90) + parseFloat(pipe75) + parseFloat(pipe63) + parseFloat(sv150) + parseFloat(sv100) + parseFloat(sv80) + parseFloat(haudi60) + parseFloat(haudi90) + parseFloat(bedgecost) + parseFloat(cfloorcost) + parseFloat(mroadcost) + parseFloat(cost_new) + parseFloat(data[i].btcost) + parseFloat(metercost) + parseFloat(data[i].bcost); 
				tabCell.innerHTML = parseFloat(total_compt3).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var total = parseFloat(total_compt1) + parseFloat(total_compt2) + parseFloat(total_compt3);
				tabCell.innerHTML = parseFloat(Math.round(total)).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				var cess = Math.round(total*.01);
				tabCell.innerHTML = parseFloat(cess).toFixed(2);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				tabCell.innerHTML = data[i].comt4;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align",'center');
				tabCell.innerHTML = parseFloat(parseFloat(data[i].comt4) + Math.round(parseFloat(total)+parseFloat(cess))).toFixed(2);
				
				
				





            }
            var divContainer = document.getElementById("showData");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        }
    });
	function mstring(e){
		var temp = e;
		if(temp == 0){
		return "No"
		}else{
			return "Yes"
		}	
	}

	function mreplace(e){
		var temp = e;
		if(temp == 0){
			return "NA";
		}else if(temp == 1){
			return "Repair";
		}else
			return "Replace";
		}	

	
});


