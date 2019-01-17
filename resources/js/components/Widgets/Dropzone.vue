<template>
	<v-form class="add-blog-form d-custom-flex justify-space-between">
		<dropzone id="myVueDropzone" class="mb-2" :options="dropzoneOptions">
			<input type="hidden" name="token" value="xxx">
		</dropzone>
	</v-form>
</template>

<script>
import Dropzone from "vue2-dropzone";

export default {
  components: {
    Dropzone
  },
  data() {
    return {
      dropzoneOptions: {
        url: "https://httpbin.org/post",
        thumbnailWidth: 150,
        maxFilesize: 0.5,
        headers: { "My-Awesome-Header": "header value" }
      }
    };
  }
};
</script>
