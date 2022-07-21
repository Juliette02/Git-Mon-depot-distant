/***************************ADDITIONNEUR**********************************/
    new Vue({
        el:'#app', // On reli un élément à la vue grace à l'ID dnas HTML
        data: { // On intilise les variable
            chiffre1: '',
            chiffre2: ''
        },

        computed: { // On créer une fonction pour le résultat 
            calcule: function() {
                return this.chiffre1 + this.chiffre2 // this == dans la new Vue(), chiffre1 == le nombre entrer dans l'input
            }
        }
    })
/*****************************NOMBRE MAGIQUE*******************************/
    new Vue ({
        el:'#NM',
        data: {
            chiffre3 : ''
        },

        computed: {
            chiffreAl: function() { // Fonction qui créer un chiffre aléatoire entre 0 et 100
                return Math.floor(Math.random() * (100 - 0) + 0)
            },
            result: function() { // Fonction qui vérifie si le nombre entrer égal au nombre générer aléatoirement
                if (this.chiffre3 == '') {
                    return ''
                } else if (this.chiffre3 > this.chiffreAl) {
                    return 'Trop Grand !!!'
                } else if (this.chiffre3 < this.chiffreAl) {
                    return 'Trop Petit !!!'
                } else {
                    return '!!!!!!! Trouvé !!!!!!!'
                }
            }
        }
    })
/******************************Calculatrice********************************/
    new Vue({
        el:'#C',
        data: {
            total: 0
        },

        methods: {
            key: function(num) { // Fonctionqui affiche le calcule
                return this.total += num
            },
            clear: function() { // Fonctionqui permet de supprimer le calcule ou autres
                return this.total = 0
            },
            equal: function() { // Fonction qui donne le total
                let equal = this.total
                return this.total = eval(equal)
            }
        }
    })

/******************************Intercae**********************************/
    new Vue({
        el: '#I',
        data: {
            visible: true
        },

        methods: { // (Attention au français toujours noter en Anglais)
            change: function() { // Fonction qui permet d'afficher le texte
                this.visible = !this.visible
            }
        }
    })