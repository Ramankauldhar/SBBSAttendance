function getAttendance(){
    var classId = document.getElementById("classId").value;
    var subjId = document.getElementById("subjId").value;
    var aDateId = document.getElementById("date").value;
    $.ajax({
        url:"attendanceInTableRows.php",
        method:"POST",
        data:{
            id : classId,
            subj : subjId,
            adate : aDateId
        },
        success:function(data){
            $("#stuDataRows2").html(data);
        }
    })
}