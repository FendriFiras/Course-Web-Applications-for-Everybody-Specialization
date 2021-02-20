var person={};
person.name="Mrs.White";

console.log(person.name);

var person = {
    "name":"Mrs.White"
};

var who = person.name; // (primitive)storing the value by value means when person.name change who will not change  
// (non primitive) pass by refrence 