function addItem(){
  var ul = document.getElementById("dynamic-list");
  var quan = document.getElementById("quantity");
    var des = document.getElementById("description");
      var exp = document.getElementById("expires");
  var li = document.createElement("li");
  li.setAttribute('id',quan.value,des.value,exp.value);
  li.appendChild(document.createTextNode(quan.value + des.value + exp.value ));
  ul.appendChild(li);
}

function removeItem(){
  var ul = document.getElementById("dynamic-list");
  var quan = document.getElementById("quantity");
  var des = document.getElementById("description");
  var exp = document.getElementById("expires");
  
  var item = document.getElementById(quan.value);
  ul.removeChild(item);
    var item = document.getElementById(des.value);
  ul.removeChild(item);
    var item = document.getElementById(exp.value);
  ul.removeChild(item);
}

var userInput = document.getElementById('wbill');
userInput.addEventListener('keyup', function(e) {
    if (isNumeric(this.value) == true) {
      var divide = Math.round(this.value / 2.92 * 1000);
      document.getElementById('result').innerHTML = divide;
    } else {
      document.getElementById('result').innerHTML = ' ';
    }
})

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}