<!DOCTYPE html>
<html>
<head>
    <title>Combobox with Scrollable List</title>
    <style>
        legend, label{
  color: blue; 
  font-size: 24px;
  font-family: sans-serif;
}

input {
  font-size: 18px;
  padding: 5px;
  height: 35px;
  width: 350px;
  border: 1px solid blue;
  outline: none;
  border-radius: 5px;
  color: blue;
/*   border-bottom: none; */
}
datalist {
  position: absolute;
  background-color: white;
  border: 1px solid blue;
  border-radius: 0 0 5px 5px;
  border-top: none;
  font-family: sans-serif;
  width: 350px;
  padding: 5px;
  max-height: 10rem;
  overflow-y: auto
  
}

option {
  background-color: white;
  padding: 4px;
  color: blue;
  margin-bottom: 1px;
   font-size: 18px;
  cursor: pointer;
}

option:hover,  .active{
  background-color: lightblue;
}
    </style>
</head>
<body>
<label>Select Browser</label>
    <input  autocomplete="off" role="combobox" list="" id="input" name="browsers" placeholder="Select your fav browser">
  <!-- Its important that you keep list attribute empty to hide the default dropdown icon and the browser's default datalist -->

  <datalist id="browsers" role="listbox">
    <option value="Internet Explorer">Internet Explorer</option>
  <option value="Chrome">Chrome</option>
  <option value="Safari">Safari</option>
    <option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option>
  </datalist>
  <script>
	input.onfocus = function () {
  browsers.style.display = 'block';
  input.style.borderRadius = "5px 5px 0 0";  
};
for (let option of browsers.options) {
  option.onclick = function () {
    input.value = option.value;
    browsers.style.display = 'none';
    input.style.borderRadius = "5px";
  }
};

input.oninput = function() {
  currentFocus = -1;
  var text = input.value.toUpperCase();
  for (let option of browsers.options) {
    if(option.value.toUpperCase().indexOf(text) > -1){
      option.style.display = "block";
  }else{
    option.style.display = "none";
    }
  };
}
var currentFocus = -1;
input.onkeydown = function(e) {
  if(e.keyCode == 40){
    currentFocus++
   addActive(browsers.options);
  }
  else if(e.keyCode == 38){
    currentFocus--
   addActive(browsers.options);
  }
  else if(e.keyCode == 13){
    e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (browsers.options) browsers.options[currentFocus].click();
        }
  }
}

function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("active");
    }
  }
  </script>
</body>
</html>