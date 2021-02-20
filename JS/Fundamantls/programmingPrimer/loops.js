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


