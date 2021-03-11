let a = [1, 2, 3];
console.log(a[0]);

let i = 0;
while (i < 10) {
	i++;
	console.log(i);
}

const charecter = 'a';
const timeToRepeat = 20;
let answer = '';

for (let i = 0; i <= timeToRepeat; i++) {
	answer += charecter;
}
console.log(answer);

function addTwoNumbers(a,b){
    return a+b;
}
const res = addTwoNumbers(2,3);
console.log(res);

function greeting(greeting){
    return `${greeting}! firas`; 
}

console.log(greeting("hello"));

function add(){
    return 6;
}

const new1 = add();
console.log(new1);

const person = {
    name:"firas",
    prename:"fendri",
    age: 18,
    information:{
        place:"sfax"
    }
}
console.log(person);
const person2 = ["firas" , "kais"];


