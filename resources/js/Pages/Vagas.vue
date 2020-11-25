<template>
    <div>
        <header-vagas :usuarioLogado="usuarioLogado.name"></header-vagas>
        <div class="bg-gray-800" style="min-height: 265px;">
            <div class="container mx-auto p-5">
                <h3 class="text-gray-200 text-2xl">Carreiras na Spiral</h3>
                <hr class="bg-gray-200 mb-5">
                <p class="text-gray-200 text-lg">
                    Destacamos pessoas que vão além, <b class="text-white">originais, apaixonadas, proativas, comunicativas e flexíveis</b>. Pessoas com perfil <b class="text-white">analítico,
                    desafiador, investigativo, e crítico, boa capacidade de relacionamento, perfil hands on, versátil e muita vontade de fazer
                    acontecer</b>. Interesse em sistemas, tecnologias, novidades do <b class="text-white">ambiente digital e ferramentas ágeis</b>.<br><br>
                    Se você gosta de <b class="text-white">trabalhar em equipe</b> e possui <b class="text-white">inciativas para resolver problemas</b>, com certeza é a pessoa ideal para ser <span class="font-bold text-green-500">SPIRAL</span>.
                </p>
            </div>
        </div>
        <div class="bg-gray-700" style="min-height:522px;">
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-gray-200 text-2xl">Vagas de emprego</h3>
                    <span class="text-gray-400 text-sm">4 vagas de emprego</span>
                </div>

                <input class="w-full p-5 rounded mt-7" type="text" placeholder="Pesquisar vagas de emprego...">

                <div class="grid grid-cols-3 gap-4 items-center mt-5 mb-8">
                    <select class="pt-2 pb-2 pl-4 pr-4 rounded text-gray-500">
                        <option value="local">Local</option>
                    </select>

                    <select class="pt-2 pb-2 pl-4 pr-4 rounded text-gray-500">
                        <option value="departamento">Departamento</option>
                    </select>

                    <select class="pt-2 pb-2 pl-4 pr-4 rounded text-gray-500">
                        <option value="tipo_de_empregtext-gray-100o">Tipo de emprego</option>
                    </select>
                </div>
                
                <div v-for="vaga in vagas" :key="vaga.id" class="bg-gray-800 shadow-2xl p-3 rounded mb-4 cursor-pointer" v-on:click="mostrarVaga(vaga.id)">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-100 mt-3">Publicado há 2 dias</span>
                        <div class="flex justify-between items-center cursor-default">
                            <button v-on:click="editarVaga(vaga.id)" class="mr-2 cursor-default"><i class="hover:text-green-500 cursor-default text-gray-200 far fa-edit"></i></button>
                            <button v-on:click="deletarVaga(vaga.id)" class="cursor-default"><i class="cursor-default hover:text-green-500 text-red-600 fas fa-trash-alt"></i></button>
                        </div>
                    </div>

                    <h2 class="text-xl text-green-500 font-bold">{{vaga.nome_vaga}}</h2>
                    <div class="mt-5 flex">
                        <span class="text-gray-100"> {{vaga.departamento}}  |  {{vaga.cidade}}, {{vaga.estado}}, {{vaga.pais}}  |  {{vaga.tipo_emprego}} </span>
                    </div>
                </div>

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
        'footer-vagas': FooterVagas,
    },
    data() {
        return {
            vagas: [],
            estaAberto: false,
            usuarioLogado: []
        }
    },
    methods: {
        editarVaga: function(vagaId)
        {   
            axios.get(`/vagas/editar/${vagaId}`).then(response => {
                window.location.replace(`/vagas/editar/${vagaId}`);
            });
        },
        deletarVaga: function(vagaId)
        {   
            axios.get(`/vagas/deletar/${vagaId}`).then(response => {
                window.location.replace(`/vagas/deletar/${vagaId}`);
            });
        },
        mostrarVaga: function(vagaId)
        {   
            axios.get(`/vagas/mostrar/${vagaId}`).then(response => {
                window.location.replace(`/vagas/mostrar/${vagaId}`);
            });
        }
    },
    mounted() {
        axios.get('/api/vagas/resgatarVagas').then(response => {
            this.vagas = response.data.vagas
        });
    },
}
</script>

<style>

</style>