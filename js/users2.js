firebase.database().ref().child("users").on("child_added", snapshot => {


		
		var content = snapshot.child("Usertype").val();
		var sentid = snapshot.child("Email").val();
		var sentname = snapshot.child("Firstname").val()+" "+snapshot.child("Lastname").val();
		var number = snapshot.child("ContactNumber").val();


		$("#emp_table").append(
			"<tr>"+
			"<td>"+content+"</td>"+
			"<td>"+sentid+"</td>"+
			"<td>"+sentname+"</td>"+
			"<td>"+number+"</td>"+
			"</tr>"
			)
		
		
});