const state = {
  drawer: false,
};

const mutations = {
  UPDATE_DRAWER(state, payload) {
    state.drawer = payload;
  },
};

const actions = {
  updateDrawer({ commit }, payload) {
    console.log("change");
    commit("UPDATE_DRAWER", payload);
  },
};

export default { state, mutations, actions };
