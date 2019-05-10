<template>
    <div>
        <div
            class="card mb-2"
            v-for="(receita, index_receita) in receitasFiltradas"
            :key="index_receita"
        >
            <div class="card-header subtitle" style="backgroundcolor: ">{{ receita.nome }}</div>
            <div class="card-body">
                <div class="card" v-for="(secao, index_secao) in receita.secao" :key="index_secao">
                    <div class="card-header">{{ secao.nome }}</div>
                    <div class="card-body">
                        <ul>
                            <li
                                v-for="(conteudo, index_conteudo) in secao.conteudo"
                                :key="index_conteudo"
                            >{{ conteudo }}</li>
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
            listaDeReceitas: []
        };
    },
    computed: {
        filtros() {
            return this.$store.state.filtros;
        },
        receitasFiltradas() {
            return this.receitas.filter(rec => {
                return rec;
                // return this.filtros.forEach(fil => {
                //     if (rec.secao[0].conteudo.includes(fil.nome)) {
                //         console.log(rec.secao[0].conteudo.includes(fil.nome));
                //         return rec;
                //     }
                // });
            });
        }
    }
};
</script>
