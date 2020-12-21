<template>
    <div class="pa-2">
        <v-card class="ma-4" v-if="item">
            <v-img height="200" width="1200" :src="item.image" class="newsImage"/>
            <v-card-title>{{ item.title }}</v-card-title>
            <v-card-subtitle class="newsSubtitle"><i>{{ item.date }}</i></v-card-subtitle>
            <v-card-text class="newsContent">{{ item.content }}</v-card-text>
            <v-card-actions>
                <v-spacer/>
                <router-link to="/">
                    <v-btn>Vissza</v-btn>
                </router-link>
            </v-card-actions>
        </v-card>
        <v-skeleton-loader
            v-else
            type="card-avatar, article, action"
        ></v-skeleton-loader>
    </div>
</template>
<script>
    export default {
        data: function() {
            return {
                item : null
            }
        },
        async created() {
            let response = await axios.get('http://localhost/api/news/' + this.$route.params['slug']);
            this.item = response.data.data;
        }
    }
</script>
