function validation()
{
  var email=document.getElementById('email').value;
  var password=document.getElementById('password').value;
  if(email == "" || password =="")
  {
    alert('email needed');
    alert('password needed');
    return false;
  }
  
}