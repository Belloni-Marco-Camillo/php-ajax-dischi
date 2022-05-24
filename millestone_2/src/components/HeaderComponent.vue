<template>
    <header class="d-flex align-items-center">
        <!-- logo -->
        <div class="col logo_img">
            <img src="@/assets/img/logo.png" alt="">
        </div>
        <!-- form-select -->
        <div class="col d-flex">
            <GenereSelect v-model="genereMusicale" @clicca="search" />
            <AuthorSelect v-model="artista" @clicca="search" />
        </div>
    </header>
</template>

<script>
import GenereSelect from "@/components/SelectComponent.vue";
import AuthorSelect from "@/components/SelectAuthor.vue";
import state from "@/state.js";
export default {
    name:"HeaderComponent",
    components:{
        GenereSelect,
        AuthorSelect
    },

    data() {
        return {
        genereMusicale: "",
        artista:""
        };
    },

    methods: {
    search() {
      console.log('pincopallo ...');
      state.genereMusicale = this.genereMusicale;
      console.log(state.genereMusicale);
      state.artista = this.artista;
      console.log(state.artista);
    },
  },

};
</script>

<style lang="scss" scoped>
    header{
        background-color: $primary;
        padding: 1rem;
    }

    .logo_img{
        height: 50px;
    }
   
</style>
