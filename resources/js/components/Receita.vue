<template>
    <div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <multiselect
                        v-model="value"
                        tag-placeholder="Adicionar ingrediente"
                        placeholder="Pesquise por ingrediente"
                        label="nome"
                        track-by="nome"
                        :options="ingredientes"
                        :multiple="true"
                        :taggable="true"
                        @tag="addTag"
                    ></multiselect>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <center class="mb-2">
                    <span
                        v-if="listaFiltrada.length == 0"
                    >{{ "São " + receitas.length + " receitas para pesquisar!"}}</span>
                    <span
                        v-else
                    >{{ "São " + listaFiltrada.length + " receitas com os ingredientes selecionados!"}}</span>
                </center>
                <div
                    class="card mb-2"
                    v-for="(receita, index_receita) in listaFiltrada"
                    :key="index_receita"
                >
                    <div class="card-header subtitle" style="backgroundcolor: ">{{ receita.nome }}</div>
                    <div class="card-body">
                        <div
                            class="card mb-1"
                            v-for="(secao, index_secao) in receita.secao"
                            :key="index_secao"
                        >
                            <div class="card-header text-white bg-dark">{{ secao.nome }}</div>
                            <div class="card-body">
                                <ul>
                                    <span
                                        v-for="(conteudo, index_conteudo) in secao.conteudo"
                                        :key="index_conteudo"
                                    >
                                        <li v-if="conteudo.trim().length > 0">{{ conteudo.trim() }}</li>
                                    </span>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Multiselect from "vue-multiselect";

export default {
    components: {
        Multiselect
    },
    props: ["receitas", "ingredientes"],
    data() {
        return {
            listaDeReceitas: [],
            listaFiltrada: [],
            ingredientesSelecionados: [],
            value: [],
            error: "",
            isLoading: false
        };
    },
    watch: {
        value() {
            this.ingredientesSelecionados = [];
            this.value.forEach(ing =>
                this.ingredientesSelecionados.push(ing.nome)
            );
            this.receitasFiltradas();
        }
    },
    methods: {
        receitasFiltradas() {
            this.listaFiltrada = [];

            this.ingredientesSelecionados.forEach(filtro => {
                this.receitas.filter(rec => {
                    rec.secao[0].conteudo.forEach(ing => {
                        if (
                            ing.toLowerCase().indexOf(filtro.toLowerCase()) > -1
                        ) {
                            this.listaFiltrada.push(rec);
                        }
                    });
                });
            });
        },
        clearAll() {
            this.ingredientesSelecionados = [];
        },
        addTag(newTag) {
            const tag = {
                name: newTag,
                code:
                    newTag.substring(0, 2) +
                    Math.floor(Math.random() * 10000000)
            };
            this.options.push(tag);
            this.value.push(tag);
        }
    }
};
</script>
