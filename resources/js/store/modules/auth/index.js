/**
 * Auth Module
 */
import Vue from 'vue'

import Nprogress from 'nprogress';
import router from '../../../router';

const state = {
    //user: localStorage.getItem('user'),
    isUserSigninWithAuth0: Boolean(localStorage.getItem('isUserSigninWithAuth0'))
}

// getters
const getters = {
    /*getUser: state => {
        return state.user;
    },*/
    isUserSigninWithAuth0: state => {
        return state.isUserSigninWithAuth0;
    }
}

// actions
const actions = {

    logoutUserFromFirebase(context) {
                context.commit('loginUserFailure', error);
    },
    signInUserWithAuth0(context, payload) {
        context.commit('signInUserWithAuth0Success', payload);
    },
    signOutUserFromAuth0(context) {
        context.commit('signOutUserFromAuth0Success');
    }
}

// mutations
const mutations = {

    logoutUser(state) {
        state.user = null
        localStorage.removeItem('user');
        router.push("/session/login");
    },

    signInUserWithAuth0Success(state, user) {
        state.user = user;
        localStorage.setItem('user',JSON.stringify(user));
        state.isUserSigninWithAuth0 = true;
    },
    signOutUserFromAuth0Success(state) {
        state.user = null
        localStorage.removeItem('user')
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
