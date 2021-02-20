var workshop={
    teacher : "firas",
    ask(question){
        console.log(this.teacher + question);
    },
};

workshop.ask("hello");

function ask(question){
    console.log(this.teacher, question);
}

function otherClass(){
    var myContext = {
        teacher: "suzy"
    };
    ask.call(myContext,"why?"); // suzy why?
}
otherClass();