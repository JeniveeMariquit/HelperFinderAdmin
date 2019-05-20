firebase.database().ref().child("users").on("child_added", snapshot => {


		snapshot.forEach(function(snap){
			var content = snap.child("Usertype").val();
		var sentid = snap.child("Email").val();
		var sentname = snap.child("Firstname").val()+" "+snap.child("Lastname");
		var date_sent = snap.child("Password").val();
		var number = snap.child("ContactNumber").val();


		$("#emp_table").append(
			"<tr>"+
			"<td>"+content+"</td>"+
			"<td>"+sentid+"</td>"+
			"<td>"+sentname+"</td>"+
			"<td>"+date_sent+"</td>"+
			"<td>"+number+"</td>"+
			"</tr>"
			)
		});
		
});