<template>
	<div class="horizontal-menu">
		<ul class="list-unstyled nav">
			<li class="nav-item" v-for="(category, key) in menus" :key="key">
				<a href="javascript:void(0);" class="nav-link" >
					<i :class="categories[key]"></i>
					<span class="menu-title">{{$t(key)}}</span>
				</a>
				<ul class="sub-menu list-unstyled">
					<template v-for="item in category">				
						<app-menu-item
						:menu="item"
						:key="item.title"
						></app-menu-item>
					</template>
        		</ul>
     		</li>
    	</ul>
		<div class="ham-menu-sm d-none">
			<v-btn flat icon class="my-1 mx-3" @click="toggleHorizontalLayoutSidebar">
				<v-icon class="grey--text">menu</v-icon>
			</v-btn>
		</div>
    <div>
      <div class="search-form">
        <v-text-field flat solo prepend-icon="search" :placeholder="$t('message.search')" class="search-bar"></v-text-field>
        <div class="mobile-search d-none">
          <v-btn flat small icon class="mobile-search-btn my-1 mx-3" @click="toggleSearchForm">
            <v-icon class="grey--text font-md">search</v-icon>
          </v-btn>
        </div>
      </div>
      <mobile-search-form></mobile-search-form>
    </div>
  </div>
</template>

<script>
import AppMenuItem from "./AppMenuItem";
import { mapGetters } from "vuex";
import MobileSearchForm from "../Header/MobileSearchForm";

export default {
  data() {
    return {
      categories: 
        {
         'message.general': "zmdi zmdi-view-dashboard",
         'message.modules': "zmdi zmdi-widgets",
         'message.components':"zmdi zmdi-view-carousel",
         'message.applications': "zmdi zmdi-assignment-check",
         'message.features':"zmdi zmdi-wrench",
         'message.extensions':"zmdi zmdi-file"
       }
    }
  },
  components: {
    AppMenuItem,
     MobileSearchForm
  },
  computed: {
    ...mapGetters(["menus"])
  },
  methods: {
    toggleHorizontalLayoutSidebar() {
      this.$store.dispatch("toggleHorizontalLayoutSidebar", true);
    },
	 toggleSearchForm() {
		 this.$store.dispatch('toggleSearchForm');
	 }
  },
  mounted() {
    const mainMenu = document.getElementsByClassName("nav-item");
    for (let i = 0; i < mainMenu.length; i++) {
      mainMenu[i].onclick = function() {
        for (let j = 0; j < mainMenu.length; j++) {
          if (mainMenu[j].classList.contains("nav-item-active")) {
            mainMenu[j].classList.remove("nav-item-active");
          }
        }
        this.classList.toggle("nav-item-active");
      };
    }
  }
};
</script>