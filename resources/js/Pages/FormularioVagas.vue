<template>
  <div>
      <header-vagas :usuarioLogado="usuarioLogado.name"></header-vagas>
      <div class="bg-gray-800 border-b-2 border-gray-500">
        <div class="container mx-auto p-4 flex items-center" style="min-height:90px; max-width: 1050px;">
            <a class="text-4xl mt-1 mr-5" href="/vagas"><i class="text-gray-500 fas fa-chevron-left"></i></a>
            <h3 class="text-white text-2xl">Cadastrar nova vaga</h3>
        </div>
      </div>
      <div class="bg-gray-800 pt-6">
          <div class="container mx-auto p-4" style="max-width: 1000px;">
            <span class="text-gray-100"><b class="text-red-600">* </b>Campos obrigatórios</span>
            <form class=" mt-8" action="/vagas/store" method="POST">

                <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Nome da Vaga</label>
                <input class="bg-gray-300 rounded w-full p-3" type="text" name="nome_vaga" />
                <div class="grid grid-cols-2 gap-4 mt-3">

                    <div class="col-span-1">
                        <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>País</label><br>
                        <select class="bg-gray-300 w-full rounded p-3" name="pais">
                            <options></options>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Cidade</label><br>
                        <input class="bg-gray-300 w-full rounded p-3" type="text" name="cidade" />
                    </div>
                    <div class="col-span-1">
                        <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Estado</label><br>
                        <input class="bg-gray-300 w-full rounded p-3" type="text" name="estado" />
                    </div>
                    <div class="col-span-1 mb-3">
                        <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Departamento</label><br>
                        <select class="bg-gray-300 w-full rounded p-3" name="departamento">
                            <options></options>
                        </select>
                    </div>
                </div>    

                <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Tipo do emprego</label><br>
                <select class="bg-gray-300 w-full rounded p-3 mb-3" name="tipo_emprego">
                    <options></options>
                </select>
                    <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Descrição da vaga</label><br>
                    <textarea class="bg-gray-300 w-full rounded" style="min-height:150px;"/>
            </form>
          </div>
      </div>
  </div>
</template>

<script>
import Vue from 'vue'
import HeaderVagas from './HeaderVagas'

export default {
    components: {
        'header-vagas': HeaderVagas,
    },
    data() {
        return {
            usuarioLogado: []
        }
    },
    mounted() {
        
    },
}
</script>

<style>

</style>