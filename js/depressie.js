let classa   = [];
let classb   = [];
let classc   = [];
const tbody   = document.getElementById("tableBody");
const classes = [classa, classb, classc];

for(var i = 0; i < people.length; i++) {
    if(people[i].Class == "AI 144") {
        classa.push(
            {
                "Diamond": people[i].Diamond,
                "Gold": people[i].Gold,
                "Silver": people[i].Silver,
                "Bronze": people[i].Bronze,
                "Total": function() {
                    return this.Diamond * 10 + this.Gold * 5 + this.Silver * 3 + this.Bronze * 1;
                },
            }
        )
    } else if(people[i].Class == "AI 145") {
        classb.push(
            {
                "Diamond": people[i].Diamond,
                "Gold": people[i].Gold,
                "Silver": people[i].Silver,
                "Bronze": people[i].Bronze,
                "Total": function() {
                    return this.Diamond * 10 + this.Gold * 5 + this.Silver * 3 + this.Bronze * 1;
                },
            }
        )
    } else if(people[i].Class == "AI 146") {
        classc.push(
            {
                "Diamond": people[i].Diamond,
                "Gold": people[i].Gold,
                "Silver": people[i].Silver,
                "Bronze": people[i].Bronze,
                "Total": function() {
                    return this.Diamond * 10 + this.Gold * 5 + this.Silver * 3 + this.Bronze * 1;
                },
            }
        )
    }
}

for(var i = 0; i < classes.length; i++) {
    var diamond = 0, gold = 0, silver = 0, bronze = 0, total = 0, name = "";
    if(i == 0) {
        name = "AI 144";
    } else if(i == 1) {
        name = "AI 145";
    } else if(i == 2) {
        name = "AI 146";
    }
    for(var x = 0; x < classes[i].length; x++) {
        diamond += classes[i][x].Diamond;
        gold    += classes[i][x].Gold;
        silver  += classes[i][x].Silver;
        bronze  += classes[i][x].Bronze;
        total   += classes[i][x].Total();
    }
    
    var num = i + 1;
    tbody.innerHTML += '' +
    '<tr>' +
    '<th scope="row">' + num + '</th>' +
    '<td>' + name + '</td>' +
    '<td>' + diamond + '</td>' +
    '<td>' + gold + '</td>' +
    '<td>' + silver + '</td>' +
    '<td>' + bronze + '</td>' +
    '<td>' + total + '</td>' +
    '</tr>';
}   