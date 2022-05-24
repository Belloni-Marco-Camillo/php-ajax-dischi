<template>
  <div id="app">
    <Header />
    <Main />
   
  </div>
</template>

<script>
import Header from './components/HeaderComponent.vue'
import Main from './components/MainComponent.vue'

export default {
  name: 'App',
  components: {
    Header,
    Main
  }
}
</script>

<style lang="scss">

@import '@/assets/scss/style.scss';

</style>
