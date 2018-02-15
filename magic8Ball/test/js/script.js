$(document).ready(function(){

//create objext
    var magic8Ball = {};
    $("#answer").hide();

//initialize array of answers
	var answers = ["Cannot Predict Now", "Ask Again Later", "Don't Count On It", "My Reply Is No", "My Sources Say No", "Outcome Hazy", "It Is Decidedly So", "Outlook Not So Good"];
	
//ask question function - generate a random number that generates a random answer from answer array
	magic8Ball.askQuestion = function(question)
 {
    var randomNumber = Math.random();
    var randomNumberArray = randomNumber * answers.length;    
    var randomIndex = Math.floor(randomNumberArray);
    var randomAnswer = answers[randomIndex];
	
//update HTML ID of answer with the text from the random answer array
	$("#answer").text(randomAnswer);
	$("#answer").hide();
	$("#answer").fadeIn(4000);
	$("#8ball").attr("src", "img/Magic_eight_ball4.png")

 };
  
 //defines what happens when the button is clicked
	var askQuestion = function()
{
	var question = prompt ("Ask me a YES or NO question!");
	//passes the user-entered "question" into the method askQuestion
	magic8Ball.askQuestion(question);
  setTimeout(function() 
    {
       $("#8ball").attr("src", "img/Magic_eight_ball4.png");
    }, 500);
      $("#8ball").effect("shake");
};


$("#questionButton").click(askQuestion);
 
  
});

function changeText(val){
	document.getElementById('input').innerHTML = val;
};














