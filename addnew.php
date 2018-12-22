$(document).ready(function(){
    $('#save').click(function(){
    var zoneID       = document.getElementById("zone-cbo").value;
    var circleID     = document.getElementById("circle-cbo").value;
    var districtID   = document.getElementById("district-cbo").value;
    var divisionID   = document.getElementById("division-txt").value;
    var subdivisionID= document.getElementById("subdivision-txt").value;
    var blockID      = document.getElementById("block-cbo").value;
    var schemeID     = document.getElementById("scheme-cbo").value;
    var nrdwpShare   = document.getElementById("nrdwp-share-txt").value;
    var stateShare   = document.getElementById("state-share-txt").value;
    var wbShare      = document.getElementById("wb-share-txt").value;
    var adminApproval= document.getElementById("admin-approval-no").value;
    var adminApprovaldt  = document.getElementById("admin-approval-dt").value;
    var component    = document.getElementById("component-cbo").value;
    var approvedBy   = document.getElementById("approvedby-cbo").value;

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
