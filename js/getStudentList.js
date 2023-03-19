function getStuList(){
    var classId = document.getElementById("classId").value;
    $.ajax({
        url:"stuDataInTableRows.php",
        method:"POST",
        data:{
            id : classId
        },
        success:function(data){
            $("#stuDataRows").html(data);
        }
    })
}