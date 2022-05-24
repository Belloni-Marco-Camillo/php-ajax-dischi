<template>
    <div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 mt-4" v-if = "!loading === true ">
            <Cd  v-show="genre===true" :cd = "cd" v-for=" (cd, index) in filteredGenre" :key="index" />
            <Cd v-show="author===true" :cd = "cd" v-for=" (cd, index) in filteredAuthor" :key="index" />
        </div>
        
        <div class=" d-flex flex-column justify-content-center align-items-center bg" v-else>
            <div class="loader"></div>
            <h2 class="text-white text-center">...Loading</h2>
        </div>

        <!-- se il collegamento con axios non funziona -->
        <div class="mt-5" v-if="!error===false && !loading === true">
            <h2 class="text-white text-center">  {{error}} </h2>
        </div>
    </div>
    
</template>

<script>
import axios from "axios";
import Cd from '@/components/CdComponent.vue';
import state from "@/state.js";

export default ({
    name:"CdListComponent",
    components:{
        Cd
    },

    data (){
        return {
        link :"http://localhost:8081/php/boolean/php-ajax-dischi/millestone_2/php/db.php",
        cdList: null,
        loading: true,
        error: false,
        genre: false,
        author:false,
        
        };
    },

    methods:{
        timer(){
            setTimeout(()=>{
                this.loading = false
            }, 2000);
        },

        callApi(){
            axios.get(this.link)
            .then((response) =>{
                this.cdList = response.data;
            })
            .catch((error) => {
                this.error = `${error}`;
            });
        }
    },

    computed: {
    filteredGenre(){
        return this.cdList.filter(cd =>{
        this.genre = true
        this.author = false
        return cd.genre.includes(state.genereMusicale)
        })
        },

    filteredAuthor(){
        return this.cdList.filter(cd =>{
        this.author = true
        this.genre = false
        return cd.author.includes(state.artista)
        
        })
        }
        
    },


    mounted() {
    this.callApi();
    this.timer();
    },
})
</script>

<style lang="scss" scoped>
    .bg{
        margin-top: 0 ;
        height: calc(100vh - 82px),
    }

    .loader {
    border: 10px solid $light;
    border-radius: 50%;
    border-top: 10px solid $white;
    width: 80px;
    height: 80px;
    animation: spin 2s linear infinite; 
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }

    h2{
        margin: 0;
    }

</style>

