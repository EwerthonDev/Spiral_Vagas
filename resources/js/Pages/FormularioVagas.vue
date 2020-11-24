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

            <form class=" mt-8" v-on:submit.prevent="enviarVaga">
                <div v-if="campo">
                    <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Nome da Vaga</label>
                    <input class="bg-gray-300 rounded w-full p-3" type="text" name="nome_vaga" v-model="campo.nome_vaga" />
                    
                    <div class="grid grid-cols-2 gap-4 mt-3">
                        <div class="col-span-1">
                            <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>País</label><br>
                            <select class="bg-gray-300 w-full rounded p-3" name="pais" v-model="campo.pais">
                                <option value="brasil">Brasil</option>
                            </select>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Cidade</label><br>
                            <input class="bg-gray-300 w-full rounded p-3" type="text" name="cidade" v-model="campo.cidade"/>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Estado</label><br>
                            <input class="bg-gray-300 w-full rounded p-3" type="text" name="estado" v-model="campo.estado" />
                        </div>
                        <div class="col-span-1 mb-3">
                            <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Departamento</label><br>
                            <select class="bg-gray-300 w-full rounded p-3" name="departamento" v-model="campo.departamento">
                                <option value="desenvolvimento">Desenvolvimento</option>
                            </select>
                        </div>
                    </div>
                    
                    <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Tipo do emprego</label><br>
                    <select class="bg-gray-300 w-full rounded p-3 mb-3" name="tipo_emprego" v-model="campo.tipo_emprego">
                        <option>CLT</option>
                    </select>

                    <label class="text-gray-100 font-bold text-xl"><b class="text-red-600">* </b>Descrição da vaga</label><br>
                    <textarea class="bg-gray-300 w-full rounded p-1" style="min-height:150px;" v-model="campo.descricao"/>
                </div>
                <div class="flex flex-row-reverse items-center mt-7">
                    <button type="submit" class="rounded-3xl p-3 shadow-xl bg-green-500 text-xl font-bold">Cadastrar</button>
                    <a class="text-gray-300 font-bold text-xl mr-6" href="/vagas">Cancelar</a>
                </div>

            </form>
          </div>
      </div>
      <footer-vagas></footer-vagas>
  </div>
</template>

<script>
import Vue from 'vue'
import HeaderVagas from './HeaderVagas'
import FooterVagas from './FooterVagas'

export default {
    components: {
        'header-vagas': HeaderVagas,
        'footer-vagas': FooterVagas
    },
    data() {
        return {
            usuarioLogado: [],
            campo: {
                nome_vaga: null,
                pais: null,
                cidade: null,
                estado: null,
                departamento: null,
                tipo_emprego: null,
                descricao: null
            }
        }
    },
    methods: {
        enviarVaga: async function()
        {
            axios.post('/api/vagas/store', this.campo).then(response => {
                this.campo = response.data.vaga;    
            });
            
            await window.location.replace('/vagas');
        }
    },
    mounted() {
       
    },
} 
</script>

<style>
    
</style>