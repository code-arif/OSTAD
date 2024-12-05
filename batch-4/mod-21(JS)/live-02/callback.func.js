//====callback function=====//
//example-01
/*
function greet(name, callback) {
    console.log("Hello, " + name);
    callback();
}

function sayGoodbye() {
    console.log("Goodbye!");
}

greet("Ahsanullah", sayGoodbye);
// Output:
// Hello, Ahsanullah
// Goodbye!
*/

//example-02
/*
function add(a, b, callback) {
    let sum = a + b;
    callback(sum);
}

add(5, 10, function(result) {
    console.log("Sum is:", result); // Sum is: 15
});
//
add( 5, 10, (result) => {
    console.log("Sum is:", result); // Sum is: 15
});
*/

//example-03
/*
const numbers = [1, 2, 3, 4];
const doubled = numbers.map(function(num) {
    return num * 2;
});
console.log(doubled); // [2, 4, 6, 8]
*/

//example-04
/*
const numbers = [5, 10, 15, 20];
const greaterThanTen = numbers.filter(function(num) {
    return num > 10;
});
console.log(greaterThanTen); // [15, 20]
*/

//setTimeout
/*
setTimeout(function() {
    console.log("This will run after 2 seconds!");
}, 2000);
*/

//setInterval
/*
setInterval(function () {
    console.log('Done');
}, 100);
*/

//steInterval stop
let i = 0;
const intervalId = setInterval(function () {
    console.log('Hello');
    i++;

    if (i == 5) {
        clearInterval(intervalId);
        console.log('Interval cleared');
    }
}, 1000);