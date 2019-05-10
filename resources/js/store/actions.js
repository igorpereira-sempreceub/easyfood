export default {
    setFiltro({ commit }, filtro) {
        commit("setFiltro", filtro);
    }

    // toggleTodo ({ commit }, todo) {
    //   commit('editTodo', { todo, done: !todo.done })
    // },

    // editTodo ({ commit }, { todo, value }) {
    //   commit('editTodo', { todo, text: value })
    // },

    // toggleAll ({ state, commit }, done) {
    //   state.todos.forEach((todo) => {
    //     commit('editTodo', { todo, done })
    //   })
    // },

    // clearCompleted ({ state, commit }) {
    //   state.todos.filter(todo => todo.done)
    //     .forEach(todo => {
    //       commit('removeTodo', todo)
    //     })
    // }
};
