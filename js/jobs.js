firebase.database().ref().child("jobs").on("child_added", snapshot => {


		
			var id = snapshot.child("JobID").val();
		var location = snapshot.child("Location").val();
		var desc = snapshot.child("JobDescription").val();
		var looking = snapshot.child("LookingFor").val();
		var qual = snapshot.child("Qualification").val();
		var rate = snapshot.child("RatePerDay").val();
		var date = snapshot.child("DatePosted").val();


		$("#emp_table").append(
			"<tr>"+
			"<td>"+id+"</td>"+
			"<td>"+location+"</td>"+
			"<td>"+desc+"</td>"+
			"<td>"+looking+"</td>"+
			"<td>"+qual+"</td>"+
			"<td>"+rate+"</td>"+
			"<td>"+date+"</td>"+
			"</tr>"
			)
		
		
});