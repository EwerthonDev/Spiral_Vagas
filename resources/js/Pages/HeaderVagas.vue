<template>
<div class="shadow-2xl bg-gray-900" style="min-height: 70px;">
    <div class="container mx-auto flex justify-between items-center pt-2">
        <a class="hover:border-green-300 hover:text-green-300 font-bold text-green-500 border border-green-500 rounded pt-3 pb-3 pr-5 pl-5 text-lg" href="/vagas/cadastrar"><i class="fas fa-plus"></i> Nova Vaga</a>
        <img class="block h-9 w-auto" height="100px" width="100px" src="https://www.flaticon.com/svg/static/icons/svg/137/137099.svg" />
        <span class="text-gray-300">Olá, <b>{{usuarioLogado.name}}</b></span>
    </div>
</div>
</template>

<script>
export default {
   data() {
        return {
            usuarioLogado: []
        }
    },
    mounted() {
        axios.get('/api/usuario').then(response => {
            this.usuarioLogado = response.data.usuarioLogado
        })
    }, 
}
</script>

<style>

</style>