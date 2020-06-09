var time_var = document.getElementById("time");

var update = function update_clock() {

  var time = new Date();
  var hour = time.getHours();
  var minute = time.getMinutes();
  var second = time.getSeconds();

  if (second % 2 == 0)
  {
    time_var.style.color = "blue";
  }
  else {
    time_var.style.color = "red";
  }
  time_var.innerText = hour+":"+minute+":"+second;

}
setInterval(update,1000);

document.getElementById("html").onunload = window.alert("no");
