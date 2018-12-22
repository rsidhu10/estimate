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
            var header = table.createTHead();
            var row = header.insertRow(0);     
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            cell1.innerHTML = "<b>Circle</b>";
            cell2.innerHTML = "<b>Division</b>";
            cell3.innerHTML = "<b>Scheme</b>";
            cell4.innerHTML = "<b>Component</b>";
            cell5.innerHTML = "<b>A.A No</b>";
            cell6.innerHTML = "<b>A.A Date</b>";
            cell7.innerHTML = "<b>A.A Amt.</b>";
            

            for (var i = 0; i < data.length; i++) {
                tr = table.insertRow(-1);
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].district;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].division;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].subdivision;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].block;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].district;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].division;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].subdivision;
            }
            var divContainer = document.getElementById("showData");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
            $("#re").css("visibility","visible");
        }
    });
});


