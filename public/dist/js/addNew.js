$(document).ready(function() {
    $("#issue").change(function () {
        var ID_Issue = $("#issue").val();
		$.post("DailyReport/ajaxChooseType", {id: ID_Issue}, function(data){
			$("#Type").html(data);
			
		})
    })

    $("#finishID").change(function () {
        var start= $("#startID").val();
        var finish = $(this).val();
        $.post("DailyReport/CalcuTime",{time: "CalTotal", timeS1: start, timeS2: finish},function (data) {

            if(data=="failed")
            {   
                $("#noticeTotal").html("<p style='color: red;'>TotalTime can not be nagative number!</p>")
            }
            else
            {   
                $("#noticeTotal").html("");
                $("#total12").html('<input type="text" class="form-control" id="total" name="total" value="'+data+'" disabled="">');

            }
        })
    })
    $("#formAdd").on('submit',function(e) {
        e.preventDefault();
 
        $form = $(this);
        
        submitAddReport($form);
    });
    function submitAddReport($form) {
        var type = $("#Type").val();
        var issue = $("#issue").val();
        var valMC = $("#valMC").val();
        var level = $("#level").val();
        var status = $("#status").val();
        var shift = $("#shift").val();
        var startID = $("#startID").val();
        var finishID = $("#finishID").val();
        var total = $("#total").val();
        var note = $("#note").val();
        var reason = $("#reason").val();
        var solution = $("#solution").val();
        var temp;
        if(type == 'MC')
        {
            temp = valMC;
        }
        else
        {
            temp = type
        }

        $.ajax({
            url: $form.attr('action'),
            method: $form.attr('method'),
            data:{
                newReport: "addReport",
                issue: issue,
                level: level,
                mc: temp,
                status: status,
                shift: shift,
                total: total,
                start: startID,
                finish: finishID,
                note: note,
                reason: reason,
                solution: solution, 
            },
            success: function (response) {
                
                if(response=="success")
                {
                    $('#notice').html('<p style="color: green; text-align:center;font-weight: bold;font-size: 20px;">Add successed!</p>');
                    
                }
                else if(response=="failed")
                {
                    $('#notice').html('<p style="color: red; text-align:center;font-weight: bold;font-size: 20px;">Add failed!</p>');                }
            },
            error: function (req) {
                alert('error')
            }
        })
   }

//    form edit
   $("#formEdit").on('submit',function(e) {
    e.preventDefault();

    $form = $(this);
    
    submitEditReport($form);
});
function submitEditReport($form) {
    var type = $("#Type").val();
    var issue = $("#issue").val();
    var valMC = $("#valMC").val();
    var level = $("#level").val();
    var status = $("#status").val();
    var shift = $("#shift").val();
    var startID = $("#startID").val();
    var finishID = $("#finishID").val();
    var total = $("#total").val();
    var note = $("#note").val();
    var reason = $("#reason").val();
    var solution = $("#solution").val();
    var temp;
    if(type == 'MC')
    {
        temp = valMC;
    }
    else
    {
        temp = type
    }

    $.ajax({
        url: $form.attr('action'),
        method: $form.attr('method'),
        data:{
            editReport: "editReport",
            issue: issue,
            level: level,
            mc: temp,
            status: status,
            shift: shift,
            total: total,
            start: startID,
            finish: finishID,
            note: note,
            reason: reason,
            solution: solution, 
        },
        success: function (response) {
            
            if(response=="success")
            {
                $('#notice').html('<p style="color: green; text-align:center; font-weight: bold;font-size: 20px;">Edit successed!</p>');

            }
            else if(response=="failed")
            {
                $('#notice').html('<p style="color: red; text-align:center;font-weight: bold;font-size: 20px;">Edit failed!</p>');
            }
        },
        error: function (req) {
            alert('error')
        }
    })
}

})