function workshop(teacher){
    this.teacher = teacher;
}

workshop.prototype.ask = function(question){
    console.log(this.teacher,question);
};

var deepJS = new workshop("Kyle");
var reactJS = new workshop("suzy");

deepJS.ask("zakjd jaz");
reactJS.ask("zakdnlazd");