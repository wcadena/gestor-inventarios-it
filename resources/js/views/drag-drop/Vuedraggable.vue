<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<app-card
				heading="Vue Draggable"
			>
				<v-layout row wrap>
					<v-flex xs12 sm6 md6>
						<v-list two-line>
							<draggable v-model="list" class="dragArea" :options="{group:'people'}">
								<template v-for="item in list">
									<v-list-tile avatar v-bind:key="item.title" @click="">
										<v-list-tile-avatar class="mr-3 d-inline-block">
											<img :src="item.image" class="artical-user" />
										</v-list-tile-avatar>
										<v-list-tile-content>
											<v-list-tile-title v-html="item.name" class="fw-bold font-lg"></v-list-tile-title>
											<v-list-tile-sub-title>"Project -- Setup the project..!</v-list-tile-sub-title>
										</v-list-tile-content>
									</v-list-tile>
								</template>
							</draggable>
						</v-list>
					</v-flex>
					<v-flex xs12 sm6 md6>
						<v-list two-line>
							<draggable v-model="list2" class="dragArea" :options="{group:'people'}">
								<template v-for="item in list2">
									<v-list-tile avatar v-bind:key="item.title" @click="">
										<v-list-tile-avatar class="mr-3 d-inline-block">
											<img :src="item.image" class="artical-user" />
										</v-list-tile-avatar>
										<v-list-tile-content>
											<v-list-tile-title v-html="item.name" class="fw-bold font-lg"></v-list-tile-title>
											<v-list-tile-sub-title>"Project -- Setup the project..!</v-list-tile-sub-title>
										</v-list-tile-content>
									</v-list-tile>
								</template>
							</draggable>
						</v-list>
					</v-flex>
			</v-layout>
			</app-card>
		</v-container>
	</div>
</template>

<script>
import draggable from "vuedraggable";

export default {
  data() {
    return {
      list: [
        {
          name: "John",
          image: "/static/avatars/user-6.jpg"
        },
        {
          name: "Joao",
          image: "/static/avatars/user-7.jpg"
        },
        {
          name: "Jean",
          image: "/static/avatars/user-8.jpg"
        }
      ],
      list2: [
        {
          name: "Juan",
          image: "/static/avatars/user-9.jpg"
        },
        {
          name: "Edgard",
          image: "/static/avatars/user-10.jpg"
        },
        {
          name: "Johnson",
          image: "/static/avatars/user-11.jpg"
        }
      ]
    };
  },
  components: {
    draggable
  }
};
</script>
