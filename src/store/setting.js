const state = {
  drawer: false,
  logedin: false,
};

const mutations = {
  UPDATE_DRAWER(state, payload) {
    state.drawer = payload;
  },
  UPDATE_LOGIN(state, payload) {
    state.logedin = !payload;
  },
};

const actions = {
  updateDrawer({ commit }, payload) {
    console.log("change");
    commit("UPDATE_DRAWER", payload);
  },

  updateLogin({ commit }, payload) {
    commit("UPDATE_LOGIN", payload);
  },
};

export default { state, mutations, actions };
