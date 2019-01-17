<template>
   <div class="articles-widget">
		 <app-section-loader :status="loader"></app-section-loader>
      <v-data-table
			:headers="headers"
			:items="data"
			hide-actions
		>
			<template slot="items" slot-scope="props">
				<td class="d-custom-flex py-3">
					<div class="mr-3 d-custom-flex align-center post-img">
						<img :src="props.item.thumbnail" class="img-responsive" width="104" height="69">
					</div>
					<div class="w-80 py-1">
						<p class="mb-0 fw-light">{{ props.item.title }}</p>
						<span class="grey--text fs-12">{{props.item.publish}}, By {{props.item.author}}</span>
					</div>
				</td>
				<td>{{ props.item.likes }}</td>
				<td>{{ props.item.comments }}</td>
				<td class="fw-semi-bold">{{ props.item.visitors }}</td>
				<td>
					<v-menu
						origin="center center"
						transition="scale-transition"
						left
					>
						<v-btn slot="activator" icon>
							<v-icon>more_vert</v-icon>
						</v-btn>
						<v-list>
							<v-list-tile @click="">
								<v-list-tile-title>Edit</v-list-tile-title>
							</v-list-tile>
							<v-list-tile @click="">
								<v-list-tile-title>Hide</v-list-tile-title>
							</v-list-tile>
							<v-list-tile @click="">
								<v-list-tile-title>Disable Comments</v-list-tile-title>
							</v-list-tile>
							<v-list-tile @click="">
								<v-list-tile-title>Move To Trash</v-list-tile-title>
							</v-list-tile>
						</v-list>
					</v-menu>
				</td>
			</template>
		</v-data-table>
   </div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: true,
      headers: [
        {
          text: "Article Name",
          sortable: false,
          value: "articleName"
        },
        { text: "Likes", value: "likes", sortable: false },
        { text: "Comments", value: "comments", sortable: false },
        { text: "Visitors", value: "visitors", sortable: false },
        { text: "", value: "action", sortable: false }
      ],
      data: []
    };
  },
  mounted() {
    this.getArticles();
  },
  methods: {
    getArticles() {
      const self = this;
      api
        .get("vuely/articles.js")
        .then(response => {
          self.loader = false;
          this.data = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>