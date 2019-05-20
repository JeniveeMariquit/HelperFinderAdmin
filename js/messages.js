firebase.database().ref().child("messages").on("child_added", snapshot => {


		snapshot.forEach(function(snap){
			var content = snap.child("Content").val();
		var sentid = snap.child("SentByID").val();
		var sentname = snap.child("SentByName").val();
		var date_sent = snap.child("DateSent").val();
		var number = snap.child("MessageNumber").val();


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