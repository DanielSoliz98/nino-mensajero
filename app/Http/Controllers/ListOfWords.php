<?php

namespace App\Http\Controllers;

const DANGER_WORDS = array(
    "ayud", "ayudenm", "auxili", "alej", "aprovech", "agresor", "agres", "asco", "atac", "atrac",
    "acuchill", "asistent", "ata", "agresion", "agred", "abus", "alter", "acos", "accident",
    "atemoriz", "asesinat", "asesin", "ahorc", "arma", "brabucon", "bullying", "criminal", "crim",
    "cort", "critic", "cinturon", "dañ", "dolor", "duel", "desgraci", "descar", "desesper",
    "defend", "delit", "desagrad", "defens", "desnud", "dispar", "destruccion", "destroz", "desproteg", "destru",
    "escap", "expuest", "expon", "extrem", "enferm", "engañ", "escond", "encerr", "esquiv",
    "explot", "explos", "evacu", "evit", "forzos", "fueg", "fals", "fechor", "fatal", "forceje",
    "fobi", "fallec", "golp", "golpe", "grit", "guerr", "huir", "horribl", "her",
    "hier", "involuntari", "intim", "indecent", "inconscien", "impon", "incendi", "irme", "intimid",
    "lastim", "liber", "loc", "luch", "llor", "miser", "mat", "muert", "martiri", "mied",
    "mal", "maldit", "malevol", "malhechor", "malign", "monstru", "muri", "necesit", "neces", "oblig",
    "ofens", "obscen", "ofend", "peligr", "peg", "prohib", "precaucion", "proteccion", "pen", "puerc",
    "pusilanim", "perd", "pal", "proteg", "quem", "rescat", "rob", "repugn", "relacion", "rechaz",
    "rapt", "socorr", "segur", "sac", "salv", "salvaj", "sust", "sex", "siniestr", "s.o.s",
    "sos", "suplic", "toc", "toxic", "tramp", "tirote", "terrorism", "violenci", "vulner", "viol"
);

const URGENT_WORDS = array(
    "alarm", "arriesg", "amenaz", "alert", "aficcion", "acech", "abandon", "apur", "abofete",
    "antipat", "asust", "cautel", "conflict", "consuel", "consol", "conden", "cuid", "cobard", "desalent", "desalient", "diabol",
    "disparat", "desahog", "dej", "evad", "evas", "escarment", "empuj", "espant", "feo", "fugit", "grav", "groser",
    "hambr", "insegur", "incaut", "impruden", "infest", "infiel", "infel", "infidelid", "insult", "jal", "jalone",
    "liar", "ment", "mient", "manten", "precari", "preocup", "pel", "pele", "preven", "problem",
    "quit", "riesg", "refugi", "retir", "rebeld", "rot", "señuel", "sobresalt", "suci", "sacud", "sospech",
    "terror", "tem", "tim", "tirone", "traicion", "traidor", "vigil", "vam", "pobrez", "pobr", "romp"
);

const ALERT_WORDS = array(
    "angusti", "arañ", "castig", "desconsider", "discut", "irrespons", "molest", "mord", "rencor",
    "reneg", "renieg", "reprob", "reprueb", "riñ", "reñ", "ret", "torp"
);

const WHITELIST = array(
    "tare", "trabaj", "proyect", "labor", "limpiez", "cocin", "oficin", "amig", "compañer", "limpi", 
    "orden", "materi", "comput", "profesor", "maestr", "mayor", "person", "ofert", "descuent", "rebaj", 
    "fin", "rat", "moment", "tiemp", "vacacion", "mejor", "karat", "tae", "jueg", "jug", 
    "medic", "personal", "zapat", "tenis", "fil", "agu", "señal", "internet", "television", "televisor", 
    "pantall", "conexion", "ded", "papel", "regal", "cabell", "traj", "disfraz", "construct", "segur", 
    "aut", "carr", "muel", "dient", "hues", "cabez", "braz", "rodill", "cas", "pelicul", 
    "seri", "caricatur", "dibuj", "anim", "novel", "juguet", "peluch", "muñec", "hiel", "fri", 
    "moj", "pesc", "calor", "divert", "gracios", "chistos", "bonit", "resfri", "grip", "sorprend", 
    "sorpres", "emocion", "perr", "gat", "mascot", "lor", "animal", "pelot", "bol", "artificial", 
    "carnaval", "navid", "nuev", "suert", "fortun", "conjunt", "apoy", "nombr", "reaccion", "mod", 
    "estil", "pint", "ave", "pajar", "canari", "hor", "alegr", "felic", "stick", "pegament", 
    "cartulin", "lamin", "color", "lapicer", "lapiz", "habl", "dec", "dij", "basur", "part", 
    "bosqu", "jungl", "selv", "instrument", "music", "cancion", "ritm", "raton", "despert", "levant", 
    "escuel", "colegi", "tempran", "pertenent", "material", "clas", "aul", "aves", "patit", "antoj", 
    "dulc", "ric", "puert", "ventan", "equilibri", "firm", "fiel", "organiz", "manch", "sucied", 
    "ray", "espiritual", "iglesi", "religi", "rop", "alfombr", "pati", "pas", "parq", "plaz", 
    "amor", "enamor", "fiest", "cumpleañ", "visit", "centr", "superhero", "hero", "asamble", "debat", 
    "cariñ", "contrinc", "buen", "bien", "excelent", "veran", "hoj", "entreg", "investig", "le", 
    "convers", "parcial", "posterg", "cronogram", "solicit", "grup", "arch", "voluntari", "verific", "inscrib",
    "inscripcion", "soc", "humanitar", "tort"
);