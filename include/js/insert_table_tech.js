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
			
						
			
			
			cell1.setAttribute("rowspan", 2);
			cell2.setAttribute("rowspan", 2);
			cell3.setAttribute("rowspan", 2);
			cell4.setAttribute("rowspan", 2);
			cell5.setAttribute("rowspan", 2);
			cell6.setAttribute("rowspan", 2);
			cell7.setAttribute("rowspan", 2);
			cell8.setAttribute("rowspan", 2);
			cell9.setAttribute("rowspan", 2);
			cell10.setAttribute("colspan", 4);
			cell11.setAttribute("rowspan", 2);
			cell12.setAttribute("colspan", 3);
			cell13.setAttribute("rowspan", 2);
			cell14.setAttribute("rowspan", 2);
			cell15.setAttribute("rowspan", 2);
			cell16.setAttribute("rowspan", 2);
			cell17.setAttribute("rowspan", 2);
			cell18.setAttribute("colspan", 5);
			cell19.setAttribute("colspan", 3);
			cell20.setAttribute("colspan", 2);
			cell21.setAttribute("colspan", 2);
			cell22.setAttribute("rowspan", 2);
			cell23.setAttribute("rowspan", 2);
			cell24.setAttribute("rowspan", 2);	
			cell25.setAttribute("rowspan", 2);	
			// cell4.setAttribute("align", 'center');
			// cell5.setAttribute("align", 'center');
			// cell6.setAttribute("align", 'center');
			// cell7.setAttribute("align", 'center');
			// cell8.setAttribute("align", 'center');
			
			
			
			
			cell1.innerHTML = "<b>Sr.</b>";
            cell2.innerHTML = "<b>Division</b>";
            cell3.innerHTML = "<b>Sub Division</b>";
            cell4.innerHTML = "<b>Scheme</b>";
            cell5.innerHTML = "<b>Sch. Sufficient to deliver 10 hours supply at 70 lpcd</b>";
            cell6.innerHTML = "<b>Discharge of Machinery (in lph)</b>";
            cell7.innerHTML = "<b>Proposed Running Hours</b>";
            cell8.innerHTML = "<b>Quantity of Water Available in ltr</b>";
			cell9.innerHTML = "<b>Required Quantity (2033 Pop. * 70*1.15</b>";
			cell10.innerHTML = "<b>Repair / Replacement of existing machinery</b>";
			cell11.innerHTML = "<b>Repair/ Replacement of Control Panel</b>";
			cell12.innerHTML = "<b>Repair of existing structures</b>";
			cell13.innerHTML = "<b>Chlorination Plant required</b>";
			cell14.innerHTML = "<b>Repair and minor Replacement of existing pipe line</b>";
			cell15.innerHTML = "<b>Automated Water Controller</b>";
			cell16.innerHTML = "<b>Improvement in Existing Connections in No.</b>";
			cell17.innerHTML = "<b>New Connection on Existing line </b>";
			cell18.innerHTML = "<b>Pipe Line (In mtrs.)</b>";
			cell19.innerHTML = "<b>Sluice Valve</b>";
			cell20.innerHTML = "<b>Haudi</b>";
			cell21.innerHTML = "<b>Dismantling and restoration of Road cut (In mtr.)</b>";
			cell22.innerHTML = "<b>Dismantling of Metalled Road</b>";
			cell23.innerHTML = "<b>Additional New Water Connections on New pipe line</b>";
			cell24.innerHTML = "<b>No. of Water Meter Required</b>";
			cell25.innerHTML = "<b>Painting / Installation of Sign Board</b>";
			
	
		
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
			var cell36 = row1.insertCell(15);
			var cell37 = row1.insertCell(16);
			var cell38 = row1.insertCell(17);
			var cell39 = row1.insertCell(18);
			
			
			
			
			
			
			
            cell21.innerHTML = "<b>Required</b>";
			cell22.innerHTML = "<b>Head</b>";
			cell23.innerHTML = "<b>Discharge</b>";
			cell24.innerHTML = "<b>BHP</b>";
			cell25.innerHTML = "<b>Pump Chamber</b>";
			cell26.innerHTML = "<b>OHSR</b>";
			cell27.innerHTML = "<b>Water Works</b>";
			cell28.innerHTML = "<b>160mm</b>";
			cell29.innerHTML = "<b>110mm</b>";
			cell30.innerHTML = "<b>90mm</b>";
			cell31.innerHTML = "<b>75mm</b>";
			cell32.innerHTML = "<b>63mm</b>";
			cell33.innerHTML = "<b>150mm</b>";
			cell34.innerHTML = "<b>100mm</b>";
			cell35.innerHTML = "<b>80mm</b>";
			cell36.innerHTML = "<b>0.60 X 0.60 Mtr</b>";
			cell37.innerHTML = "<b>0.90 X 0.90 Mtr</b>";
			cell38.innerHTML = "<b>Brick on edge</b>";
			cell39.innerHTML = "<b>CC Flooring</b>";


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
                tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].sufficient;
                tabCell = tr.insertCell(-1);
                tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = i;
                tabCell = tr.insertCell(-1);
                tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].run_hour;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				var mpro = data[i].commdate.concat(data[i].preprog);
                tabCell.innerHTML = i; 
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = i;
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = mreplace(data[i].machinery);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].mhead;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].discharge;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].hpower;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mreplace(data[i].cpanel);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mstring(data[i].pchamber);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mstring(data[i].rep_ohsr);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mstring(data[i].ocomponent);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mstring(data[i].chlorinator);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mreplace(data[i].mrepair);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mstring(data[i].switch);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML =  data[i].comt1;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].comt2;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].p160;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].p110;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].p90;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].p75;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML =  data[i].p63;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].s150;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].s100;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].s80;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].h60;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].h90;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].bedge;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].cfloor;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].mroad;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].comt3;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].meter;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].board;
				
				





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


