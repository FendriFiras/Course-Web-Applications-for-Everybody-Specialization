var students=[1,2,3];

for(let i=0; i<students.length;i++){
    console.log(students[i]);
}


for(let student of students){
    console.log(student);
}
while(students.length>0){
    let student=students.shift();
    console.log('hello'+student);
}
while (students.length > 0){
    let student =students.pop();
    console.log(student);
}

const cities = [
  "Seattle",
  "San Francisco",
  "Salt Lake City",
  "Amsterdam",
  "Hong Kong"
];
​
// method 1
for (let i = 0; i < cities.length; i++) {
  console.log(cities[i]);
}
// ​foreach impliments a new city in every iteration 
// method 2
cities.forEach(function(city) {
  console.log(city);
});


