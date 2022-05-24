<template>
    <div class="col" >
        <div class="card rounded-0">
            <!-- img -->
            <div class="box-img">
                <img :src="cd.poster" alt="">
            </div>
            <!-- text -->
            <div>
                <h5 class="text-white mt-3 text-uppercase text-center">{{ cd.title }} </h5>
                <p class="text-center">
                    {{ cd.author }} <br>
                    {{ cd. year}}
                </p>
            </div>
             
        </div>
    </div>
</template>

<script>


export default ({
    name:"CdComponent",
    props : {
       cd: Object
    },
})
</script>


<style lang="scss" scoped>
   .card{
       height: 350px;
       background-color: $primary;
       padding: 1.2rem;

       .box-img>img{
        aspect-ratio: 1/1;
        width: 100%;
        }

        p{
            color: $light;
        }
   }
</style>