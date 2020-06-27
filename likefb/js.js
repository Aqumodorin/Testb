/*
var setId = document.getElementsByTagName("html")[0];
setId.setAttribute("id" , "test");
var test = document.getElementById("test");
console.log(test.scrollTop);
*/

/*
var test = document.getElementsByTagName("html")[0];
var test2 = document.getElementById("test");
var scrollTopTr = test.scrollTop;
function testTr() {
     
console.log(scrollTopTr);
    
}

test.onscroll = testTr();
*/

/*

var x = 0;
function myFunction() {
  document.getElementById("scrollOut").innerHTML = x += 1;
}

*/

//onscroll = myFunction();

// worked

/*

var test = document.getElementsByTagName("body")[0];
test.setAttribute("onscroll", "myFunction()");
var scrollScore = document.getElementById("scrollOut");
//var test = document.getElementById("test");
var x = 0;

function myFunction() {
  scrollScore.innerHTML = x += 1;

}
*/
//test.onscroll = myFunction();

var ScorlTR = document.getElementsByTagName("html")[0];
var test = document.getElementsByTagName("body")[0];
test.setAttribute("onscroll", "myFunction()");
var scrollScore = document.getElementById("scrollOut");



function myFunction() {
  scrollScore.innerHTML = ScorlTR.scrollTop;

}





