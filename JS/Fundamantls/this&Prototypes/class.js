class workshop {
    constructor(teacher){
        this.teacher = teacher;
    }
    ask(question) {
        console.log(this.teacher,question);
    }
}

var deepJS = new workshop("firas");
var reactJS = new workshop("emna");

deepJS.ask("go go go");
reactJS.ask("No No No");

