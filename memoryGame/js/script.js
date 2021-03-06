// Scripted By Adam Khoury in connection with the following video tutorial:
// http://www.youtube.com/watch?v=c_ohDPWmsM0

var memory_array = ['A', 'A', 'B', 'B', 'C', 'C', 'D', 'D', 'E', 'E', 'F', 'F', 'G', 'G', 'H', 'H', 'I', 'I']; //content that's hiding under cards
var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;

//adds a shuffle method
Array.prototype.memory_tile_shuffle = function () {
		var i = this.length,
			j, temp;
		while (--i > 0) {
			j = Math.floor(Math.random() * (i + 1));
			temp = this[j];
			this[j] = this[i];
			this[i] = temp;
		}
	}
	//generates a new board
function newBoard() {
	tiles_flipped = 0;
	var output = '';
	memory_array.memory_tile_shuffle();
	for (var i = 0; i < memory_array.length; i++) {
		output += '<div id="tile_' + i + '" onclick="memoryFlipTile(this,\'' + memory_array[i] + '\')"></div>';
	}
	document.getElementById('memoryBoard').innerHTML = output;
}


function memoryFlipTile(tile, val) {
	if (tile.innerHTML == "" && memory_values.length < 2) {
		tile.style.background = 'rgba(255, 255, 255, 0.3)';
		tile.innerHTML = val;
		if (memory_values.length == 0) {
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
		} else if (memory_values.length == 1) {
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
			if (memory_values[0] == memory_values[1]) {
				tiles_flipped += 2;
				// Clear both arrays
				memory_values = [];
				memory_tile_ids = [];
				// Check to see if the whole board is cleared
				if (tiles_flipped == memory_array.length) {
					alert("Board cleared... generating new board");
					document.getElementById('memoryBoard').innerHTML = "";
					newBoard();
				}
			} else {
				function flip2Back() {
					// Flip the 2 tiles back over
					var tile_1 = document.getElementById(memory_tile_ids[0]);
					var tile_2 = document.getElementById(memory_tile_ids[1]);
					tile_1.style.background = 'url(../memoryGame/img/wood.png) no-repeat';
					tile_1.innerHTML = "";
					tile_2.style.background = 'url(../memoryGame/img/wood.png) no-repeat';
					tile_2.innerHTML = "";
					// Clear both arrays
					memory_values = [];
					memory_tile_ids = [];
				}
				setTimeout(flip2Back, 700);
			}
		}
	}
}
