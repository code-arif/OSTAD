//----annonymous function----//
//example-01
/*
var add = function(a, b) {
return a * b;
}
console.log(add(5, 3)); // 8
*/

// example-03
/*
const numbers = [1, 2, 3, 4];
const doubled = numbers.map(function(num) {
    return num * 2;
});
console.log(doubled); // [2, 4, 6, 8]
 */

// example-04
/*
(function() {
    console.log("IIFE executed immediately!");
})(); // IIFE executed immediately!

(function(a, b, c){
    console.log(a + b + c);
})( 1, 2, 3); // 6
 */

// example-05
/*
const numbers = [1, 2, 3, 4];
const squared = numbers.map(num => num * num);
console.log(squared); // [1, 4, 9, 16]

const number = 5;
const square = num => num * num;
console.log(square(number)); // 25
*/