
const auth =() => {
  let username= document.getElementById('username').value;
  let password= document.getElementById('password').value;
 
  if(username=='muneer' && password == 'muneer') {
    window.location.assign('Home.php');
    alert("Logged In");
  } else {
    alert("Username and Password does not match");
    return;
  }
}
