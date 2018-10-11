
const FIELD = [
  "0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0",
  "0,1,1,1,1,1,1,3,1,1,1,1,1,1,1,1,1,1,1,0",
  "0,0,0,1,0,0,0,0,0,0,1,0,0,0,0,0,3,0,0,0",
  "0,0,0,1,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0",
  "0,1,1,3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0",
  "0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0",
  "0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0",
  "0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0",
  "0,0,0,0,0,0,1,1,0,0,1,0,0,1,1,0,0,0,0,0",
  "0,1,1,1,1,1,1,1,0,4,1,4,0,1,1,1,1,3,1,0",
  "0,1,1,1,1,3,1,1,0,4,1,4,0,1,1,1,1,1,1,0",
  "0,0,0,0,0,0,1,1,0,1,0,0,0,1,1,0,0,0,0,0",
  "0,1,1,3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0",
  "0,0,1,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0",
  "0,0,1,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0",
  "0,1,1,1,1,1,1,1,1,1,5,1,1,1,1,1,1,1,1,0",
  "0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0",
  "0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0",
  "0,1,1,1,1,3,1,1,1,1,1,1,1,1,1,1,1,3,1,0",
  "0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0",
];

var field = [];
var ghosts = [];

var pacman;
var score;
var endScore;

function setup() {

  createCanvas(500, 535);

  score = 0;
  field = generateField();
      // create canvas



}



function draw() {

  background(51);

	drawHUD(); 

  for (var j = 0; j < ghosts.length; j++) {

    ghosts[j].update();
    ghosts[j].draw();
  }

	pacman.update();
	pacman.draw();

  handleInput();
}


function handleInput() {

  if (keyIsDown(UP_ARROW)) {

    pacman.move(0, -1, true);
  } else if (keyIsDown(DOWN_ARROW)) {

    pacman.move(0, 1, true);
  } else if (keyIsDown(LEFT_ARROW)) {

    pacman.move(-1, 0, true);
  } else if (keyIsDown(RIGHT_ARROW)) {

    pacman.move(1, 0, true);
  }
}


function drawHUD() {

	
	for (var i = 0; i < field.length; i++) {

		if (field[i].intact) {

			if (field[i].type != "GHOST" && field[i].type != "PACMAN")
				field[i].draw();
		}
	}


	noStroke();
  fill(255);
  textSize(30);
  textAlign(LEFT);
  text(score, 8, height - 5);
    text('Made with :3 from IIITDM', 100, height -5);
}

function endGame(won) {

  textSize(60);
  textAlign(CENTER);
  fill(255);
  stroke(0);
  strokeWeight(5);

  if (won) {

    text("You win!", width / 2, height / 2);
  } else {

    text("You lose!", width / 2, height / 2);
  }
  textSize(50);
  text("Please refrsh the Tab!!!", width / 2, height / 2 + 50);

  noLoop();
}

function generateField() {

  var f = []; 

  var ghostId = 0; 
  for (var i = 0; i < FIELD.length; i++) { 

    var row = FIELD[i].split(",");
    for (var j = 0; j < row.length; j++) {
      var type = TYPES[row[j]];
      var tile = new Tile(j, i, type, -1);

      switch (type) {

        case "PACMAN":
          pacman = tile;
          f.push(new Tile(j, i, "OPEN"));
          break;

        case "GHOST":
					var behavior = (ghostId % 2);
          ghosts.push(new Tile(j, i, type, behavior));
          f.push(new Tile(j, i, "OPEN"));
          ghostId++;
          break;

        case "BARRIER":
          f.push(tile);
          break;

        case "CHERRY":
          endScore += 10;
          f.push(tile);
          break;

        case "BISCUIT":
          endScore++;
          f.push(tile);
          break;
      }

    }
  }
  return f;
}
