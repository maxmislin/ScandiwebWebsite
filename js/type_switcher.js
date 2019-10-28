var form = document.getElementById("divid");
var switcher = document.getElementById("switcher");

Disc();

switcher.onchange = function () {
  var selectedValue = switcher.value;

  if (selectedValue == "disc") {
    Clear();
    Disc();
  } else if (selectedValue == "book") {
    Clear();
    Book();
  } else if (selectedValue == "furniture") {
    Clear();
    Furniture();
  }
}

function Clear() {
  var n = form.childElementCount;
  for (var i = 0; i < n; i++) {
    form.removeChild(document.getElementById("onChange"));
  }
}

function Disc() {
  var label = document.createElement("Label");
  label.htmlFor = "disc";
  label.innerHTML = "Size";
  label.id = "onChange";

  var disc = document.createElement("input");
  disc.setAttribute("type", "text");
  disc.setAttribute("class", "form-control");
  disc.setAttribute("name", "disc");
  disc.setAttribute("placeholder", "10");
  disc.setAttribute("required", "");
  disc.setAttribute("id", "onChange");

  var p = document.createElement("p");
  p.innerHTML = "Please, enter size in MB";
  p.setAttribute("class", "tip");
  p.id = "onChange";

  form.appendChild(p);
  form.appendChild(label);
  form.appendChild(disc);
}

function Book() {
  var label = document.createElement("Label");
  label.htmlFor = "book";
  label.innerHTML = "Weight";
  label.id = "onChange";

  var book = document.createElement("input");
  book.setAttribute("type", "text");
  book.setAttribute("class", "form-control");
  book.setAttribute("name", "book");
  book.setAttribute("placeholder", "2");
  book.setAttribute("required", "");
  book.setAttribute("id", "onChange");


  var p = document.createElement("p");
  p.innerHTML = "Please, enter weight in KG";
  p.setAttribute("class", "tip");
  p.id = "onChange";

  form.appendChild(p);
  form.appendChild(label);
  form.appendChild(book);
}

function Furniture() {
  var h_label = document.createElement("Label");
  h_label.htmlFor = "height";
  h_label.innerHTML = "Height";
  h_label.id = "onChange";

  var w_label = document.createElement("Label");
  w_label.htmlFor = "width";
  w_label.innerHTML = "Width";
  w_label.id = "onChange";

  var l_label = document.createElement("Label");
  l_label.htmlFor = "lenght";
  l_label.innerHTML = "Lenght";
  l_label.id = "onChange";

  var height = document.createElement("input");
  height.setAttribute("type", "text");
  height.setAttribute("class", "form-control");
  height.setAttribute("name", "height");
  height.setAttribute("placeholder", "24");
  height.setAttribute("required", "");
  height.setAttribute("id", "onChange");

  var width = document.createElement("input");
  width.setAttribute("type", "text");
  width.setAttribute("class", "form-control");
  width.setAttribute("name", "width");
  width.setAttribute("placeholder", "45");
  width.setAttribute("required", "");
  width.setAttribute("id", "onChange");

  var lenght = document.createElement("input");
  lenght.setAttribute("type", "text");
  lenght.setAttribute("class", "form-control");
  lenght.setAttribute("name", "lenght");
  lenght.setAttribute("placeholder", "15");
  lenght.setAttribute("required", "");
  lenght.setAttribute("id", "onChange");

  var p = document.createElement("p");
  p.innerHTML = "Please, provide dimensions in HxWxL format";
  p.setAttribute("class", "tip");
  p.id = "onChange";

  form.appendChild(p);
  form.appendChild(h_label);
  form.appendChild(height);
  form.appendChild(w_label);
  form.appendChild(width);
  form.appendChild(l_label);
  form.appendChild(lenght);
}