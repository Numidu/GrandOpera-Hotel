function register() {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("pwd").value;
  var tel = document.getElementById("tel").value;
  var address = document.getElementById("add").value;
  console.log(fname);

  var form = new FormData();
  form.append("f", fname);
  form.append("l", lname);
  form.append("e", email);
  form.append("p", password);
  form.append("t", tel);
  form.append("a", address);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var res = request.responseText;
      document.getElementById("error").innerHTML = res;
    }
  };

  request.open("post", "registerProcess.php", true);
  request.send(form);
}

function Loging() {
  var password = document.getElementById("pwd").value;
  var email = document.getElementById("email").value;
  var remember = document.getElementById("remember").value;
  console.log(remember);
  var form = new FormData();
  form.append("p", password);
  form.append("e", email);
  form.append("r", remember);
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var res = request.responseText;
      document.getElementById("mess").innerHTML = res;
      if (res == "success") {
        window.location = "index1.php";
      }
    }
  };

  request.open("post", "logingProcess.php", true);
  request.send(form);
}

function Contactus() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var hotel = document.getElementById("hotel").value;
  var description = document.getElementById("description").value;

  var form = new FormData();
  form.append("n", name);
  form.append("e", email);
  form.append("h", hotel);
  form.append("d", description);
  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var res = request.responseText;
      document.getElementById("mess").innerHTML = res;
    }
  };

  request.open("post", "contactProcess.php", true);
  request.send(form);
}

function Product() {
  var name = document.getElementById("room_name").value;
  var price = document.getElementById("price").value;
  var capacity = document.getElementById("capacity").value;
  var bedtype = document.getElementById("bed_type").value;
  var room = document.getElementById("room_size").value;
  var facility = document.getElementById("facilities").value;
  var date = document.getElementById("availability").value;

  var image = document.getElementById("imageUploader");

  var form = new FormData();
  form.append("n", name);
  form.append("p", price);
  form.append("c", capacity);
  form.append("b", bedtype);
  form.append("r", room);
  form.append("f", facility);
  form.append("d", date);

  var fileCount = image.files.length;
  for (var x = 0; x <= fileCount; x++) {
    form.append("image[]", image.files[x]); // append with same name as array
  }

  var request = new XMLHttpRequest(); // create request
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var res = request.responseText;
      document.getElementById("mess").innerHTML = res;
    }
  };

  request.open("POST", "addProductProcess.php", true);
  request.send(form);
}

function UploadImages() {
  console.log("hii");
  var imageInput = document.getElementById("imageUploader");

  imageInput.onchange = function () {
    var fileCount = imageInput.files.length;
    console.log(fileCount);

    if (fileCount <= 5) {
      for (var i = 0; i < fileCount; i++) {
        var file = imageInput.files[i];
        var url = URL.createObjectURL(file);
        var imgElement = document.getElementById("i" + i);
        console.log("i" + i);
        if (imgElement) {
          imgElement.src = url;
        }
      }
    } else {
      alert("Please upload 5 or fewer images.");
    }
  };
}

function viewRoom(id) {
  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      alert(response);
      //window.location.reload();
    }
  };
  request.open("GET", "roomPage.php?id=" + id, true);
  request.send();
}

function hellow() {
  console.log("hellow");
}
