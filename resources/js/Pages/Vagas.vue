<template>
    <div>
        <header-vagas :usuarioLogado="usuarioLogado.name"></header-vagas>
        <div class="bg-gray-800" style="min-height: 265px;">
            <div class="container mx-auto p-5">
                <h3 class="text-gray-200 text-2xl">Carreiras na Spiral</h3>
                <hr class="bg-gray-200 mb-5">
                <p class="text-gray-200 text-lg">
                    Destacamos pessoas que vão além, <b>originais, apaixonadas, proativas, comunicativas e flexíveis</b>. Pessoas com perfil <b>analítico,
                    desafiador, investigativo, e crítico, boa capacidade de relacionamento, perfil hands on, versátil e muita vontade de fazer
                    acontecer</b>. Interesse em sistemas, tecnologias, novidades do <b>ambiente digital e ferramentas ágeis</b>.<br><br>
                    Se você gosta de <b>trabalhar em equipe</b> e possui <b>inciativas para resolver problemas</b>, com certeza é a pessoa ideal para ser <span class="font-bold text-green-500">SPIRAL</span>.
                </p>
            </div>
        </div>
        <div class="bg-gray-700">
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
                
                <div class="bg-gray-800 shadow-2xl p-3 rounded mb-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-100 mt-3">Publicado há 2 dias</span>
                        <button @click="estaAberto = !estaAberto" class="text-gray-100 font-bold text-3xl">...</button>
                    </div>

                    <div v-if="estaAberto" class="float-right mt-1 w-25 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Editar</a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 hover:text-red-900" role="menuitem">Excluir</a>
                        </div>
                    </div>

                    <h2 class="text-xl text-green-500 font-bold">Desenvolvedor PHP Júnior</h2>
                    <div class="mt-5 flex">
                        <span class="text-gray-100"> Tecnologia  |  São Paulo, SP, Brasil  |  Período Integral  |  Remoto </span>
                    </div>
                </div>

                <div class="bg-gray-800 shadow-2xl p-3 rounded mb-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-100 mt-3">Publicado há 2 dias</span>
                        <button @click="estaAberto = !estaAberto" class="text-gray-100 font-bold text-3xl">...</button>
                    </div>

                    <div v-if="estaAberto" class="float-right mt-1 w-25 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Editar</a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 hover:text-red-900" role="menuitem">Excluir</a>
                        </div>
                    </div>

                    <h2 class="text-xl text-green-500 font-bold">Desenvolvedor PHP Júnior</h2>
                    <div class="mt-5 flex">
                        <span class="text-gray-100"> Tecnologia  |  São Paulo, SP, Brasil  |  Período Integral  |  Remoto </span>
                    </div>
                </div>

                <div class="bg-gray-800 shadow-2xl p-3 rounded mb-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-100 mt-3">Publicado há 2 dias</span>
                        <button @click="estaAberto = !estaAberto" class="text-gray-100 font-bold text-3xl">...</button>
                    </div>

                    <div v-if="estaAberto" class="float-right mt-1 w-25 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Editar</a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 hover:text-red-900" role="menuitem">Excluir</a>
                        </div>
                    </div>

                    <h2 class="text-xl text-green-500 font-bold">Desenvolvedor PHP Júnior</h2>
                    <div class="mt-5 flex">
                        <span class="text-gray-100"> Tecnologia  |  São Paulo, SP, Brasil  |  Período Integral  |  Remoto </span>
                    </div>
                </div>

                <div class="bg-gray-800 shadow-2xl p-3 rounded mb-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-100 mt-3">Publicado há 2 dias</span>
                        <button @click="estaAberto = !estaAberto" class="text-gray-100 font-bold text-3xl">...</button>
                    </div>

                    <div v-if="estaAberto" class="float-right mt-1 w-25 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Editar</a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 hover:text-red-900" role="menuitem">Excluir</a>
                        </div>
                    </div>

                    <h2 class="text-xl text-green-500 font-bold">Desenvolvedor PHP Júnior</h2>
                    <div class="mt-5 flex">
                        <span class="text-gray-100"> Tecnologia  |  São Paulo, SP, Brasil  |  Período Integral  |  Remoto </span>
                    </div>
                </div>
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
            estaAberto: false,
            usuarioLogado: []
        }
    },
    mounted() {
        
    },
}
</script>

<style>

</style>