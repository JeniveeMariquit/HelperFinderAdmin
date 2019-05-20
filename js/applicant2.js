firebase.database().ref().child("employers_applicant").on("child_added", snapshot => {
	var id = snapshot.child("ApplicantID").val();
	var date = snapshot.child("DateApplied").val();
	var job_id = snapshot.child("JobID").val();
	var job_owner = snapshot.child("JobOwnerID").val();
	var full_name = snapshot.child("NameofApplicant").val();
	var status = snapshot.child("Status").val();

	$("#emp_table").append(
		"<tr>"+
		"<td>"+id+"</td>"+
		"<td>"+date+"</td>"+
		"<td>"+job_id+"</td>"+
		"<td>"+job_owner+"</td>"+
		"<td>"+full_name+"</td>"+
		"<td>"+status+"</td>"+
		"</tr>"
		)
});