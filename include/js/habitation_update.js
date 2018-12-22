$(document).ready(function(){
    $('#update-btn').click(function(){
        
        var save_type       = "update"; 
        var zoneID          = document.getElementById("zone-cbo").value;
        var circlecboID     = document.getElementById("circle-cbo").value;
        var districtID      = document.getElementById("district-txt").value;
        var divisioncboID   = document.getElementById("division-cbo").value;
        var subdivisioncboID= document.getElementById("subdivision-cbo").value;
        var blockcboID      = document.getElementById("block-cbo").value;
        var schemecboID     = document.getElementById("scheme-cbo").value;
        var habitationID    = document.getElementById("habitation-cbo").value;
        var component1      = document.getElementById("com1_connections").value;
        var component2      = document.getElementById("com2_connections").value;
        var component3      = document.getElementById("com3_connections").value;
       
        
        console.log("Zone       : "+zoneID);
        console.log("Circle     : "+circlecboID);
        console.log("District   : "+districtID);
        console.log("Division   : "+divisioncboID);
        console.log("Sub Divn   : "+subdivisioncboID);
        console.log("Block      : "+blockcboID);
        console.log("Scheme     : "+schemecboID);
        console.log("Habitation : "+habitationID);
        console.log("Component1 : "+component1);
        console.log("Component2 : "+component2);
        console.log("Component3 : "+component3);
        console.log("Save Type  : "+save_type);

        if(zoneID != '' && circlecboID != '' && divisioncboID != '' && subdivisioncboID != '' && blockcboID != '' && schemecboID != '' && habitationID != '' && component1 != '' && component2 != '' && component3 != ''){ 
            console.log("I m in javascript");
            //console.log(save_type);
            $.ajax({
                type: 'POST',
                url: 'habitation_update.php',
                data: 'save_type=' + save_type +'&zonecboID=' + zoneID+ '&circlecboID=' + circlecboID+ '&districtID=' + districtID+ '&divisioncboID=' + divisioncboID+ '&subdivisioncboID=' + subdivisioncboID+ '&blockcboID=' + blockcboID+ '&schemecboID=' + schemecboID+ '&habitationID=' + habitationID+ '&component1=' + component1+ '&component2=' + component2+ '&component3=' + component3,
                success:function(result){
                    $('#message').css("visibility", "visible");
                    $('#result').html('Record Updated Successfully');
                    $("#update-btn").removeClass('btn-primary');
                    $("#update-btn").addClass('btn-success');
                    $("#update-btn").text('Updated!');
                    var timeoutID = window.setTimeout(function () {
                        $('#message').css("visibility", "hidden");
                        $("#update-btn").removeClass('btn-success');
                        $("#update-btn").addClass('btn-primary');
                        $("#update-btn").text('Update');
                        document.location.reload();
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
            $("#update-btn").removeClass('btn-primary');
            $("#update-btn").addClass('btn-danger');
            $("#update-btn").text('Failed!');
            var timeoutID = window.setTimeout(function () {
                    $('#message').css("visibility", "hidden");
                    $("#update-btn").removeClass('btn-danger');
                    $("#update-btn").addClass('btn-primary');
                    $("#update-btn").text('Update');
                    $("#update-btn").removeattr('disabled');
            }, 2000);    
        }
    });

});