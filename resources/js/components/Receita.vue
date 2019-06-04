<template>
    <div>
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
</template>

<script>
export default {
    props: ["receitas"],
    data() {
        return {
            listaDeReceitas: [],
            listaFiltrada: []
        };
    },
    computed: {
        filtros() {
            return this.$store.state.filtros;
        },
        receitasFiltradas() {
            this.listaFiltrada = [];

            this.filtros.forEach(filtro => {
                this.receitas.filter(rec => {
                    rec.secao[0].conteudo.forEach(ing => {
                        if (
                            ing
                                .toLowerCase()
                                .indexOf(filtro.nome.toLowerCase()) > -1
                        ) {
                            this.listaFiltrada.push(rec);
                        }
                    });
                });
            });
        }
    }
};
</script>
