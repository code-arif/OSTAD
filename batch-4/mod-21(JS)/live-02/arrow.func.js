//====arrow function====//
//example-01
/*
const multiply = (a, b) => {
    const result = a * b;
    return result;
};
console.log(multiply(5, 3)); // 15
*/

//example-02
/*
const add = (a, b) => a + b;
console.log(add(5, 3)); // 8

const multiply = (a, b) => a * b;
console.log(multiply(25, 3));  // 75
*/

//example -03
/*
const greet = () => "Hello, World!";
console.log(greet()); // "Hello, World!"
*/

//====limitation of arrow function====//
//1. cannot be used as constructor
//2. cannot be used with prototype
//3. cannot be used with 'new' keyword
//4. cannot be used with 'this' keyword
const person = {
    name: "John",
    age: 25,
    //regular function
    sayHello: function () {
        return(`Hello, my name is ${this.name} and I am ${this.age}
            years old.`);
    }

    //arrow function
    // sayHello: () => `Hello, my name is ${this.name} and I am ${this.age} years old.` 
    // error: Cannot read property 'name' of undefined 

    // sayHello: () => `Hello, my name is ${person.name} and I am ${person.age} years old.`
}
console.log(person.sayHello()); // Hello, my name is John and I am 25 years old.


//5. cannot be used with 'arguments' keyword
//6. cannot be used with 'super' keyword
//7. cannot be used with 'yield' keyword