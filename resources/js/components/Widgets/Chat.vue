<template>
	<app-card 
		:heading="$t('message.chat')" 
		:closeable="true" 
		:reloadable="true" 
		:fullScreen="true" 
		:footer="true" 
		:fullBlock="true"
		customClasses="chat-widget-wrap"
	>
		<div class="chat-widget">
			<vue-perfect-scrollbar id="chat-scroll" style="height:375px" :settings="settings">
				<div class="chat-body pa-4">
					<template v-for="(chat, index) in chats">
						<div class="chat-block mb-2" :key="index" :class="{'flex-row-reverse': chat.isAdmin}">
							<template v-if="chat.isAdmin">
								<img src="/static/avatars/user-20.jpg" alt="user-profile" width="40" height="40" class="rounded-circle ml-3 mt-3"> 
								<div class="chat-bubble-wrap">
									<span class="fs-12 grey--text text-xs-right d-block mb-1 fw-semi-bold">{{chat.adminName}}</span>
									<div class="chat-bubble odd grey lighten-4">{{chat.body}}</div>
									<span class="fs-12 grey--text text-xs-left d-block mt-1 fw-light">{{chat.time}}</span>
								</div>
							</template>
							<template v-else>
								<div class="mr-3 mt-3 pos-relative">
									<img src="/static/avatars/user-14.jpg" alt="user-profile" width="40" height="40" class="rounded-circle">
									<span class="v-badge success rounded floating"></span>
								</div>
								<div class="chat-bubble-wrap">
									<span class="fs-12 grey--text d-block mb-1 fw-semi-bold">{{chat.userName}}</span>
									<div class="chat-bubble even primary lighten-4">{{chat.body}}</div>
									<span class="fs-12 grey--text text-xs-right d-block mt-1 fw-light">{{chat.time}}</span>
								</div>
							</template>
						</div>
					</template>
					<div class="chat-block mb-2" v-if="typing">
						<img src="/static/avatars/user-14.jpg" alt="user-profile" width="40" height="40" class="rounded-circle mr-3 mt-3"> 
						<div class="chat-bubble even primary lighten-4 animated bounce">typing....</div>
					</div>
				</div>
			</vue-perfect-scrollbar>
      </div>
      <div class="send-message-box" slot="footer">
         <div class="d-custom-flex">
				<v-text-field 
					v-model="newMessage"
					id="sendMessage"
               name="send-message"
					solo 
					label="Send Message"
					@keyup.enter="sendMessage"
				>
				</v-text-field>
            <v-btn  dark class="ml-3" large color="primary" @click="sendMessage">
               Send
            </v-btn>
         </div>
      </div>
   </app-card>
</template>

<script>
	
	export default {
		data() {
			return {
				chats: [
					{
						id: 1,
						body: "A small river named Duden flows by their place and supplies it with the necessary",
						isAdmin: false,
						userName: "Max Wells",
						time: "5 Min Ago"
					},
					{
						id: 2,
						body: "You better believe it! ",
						isAdmin: true,
						adminName: "Andre Adkins",
						time: "4 Min Ago"
					},
					{
						id: 3,
						body: "A small river named Duden flows by their place and supplies it with the necessary",
						isAdmin: false,
						userName: "Max Wells",
						time: "3 Min Ago"
					},
					{
						id: 4,
						body: "Lorem ipsum dolor sit ametcon",
						isAdmin: true,
						adminName: "Andre Adkins",
						time: "1 Min Ago"
					},
				],
				settings: {
					maxScrollbarLength: 160
				},
				newMessage: "",
				typing: false,
				randomMessages: [
					"How are you?",
					"We are glad to know",
					"How can I help you?",
					"We are happy to help you"
				]
			};
		},
		updated() {
			if(this.newMessage == ''){
				this.scrollToEnd();
			}
		},
		methods: {
			sendMessage() {
				if (this.newMessage !== "") {
					let newMessage = {
						id: new Date().getTime(),
						body: this.newMessage,
						avatar: "/static/avatars/user-20.jpg",
						isAdmin: true,
						adminName: "Andre Adkins",
						time: "Just Now"
					};
					this.chats.push(newMessage);
					this.newMessage = "";
					this.scrollToEnd();
					setTimeout(() => {
						this.typing = true;
						this.getReply();
					}, 3000);
				}
			},
			getReply() {
				let randomMessage = Math.floor(
					Math.random() * this.randomMessages.length
				);
				let reply = {
					id: new Date().getTime(),
					body: this.randomMessages[randomMessage],
					avatar: "/static/avatars/user-14.jpg",
					isAdmin: false,
					userName:"Max Wells",
					time: "Just Now"
				};
				setTimeout(() => {
					this.typing = false;
					setTimeout(() => {
						this.chats.push(reply);
					}, 200);
				}, 3000);
			},
			scrollToEnd() {
				var container = document.getElementById("chat-scroll");
				if(container !== null){
					var scrollHeight = container.scrollHeight;
					container.scrollTop = scrollHeight;
				}	
			}
		}
	};
</script>

