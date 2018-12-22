$(document).ready(function(){
    var schemeID ="*";
    $.ajax({
        url:"report_app.php",
        method:"POST",
        data:{id:schemeID},
        dataType:"JSON",
        success:function(data){
            //$("#re").css("visibility","hidden");
           // document.getElementById("loader").style.visibility = "visible";
            var table = document.createElement("table");
            table.setAttribute('class', 'table table-bordered');
            table.setAttribute('width', '80%');
            var header = table.createTHead();
            var row = header.insertRow(0);     
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            var cell8 = row.insertCell(7);
            cell1.innerHTML = "<b>Sr.</b>";
            cell2.innerHTML = "<b>Circle</b>";
            cell3.innerHTML = "<b>Division</b>";
            cell4.innerHTML = "<b>Scheme</b>";
            cell5.innerHTML = "<b>Component</b>";
            cell6.innerHTML = "<b>A.A No</b>";
            cell7.innerHTML = "<b>A.A Date</b>";
            cell8.innerHTML = "<b>A.A Amt.</b>";
            

            for (var i = 0; i < data.length; i++) {
                var  odate = data[i].aa_date; 
                var mydate = formatDate(odate);
                tr = table.insertRow(-1);
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = i+1;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].circle;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].division;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].scheme_name;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].component;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].aa_no;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = mydate;
                tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data[i].aa_amt;
            }
            var divContainer = document.getElementById("showData");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
            $("#re").css("visibility","visible");
        }
    });

    function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

     //   return [year, month, day].join('-');
      return [day, month, year].join('-');
    }


});


