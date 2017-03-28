function validation()
 {
	var title =document.getElementById('title').value;
	var content =document.getElementById('content').value;
	if(title == "" || content == "")
	{
		alert('title is mandatory');
		alert('content is mandatory');
		return false;
	}
}