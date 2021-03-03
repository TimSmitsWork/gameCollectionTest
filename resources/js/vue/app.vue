<template>
    <div>
        <h1>Add game</h1>
        <div class="alert alert-danger" role="alert" v-for="error in errors">
            <div v-for="errorDetail in error">{{ errorDetail }}</div>
        </div>
        <form @submit.prevent="searchGame()">
            <input type="text" v-model="name" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <div v-if="games.length > 0" class="card-columns">
            <div class="card" v-for="game in games">
                <img class="card-img-top" :src="game.background_image" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ game.name }}</h5>
                    <p class="card-text"><small class="text-muted">{{ game.released }}</small></p>
                    <button type="button" class="btn btn-primary" @click.prevent="addGame(game)">Add to collection</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
const default_layout = "default";

export default {
    computed: {},
    data() {
        return {
            name: '',
            games: [],
            errors: [],
        }
    },
    methods: {
        searchGame: function () {
            let self = this;
            axios
                .post("/game/search", {
                    name: this.name
                })
                .then(response => {
                    this.games = response.data;
                }, function (error) {
                    self.errors = error.response.data.errors;
                });
        },
        addGame: function (game) {
            let self = this;
            let data = new FormData();
            data.set("name", game.name);
            data.set("slug", game.slug);
            axios
                .post("/games", data)
                .then(response => {
                    console.log(response);
                    if (response.data.success === true) {
                        window.location.href = "/";
                    }
                }, function (error) {
                    self.errors = error.response.data.errors;
                });
        },
    }
};
</script>
