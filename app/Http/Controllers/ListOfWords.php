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
