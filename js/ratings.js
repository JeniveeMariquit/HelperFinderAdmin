firebase.database().ref().child("user_rating").on("child_added", snapshot => {


        
            var content = snapshot.child("NumberOfRating").val();
        var sentid = snapshot.child("Rating").val();
        var sentname = snapshot.child("TotalRating").val();


        $("#emp_table").append(
            "<tr>"+
            "<td>"+content+"</td>"+
            "<td>"+sentid+"</td>"+
            "<td>"+sentname+"</td>"+
            "</tr>"
            )
        
        
});