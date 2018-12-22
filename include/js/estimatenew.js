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
        var pre_coverundercboID = document.getElementById("pre_coverunder-cbo").value;
        var precommdatetxtID = document.getElementById("pre-comm-date-txt").value;
        var servicelevelcboID = document.getElementById("service_level_cbo").value;
        var swapcbocboID = document.getElementById("swap-cbo").value;
        var qualitytypecboID = document.getElementById("qualitytype-cbo").value;
        var componentcboID = document.getElementById("component-cbo").value;
        var schemetypecboID = document.getElementById("schemetype-cbo").value;
        var resolutioncboID = document.getElementById("resolution-cbo").value;
        var gpwscformedcboID = document.getElementById("gpwsc-formed-cbo").value;
        var sufficientcboID = document.getElementById("sufficient-cbo").value;
        var runhourscboID = document.getElementById("runhours-cbo").value;
        var machinerycboID = document.getElementById("machinery-cbo").value;
        var dischargetxtID = document.getElementById("discharge-txt").value;
        var headtxtID = document.getElementById("head-txt").value;
        var hpowertxtID = document.getElementById("hpower-txt").value;
        var machcosttxtID = document.getElementById("machcost-txt").value;
        var controlpanelcboID = document.getElementById("control-panel-cbo").value;
        var controlpaneltxtID = document.getElementById("control-panel-txt").value;
        var pumpchambercboID = document.getElementById("pump-chamber-cbo").value;
        var pchambertxtID = document.getElementById("pchamber-txt").value;
        var ohsrcboID = document.getElementById("ohsr-cbo").value;
        var ohsrtxtID = document.getElementById("ohsr-txt").value;
        var othercomponentscboID = document.getElementById("other-components-cbo").value;
        var othercomponentstxtID = document.getElementById("other-components-txt").value;
        var chlorplantcboID = document.getElementById("chlorplant-cbo").value;
        var autoswitchcboID = document.getElementById("autoswitch-cbo").value;
        var zonecboID = document.getElementById("zone-cbo").value;
        var minorrepaircboID = document.getElementById("minor-repair-cbo").value;
        var minorrepairtxtID = document.getElementById("minor-repair-txt").value;
        var p160pipetxtID = document.getElementById("160pipe-txt").value;
        var p110pipetxtID = document.getElementById("110pipe-txt").value;
        var p90pipetxtID = document.getElementById("90pipe-txt").value;
        var p75pipetxtID = document.getElementById("75pipe-txt").value;
        var p63pipetxtID = document.getElementById("63pipe-txt").value;
        var s150svtxtID = document.getElementById("150sv-txt").value;
        var s100svtxtID = document.getElementById("100sv-txt").value;
        var s80svtxtID = document.getElementById("80sv-txt").value;
        var h60hauditxtID = document.getElementById("60haudi-txt").value;
        var h90hauditxtID = document.getElementById("90haudi-txt").value;
        var brcikedgetxtID = document.getElementById("brcikedge-txt").value;
        var ccfloortxtID = document.getElementById("ccfloor-txt").value;
        var metalroadtxtID = document.getElementById("metalroad-txt").value;
        var btbilltxtID = document.getElementById("btbill-txt").value;
        var metertxtID = document.getElementById("meter-txt").value;
        var paintcboID = document.getElementById("paint-cbo").value;
        var boardcosttxtID = document.getElementById("boardcost-txt").value;
        var electricbilltxtID = document.getElementById("electricbill-txt").value;
       
        console.log("Zone  : "+zoneID);
        console.log("Circle  : "+circlecboID);
        console.log("District  : "+districtID);
        console.log("Division  : "+divisioncboID);
        console.log("Sub Division  : "+subdivisioncboID);
        console.log("Block  : "+blockcboID);
        console.log("Scheme " + schemecboID);
        console.log("Pre Program  : "+pre_coverundercboID);
        console.log("Pre Comm Date  : "+precommdatetxtID);
        console.log("LPCD  : "+servicelevelcboID);
        console.log("SWAP Status  : "+swapcbocboID);
        console.log("Quality  : "+qualitytypecboID);
        console.log("New Component  : "+componentcboID);
        console.log("Scheme Type  : "+schemetypecboID);
        console.log("Resolution  : "+resolutioncboID);
        console.log("Committee  : "+gpwscformedcboID);
        console.log("Sufficient  : "+sufficientcboID);
        console.log("Hours  : "+runhourscboID);
        console.log("Machinery  : "+machinerycboID);
        console.log("Discharge  : "+dischargetxtID);
        console.log("Head  : "+headtxtID);
        console.log("Horse Power  : "+hpowertxtID);
        console.log("Machine Cost  : "+machcosttxtID);
        console.log("Control Panel  : "+controlpanelcboID);
        console.log("Control Panel Cost  : "+controlpaneltxtID);
        console.log("Pump Chamber  : "+pumpchambercboID);
        console.log("Pump Chamber Cost  : "+pchambertxtID);
        console.log("OHSR  : "+ohsrcboID);
        console.log("OHSR Cost  : "+ohsrtxtID);
        console.log("Other Component  : "+othercomponentscboID);
        console.log("Other Component Cost  : "+othercomponentstxtID);
        console.log("Chlorinator  : "+chlorplantcboID);
        console.log("Switch  : "+autoswitchcboID);
        console.log("Minor Repair  : "+minorrepaircboID);
        console.log("Minor Repair Cost  : "+minorrepairtxtID);
        console.log("160mm  : "+p160pipetxtID);
        console.log("110mm  : "+p110pipetxtID);
        console.log(" 90mm  : "+p90pipetxtID);
        console.log(" 75mm  : "+p75pipetxtID);
        console.log(" 63mm  : "+p63pipetxtID);
        console.log("150mm  : "+s150svtxtID);
        console.log("100mm  : "+s100svtxtID);
        console.log(" 80mm  : "+s80svtxtID);
        console.log(" 60 Haudi  : "+h60hauditxtID);
        console.log(" 90 Haudi : "+h90hauditxtID);
        console.log("Brick Edge  : "+brcikedgetxtID);
        console.log("CC Floor  : "+ccfloortxtID);
        console.log("Metal Road  : "+metalroadtxtID);
        console.log("BT Bill  : "+btbilltxtID);
        console.log("Meter  : "+metertxtID);
        console.log("Board  : "+paintcboID);
        console.log("Board Cost  : "+boardcosttxtID);
        console.log("Component IV  : "+electricbilltxtID);

        if(zonecboID != '' && circlecboID != '' && divisioncboID != '' && subdivisioncboID != '' && blockcboID != '' && schemecboID != '' && pre_coverundercboID != '' && precommdatetxtID != '' && servicelevelcboID != '' && swapcbocboID != '' && qualitytypecboID != '' && componentcboID != '' && schemetypecboID != '' && resolutioncboID != '' && gpwscformedcboID != '' && sufficientcboID != '' && runhourscboID != '' && machinerycboID != '' && dischargetxtID != '' && headtxtID != '' && hpowertxtID != '' && machcosttxtID != '' && controlpanelcboID != '' && controlpaneltxtID != '' && pumpchambercboID != '' && pchambertxtID != '' && ohsrcboID != '' && ohsrtxtID != '' && othercomponentscboID != '' && othercomponentstxtID != '' && chlorplantcboID != '' && autoswitchcboID != '' && minorrepaircboID != '' && minorrepairtxtID != '' && p160pipetxtID != '' && p110pipetxtID != '' && p90pipetxtID != '' && p75pipetxtID != '' && p63pipetxtID != '' && s150svtxtID != '' && s100svtxtID != '' && s80svtxtID != '' && h60hauditxtID != '' && h90hauditxtID != '' && brcikedgetxtID != '' && ccfloortxtID != '' && metalroadtxtID != '' && btbilltxtID != '' && metertxtID != '' && paintcboID != '' && boardcosttxtID != '' && electricbilltxtID != ''){
            console.log("I m in");
            $.ajax({
                type: 'POST',
                url: 'estimate_add.php',
                data: 'save_type=' + save_type +'&zonecboID=' + zoneID+ '&circlecboID=' + circlecboID+ '&districtID=' + districtID+ '&divisioncboID=' + divisioncboID+ '&subdivisioncboID=' + subdivisioncboID+ '&blockcboID=' + blockcboID+ '&schemecboID=' + schemecboID+ '&pre_coverundercboID=' + pre_coverundercboID+ '&precommdatetxtID=' + precommdatetxtID+ '&servicelevelcboID=' + servicelevelcboID+ '&swapcbocboID=' + swapcbocboID+ '&qualitytypecboID=' + qualitytypecboID+ '&componentcboID=' + componentcboID+ '&schemetypecboID=' + schemetypecboID+ '&resolutioncboID=' + resolutioncboID+ '&gpwscformedcboID=' + gpwscformedcboID+ '&sufficientcboID=' + sufficientcboID+ '&runhourscboID=' + runhourscboID+ '&machinerycboID=' + machinerycboID+ '&dischargetxtID=' + dischargetxtID+ '&headtxtID=' + headtxtID+ '&hpowertxtID=' + hpowertxtID+ '&machcosttxtID=' + machcosttxtID+ '&controlpanelcboID=' + controlpanelcboID+ '&controlpaneltxtID=' + controlpaneltxtID+ '&pumpchambercboID=' + pumpchambercboID+ '&pchambertxtID=' + pchambertxtID+ '&ohsrcboID=' + ohsrcboID+ '&ohsrtxtID=' + ohsrtxtID+ '&othercomponentscboID=' + othercomponentscboID+ '&othercomponentstxtID=' + othercomponentstxtID+ '&chlorplantcboID=' + chlorplantcboID+ '&autoswitchcboID=' + autoswitchcboID+ '&minorrepaircboID=' + minorrepaircboID+ '&minorrepairtxtID=' + minorrepairtxtID+ '&p160pipetxtID=' + p160pipetxtID+ '&p110pipetxtID=' + p110pipetxtID+ '&p90pipetxtID=' + p90pipetxtID+ '&p75pipetxtID=' + p75pipetxtID+ '&p63pipetxtID=' + p63pipetxtID+ '&s150svtxtID=' + s150svtxtID+ '&s100svtxtID=' + s100svtxtID+ '&s80svtxtID=' + s80svtxtID+ '&h60hauditxtID=' + h60hauditxtID+ '&h90hauditxtID=' + h90hauditxtID+ '&brcikedgetxtID=' + brcikedgetxtID+ '&ccfloortxtID=' + ccfloortxtID+ '&metalroadtxtID=' + metalroadtxtID+ '&btbilltxtID=' + btbilltxtID+ '&metertxtID=' + metertxtID+ '&paintcboID=' + paintcboID+ '&boardcosttxtID=' + boardcosttxtID+ '&electricbilltxtID=' + electricbilltxtID,
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


