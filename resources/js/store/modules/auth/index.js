/**
 * Auth Module
 */
import Vue from 'vue'

import Nprogress from 'nprogress';
import router from '../../../router';

const state = {
    user: localStorage.getItem('user'),

    //isUserSigninWithAuth0: Boolean(localStorage.getItem('isUserSigninWithAuth0'))
}

// getters
const getters = {
    getUser: state => {
        return state.user;
    }

}

// actions
const actions = {

    logout(context) {
        context.commit('loginUserFailure', error);
    },
    signInUser(context, payload) {
        context.commit('signInUser', payload);
    },
    signOutUser(context) {
        context.commit('signOutUserSuccess');
    }
}

// mutations
const mutations = {

    logoutUser(state) {
        state.user = null
        localStorage.removeItem('user');
        router.push("/session/login");
    },

    signInUser(state, user,token) {
        state.user = user;
        localStorage.setItem('user',JSON.stringify(user));
        state.isUserSignin = true;
    },
    signOutUserSuccess(state) {
        state.user = null;
        state.token = null;
        localStorage.removeItem('user');
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
