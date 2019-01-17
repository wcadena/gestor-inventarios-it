<template>
  <v-container fluid grid-list-xl py-0>
      <div class="app-card-content">
        <quill-editor v-model="content"
				ref="myQuillEditor"
				:options="editorOption"
				@blur="onEditorBlur($event)"
				@focus="onEditorFocus($event)"
				@ready="onEditorReady($event)">
        </quill-editor>
      </div>
  </v-container>
</template>

<script>
export default {
	data: function () {
		return {
			content: '<h4><i>Insert text here....</h4></i>',
			editorOption: {
			// some quill options
			}
		}
	},
	methods: {
		onEditorBlur (editor) {
			console.log('editor blur!', editor)
		},
		onEditorFocus (editor) {
			console.log('editor focus!', editor)
		},
		onEditorReady (editor) {
			console.log('editor ready!', editor)
		},
		onEditorChange ({ editor, html, text }) {
			console.log('editor change!', editor, html, text)
			this.content = html
		}
	},
	computed: {
		editor () {
			return this.$refs.myQuillEditor.quill
		}
	},
	mounted () {
		// you can use current editor object to do something(quill methods)
		console.log('this is current quill instance object', this.editor)
	}
}
</script>
