$(document).ready(function(){
    $('#save-btn').click(function(){
        var save_type = "insert";
        var zoneID      = document.getElementById("zone-cbo").value;
        var circlecboID = document.getElementById("circle-cbo").value;
        var districtID = document.getElementById("district-txt").value;
        var divisioncboID = document.getElementById("division-cbo").value;
        var subdivisioncboID = document.getElementById("subdivision-cbo").value;
        var blockcboID = document.getElementById("block-cbo").value;
        var schemecboID = document.getElementById("scheme-cbo").value;
        var habitationID = document.getElementById("habitation-cbo").value;
        var component1 = document.getElementById("com1_connections").value;
        var component2 = document.getElementById("com2_connections").value;
        var component3 = document.getElementById("com3_connections").value;



               
        console.log("Zone  : "+zoneID);
        console.log("Circle  : "+circlecboID);
        console.log("District  : "+districtID);
        console.log("Division  : "+divisioncboID);
        console.log("Sub Division  : "+subdivisioncboID);
        console.log("Block  : "+blockcboID);
        console.log("Scheme " + schemecboID);
        console.log("Habitation  : "+habitationID);
        console.log("Component-1  : "+component1);
        console.log("Component-2  : "+component2);
        console.log("Component-3  : "+component3);

        if(zoneID != '' && circlecboID != '' && divisioncboID != '' && subdivisioncboID != '' && blockcboID != '' && schemecboID != '' && habitationID != '' && component1 != '' && component2 != '' && component3 != '' ){
            console.log("I m in");
            $.ajax({
                type: 'POST',
                url: 'habitation_add.php',
                data: 'save_type=' + save_type +'&zonecboID=' + zoneID+ '&circlecboID=' + circlecboID+ '&districtID=' + districtID+ '&divisioncboID=' + divisioncboID+ '&subdivisioncboID=' + subdivisioncboID+ '&blockcboID=' + blockcboID+ '&schemecboID=' + schemecboID+ '&habitationID=' + habitationID+ '&component1=' + component1+ '&component2=' + component2+ '&component3=' + component3,
                success:function(result){
                    $('#message').css("visibility", "visible");
                    $('#result').html(result);
                    $("#save-btn").removeClass('btn-primary');
                    $("#save-btn").addClass('btn-success');
                    $("#save-btn").text('Saved!');
                    var timeoutID = window.setTimeout(function () {
                        $('#message').css("visibility", "hidden");
                        $("#save-btn").removeClass('btn-success');
                        $("#save-btn").addClass('btn-primary');
                        $("#save-btn").text('Add New');
                       // document.location.reload();
                    }, 1000);
                }
            });
            //console.log(data)
        }else{
            console.log("Codition Failed...");
            $("#message").removeClass('alert-success');
            $("#message").addClass('alert-danger');       
            $('#message').css("visibility", "visible");
            $('#result').html("Fields are Empty - Record not Saved!! ");
            $("#save-btn").removeClass('btn-primary');
            $("#save-btn").addClass('btn-danger');
            $("#save-btn").text('Failed!');
            var timeoutID = window.setTimeout(function () {
                    $('#message').css("visibility", "hidden");
                    $("#save-btn").removeClass('btn-danger');
                    $("#save-btn").addClass('btn-primary');
                    $("#save-btn").text('Add New');
                    $("#save-btn").removeAttr('disabled');
            }, 2000);    
        }
    });
// update Function starts from here



});


