<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<app-card 
					:heading="$t('message.default')" 
					colClasses="xs12 md6"
					>
					<v-chip close>Example Chip</v-chip>
					<v-chip>Example Chip</v-chip>
					<v-chip close>
						<v-avatar>
							<img src=" https://randomuser.me/api/portraits/men/35.jpg " alt="trevor ">
						</v-avatar>
						Trevor Hansen
					</v-chip>
					<v-chip>
						<v-avatar class="teal ">A</v-avatar>
						ANZ Bank
					</v-chip>
				</app-card>
				<app-card 
					:heading="$t('message.outline')" 
					colClasses="xs12 md6"
					>
					<v-chip outline color="secondary">Outline</v-chip>
					<v-chip outline color="primary">Colored</v-chip>
					<v-chip outline color="red">
						<v-icon left class="error--text font-sm">build</v-icon>Icon
					</v-chip>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card 
					:heading="$t('message.label')" 
					colClasses="xs12 md6"
					>
					<v-chip label>Label</v-chip>
					<v-chip label color="pink" text-color="white">
						<v-icon left>label</v-icon>Tags
					</v-chip>
					<v-chip label outline color="red">Outline</v-chip>
				</app-card>
				<app-card 
					:heading="$t('message.colored')" 
					colClasses="xs12 md6"
					>
					<v-chip color="primary" text-color="white">Primary</v-chip>
					<v-chip color="warning" text-color="white">Warning</v-chip>
					<v-chip color="error" text-color="white">Colored Chip</v-chip>
					<v-chip color="success" text-color="white">Colored Chip</v-chip>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card 
					:heading="$t('message.colored')" 
					colClasses="xs12 md6"
					>
					<v-chip color="primary" text-color="white">Primary</v-chip>
					<v-chip color="warning" text-color="white">Warning</v-chip>
					<v-chip color="error" text-color="white">Colored Chip</v-chip>
					<v-chip color="success" text-color="white">Colored Chip</v-chip>
				</app-card>
				<app-card 
					:heading="$t('message.icon')" 
					colClasses="xs12 md6"
					>
					<v-chip color="primary" text-color="white">
						<v-avatar>
							<v-icon>account_circle</v-icon>
						</v-avatar>
						Ranee
					</v-chip>
					<v-chip color="warning" text-color="white">Premium
						<v-icon right>star</v-icon>
					</v-chip>
					<v-chip color="error" text-color="white">
						1 Year
						<v-icon right>cake</v-icon>
					</v-chip>
					<v-chip color="info" text-color="white">
						<v-avatar class="green darken-4">1</v-avatar>
						Years
					</v-chip>
					<v-chip close color="success" text-color="white">
						<v-avatar>
							<v-icon>check_circle</v-icon>
						</v-avatar>
						Confirmed
					</v-chip>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
  data() {
    return {
      chip1: true,
      chip2: true,
      chip3: true,
      chip4: true
    };
  }
};
</script>
