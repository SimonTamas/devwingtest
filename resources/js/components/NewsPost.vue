<template>
    <v-card class="ma-4">
        <v-img height="100" width="100" :src="data.thumbnail" class="newsThumbnail ma-2"/>
        <v-card-title>{{ data.title }}</v-card-title>
        <v-card-subtitle class="newsSubtitle"><i>{{ data.date }}</i></v-card-subtitle>
        <v-card-text class="newsDescription">{{ data.description }}</v-card-text>
        <v-card-actions>
            <v-spacer/>
            <router-link :to="`/news/${data.slug}`">
                <v-btn>Tovább</v-btn>
            </router-link>
        </v-card-actions>
    </v-card>
</template>
<script>
    export default {
        props : {
            data : {
                type : Object,
                required : true
            }
        }
    }
</script>
<style scoped>
    .newsThumbnail {
        float:left;
    }
    .newsDescription, .newsSubtitle {
        padding-left:130px;
    }
</style>
