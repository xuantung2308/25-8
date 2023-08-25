function myFunction(){
    var x = document.getElementById("res");
    if (x.className === "header-right") {
      x.className += " responsive";
    } else {
      x.className = "header-right";
    }
  }
/*modal icon*/ 

  function increaseValue($number) {
    var value = parseInt(document.getElementById($number).value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById($number).value = value;
}

function decreaseValue($number) {
    var value = parseInt(document.getElementById($number).value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById($number).value = value;
}

function cal($wnumber, $hnumber){
    $bmi = $wnumber/($hnumber*$hnumber);   
}
/*increase, decrease btn*/ 




