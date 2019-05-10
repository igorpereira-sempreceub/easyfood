<template>
    <div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <multiselect
                        v-model="value"
                        tag-placeholder="Add this as new tag"
                        placeholder="Search or add a tag"
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
    </div>
</template>

<script>
import Multiselect from "vue-multiselect";

export default {
    components: {
        Multiselect
    },
    props: ["ingredientes"],
    data() {
        return {
            ingredientesSelecionados: [],
            value: [],
            error: "",
            isLoading: false
        };
    },
    watch: {
        value() {
            this.$store.dispatch("setFiltro", this.value);
        }
    },
    methods: {
        clearAll() {
            this.ingredientesSelecionados = [];
        },
        addTag(newTag) {
            console.log(newTag);

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

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>