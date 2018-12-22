$(document).ready(function(){
    $('#save-btn').click(function(){
        $('#save-btn').attr('disabled', 'disabled');
        var zoneID       = document.getElementById("zone-cbo").value;
        var circleID     = document.getElementById("circle-cbo").value;
        var districtID   = document.getElementById("district-cbo").value;
        var divisionID   = document.getElementById("division-txt").value;
        var subdivisionID= document.getElementById("subdivision-txt").value;
        var blockID      = document.getElementById("block-cbo").value;
        var schemeID     = document.getElementById("scheme-cbo").value;
        var approvetype  = document.getElementById("approvaltype-cbo").value;
        var approvedBy   = document.getElementById("approvedby-cbo").value;
        var adminApproval= document.getElementById("admin-approval-no-txt").value;
        var adminApprovaldt  = document.getElementById("admin-approval-dt-txt").value;
        var component    = document.getElementById("component-cbo").value;
        var approvedAmt  = document.getElementById("admin-approval-amt-txt").value;
        var wbShare      = document.getElementById("wb-share-txt").value;
        var stateShare   = document.getElementById("state-share-txt").value;
        var nrdwpShare   = document.getElementById("nrdwp-share-txt").value;
        console.log(zoneID);
        console.log(circleID);
        console.log(districtID);
        console.log(districtID);
        console.log(subdivisionID);
        console.log(blockID);
        console.log(schemeID);
        console.log(nrdwpShare);
        console.log(stateShare);
        console.log(wbShare);
        console.log(adminApproval);
        console.log(adminApprovaldt);
        console.log(component);
        console.log(approvedBy);
        var test = parseFloat(wbShare) + parseFloat(stateShare) + parseFloat(nrdwpShare);
        console.log(test);

        if(schemeID !='' && component != '' && approvetype != '' && adminApproval != '' && adminApprovaldt !='' && approvedAmt !=0){
            console.log("i am here");
            if(approvedAmt != parseFloat(test).toFixed(2)){
                console.log("i am in");
                console.log(approvedAmt);
                console.log(test);
                $("#message").removeClass('alert-success');
                $("#message").addClass('alert-danger');
                $('#message').css("visibility", "visible");
                $('#result').html('Amount does not match');
                $("#save-btn").removeClass('btn-primary');
                $("#save-btn").addClass('btn-danger');
                $("#save-btn").text('Failed!');
            
                document.getElementById("wb-share-txt").value = '0.000';
                var timeoutID = window.setTimeout(function () {
                    $('#message').css("visibility", "hidden");
                    $("#message").removeClass('alert-danger');
                    $("#message").addClass('alert-success');
                    $("#save-btn").removeClass('btn-danger');
                    $("#save-btn").addClass('btn-primary');
                    $("#save-btn").text('Add New');
                }, 2000);
            }else{       
                $.ajax({
                    type:'POST',
                    url:'approval.php',
                    data: 'zoneID='+zoneID+'&circleID='+circleID+'&districtID='+districtID+'&divisionID='+divisionID+'&subdivisionID='+subdivisionID+'&blockID='+blockID+'&schemeID='+schemeID+'&approvetype='+approvetype+'&approvedBy='+approvedBy+'&adminApproval='+adminApproval+'&adminApprovaldt='+adminApprovaldt+'&component='+component+'&approvedAmt='+approvedAmt+'&wbShare='+wbShare+'&stateShare='+stateShare+'&nrdwpShare='+nrdwpShare,
                    success:function(data){
                        $('#message').css("visibility", "visible");
                        $('#result').html(data);
                        $("#save-btn").removeClass('btn-primary');
                        $("#save-btn").addClass('btn-success');
                        $("#save-btn").text('Saved!');
                        var timeoutID = window.setTimeout(function () {
                            $('#message').css("visibility", "hidden");
                            $("#save-btn").removeClass('btn-success');
                            $("#save-btn").addClass('btn-primary');
                            $("#save-btn").text('Add New');
                            document.location.reload();
                        }, 1000);
                    }    
                });
            }    
        }else{
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
    
    // Rest Button
    $('#reset-btn').click(function(){
        document.location.reload();
    });

    // Update Button
    $('#update-btn').click(function(){
        var approvetype     = document.getElementById("approvaltype-cbo").value;
        var approvedBy      = document.getElementById("approvedby-cbo").value;
        var component       = document.getElementById("component-cbo").value;
        var adminApproval   = document.getElementById("admin-approval-no-txt").value;
        var adminApprovaldt = document.getElementById("admin-approval-dt-txt").value;
        var approvedAmt  = document.getElementById("admin-approval-amt-txt").value;
        console.log(approvetype);
        console.log(approvedBy);
        console.log(component);
        console.log(adminApproval);
        console.log(adminApprovaldt);
        console.log(approvedAmt);
        if(component != '' && approvetype != '' && adminApproval != '' && adminApprovaldt !='' && approvedAmt !=0){
            console.log("Values are Not Null");
            console.log(component);  
            console.log(approvetype);
            console.log(adminApproval);
            console.log(adminApprovaldt);
            console.log(approvedAmt);
        }else
        {
            console.log('One value is Null');
            console.log(component);
            console.log(approvetype);
            console.log(adminApproval);
            console.log(adminApprovaldt);
            console.log(approvedAmt);
        }});



/*

    var id= $('#employee_list').val();
    if(id != ''){
      $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{id:id},
        dataType:"JSON",
        success:function(data){
          $('#employee_details').css("display", "block");
          $('#employee_name').text(data.divisionid);
          $('#employee_address').text(data.subdivisionid);
          $('#employee_gender').text(data.subdivisionid);
          $('#employee_designation').text(data.subdivisionid);
          $temp = data.subdivisionid;
          document.getElementById("employee_age").value = data.subdivisionid;
          alert("hi");
        }
      })
    }else{
      alert("Please Select Employee");
      $('#employee_details').css("display", "none");
    }
  });
});
*/