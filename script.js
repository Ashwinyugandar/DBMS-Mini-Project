function searchCriminals() {
    var input = document.getElementById("search").value;
    input = input.toLowerCase();
    var x = document.getElementsByTagName("tr");
    for (i = 1; i < x.length; i++) {
      if (!x[i].innerHTML.toLowerCase().includes(input)) {
          x[i].style.display="none";
      }
      else {
          x[i].style.display="list-item";
      }
    }
  }