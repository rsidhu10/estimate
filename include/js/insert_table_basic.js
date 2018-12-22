$(document).ready(function(){
    
	
	var schemeID ="*";
    $.ajax({
        url:"basic_rpt.php",
        method:"POST",
        data:{id:schemeID},
        dataType:"JSON",
        success:function(data){
        	console.log(data);
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
						
			
			
			cell1.setAttribute("rowspan", 2);
			cell2.setAttribute("rowspan", 2);
			cell3.setAttribute("rowspan", 2);
			cell4.setAttribute("rowspan", 2);
			cell5.setAttribute("rowspan", 2);
			cell6.setAttribute("rowspan", 2);
			cell7.setAttribute("rowspan", 2);
			cell8.setAttribute("rowspan", 2);
			cell9.setAttribute("colspan", 3);
			cell9.setAttribute("align", 'center');
			cell10.setAttribute("rowspan", 2);
			cell11.setAttribute("rowspan", 2);
			cell12.setAttribute("rowspan", 2);
			cell13.setAttribute("rowspan", 2);
			cell14.setAttribute("rowspan", 2);
			cell15.setAttribute("colspan", 3);
			cell16.setAttribute("rowspan", 2);
			cell17.setAttribute("rowspan", 2);
			cell18.setAttribute("rowspan", 2);
			cell19.setAttribute("rowspan", 2);
			cell20.setAttribute("rowspan", 2);
			cell21.setAttribute("rowspan", 2);
			cell7.setAttribute("align", 'center');
			cell8.setAttribute("align", 'center');
			cell10.setAttribute("align", 'center');
			cell11.setAttribute("align", 'center'); 
			cell12.setAttribute("align", 'center'); 
			cell13.setAttribute("align", 'center'); 
			cell14.setAttribute("align", 'center');
			cell15.setAttribute("align", 'center'); 
			cell16.setAttribute("align", 'center'); 
			cell17.setAttribute("align", 'center');
			cell18.setAttribute("align", 'center'); 
			cell19.setAttribute("align", 'center'); 
			cell20.setAttribute("align", 'center');   			
			cell21.setAttribute("align", 'center'); 
			cell1.innerHTML = "<b>Sr.</b>";
            cell2.innerHTML = "<b>District</b>";
            cell3.innerHTML = "<b>Division</b>";
            cell4.innerHTML = "<b>Sub Division</b>";
            cell5.innerHTML = "<b>Block</b>";
            cell6.innerHTML = "<b>Scheme</b>";
            cell7.innerHTML = "<b>Villages Covered Under</b>";
            cell8.innerHTML = "<b>Pre. Comm. Dt. with Prog.</b>";
			cell9.innerHTML = "<b>Population 2011</b>";
			cell10.innerHTML = "<b>Population 2018</b>";
			cell11.innerHTML = "<b>Population 2033</b>";
			cell12.innerHTML = "<b>Population 2048</b>";
			cell13.innerHTML = "<b>Per Capita Cost at Present Pop.</b>";
			cell14.innerHTML = "<b>Per Capita Cost at 15 year Prospective</b>";
			cell15.innerHTML = "<b>Present House Holds</b>";
			cell16.innerHTML = "<b>Existing No. of Conn.</b>";
			cell17.innerHTML = "<b>Previously Scheme Executed under SWAp</b>";
			cell18.innerHTML = "<b>Quality Affected</b>";
			cell19.innerHTML = "<b>Previous LPCD</b>";
			cell20.innerHTML = "<b>Resolution Received</b>";
			cell21.innerHTML = "<b>Committee Formed</b>";
			
	
		
// Create an empty <tr> element and add it to the 1st position of the table:
			var row1 = table.insertRow(1);
			row1.setAttribute("class", "myrow");	
            var cell21 = row1.insertCell(0);
			var cell22 = row1.insertCell(1);
            var cell23 = row1.insertCell(2);
            var cell24 = row1.insertCell(3);
            var cell25 = row1.insertCell(4);
			var cell26 = row1.insertCell(5);

			
			
			
			
			
            cell21.innerHTML = "<b>SC</b>";
			cell22.innerHTML = "<b>GEN</b>";
			cell23.innerHTML = "<b>Total</b>";
			cell24.innerHTML = "<b>SC</b>";
			cell25.innerHTML = "<b>GEN</b>";
			cell26.innerHTML = "<b>Total</b>";
			


            for (var i = 0; i < data.length; i++) {
                tr = table.insertRow(-1);
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = i+1 ;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].district;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].division;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].subdivision;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].block;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].scheme;
                tabCell = tr.insertCell(-1);
                tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].numvillage;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				console.log(data[i].commdate);
				var temp = [data[i].commdate + ' '+  data[i].preprog];
				//var mpro = newdate.concat(data[i].preprog);
                tabCell.innerHTML = temp; 
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].scpopulation;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				tabCell.innerHTML = data[i].gpopulation;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				var totalpop = parseInt(data[i].scpopulation) + parseInt(data[i].gpopulation);
                tabCell.innerHTML = totalpop;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                var pop18 =Math.round(parseInt(totalpop)*1.05586);
                tabCell.innerHTML = pop18;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				var pop33 =Math.round(parseInt(totalpop)*1.12);
                tabCell.innerHTML = pop33;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				var pop48=Math.round(parseInt(totalpop)*1.24);
                tabCell.innerHTML = pop48;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = i;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = i;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].schholds;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].ghholds;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
				var totalhh = parseInt(data[i].schholds) + parseInt(data[i].ghholds);
                tabCell.innerHTML = totalhh;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].pconn;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mquality(data[i].swap);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mquality(data[i].quality);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = data[i].prelpcd;
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');
                tabCell.innerHTML = mstring(data[i].resolution);
				tabCell = tr.insertCell(-1);
				tabCell.setAttribute("align", 'center');

                tabCell.innerHTML = mstring(data[i].committee);
				


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
	
		function mquality(e){
		var temp = e;
		if(temp == 0){
		return "Yes"
		}else{
			return "No"
		}	
	}
});


