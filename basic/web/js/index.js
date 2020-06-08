// icon.onclick = function () {
//   var nav = document.getElementById("onenav").style.width = 300 + 'px';
//   var span = document.getElementById("icon").style.display = 'none';
//   var span = document.getElementById("icon2").style.display = 'block';
// };
// icon2.onclick = function () {
//   var nav = document.getElementById("onenav").style.width = 100 + 'px';
//   var span = document.getElementById("icon").style.display = 'block';
//   var span = document.getElementById("icon2").style.display = 'none';
// };
function ShowPassword(event) {
	if (event.target.checked) {document.getElementById('loginform-password').type = 'text'} else {document.getElementById('loginform-password').type = 'password'}
};