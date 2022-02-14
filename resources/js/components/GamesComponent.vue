<template>
    <div class="container">
        Ciao Gamer
         <hr class="bg-light">
        <div v-for="game in games" :key="game.id">
            <h3>
                {{game.titolo}}
            </h3>
            <h4>
                 {{game.sottoTitolo}}
            </h4>
            <span>
                 {{game.rating}}
            </span>
            <hr class="bg-light">
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                games: [],
            }
        },
        mounted() {

            axios.get('/axios/videogames')
            .then(dbr => {
                console.log("dati",dbr.data );
                this.games = dbr.data;
            })
            .catch(error => console.error(error))
        }
    }
</script>
