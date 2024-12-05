//----array map----//
//example-01
/*
let numbers = [1, 2, 3, 4, 5];
let doubleNumbers = numbers.map((number) => number * number);
console.log(doubleNumbers); // [1, 4, 9, 16, 25]
*/

//example-02
//same problem with callback function
/*
let numbers = [1, 2, 3, 4, 5];
let squareNumbers = numbers.map(function (number) {
    return number * number;
});
console.log(squareNumbers); // [1, 4, 9, 16, 25]
*/

//example-03
//using arrow function
/*
let numbers = [1, 2, 3, 4, 5];
let squareNumbers = numbers.map(number => number * number);
console.log(squareNumbers); // [1, 4, 9, 16, 25
*/


//example-04
//using arrow function with multiple parameters

let numbers = [1, 2, 3, 4, 5];
let doubleAndSquareNumbers = numbers.map((number, index) => {
    return {
        double: number * 2,
        square: number * number 
    };
});
console.log(doubleAndSquareNumbers);
//output: [{ double: 2, square: 1 }, { double: 4, square: 4 }, { double: 6, square: 9 }, { double: 8, square: 16 }, { double: 10, square: 25 }]


//-------array filter---------//
//example-01
//apply filter with callback function
// const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
//approach-01
/*
const evenNumber = numbers.filter(function(number){
    const num = number % 2;
    return (num === 0);
});
*/

//approach-02
/*
const evenNumber = numbers.filter(function(number){
    return number % 2 === 0;
});
*/

//approach-03
/*
const evenNumber = numbers.filter(function (number) {
    if (number % 2 === 0) {
        return true
    }
    return false
});

const oddNumber = numbers.filter(function (number) {
    if (number % 2 !== 0) {
        return true
    }
    return false
});
*/


//same example with arrow function
//approach -01
/*
const evenNumber = numbers.filter(number => number % 2 === 0);//output: [2, 4, 6, 8, 10, 12]
const oddNumber = numbers.filter(number => number % 2 !== 0); //output: [1, 3, 5, 7, 9, 11]
*/

//aproach-02
/*
const even = number => number % 2 === 0;
const odd = number => number % 2 !== 0;
const evenNumber = numbers.filter(even);
const oddNumber = numbers.filter(odd);


console.log(evenNumber);
console.log(oddNumber);
*/

//real life example of filter method
const students = [{
        name: 'John',
        age: 20,
        grade: 'A'
    },
    {
        name: 'Jane',
        age: 21,
        grade: 'B'
    },
    {
        name: 'Bob',
        age: 19,
        grade: 'A'
    },
    {
        name: 'Alice',
        age: 20,
        grade: 'B'
    },
    {
        name: 'Mike',
        age: 25,
        grade: 'A'
    },
    {
        name: 'Emma',
        age: 19,
        grade: 'B'
    },
    {
        name: 'Tom',
        age: 20,
        grade: 'A'
    },
    {
        name: 'Lily',
        age: 21,
        grade: 'B'
    }
];

// const studentsOver20 = students.filter(student => student.age > 20);
// console.log(studentsOver20);
//output: [{name: 'Jane', age: 21, grade: 'B'}, { name: 'Mike', age: 21, grade: 'A'}, {name: 'Lily', age: 21, grade: 'B'}]

//get 20+ student with for loop
/*
let studentsOver20For = [];
for (let i = 0; i < students.length; i++) {
    if (students[i].age > 20) {
        studentsOver20For.push(students[i]);
    }
}
console.log(studentsOver20For);
*/