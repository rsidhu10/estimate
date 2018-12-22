window.load=$(document).ready(function(){

	    $('#scheme-cbo').on('change',function(){//change state to display all city
        var schemeID = $(this).val();
        console.log(schemeID);
        if(schemeID != ''){
          $.ajax({
            url:"fetch_dist.php",
            method:"POST",
            data:{schemeid:schemeID},
            dataType:"JSON",
            success:function(data){
                document.getElementById("district-txt").value = data.districtid;
             //   console.log(data.districtid);
             //   console.log(data.subdivisionid);
                
                console.log(data.districtid);
            }
          })
        }
    });


});	