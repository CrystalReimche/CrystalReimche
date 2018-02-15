var favoriteDances = ["Harlem Shake", "Tango", "Mashed Potato", "Lambada", "Macarena"];
 
var randomNumber = Math.random();
console.log("var randomNumber = " + randomNumber);

 //taking random number and multiplying by how many in array
var randomNumberArray = randomNumber * favoriteDances.length;
console.log("var randomNumberArray = " + randomNumberArray);
 
// taking random number from length multiplication and rounding down
var randomIndex = Math.floor(randomNumberArray);
console.log("var randomIndex = " + randomIndex);
 
// linking random number to place in array
var randomDance = favoriteDances[randomIndex];
console.log("var randomDance = " + randomDance);








var magic8Ball = ();
	magic8Ball.answers = ["Cannot Predict Now", "Ask Again Later", "Don't Count On It", "My Reply Is No", 
										"My Sources Say No", "Outcome hazy"];

										

										
										
var chair = {};
    chair.material = "wooden";
    chair.legs = 4;
    chair.seat = "padded";
    chair.back = "ergonomic";
    chair.whatIsChair = function ()
{
    console.log("I've got a " + this.material + "chair with " + this.legs + "legs, a " + this.);
}
    
chair.whatIsChair();




// define the method
magic8Ball.askQuestion = function(question) {

     // create a random number
     var randomNumber = Math.random();

     // make the random number between 0 and the number of items in your array
     var randomNumberForListOfAnswers = randomNumber * this.listOfAnswers.length;

     // round down the number to be a whole number
     var randomIndex = Math.floor(randomNumberForListOfAnswers);

     // use that number to index a random number from the answers array
     var answer = this.listOfAnswers[randomIndex];

     console.log(question);
     console.log(answer);	
	 
	 
	 
	 var magic8Ball = ["Cannot Predict Now", "Ask Again Later", "Don't Count On It", "My Reply Is No", "My Sources Say No", "Outcome hazy"];

var randomNumber = Math.random();
var randomNumberArray = randomNumber * magic8Ball.length;    
var randomIndex = Math.floor(randomNumberArray);
var randomAnswer = magic8Ball[randomIndex];

console.log("Is it going to rain tomorrrow? = " + randomAnswer);

	 
	 