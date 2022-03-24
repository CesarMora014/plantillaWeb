<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
  </div>
  <button @click="goToPage" class="btn btn-primary"> boton</button>
</template>

<script>

export default {
  methods:{
    goToPage(){
      this.$router.push({ name: 'About' })
    }
  }

}
</script>
