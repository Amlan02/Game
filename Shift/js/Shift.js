function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));

  check();

}


function check() {

  let result = 0;
  let containers = document.querySelectorAll('.statue-container');

  if(containers[0].children().length > 0) {
    if(containers[0].id.split('id')[1] == 0 && containers[0].children[0].id == "Red") {
      result += 1;
      console.log(result);
    }
  }

  if(containers[1].children().length > 1) {
    if(containers[1].id.split('id')[1] == 1 && containers[1].children[0].id == "Gold") {
      result += 1;
    }
  }

  if(containers[2].children().length > 0) {
    if(containers[2].id.split('id')[1] == 2 && containers[2].children[0].id == "Green") {
      result += 1;
    }
  }

  if(containers[3].children().length > 0) {
    if(containers[3].id.split('id')[1] == 3 && containers[3].children[0].id == "Violet") {
      result += 1;
    }
  }

  if(containers[4].children().length > 0) {
    if(containers[4].id.split('id')[1] == 4 && containers[4].children[0].id == "Blue") {
      result += 1;
    }
  }

  if(result == 5) {
    alert('You win!');
  }

}
