class workshop {
    constructor(teacher){
        this.teacher = teacher;
    }
    ask(question) {
        console.log(this.teacher,question);
    }
}

var deeepJS = new workshop("firas");
var reactJS = new workshop("emna");

deepJS.ask("go go go");
reactJS.ask("No No No");

