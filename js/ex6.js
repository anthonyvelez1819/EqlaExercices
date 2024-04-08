let nombre1 : 55;
let nombre2 : 10;

if (nombre1 === nombre2) {
    console.log("nombre1 est égal à nombre2");
} else {
    console.log("nombre1 est différent de nombre2");
    if (nombre1 > nombre2) {
        console.log("nombre1 est supérieur à nombre2");
    } else {
        console.log("nombre1 est inférieur à nombre2");
    }
}

if (nombre1 % nombre2 === 0) {
    console.log("nombre1 est divisible par nombre2");
} else {
    console.log("nombre1 n'est pas divisible par nombre2");
}


nombre1++;
nombre2++;


console.log("Nouvelle valeur de nombre1:", nombre1);
console.log("Nouvelle valeur de nombre2:", nombre2);


let delta = nombre1 - nombre2;
if (delta > 0) {
    console.log("Le delta entre nombre1 et nombre2 est positif.");
} else if (delta < 0) {
    console.log("Le delta entre nombre1 et nombre2 est négatif.");
} else {
    console.log("Le delta entre nombre1 et nombre2 est nul.");
}


let a = Math.floor(Math.random() * 10) + 1;
let b = Math.floor(Math.random() * 10) + 1;


let resultat = (a + b) ** 2;
console.log(`Le résultat de (a + b)² est ${resultat}.`);


if (resultat === 400) {
    console.log("Valeur maximale atteinte pour (a + b)².");
} else {
    let difference = 400 - resultat;
    console.log(`Il manque encore ${difference} pour atteindre la valeur maximale pour (a + b)².`);
}