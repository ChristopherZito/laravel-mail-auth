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
                 {{game.rating}} [ID = {{game.id}}]
            </span>
            <br>
            <button class="btn btn-danger" @click="deleteGames(game.id)">Delete</button>
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
                // console.log("dati",dbr.data );
                this.games = dbr.data;
            })
            .catch(error => console.error(error))  
        },
        methods: {
            deleteGames(id){
                console.log(id);
                const self = this;
                axios.get(`/axios/videogame/delete/${id}`)
                    .then(del => {
                            const ind = self.getGamesFromId(id);
                            self.games.splice(ind,1)
                        }
                    )
                    .catch(e => console.error(e))
            },

            getGamesFromId(id){
                for(let x=0;x<this.games.length;x++){
                    const del = this.games[x];
                    if(del.id == id){
                        return x;
                    }
                }
            }
        },
    }
</script>
